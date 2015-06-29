<?php

namespace AppBundle\Controller\Frontend;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('frontend/default/index.html.twig');
    }

    /**
     * @Route("/roster", name="roster")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function rosterAction()
    {
        $rosterRepository = $this->getDoctrine()->getRepository('AppBundle:Player');
        $roster = $rosterRepository->getPlayersInRoster();

        return $this->render('frontend/default/roster.html.twig', [
            'roster' => $roster,
        ]);
    }
}
