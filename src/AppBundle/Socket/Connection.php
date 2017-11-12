<?php

namespace AppBundle\Socket;

use AppBundle\Entity\ChatRoom;
use AppBundle\Entity\Message;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Symfony\Bridge\Twig\TwigEngine;

class Connection implements MessageComponentInterface {

    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @var TwigEngine
     */
    protected $twigEngine;

    /**
     * @var \SplObjectStorage
     */
    protected $clients;

    /**
     * Connection constructor.
     * @param EntityManagerInterface $entityManager
     * @param TwigEngine $twigEngine
     */
    public function __construct(EntityManagerInterface $entityManager, TwigEngine $twigEngine)
    {
        $this->entityManager = $entityManager;
        $this->twigEngine = $twigEngine;
        $this->clients = new \SplObjectStorage();
    }

    public function onOpen(ConnectionInterface $conn) {
        echo __METHOD__ . PHP_EOL;

        $path = $conn->httpRequest->getUri()->getPath();

        if (!preg_match('`^/([a-z0-9_]+)/([0-9]+)$`', $path, $matches)) {
            return;
        }

        $data = [
            'username' => $matches[1],
            'chatRoomId' => (int) $matches[2],
            'connectedAt' => new \DateTime()
        ];

        // Store the new connection to send messages to later
        $this->clients->attach($conn, $data);

        $this->notifyUsers($data);
    }

    public function onMessage(ConnectionInterface $from, $content) {
        echo __METHOD__ . PHP_EOL;

        $data = $this->clients->offsetGet($from);

        if ($data === null) {
            return;
        }

        $chatRoom = $this->entityManager->find(ChatRoom::class, $data['chatRoomId']);
        $user = $this->entityManager->getRepository(User::class)->findOneByUsername($data['username']);

        $message = new Message();
        $message->setUser($user);
        $message->setChatRoom($chatRoom);
        $message->setContent($content);

        $this->entityManager->persist($message);
        $this->entityManager->flush();

        $content = $this->twigEngine->render('chat/message.html.twig', ['message' => $message]);

        foreach ($this->clients as $client) {
            $_data = $this->clients->offsetGet($client);
            if ($data['chatRoomId'] === $_data['chatRoomId']) {
                // The sender is not the receiver, send to each client connected
                $client->send(json_encode(['message' => $content]));
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
        echo __METHOD__ . PHP_EOL;
        $data = $this->clients->offsetGet($conn);
        $this->clients->detach($conn);
        $this->notifyUsers($data);
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo __METHOD__ . PHP_EOL;
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }

    private function notifyUsers(array $data) {
        $clients = [];

        foreach ($this->clients as $client) {
            $_data = $this->clients->offsetGet($client);
            if ($data['chatRoomId'] === $_data['chatRoomId']) {
                $clients[$_data['username']] = $client;
            }
        }

        $users = array_keys($clients);
        foreach ($clients as $client) {
            $client->send(json_encode(['users' => $users]));
        }

        return $users;
    }
}