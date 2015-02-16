<!--
	Header.html : Header qui sert dans tout le site
	Author : Karakayn
-->
<?php
session_start();
?>
	<header>
		<div id="MenuTop">
			<?php
			if($_SESSION['id'] == NULL){
			?>
			<p>
				Bienvenue à Altraya, voyageur ! 
				N'hésitez pas à nous <a href="inscription.php">rejoindre</a>, 
				ou <a href="connexion.php">connectez vous.</a>
			<p>
			<?php
			}else{
			?>
			<p>
				Bienvenue à Altraya, <?php echo($_SESSION['pseudo']) ?> !
				<a href="deconnexion.php">Déconnexion</a>
			</p>
			<?php
			}
			?>
		</div>

		<div id="banniere_image"></div>
			<nav>
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="antre.php">Antre</a></li>
					<li><a href="histoire.php">Histoire</a></li>
				</ul>
			</nav>
	</header>