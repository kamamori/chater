<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ChatRoom;
use AppBundle\Form\Type\ChatRoomType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default_page")
     */
    public function indexAction(Request $request)
    {
        $chatRooms = $this->getDoctrine()->getRepository(ChatRoom::class)->findAll();
        return $this->render('default/index.html.twig', [
            'chatRooms' => $chatRooms
        ]);
    }


    /**
     * @Route("/room/create", name="create_room")
     */
    public function editAction(Request $request, ChatRoom $chatRoom = null)
    {
        if ($chatRoom === null) {
            $chatRoom = new chatRoom();
        }

        $form = $this->createForm(ChatRoomType::class, $chatRoom);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $chatRoom = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($chatRoom);
            $em->flush();

            return $this->redirect($this->generateUrl('default_page', array(
                'id' => $chatRoom->getId()
            )));
        }
        return $this->render('chat/create.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
