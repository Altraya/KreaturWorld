<?php
/*
*	Kreatur.class.php : Gere une kreatur
*
*	Author : Karakayn
*/
class Kreatur{

	private $_id;				//id de la kreatur
	private $_nom;				//son nom
	private $_espece;			//son espece
	private $_couleur;			//sa couleur
	private $_age;				//son age
	private $_proprietaire;		//son proprietaire
	private $_sexe;				//son sexe
	
	
	/*Constructeur*/
	public function __construct($donnees){
		$this->hydrate($donnees);
	}

	/***************************
		Accesseur de la classe
	****************************/

	public function getId(){
		return $this->_id;
	}

	public function getNom(){
		return $this->_nom;
	}

	public function getEspece(){
		return $this->_espece;
	}

	public function getCouleur(){
		return $this->_couleur;
	}

	public function getProprio(){
		return $this->_proprietaire;
	}

	public function getAge(){
		return $this->_age;
	}

	public function getSexe(){
		return $this->_sexe;
	}

	/************************/

	public function setId($id){
		$this->_id = $id;
	}

	public function setNom($nom){
		$this->_nom = htmlspecialchars($nom);	
	}

	public function setEspece($espece){
		$this->_espece = htmlspecialchars($espece);	
	}

	public function setCouleur($couleur){
		$this->_couleur = htmlspecialchars($couleur);	
	}

	public function setProprietaire($proprio){
		$this->_proprietaire = htmlspecialchars($proprio);	
	}

	public function setAge($age){
		$this->_age = htmlspecialchars($age);	
	}

	public function setSexe($sexe){
		$this->_sexe = htmlspecialchars($sexe);
	}

	/************************/

	public function hydrate($donnees)
	{
		foreach($donnees as $key => $value)
		{
			// On récupère le nom du setter correspondant à l'attribut.
			$method = 'set'.ucfirst($key);

			// Si le setter correspondant existe.
			if(method_exists($this, $method))
			{
				// On appelle le setter.
				$this->$method($value);
			}
		}
	}

	public function toString(){
		echo('Nom = '.$this->getNom().', espece = '.$this->getEspece().', couleur = '.$this->getCouleur().', proprio = '.$this->getProprio().', age = '.$this->getAge().', sexe = '.$this->getSexe().' ');
	}
}
?>