<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SerbianController extends AbstractController
	{
	#[Route('/', methods: ['GET'])]
	public function index(): Response
		{
		return $this->render('serbian/index.html.twig');
		}

	#[Route('/o-nama', methods: ['GET'])]
	public function aboutUs(): Response
		{
		return $this->render('serbian/about_us.html.twig');
		}
	}
