<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommonController extends AbstractController
	{
	#[Route('/', methods: ['GET'])]
	public function index(): Response
		{
		return $this->render('index.html.twig');
		}

	#[Route('/o-nama', methods: ['GET'])]
	public function aboutUs(): Response
		{
		return $this->render('about_us.html.twig');
		}
	}
