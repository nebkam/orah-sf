<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FooController extends AbstractController
	{
	#[Route('/', methods: ['GET'])]
	public function foo(): Response
		{
		return new Response('Hello World');
		}
	}