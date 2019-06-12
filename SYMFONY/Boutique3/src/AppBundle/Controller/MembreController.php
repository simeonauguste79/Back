<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Membre; 
use AppBundle\Form\MembreType; 

class MembreController extends Controller
{
	
	
	
	
	
	
	
	/**
	*@Route("/inscription/", name="inscription")
	*/
	public function inscriptionAction(Request $request){
		
		$membre = new Membre; 
		$form = $this -> createForm(MembreType::class, $membre);
		
		$form -> handleRequest($request);
		
		if($form -> isSubmitted() && $form -> isValid()){
			
			$em = $this -> getDoctrine() -> getManager();
			//-----
			$em -> persist($membre);
			$membre -> setStatut('0');
			//-----
			$em -> flush();
			
			$request -> getSession() -> getFlashBag() -> add('success', 'Félicitations vous êtes enregistré. Connectez-vous !');
			return $this -> redirectToRoute('connexion');
			
		}
		
		$params = array(
			'membreForm' => $form -> createView()
		);
		return $this -> render("@App/Membre/inscription.html.twig", $params);
	}
	
	
	/**
	*@Route("/profil/", name="profil")
	*/
	public function profilAction(){
		$params = array();
		return $this -> render("@App/Membre/profil.html.twig", $params);
	}

}