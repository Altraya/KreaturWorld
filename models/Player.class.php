<?php
/*
*	Player.class.php : a Player object
*
*	Author : Karakayn
*/
class Player{

	private $_id;				//player's id
	private $_pseudo;			//his pseudo
	private $_pwd;				//his password (crypt)
	private $_birthdate;		//his birthdate
	private $_sex;				//his sex
	private $_avatar;			//his avatar
	private $_mail;				//his mail
	private $_inscriptionDate;	//his inscription date
	
	
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

	public function getPseudo(){
		return $this->_pseudo;
	}

	public function getPwd(){
		return $this->_pwd;
	}

	public function getBirthdate(){
		return $this->_birthdate;
	}

	public function getSex(){
		return $this->_sex;
	}

	public function getAvatar(){
		return $this->_avatar;
	}

	public function getMail(){
		return $this->_mail;
	}

	public function getInscriptionDate(){
		return $this->_inscriptionDate;
	}

	/************************/

	public function setId($id){
		return $this->_id = $id;
	}

	public function setPseudo($pseudo){
		return $this->_pseudo = htmlspecialchars($pseudo);
	}

	public function setMdp($pwd){
		return $this->_pwd = sha1(htmlspecialchars($pwd));
	}

	public function setBirthdate($date){
		return $this->_birthdate = htmlspecialchars($date);
	}

	public function setSex($sex){
		return $this->_sex = htmlspecialchars($sex);
	}

	public function setAvatar($avatar){
		return $this->_avatar = $avatar;
	}

	public function setMail($mail){
		return $this->_mail = htmlspecialchars($mail);
	}

	public function setinscriptionDate($inscriptionDate){
		return $this->_inscriptionDate = htmlspecialchars($inscriptionDate);
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
		echo('Pseudo = '.$this->getPseudo().', mdp = '.$this->getPwd().', Date de naissance = '.$this->getBirthdate().', sexe = '.$this->getSex().', mail = '.$this->getMail().', date d\'inscription = '.$this->getinscriptionDate().' ');
	}
}
?>