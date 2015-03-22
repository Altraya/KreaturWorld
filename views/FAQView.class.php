<?php

/**
* 	FAQView.class.php : Specific view for the FAQ
*
*	Author : Karakayn
*/
class FAQView{

	/*Constructeur*/
	public function __construct(){
	}


	//introduce the FAQ part
	public function intro(){
		$html = "";
		$html.= '
		<div class="row">
			<div class="small-12 large-12 columns">
				<h1>FAQ</h1>
				<hr/>
				<center><p>La FAQ contient toutes les questions et précisions sur le monde d\'Altraya. N\'hésitez pas à souvent la consulter !</center>
			</div>
		</div>
		';
		echo($html);
	}

	//title and map part for the FAQ
	public function map(){
		$html = '

			<div class="row">
				<div class="small-12 large-12 columns">
					<hr/>
					<h1>La carte</h1>
					<hr/>
					

					<p>La carte est formée d’un ensemble d’hexagone. Chaque hexagone appartient à un certain territoire.</p>
					<p>Pour obtenir un territoire, vous devez emmener une armée de Kréatur à l’attaque. Plusieurs choix s’offrent à vous :</br>
					-	Trouver une île sauvage <br/>
					-	Trouver une île appartenant à un des membres de votre guilde<br/>
					-	Trouver une île appartenant à une personne de votre faction<br/>
					-	Trouver une île appartenant à un ennemi <small>(c’est-à-dire toute personne qui n’est pas affiliée à votre faction)</small>.<br/></p>
					<p>Vous devez remarquer sur la carte un brouillard de guerre, en fonction de votre nombre d’hexagone conquis, vous devriez pouvoir voir un plus grand nombre de territoire autour de vous. Cependant pour pouvoir atteindre un endroit plus précis et aller plus loin dans Altraya, vous devrez envoyer vos Kréatur en exploration (ce qui sera développé dans un prochain paragraphe).</p>  

					<h2>1.	Trouver une île sauvage</h2>

					<p>Les îles sauvages sont défendues par de nombreux monstres plus ou moins puissant en fonction de l’île. Vous devez les terrasser pour prendre possession de l’île. L’armée entrant en combat peut avoir des bonus en fonction du terrain de l’île (par exemple si vous envoyez des léviathans à l’attaque sur un territoire d’eau, ils auront un bonus à leurs caractéristiques). </p>
					<p>Une fois tous les monstres hostiles de l’île éliminés vous pouvez acquérir l’île.</p>

					<h2>2.	Trouver une île appartenant à un des membres de votre guilde</h2>

					<p>En fonction des options choisies par vos compagnons de guilde, vous pouvez voir et accéder ou non à leurs îles. Si il a activé cette option, il peut alors vous céder une de ces îles gratuitement ou contre une contrepartie. Cependant, vous devrez tous les deux payer une taxe auprès de la Compagnie des taxes.</p>

					<h2>3.	Trouver une île appartenant à une personne de votre faction</h2>

					<p>Vous ne pouvez pas entrer en guerre avec une personne de votre faction, sauf pendant certains évènements saisonniers. La seule manière d’acquérir une île de cette manière est que le propriétaire l’a mis en vente à l’hôtel des ventes. Une icône apparait alors sur cette île pour vous renvoyez à la page des ventes en question. </p>

					<h2>4.	Trouver une île appartenant à un ennemi</h2>

					<p>Si l’ennemi n’est pas immunisé contre les attaques (dans ce cas cela sera signalé sur son île) vous pouvez lancer une attaque contre lui. En fonction des Kréaturs qu’il a cachées ou non, vous pouvez voir la puissance de feu qu’il vous montre et décider de l’attaquer ou non. </p>

					<h2>5.	Spécificités liés aux territoires et Kréaturs.</h2>

					<p>Chacune des factions a des caractéristiques bien particulières.</p>
					<p>Les dragonniers peuvent conquérir n’importe qu’elle territoire, les dragons pouvant voler à travers tout Altraya. Cependant si les territoires sont trop disparates ils auront des villes très faibles. (Mais une très grande mobilité). </p>
					<p>Les Maitres-Léviathans eux peuvent se déplacer par les océans et tout autre étendu d’eau comme ils l’entendent. Ils auront donc un bonus de robustesse pour leurs cités présentent dans ces étendues mais devront étendre leur ville à partir de celles-ci.  </p>
					<p>Les Chevaucheur-d’hydres sont quant à eux obligé de construire leurs cités à proximité d’une cité déjà existante et sur un territoire terrestre. Ils ont par contre un très grand bonus de robustesse par rapport aux autres factions mais ont une très faible mobilité et ont besoin de plus de moyen pour conquérir des territoires plus hostiles.</p>
					<p>Selon votre faction, faites donc bien attention à ces malus/bonus avant de conquérir un nouveau territoire.  Bonne chasse Altreyen !</p>

				</div>
			</div>
		';
		echo $html;
	}


	//title and guild part for the FAQ
	public function guild(){
		$html = '


			<div class="row">
				<div class="small-12 large-12 columns">
					<hr/>
					<h1>Les guildes</h1>
					<hr/>
					

					<p>Au cours de votre aventure, vous pouvez choisir ou non de rejoindre une guilde. </p>

					<h2>1.	Une guilde qu’est-ce que c’est ? </h2>

					<p>Une guilde est un regroupement de personne s’alliant pour accomplir une tâche commune.
					Vous souhaitez devenir le meilleur joueur d’Altraya ? Il y peu de chance que vous y arriviez seule ! Vous pourrez donc compter sur les membres de votre guilde pour ça !
					Vous en avez marre de vous faire attaquer par de méchant joueur ayant soif de pouvoir ? Une guilde peut vous offrir sa protection, si elle est importante, son simple nom en dessous de votre pseudo devrait faire fuir les pilleurs et attaquants inconvenants.</p>

					<h2>2.	Quels en sont les avantages ?</h2>

					<p>Une guilde offre beaucoup d’avantages, mais n’oubliez jamais qu’il faut aussi une contrepartie.
					Tout d’abord, rejoindre une guilde vous offre sa protection. Un joueur sera moins enclin à vous attaquer s’il sait qu’une guilde peut l’attaquer en contrepartie.  L’union fait la force.
					Elle vous offre également une puissance de feu non négligeable. Au cours de vos périples, vous serez amené à vous confronter à des monstres (ou joueurs) d’une incroyable puissance, votre guilde sera là pour vous prêter main forte au cours du combat.
					Vous bénéficierez aussi d’atouts commercial.</p>

					<p>Droit et devoirs du guildeux
					=>	Défini par le GM</p>

					<h2>3.	Comment rejoindre une guilde ?</h2>

					<p>Ce paragraphe est à venir : Les guildes ne sont pour l\'instant fonctionnelle, ce paragraphe sera mis à jour en temps voulu.</p>
				</div>
			</div>

		';
		echo $html;
	}
};
?>