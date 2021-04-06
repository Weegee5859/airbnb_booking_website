<!--
Author:		Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
Date:		3/19/2021	
Filename:	gallery.html
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Gallery</title>
	<link rel="stylesheet" href="css/gallery.css" />
	<link rel="stylesheet" href="css/stylesheet.css" />
</head>
<!--include header.html-->
<!--<?php include 'header.html';?>-->
<body>
	<!--Gallery Page-->
	<div id="galleryDiv">
		<h1>Gallery</h1>
		<h3>Our home is now your home!</h3>
		<p class="gallery"> We offer our guests an exceptional 5-start luxury decorated and fully furnished house so you can enjoy your stay the way you deserve! </p>
		<!--Galery table to show all pictures at once-->
		<table class="galleryTable">
			<!--First row-->
			<tr class="galleryTR">
				<td class="galleryTD"> <img src="resources/photo_1.jpg" alt="photo_1" class="galleryPhoto"> </td>
				<td class="galleryTD"> <img src="resources/photo_2.jpg" alt="photo_2" class="galleryPhoto"> </td>
				<td class="galleryTD"> <img src="resources/photo_3.jpg" alt="photo_3" class="galleryPhoto"> </td>
			</tr>
			<!--Second row-->
			<tr class="galleryTR">
				<td class="galleryTD"> <img src="resources/photo_4.jpg" alt="photo_4" class="galleryPhoto"> </td>
				<td class="galleryTD"> <img src="resources/photo_5.jpg" alt="photo_5" class="galleryPhoto"> </td>
				<td class="galleryTD"> <img src="resources/photo_6.jpg" alt="photo_6" class="galleryPhoto"> </td>
			</tr>
		</table>
	</div>
</body>
<!--include footer.html-->
<?php include 'footer.html';?>
<script src="js/scripts.js"></script>
</html>
