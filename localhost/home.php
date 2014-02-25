<html>
<head>
<body>

<?php

session_start();
if(!isset($_SESSION['name']))
{
 header("Location:/localhost/register.php");
}
if(isset($_SESSION['name']))
{
 include('config.php');
// session_start();

 $name=$_SESSION['name'];
 //echo "$pass";

 $res2=mysql_query("select * from log where username='$name'");
 $count=mysql_num_rows($res2);
 //echo "$count";

 $row=mysql_fetch_array($res2);
 $lname=$row['Name'];
 echo "Hi, $lname !";

//if(isset($_SESSION['pswd']))
 {
  if(isset($_POST['logout']))
   {
    // session_start();
    // session_distroy();
    // header("Location:register.php");
   }
 }
}
/*$pass=$_SESSION['pswd'];
echo "$pass";

$res2=mysql_query("select Name from log where password=$pass");
$row=mysql_fetch_array($res2);

$lname=$row['Name'];
echo "$lname";*/
?>

<div id="container" style="width:1293px;">
  <div id="imp" style="height:70px;background-color:rgb(200,200,200);text-align:right;">
  <a href="logout.php">logout</a>
  </div>
  <br>
  <div id="main content" style="height:470px;background-color:rgb(80,120,80)">
    <table style="width:500px;">
       <tr>
          <td>1. Social Networking Site</td>
	  <td>
              <a href="https://facebook.com">Facebook</a><br>
              <a href="https://twitter.com">Twitter</a><br>
	      <a href="https://linkedin.com">Linkedin</a><br>
          </td>
       </tr>
       <tr><br><br><br>
          <td>2. Listen Music</td>
          <td><br><br><br>
              <a href="https://gaana.com">Gaana</a><br>
              <a href="https://in.com">In</a><br>
          </td>
       </tr>
       <tr><br><br><br>
          <td>3. News Udaptes</td>
          <td><br><br><br>
              <a href="https://bbc.co.uk">BBC HINDI</a><br>
              <a href="https://ndtv.com">NDTV</a><br>
              <a href="https://news.google.co.in/">Googel News<br>
          </td>
       </tr>
    <table>
  </div>

   <br><br><br><br>
       <div id="source code" style="background-color:rgb(200,80,150);text-align:center;">
       <a href="https://fpaste.com"><br>Source code<br><br></a>
   </div>
</div>
</body>
</head>
</html>
