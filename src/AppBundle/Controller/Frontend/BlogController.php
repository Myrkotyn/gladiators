<?php

namespace AppBundle\Controller\Frontend;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class BlogController
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function blogAction()
    {
        $postRepository = $this->getDoctrine()->getRepository('AppBundle:Post');
        $posts = $postRepository->getAllPosts();

        return $this->render('frontend/blog/index.html.twig', [
            'posts' => $posts,
        ]);
    }
}
