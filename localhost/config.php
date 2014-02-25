<?php

$host='localhost';//hostname
$username='root';//username
$pasword='tunna';//password

//connect to database
$con=mysql_connect('localhost','root','tunna');
 if(!$con)
  {
   die('not connected' .mysql_error());
  }
//echo "connected to server";
//select the table in database
$db=mysql_select_db("php");
 if (!$db)
  {
   die('database not selected' .mysql_error());
  }
//echo "database selected";
?>
