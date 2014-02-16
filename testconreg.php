<?php

$host="localhost";//hostname
$username="root";//username
$pasword="tunna";//password
$db_name="php";//database name

//connect ot database
mysql_connect("$host", "$username", "$password") or die("cannt connect to server");
mysql_select_db("$db_name") or die("cannot select database");
?>
