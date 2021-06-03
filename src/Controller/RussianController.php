<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RussianController extends AbstractController
	{
	public function __construct(
		private string $projectDir
	)
		{
		}

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

	#[Route('/ru/jabuka-standardna', methods: ['GET'])]
	public function appleStandard(): Response
		{
		return $this->render('russian/apple_standard.html.twig');
		}

	#[Route('/ru/jabuka-stubasta', methods: ['GET'])]
	public function appleColumnar(): Response
		{
		return $this->render('russian/apple_columnar.html.twig');
		}

	#[Route('/ru/jabuka-autohtone', methods: ['GET'])]
	public function appleIndigenousVarieties(): Response
		{
		return $this->render('russian/apple_indigenous_varieties.html.twig');
		}

	#[Route('/ru/kruska', methods: ['GET'])]
	public function pear(): Response
		{
		return $this->render('russian/pear.html.twig');
		}

	#[Route('/ru/dunja-musmula', methods: ['GET'])]
	public function quinceMedlar(): Response
		{
		return $this->render('russian/quince_medlar.html.twig');
		}

	#[Route('/ru/breskva-nektarina', methods: ['GET'])]
	public function peachNectarine(): Response
		{
		return $this->render('russian/peach_nectarine.html.twig');
		}

	#[Route('/ru/kajsija', methods: ['GET'])]
	public function apricot(): Response
		{
		return $this->render('russian/apricot.html.twig');
		}

	#[Route('/ru/sljiva', methods: ['GET'])]
	public function plum(): Response
		{
		return $this->render('russian/plum.html.twig');
		}

	#[Route('/ru/tresnja-visnja', methods: ['GET'])]
	public function cherrySourCherry(): Response
		{
		return $this->render('russian/cherry_sour_cherry.html.twig');
		}

	#[Route('/ru/orah-leska-badem', methods: ['GET'])]
	public function walnutHazelnutAlmond(): Response
		{
		return $this->render('russian/walnut_hazelnut_almond.html.twig');
		}

	#[Route('/ru/dren', methods: ['GET'])]
	public function cornel(): Response
		{
		return $this->render('russian/cornel.html.twig');
		}

	#[Route('/ru/ribizla-josta-ogrozd', methods: ['GET'])]
	public function currantGooseBerryJost(): Response
		{
		return $this->render('russian/currant_gooseberry_jost.html.twig');
		}

	#[Route('/ru/dud', methods: ['GET'])]
	public function mulberry(): Response
		{
		return $this->render('russian/mulberry.html.twig');
		}

	#[Route('/ru/stubaste-patuljaste-forme', methods: ['GET'])]
	public function columnarAndDwarfForms(): Response
		{
		return $this->render('russian/columnar_dwarf_forms.html.twig');
		}

	#[Route('/ru/sadnja', methods: ['GET'])]
	public function planting(): Response
		{
		return $this->render('russian/planting.html.twig');
		}

	#[Route('/ru/zastita', methods: ['GET'])]
	public function protection(): Response
		{
		return $this->render('russian/protection.html.twig');
		}

	#[Route('/ru/slike', methods: ['GET'])]
	public function gallery(): Response
		{
		$publicDir  = $this->projectDir . '/public';
		$thumbnails = Helper::getFilenames($publicDir . '/gfx/photo/mini');
		$large      = Helper::getFilenames($publicDir . '/gfx/photo/large');
		$filenames  = array_intersect($thumbnails, $large);

		return $this->render('russian/gallery.html.twig', ['filenames' => $filenames]);
		}

	#[Route('/ru/posta', methods: ['GET'])]
	public function mail(): Response
		{
		return $this->render('russian/mail.html.twig');
		}

	#[Route('/ru/email', methods: ['GET'])]
	public function email(): Response
		{
		return $this->render('russian/email.html.twig');
		}

	#[Route('/ru/kontakt', methods: ['GET'])]
	public function contact(): Response
		{
		return $this->render('russian/contact.html.twig');
		}
	}
