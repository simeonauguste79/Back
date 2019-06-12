<?php 

// Boputique3/src/Controller/SecurityController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class SecurityController extends Controller
{
	
	
	/**
	* @Route("/connexion/", name="connexion")
	*/
	public function connexionAction(Request $request){
		
		$auth = $this -> get('security.authentication_utils');
		
		$lastUserName = $auth -> getLastUserName();
		// récupérer le pseudo tapé... 
		
		$error = $auth -> getLastAuthenticationError();
		// récupérer l'erreur s'il y en a une
		
		if(!empty($error)){
			$request -> getSession() -> getFlashBag() -> add('errors', 'Erreur d\'identifiant !');
		}
		
		$params = array(
			'lastUserName' => $lastUserName
		);
		return $this -> render('@App/Membre/connexion.html.twig', $params);	
	}
	
	
	
	
	
	
	
	
	
	
	
	/**
	* @Route("/connexion_check/", name="connexion_check")
	*/
	public function connexionCheckAction(){}
	
	/**
	* @Route("/deconnexion/", name="deconnexion")
	*/
	public function deconnexionAction(){}
	
	
	
	
	
	
}