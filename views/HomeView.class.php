<?php
/* Home view */

class HomeView{

	public function __construct(){
	}

	//title and description of the marche
	public function intro(){
		$html = "";
		$html.= '
		<div class="row description">
			<div class="small-12 large-12 columns">
					<h1>Actualites</h1>
				<hr/>
			</div>
			<div class="small-8 large-8 columns">
				<div class="center">
					<h2>Qu\'est ce qui ce trame en Altraya ?</h2>
				</div>
				<hr/>
				<p>- Ajout d\'une fonctionnalité d\'élevage : la reproduction</p>
			</div>
			<div class="small-4 large-4 columns">
				<a class="twitter-timeline" href="https://twitter.com/Karakayne" data-widget-id="579726233640005632">Tweets de @Karakayne</a>
			
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			
			</div>
		</div>
		';

		echo($html);
	}

}
?>