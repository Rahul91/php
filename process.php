<?php 
// $name=$_POST['name']; 
// $email=$_POST['email']; 
// $location=$_POST['location'];
$id=$_POST['id'];
$name=$_POST['name']; 
 $con=mysql_connect('localhost', 'root', 'tunna') or die(mysql_error()); 
 mysql_select_db("php") or die(mysql_error()); 
 mysql_query("INSERT INTO `student` VALUES ('$id', '$name')"); 
 Print "Your information has been successfully added to the database.";
mysql_close($con); 
 ?>
