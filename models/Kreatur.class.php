<?php
/*
*	Kreatur.class.php : Kreatur object
*
*	Author : Karakayn
*/
class Kreatur{

	private $_id;				//Kreatur's id
	private $_name;				//his name
	private $_species;			//his species
	private $_color;			//his color
	private $_age;				//his age
	private $_owner;			//his owner
	private $_sex;				//his sex
	
	
	/*Constructeur*/
	public function __construct($donnees){
		$this->hydrate($donnees);
	}

	/***************************
		Accesseur of the class
	****************************/

	public function getId(){
		return $this->_id;
	}

	public function getName(){
		return $this->_name;
	}

	public function getSpecies(){
		return $this->_species;
	}

	public function getColor(){
		return $this->_color;
	}

	public function getOwner(){
		return $this->_owner;
	}

	public function getAge(){
		return $this->_age;
	}

	public function getSex(){
		return $this->_sex;
	}

	/************************/

	public function setId($id){
		$this->_id = $id;
	}

	public function setName($name){
		$this->_name = htmlspecialchars($name);	
	}

	public function setSpecies($species){
		$this->_species = htmlspecialchars($species);	
	}

	public function setColor($color){
		$this->_color = htmlspecialchars($color);	
	}

	public function setOwner($owner){
		$this->_owner = htmlspecialchars($owner);	
	}

	public function setAge($age){
		$this->_age = htmlspecialchars($age);	
	}

	public function setSex($sex){
		$this->_sex = htmlspecialchars($sex);
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
		echo('Nom = '.$this->getName().', espece = '.$this->getSpecies().', couleur = '.$this->getColor().', proprio = '.$this->getOwner().', age = '.$this->getAge().', sexe = '.$this->getSex().' ');
	}
}
?>