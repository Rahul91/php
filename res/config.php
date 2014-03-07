<?php
$host='mysql3.000webhost.com';//hostname
$username='a6352990_rahul';//username
$pasword='rahul22';//password

//connect to database
$con=mysql_connect($host,$username,$pasword);
 if(!$con)
  {
   die('not connected' .mysql_error());
  }
//echo "connected to server";
//select the table in database
$db=mysql_select_db("a6352990_php");
 if (!$db)
  {
   die('database not selected' .mysql_error());
  }
//echo "database selected
?>
