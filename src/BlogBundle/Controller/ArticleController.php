<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller {

    public function indexAction()
    {
        $repo = $this->getDoctrine()->getManager()->getRepository(Article::class);
        $articles = $repo->findAll();

        return $this->render('BlogBundle:Article:articleList.html.twig', [
            'articles' => $articles
        ]);
    }
}