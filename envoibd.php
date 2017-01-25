<?php

$dir='./img';
$scan=scandir($dir);
$folder='img/';
$path='';
  $username = "quentinp";
    $password = "syUArx6xop";
    $hostname = "localhost";

    try{
 
 $dbh = new PDO("mysql:host=$hostname;charset=UTF8MB4;dbname=quentinp",$username,$password);
   foreach($scan as $value){
	 if($value != "." && $value != ".." && $value != ".htaccess")
	{	
 		$path=$folder.$value;


  		$path_parts = pathinfo($value);
  		$extension=$path_parts['extension'];

		$sql = "INSERT INTO IMG_BRUTES (chemin, extension, nom) VALUES ('$path', '$extension', '$value')";
		$result=$dbh->query($sql);
		$lastId = $dbh->lastInsertId();
		rename($path, "imgbrut/".$lastId.".".$extension);

		   if ($result) {
		   echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
		   }
		   else{
		   echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
		  
		   }
}



}
}
 catch(PDOException $e)
   {
   echo $e->getMessage();
   }
 

?>
