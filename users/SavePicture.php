<?php
$con = mysql_connect("localhost", "ictsi_superuser", "5r7UbfPNFjBnqv8CS1");
mysql_select_db("ictsi") or die(mysqli_error());
$id = $_POST['id'];
$name = $_POST["name"];
$image = $_POST["image"];



mysql_query("UPDATE applicants set profilepic = '$name' where id='$id' ") ;
$decodedImage = base64_decode("$image");
file_put_contents("/images/".$name.".jpg" , $decodedImage); 

mysql_close($con); 	
?>