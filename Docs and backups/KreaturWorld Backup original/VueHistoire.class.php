<?php

/**
* 	VueHistoire.class.php : Vue
*
*	Author : Karakayn
*/
class VueHistoire{

	/*Constructeur*/
	public function __construct(){
	}


	public function afficherHistoire(){
		$html = '

<section>
			<article>
				<h1>Histoire</h1>
				<hr/>
				<h2>Il était une fois...</h2>
				<p>
					Dans les contrées d\'Altraya, vivaient de puissantes, féroces et étranges créatures.<br/>
					Au commencement de ce monde, trois monstres gardaient chaque forme d\'énergie - Le feu - La terre - L\'eau. Les dragons - Les hydres - Les léviathans.<br/>
					Ainsi naquirent les Dragons,  ils construisirent Kargaroth, la cité aujourd\'hui millénaire au nord du monde, qu\'ils battirent graces aux écailles qu\'ils ont perdu au fil des batailles.<br/>
					Cette cité unique se distingue par le fort contraste entre les coulées de lave rouge sang qui cheminent le long de la montagne, sous nos pieds, et les écailles noirs et lisses, coupantes de dragon, qui forment chaque batiment.<br/>
					Les gardiens du feu étaient crée.<br/>
				</p>
				<p>
					Bien loin des montagnes, les léviathans étaient eux aussi venu au monde, sous les mers et océans déchainés, les gardiens de l\'eau construisirent eux aussi leur capitale : Azgural.<br/>
					Azgural se trouve à des centaines de kilomètre sous l\'eau, si vous n\'êtes pas accompagné d\'un léviathan, vous ne pourrez jamais atteindre la cité mère. Mais si vous y parvenez, ayant évité les nombreux pièges et créatures inférieurs défendant les environs, vous pourrez admirer la grandeur de cette cité.<br/>
					Des immenses dômes permettent aux créatures non-aquatique de survivre dans les profondeurs, tandis que le reste de la cité a été construit avec des algues, du corail, et des os.<br/>
					Belle et sinistre, Asgural n\'épargnera pas les ennemis de la faction.<br/> 
				</p>
				<p>
					Dernier gardien, quand à eux, les immenses hydres étaient affiliées à Azgural.<br/>
					Cependant, leur soif de corps et de destruction consumaient trop de ressources à la cité mère. Ils furent donc banni à jamais de leur foyer.
					Gardant une haine sans pareil pour Azgural, ils battirent sur terre plusieurs foyers. Aucune cité n\'étant assez résistente à leur folie destructrice, ces nomades voyage en empruntant les différents court d\'eau.<br/>
					Quelques lieux restent cependant des lieux de rassemblement pour ces créatures, Garkahn "la fosse", Kimtem "l\'arbre mère", et Bejygal "L\'oeil".<br/>
					Ces trois foyers forment curieusement une ligne d\'Ouest en Est, séparant chaque territoire de manière disparate.<br/>
					Gardien de la Terre par depis, ils attendent le moment propice pour passer à l\'attaque.<br/>
				</p>
				<p>
					Aujourd\'hui, vous êtes un Kayrin, c\'est à dire que vous pouvez maitriser la force d\'un de ses titans. Ils vous doivent respect et obéissance, tant que vous ne trahissez pas leurs intérêts. Tel fu le contrat passé avec Khar, le premier.<br/>
					Malheureusement, les 3 énergies étant trop fondamentalement différentes. Si vous acceptez le contrat de Khar, leurs âmes sera liées à la votre, et ce jusqu\'à votre mort.<br/>
					Cela fait quelques millénaires que les Kayrins sont apparus, et les discordes naturelles entre les 3 gardiens se sont amplifiées avec eux. Nous sommes aujourd\'hui en Guerre Ouverte entre les 3 factions.<br/>
					Reflechissez bien jeune Karin, choisissez sagement votre faction. <br/>
				</p>	
				<hr/>
				<p>
					Chaque faction a ses particularités. Si vous pretez allégence :<br/>
					- Aux dragons : Ils sont plus robuste et fort, mais moins rapide que leurs ayeux.<br/>
					Force 3/5, Endurance = 5/5, Vitesse 2/5.<br/>
					- Aux léviathans : Bien plus rapide que les autres créatures, leur force diminue rapidemment en dehors de l\'eau.<br/>
					Force = 3/5, Endurance = 2/5, Vitesse 5/5.<br/>
					- Aux hydres : Féroce et sans peur, les hydres sont très coriace, aussi à l\'aise dans l\'eau que sur terre, leur rage leur fait cependant perdre leurs esprits. <br/>
					Force = 5/5, Endurance = 2/5, Vitesse = 3/5.<br/>
				</p>
			</article>
		</section>
			';
		echo utf8_decode($html);
	}


};
?>