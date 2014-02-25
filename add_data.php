<?php
 $dbhostname='localhost';
 $dbusername='root';
 $dbpassword='tunna';

 $conn=mysql_connect($dbhostname,$dbusername,$dbpassword);
 if (!$conn)
 {
  die('connetction failed:' . mysql_error());
 }
 echo "connection established";

 $id=$_POST['id'];
 $name=$_POST['name'];

 $db=mysql_select_db("php");

 if (!$db)
 {
  die('database not selected'. mysql_error());
 }

 echo $id;
 echo $name;

 echo "data base selected";
 $sql="insert into student values ('$id', '$name')";
 $result=mysql_query($sql, $conn);

 if(!$result)
 {
  die('Couldnt enter the data into table'.mysql_error());
 }
 echo "data inserted";

 mysql_close($conn);
?>
