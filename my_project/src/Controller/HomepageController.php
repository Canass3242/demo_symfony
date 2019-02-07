<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function index()
    {
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }
	
	/*** @Route("/usager/{nom}", name="usager")*/
	public function usager($name)
	{
		$usager = $this->getDoctrine()
					->getRepository(Usager::class)
					->findOneByName($name);
		if (!$usager)
			throw $this->createNotFoundException('Usager inconnu');
		
		return $this->render('homepage/usager.html.twig', [            
			'usager' => $usager,        
		]);
	}
}
