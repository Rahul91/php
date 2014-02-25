<?php
$hostname='localhost';
$username='root';
$password='tunna';

$conn=mysql_connect($hostname, $username, $password);
if(!$conn)
 {
  die('Connection not established :' . mysql_error());
 }

echo "Connected successfully \r \n";

$db_select=mysql_select_db("php", $conn);
if(!$db_select)
 {
  die('database not selected' . mysql_error());
 }
echo "database selected\n";


$sql='insert into student values(6,"Chandan")';
$result=mysql_query($sql, $conn);

if(!$result)
 {
  die("not inserted :" . mysql_error());
 }

echo "inserted";

mysql_close($conn);
?>
