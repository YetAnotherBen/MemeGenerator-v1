<?php

include '.init.php';
include 'generator.php';


$idImage = 	$_REQUEST['idImage'];
$requete = "SELECT `extension` FROM `IMG_BRUTES` WHERE `id`=$idImage";


$sth = $conn->prepare($requete);
$sth->execute();
$result = $sth->fetchAll();

$groresult="imgbrut/". $_REQUEST['idImage'] . "." . $result[0]['extension'];

$obj = new MemeGenerator($groresult);

$upmsg = 	$_REQUEST['upperTextbox'];
$downmsg = 	$_REQUEST['lowerTextbox'];

$obj->setUpperText($upmsg);
$obj->setLowerText($downmsg);
$cheminimage=$obj->processImg();


$sth = $conn->prepare('INSERT INTO `IMG_MODIF` (contenu_h, contenu_b, img_brutes_id, chemin) VALUES (:contenu_h, :contenu_b, :img_brutes_id, :chemin)');

$sth -> bindParam(':contenu_h', $upmsg);
$sth -> bindParam(':contenu_b', $downmsg);
$sth -> bindParam(':img_brutes_id', $idImage);
$sth -> bindParam(':chemin', $cheminimage);

$sth -> execute();

	

header('Location: memegenere.php?chemin='.$cheminimage);
exit;





?>


