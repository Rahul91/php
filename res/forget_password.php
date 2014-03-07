<?php
include('config.php');
if(isset($_POST['submit']))
{
 $mail=$_POST['email'];

 $sql="select password from log where email='$mail'";

 $res=mysql_query($sql,$con);
  if(!$res)
  {
   die('value not retrieved'. mysql_error());
  }
 $count=mysql_num_rows($res);
// echo $count;
 if($count == 1)
 {
// echo 'entered';
  $sqlfetch=mysql_fetch_array($res);
  $pass=$sqlfetch['password'];
 // echo $pass;
  $sub="Forget Password";
  $msg="Your password for the account is ". $pass;
  mail($mail,$sub,$msg);
 }
}
?>
<html>
<title>Forget_Password</title>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="container">

 <!--div id="menu" style="background-color:rgb(200,200,200);text-align:left;">
 <h1>Xarvis</h1></div-->
 <div id="menu" style="background-color:rgb(200,200,200);padding:4px">

 <div class="menutext">Xarvis</div>
  </div>


 <div id="content" style="text-align:center">
 <!--form method="post"-->
 <p class="mediumtext">Please enter your email-id here, your password will be sent to youe email account.
 <br><br></div>

 <div class="meduimtext">
 <form method="post" style="text-align:center"><input class="inputs" type="text" name="email" width="50" placeholder="Enter your e-mail"/>
 <br><br><br><input class="button1" type="submit" name="submit" value="submit"/>
 </form>
 </div>
 
 <div style="text-align:center;">
 <br><p style="textadd">Or you can just call me, i know your Password.. :P</p>
 </div>

</div>
</body>
</html>

