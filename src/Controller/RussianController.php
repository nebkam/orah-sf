<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RussianController extends AbstractController
	{
	#[Route('/ru', methods: ['GET'])]
	public function index(): Response
		{
		return $this->render('russian/index.html.twig');
		}

	#[Route('/ru/o-nama', methods: ['GET'])]
	public function aboutUs(): Response
		{
		return $this->render('russian/about_us.html.twig');
		}
	}
