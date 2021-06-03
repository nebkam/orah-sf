<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HungarianController extends AbstractController
	{
	#[Route('/hu/o-nama', methods: ['GET'])]
	public function aboutUs(): Response
		{
		return $this->render('hungarian/about_us.html.twig');
		}
	}
