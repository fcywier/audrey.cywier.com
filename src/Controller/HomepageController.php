<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Article;

class HomepageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
	$repository = $this->getDoctrine()->getRepository(Article::class);
	$articles = $repository->findAll();

        return $this->render('homepage/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
