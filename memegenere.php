<?php

ini_set("display_errors",1);


include(".init.php");



$cheminimagefinal = $_REQUEST['chemin'];







$geturl = $_SERVER['REQUEST_URI'];

$url='http://quentinp.public.codeur.online' .$geturl;
$cheminimg='http://quentinp.public.codeur.online/Memegenerator/'.$_REQUEST['chemin'];

?>
<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">


	<meta property="og:image" content="<?php echo $cheminimg; ?>" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />


	<!-- FACEBOOK -->

	<meta property="fb:app_id" content="facebook_app_id" />
	<meta property="og:url" content="<?php echo $url; ?>" />
	<meta property="og:title" content="Look at this" />
	<meta property="og:type" content="image" />
	<meta property="og:description" content="Le meilleur site FR de création de meme en ligne !">
	<meta property="og:image" content="<?php echo $cheminimg; ?>" />

	<!-- TWITTER -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="Look at this">
	<meta name="twitter:description" content="Le meilleur site FR de création de meme en ligne !">
	<meta name="twitter:image:src" content="<?php echo $cheminimg; ?>">
	<meta name="twitter:image" content="<?php echo $cheminimg; ?>">
	<title>Votre meme</title>
</head>

<body>

<main id="zoneGeneree">

<?php
echo '<img src="' . $cheminimagefinal . '" >';
?>
<!-- <p> URL : <?php echo $url ?></p> -->


<p>
	<textarea  id="area" class="js-copytextarea"><?php echo $url ?></textarea>
</p>



<div class="zoneBtn">


		<button class="js-textareacopybtn">Copier l'URL</button>



	<div id="fb-root"></div>
	   <script>(function(d, s, id) {
	    var js, fjs = d.getElementsByTagName(s)[0];
	    if (d.getElementById(id)) return;
	    js = d.createElement(s); js.id = id;
	    js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
	    fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));</script>



	 <div class="fb-share-button" data-href="<?php echo $url; ?>" data-layout="button_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="<?php echo $url; ?>">Partager</a></div>
	  


	   <a href="https://twitter.com/share" class="twitter-share-button" data-text="Memegenere" data-via="QDevoisier" data-lang="fr" data-size="small" data-dnt="true">Tweeter</a> 
	   <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>
	
</main>

</body>

</html>




<script type="text/javascript">
	var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

	copyTextareaBtn.addEventListener('click', function(event) {
		var copyTextarea = document.querySelector('.js-copytextarea');
		copyTextarea.select();

		try {
			var successful = document.execCommand('copy');
			var msg = successful ? 'successful' : 'unsuccessful';
			console.log('Copying text command was ' + msg);
		} catch (err) {
			console.log('Oops, unable to copy');
		}
	});
</script>