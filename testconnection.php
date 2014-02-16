<?php
//opens connection to mysqp server
$dbc = mysql_connect('localhost','root','tunna');
if (!$dbc) 
    {
     die('Not connect:' .mysql_error);
    }

//select database
$db_selected = mysql_select_db("php", $dbc);
if (!$db_selected)
    {
     die('Not Connected :'.mysql_error);
    }
//test
$query = "update student set id=5 where name='Rahul'";
$result=mysql_query($query);
?>
