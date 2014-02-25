<?php

$b=isset($_POST['submit']);
echo "$b";
if(isset($_POST['submit']))
{
 $con=mysql_connect('localhost', 'root', 'tunna');
 if(!$con)
  {
   die('not connected'. mysql_error());
  }
// echo ('connection established');

 $db=mysql_select_db("php");
 if(!$db)
  {
   die(mysql_error());
  }
// echo ("db selected");
 //$b=isset(S_POST['submit']);
 echo "$b";

 $id=$_POST['id'];
 $name=$_POST['name'];

//  $sql1='insert into student values ($id,'$name')';
  $sql1="insert into student values ($id,'$name')";
  $result=mysql_query($sql1, $con);

  //echo $id;
  //echo $name;
 if(!$result)
  {
   die('data not inserted'. mysql_error());
  }
// echo "data inserted";
 mysql_close($con);
}
?>

<html>
<head>
<body>
<form method="post" action="<?php $_PHP_SELF ?>">
<p>ID : <input type="text" name="id" size="20" value=""/></p>
<p>Name: <input type="text" name="name" size="20 value=""/></p>
<p><input type="submit" name="submit" value="submit"/></p>
</form>
</body>
</head>
</html>
