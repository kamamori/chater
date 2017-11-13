<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ChatRoom;
use AppBundle\Entity\Message;
use AppBundle\Form\Type\ChatRoomType;
use AppBundle\Form\Type\MessageType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/chat")
 */
class ChatController extends Controller
{
    /**
     * @Route("/room/{id}", name="chat_room")
     */
    public function indexAction(Request $request, ChatRoom $chatRoom)
    {

        $maxResults = (int) $this->getParameter('max_results');

        $form = $this->createForm(MessageType::class)
                        ->add('send', SubmitType::class)
                        ->add('close', ButtonType::class);

        /* @var $messageRepository EntityRepository */
        $messageRepository = $this->getDoctrine()->getRepository(Message::class);

        $messages = $messageRepository->createQueryBuilder('m')
                        ->andWhere('m.chatRoom = :chatRoom')
                        ->setParameter('chatRoom', $chatRoom)
                        ->setMaxResults($maxResults)
                        ->orderBy('m.createdAt', 'DESC')
                        ->getQuery()
                            ->getResult();

        return $this->render('chat/index.html.twig', [
            'form' => $form->createView(),
            'chatRoom' => $chatRoom,
            'messages' => array_reverse($messages)
        ]);
    }

    /**
     * @Route("/message/list/{id}", name="message_list")
     */
    public function listAction(Request $request, ChatRoom $chatRoom)
    {
        $lastCreatedAt = new \DateTime();
        $maxResults = (int) $this->getParameter('max_results');

        if ($request->query->has('lastCreatedAt')) {
            $lastCreatedAt = new \DateTime($request->get('lastCreatedAt'));
        }

        /* @var $messageRepository EntityRepository */
        $messageRepository = $this->getDoctrine()->getRepository(Message::class);
        $messages = $messageRepository->createQueryBuilder('m')
                            ->andWhere('m.chatRoom = :chatRoom')
                            ->andWhere('m.createdAt < :createdAt')
                            ->setParameter('createdAt', $lastCreatedAt)
                            ->setParameter('chatRoom', $chatRoom)
                            ->setMaxResults($maxResults)
                            ->orderBy('m.createdAt', 'DESC')
                            ->getQuery()
                                ->getResult();

        return $this->render('chat/list.html.twig', [
            'messages' => array_reverse($messages)
        ]);
    }

}