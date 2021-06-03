<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SerbianController extends AbstractController
	{
	public function __construct(
		private string $projectDir
	)
		{
		}

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

	#[Route('/kruska', methods: ['GET'])]
	public function pear(): Response
		{
		return $this->render('serbian/pear.html.twig');
		}

	#[Route('/dunja-musmula', methods: ['GET'])]
	public function quinceMedlar(): Response
		{
		return $this->render('serbian/quince_medlar.html.twig');
		}

	#[Route('/breskva-nektarina', methods: ['GET'])]
	public function peachNectarine(): Response
		{
		return $this->render('serbian/peach_nectarine.html.twig');
		}

	#[Route('/kajsija', methods: ['GET'])]
	public function apricot(): Response
		{
		return $this->render('serbian/apricot.html.twig');
		}

	#[Route('/sljiva', methods: ['GET'])]
	public function plum(): Response
		{
		return $this->render('serbian/plum.html.twig');
		}

	#[Route('/tresnja-visnja', methods: ['GET'])]
	public function cherrySourCherry(): Response
		{
		return $this->render('serbian/cherry_sour_cherry.html.twig');
		}

	#[Route('/orah-leska-badem', methods: ['GET'])]
	public function walnutHazelnutAlmond(): Response
		{
		return $this->render('serbian/walnut_hazelnut_almond.html.twig');
		}

	#[Route('/dren', methods: ['GET'])]
	public function cornel(): Response
		{
		return $this->render('serbian/cornel.html.twig');
		}

	#[Route('/ribizla-josta-ogrozd', methods: ['GET'])]
	public function currantGooseBerryJost(): Response
		{
		return $this->render('serbian/currant_gooseberry_jost.html.twig');
		}

	#[Route('/dud', methods: ['GET'])]
	public function mulberry(): Response
		{
		return $this->render('serbian/mulberry.html.twig');
		}

	#[Route('/stubaste-patuljaste-forme', methods: ['GET'])]
	public function columnarAndDwarfForms(): Response
		{
		return $this->render('serbian/columnar_dwarf_forms.html.twig');
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

	#[Route('/slike', methods: ['GET'])]
	public function gallery(): Response
		{
		$publicDir  = $this->projectDir . '/public';
		$thumbnails = Helper::getFilenames($publicDir . '/gfx/photo/mini');
		$large      = Helper::getFilenames($publicDir . '/gfx/photo/large');
		$filenames  = array_intersect($thumbnails, $large);

		return $this->render('serbian/gallery.html.twig', ['filenames' => $filenames]);
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
