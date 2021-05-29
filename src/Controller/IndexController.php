<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
	{
	/**
	 * @Route("/", methods={"GET"})
	 */
	public function song(): Response
		{
		return new Response('Hello World');
		}
	}
