

<?php  


ini_set("display_errors",1);




include(".init.php");


$sql =  'SELECT * FROM IMG_BRUTES';
$statement = $conn->prepare($sql);
$statement->execute();
$infoImg = $statement->fetchAll();



foreach  ($conn->query($sql) as $row) {

	$cheminImg = 'imgbrut/' . $row['id'] .".". $row['extension'];


	echo '<div class="positionImage" onclick="hideDivCachee()"><img src="' . $cheminImg . '" onclick="setIdImage('.$row['id'].',this.src);" ></div>';

}





?>






