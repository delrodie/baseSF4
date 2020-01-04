<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(ArticleRepository $articleRepository)
    {
        return $this->render('default/index.html.twig', [
            'articles' => $articleRepository->findAllOrderByDate(),
        ]);
    }
}
