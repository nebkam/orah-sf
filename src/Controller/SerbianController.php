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

	#[Route('/jabuka-standardna', methods: ['GET'])]
	public function appleStandard(): Response
		{
		return $this->render('serbian/apple_standard.html.twig');
		}

	#[Route('/jabuka-stubasta', methods: ['GET'])]
	public function appleColumnar(): Response
		{
		return $this->render('serbian/apple_columnar.html.twig');
		}

	#[Route('/jabuka-autohtone', methods: ['GET'])]
	public function appleIndigenousVarieties(): Response
		{
		return $this->render('serbian/apple_indigenous_varieties.html.twig');
		}

	#[Route('/sadnja', methods: ['GET'])]
	public function planting(): Response
		{
		return $this->render('serbian/planting.html.twig');
		}

	#[Route('/zastita', methods: ['GET'])]
	public function protection(): Response
		{
		return $this->render('serbian/protection.html.twig');
		}

	#[Route('/posta', methods: ['GET'])]
	public function mail(): Response
		{
		return $this->render('serbian/mail.html.twig');
		}

	#[Route('/email', methods: ['GET'])]
	public function email(): Response
		{
		return $this->render('serbian/email.html.twig');
		}

	#[Route('/kontakt', methods: ['GET'])]
	public function contact(): Response
		{
		return $this->render('serbian/contact.html.twig');
		}
	}
