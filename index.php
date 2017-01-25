<!DOCTYPE html>


<html>


<head>

<title>Générateur de meme</title>

<link rel="stylesheet" type="text/css" href="style.css"/>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta property="og:title" content="Meme generator" />
<meta property="og:description" content="Ce site est fantastique" />
<meta property="og:url" content="http://public:acspublic@www.quentinp.public.codeur.online/Memegenerator/index.php" />
<meta property="og:image" content="http://public:acspublic@www.quentinp.public.codeur.online/Memegenerator/generatepictures/5857d74b29a4f.jpg" />
<meta property="og:type" content="website" />

<meta name="twitter:creator" content="Groupe 3">
<meta name="twitter:site" content="Générateur de meme">
<meta name="twitter:description" content="Le meilleur site FR de création de meme en ligne !">
<meta name="twitter:image:src" content="http://public:acspublic@www.quentinp.public.codeur.online/Memegenerator/generatepictures/5857d74b29a4f.jpg">
<meta name="twitter:image" content="http://public:acspublic@www.quentinp.public.codeur.online/Memegenerator/generatepictures/5857d74b29a4f.jpg">

</head>


<body>

<header>
</header>


<main>


	<aside>
		<?php include("afficheimage.php") ?>	
	</aside>

	<div id="laDivCachee" class="showDivCachee">
		<p>Scrollez et selectionnez une image</p>
	</div>

	<section>
		
		<div>
			<img src="" id="imageSelect">
		</div>

		<form name="formgenerator" class="edit" action="resultat.php" method="GET">
			<input type="hidden" name="idImage" value=""/>	
			<input class="inputTextHaut" type="text" placeholder="Texte du haut" name="upperTextbox"/>
			<input class="btnGenerate" type="image" name="submit" src="DL.svg" alt="Submit" />
			<!-- <input class="btn, btnGenerate" type="submit" value=""> -->
			<input class="inputTextBas" type="text" placeholder="Texte du bas" name="lowerTextbox"/>	
			
		</form>

	</section>


	<footer>
		<div></div>
	</footer>


</main>


<footer>
</footer>


</body>


<script type="text/javascript">
	
function setIdImage(id,chemin){

formgenerator.idImage.value=id;
document.getElementById("imageSelect").src=chemin;

}

function hideDivCachee(){
document.getElementById("laDivCachee").classList.add("hideDivCachee");
}

</script>

</html>
