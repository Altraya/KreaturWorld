//Draw case in map
function drawCase()
{
	var canvas = $('#map');				//récupération du canvas => de la map
	
	var rectHeight = 100;				//height of the rect we draw on the canvas
	var rectWidth = 100;				//width of the rect we draw on the canvas
	


	var indexWidth = 0;					//allow you to through the canvas on width
	var indexHeight = 0;				//allow you to through the canvas on height

	while(indexHeight < 400)
	{
		while(indexWidth < 900)
		{
				console.log("Draw du rectangle aux indexs : "+indexWidth+"|"+indexHeight+";");

				drawRectangle(canvas, indexWidth, indexHeight, rectWidth, rectHeight);
				indexWidth = indexWidth + rectWidth;
		}
		indexWidth = 0;
		indexHeight = indexHeight + rectHeight;
		console.log("Draw du rectangle aux indexs : "+indexWidth+"|"+indexHeight+";");
		drawRectangle(canvas, indexWidth, indexHeight, rectWidth, rectHeight);
	}
	
	//draw a rectangle step by the width/height in all the canvas
	/*for (var indexHeight = 0; indexHeight < canvas[0].height; indexHeight+100) {
		for (var indexWidth = 0; indexWidth < canvas[0].width; indexWidth+100) {
			drawRectangle(canvas, indexWidth, indexHeight, 100, 100);
		};
		drawRectangle(canvas, indexWidth, indexHeight, 100, 100);
	};*/

}

//Draw a rectangle
function drawRectangle(canvas, x, y, width, height)
{
	var ctx = canvas[0].getContext('2d'); 	//récupération du contexte
	ctx.rect(x, y, width, height); // Cree le contour d'un rectangle dont l'angle suppérieur gauche se trouve aux coordonnées x y et ayant les dimensions largeur et hauteur : x, y, largeur, hauteur
	ctx.strokeStyle = '#FF0000';
	ctx.stroke();

}

drawCase();