<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnglishController extends AbstractController
	{
	public function __construct(
		private string $projectDir
	)
		{
		}

	#[Route('/en/o-nama', methods: ['GET'])]
	public function aboutUs(): Response
		{
		return $this->render('english/about_us.html.twig');
		}

	#[Route('/en/jabuka-standardna', methods: ['GET'])]
	public function appleStandard(): Response
		{
		return $this->render('english/apple_standard.html.twig');
		}

	#[Route('/en/jabuka-stubasta', methods: ['GET'])]
	public function appleColumnar(): Response
		{
		return $this->render('english/apple_columnar.html.twig');
		}

	#[Route('/en/jabuka-autohtone', methods: ['GET'])]
	public function appleIndigenousVarieties(): Response
		{
		return $this->render('english/apple_indigenous_varieties.html.twig');
		}

	#[Route('/en/kruska', methods: ['GET'])]
	public function pear(): Response
		{
		return $this->render('english/pear.html.twig');
		}

	#[Route('/en/dunja-musmula', methods: ['GET'])]
	public function quinceMedlar(): Response
		{
		return $this->render('english/quince_medlar.html.twig');
		}

	#[Route('/en/breskva-nektarina', methods: ['GET'])]
	public function peachNectarine(): Response
		{
		return $this->render('english/peach_nectarine.html.twig');
		}

	#[Route('/en/kajsija', methods: ['GET'])]
	public function apricot(): Response
		{
		return $this->render('english/apricot.html.twig');
		}

	#[Route('/en/sljiva', methods: ['GET'])]
	public function plum(): Response
		{
		return $this->render('english/plum.html.twig');
		}

	#[Route('/en/tresnja-visnja', methods: ['GET'])]
	public function cherrySourCherry(): Response
		{
		return $this->render('english/cherry_sour_cherry.html.twig');
		}

	#[Route('/en/orah-leska-badem', methods: ['GET'])]
	public function walnutHazelnutAlmond(): Response
		{
		return $this->render('english/walnut_hazelnut_almond.html.twig');
		}

	#[Route('/en/dren', methods: ['GET'])]
	public function cornel(): Response
		{
		return $this->render('english/cornel.html.twig');
		}

	#[Route('/en/ribizla-josta-ogrozd', methods: ['GET'])]
	public function currantGooseBerryJost(): Response
		{
		return $this->render('english/currant_gooseberry_jost.html.twig');
		}

	#[Route('/en/dud', methods: ['GET'])]
	public function mulberry(): Response
		{
		return $this->render('english/mulberry.html.twig');
		}

	#[Route('/en/stubaste-patuljaste-forme', methods: ['GET'])]
	public function columnarAndDwarfForms(): Response
		{
		return $this->render('english/columnar_dwarf_forms.html.twig');
		}

	#[Route('/en/sadnja', methods: ['GET'])]
	public function planting(): Response
		{
		return $this->render('english/planting.html.twig');
		}

	#[Route('/en/zastita', methods: ['GET'])]
	public function protection(): Response
		{
		return $this->render('english/protection.html.twig');
		}

	#[Route('/en/slike', methods: ['GET'])]
	public function gallery(): Response
		{
		$publicDir  = $this->projectDir . '/public';
		$thumbnails = Helper::getFilenames($publicDir . '/gfx/photo/mini');
		$large      = Helper::getFilenames($publicDir . '/gfx/photo/large');
		$filenames  = array_intersect($thumbnails, $large);

		return $this->render('english/gallery.html.twig', ['filenames' => $filenames]);
		}

	#[Route('/en/posta', methods: ['GET'])]
	public function mail(): Response
		{
		return $this->render('english/mail.html.twig');
		}

	#[Route('/en/email', methods: ['GET'])]
	public function email(): Response
		{
		return $this->render('english/email.html.twig');
		}

	#[Route('/en/kontakt', methods: ['GET'])]
	public function contact(): Response
		{
		return $this->render('english/contact.html.twig');
		}
	}
