<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GermanController extends AbstractController
	{
	#[Route('/de/o-nama', methods: ['GET'])]
	public function aboutUs(): Response
		{
		return $this->render('german/about_us.html.twig');
		}
	}
