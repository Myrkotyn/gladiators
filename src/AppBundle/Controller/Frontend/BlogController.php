<?php

namespace AppBundle\Controller\Frontend;

use Logans\NewsBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request as Request;
use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Class BlogController
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class BlogController extends Controller
{
    /**
     * @Route("/news", name="news")
     *
     * @return Response
     */
    public function newsAction()
    {
        $postRepository = $this->getDoctrine()->getRepository('LogansNewsBundle:Post');
        $posts = $postRepository->getAllPosts();

        return $this->render('frontend/blog/index.html.twig', [
            'posts' => $posts,
        ]);
    }

    /**
     * @param Request $request Request
     *
     * @Route("/news/add", name="news_add")
     *
     * @return Response
     */
    public function newsAddAction(Request $request)
    {
        $post = new Post();

        $form = $this->createFormBuilder($post)
            ->add('title', 'text')
            ->add('description', 'text')
            ->add('save', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $post = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return new RedirectResponse($this->generateUrl('news'));
        }

        return $this->render('frontend/blog/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
