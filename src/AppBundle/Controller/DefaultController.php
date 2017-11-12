<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ChatRoom;
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
    
}
