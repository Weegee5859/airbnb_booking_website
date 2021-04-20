<!--
Author:		Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
Date:		3/19/2021	
Filename:	gallery.html
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Gallery</title>
	<link rel="stylesheet" href="css/stylesheet.css" />
	<link rel="stylesheet" href="css/gallery.css" />
</head>

<body>
	<!--include header_with_banner.html-->
	<?php include 'header_with_banner.html';?>
	<!--Gallery Page-->
	<div id="galleryDiv">
		<!--<h1>Gallery</h1>-->
		<!--<h3>Our home is now your home!</h3>-->
		<div id="center_contents">
			<p class="gallery"> We offer our guests an exceptional 5-start luxury decorated and fully furnished house so you can enjoy your stay the way you deserve! </p>
		</div>
		<!--Galery table to show all pictures at once-->
		<table>
			<article>
				<div id="leftarrow" src="resources/down_arrow.png"></div>
				<figure id="fig2">
					<img class="gallery_image" width="540" height="320" />
				</figure>
				<figure id="fig3">
					<img class="gallery_image" width="600" height="400" />
				</figure>
				<figure class="gallery_image" id="fig4">
					<img width="540" height="320" />
				</figure>
				<div id="rightarrow" src="resources/down_arrow.png"></div>
			</article>
		</table>
	</div>
	<!--include footer.html-->
	<?php include 'footer.html';?>
</body>
<script src="js/gallery.js"></script>
<script src="js/scripts.js"></script>
</html>
