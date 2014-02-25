<?php
include('config.php');

$passkey=$_GET['passkey'];

//echo "$db";

$res=mysql_query("select * from log where code='$passkey'");
$count=mysql_num_rows($res);
echo "$count";

 if ($count==1)
  {
   $rows=mysql_fetch_array($res);

   $username=$rows['Username'];
   echo "$username";
   $password=$rows['Password'];
   echo "$password";
   mysql_query("insert into userdata values ('$username','$password')");
   mysql_close();
   header("Location:register.php");
  }
?>
