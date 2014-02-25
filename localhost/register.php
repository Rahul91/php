<html>
<body>

<?php

//session_distroy();

 $localhost='localhost';
 $username='root';
 $password='tunna';

 $conn=mysql_connect($localhost,$username,$password);
  if(!$conn)
  {
   die('not connected'. mysql_error());
  }

 $db=mysql_select_db("php");
  if(!$db)
  {
   die('database not selected' .mysql_error());
  }

//include('config.php');

$confirm_code=md5(uniqid(rand()));


if(isset($_POST['register']))
{
 $ru=$_POST['reguser'];
 $rp=$_POST['regpass'];
 $name=$_POST['name'];
 $mail=$_POST['email'];


 if($ru && $rp && $name && $mail)
 {
 $sub="confirmation code";
 $msg="Your confirmation code is ". $confirm_code;
 $msg.="Click on the link to activate \r\n";
 $msg.="http://localhost/localhost/confirmation.php?passkey=$confirm_code";

 $sql="insert into log values ('$name','$ru','$rp','$mail','$confirm_code')";
 $res=mysql_query($sql,$conn);
  if(!$res)
  {
   die('not inserted' .mysql_error());
  }

 else{
    mail($mail,$sub,$msg);
    header("Location:check_mail.php");
  }
 }
 else
 {
   echo ("You have not filled the registration form correctly, please try again");
  $flag==1;
 }
}

if(isset($_POST['login']))
 {
  session_start();

  $lu=$_POST['loguser'];
  $lp=$_POST['logpass'];
  //echo "$lp";
 $sql="select password from userdata where username='$lu'";
 $res1=mysql_query($sql,$conn);

 $count=mysql_num_rows($res1);
// echo "$count";
  if($count!=1)
   {
     echo 'User Not registered';
   }
 else
   {
    $sqlfetch=mysql_fetch_array($res1);
    $pswd=$sqlfetch['password'];
   // echo "$pswd";
    if($pswd==$lp)
     {
      // session_start();
      // $_SESSION['pswd']=$pswd;
      // $sess =session_id();
      // echo "$sess";
       $_SESSION['name']=$lu;
       header("Location:/localhost/home.php");
     }
    else{
      //echo "Wrong Password";
       header("Location:wrong_password.php");
      }
   }
 }

mysql_close($conn);
?>

<div id="container" style="width:1292px;">

 <div id="login" style="background-color:rgb(0,120,200);text-align:right;">
 <form method="post"><br>Username<input type="text" name="loguser" widht="40" value=""/>
 Password<input type="password" name="logpass" width="40" value=""/>
 <p><input type="submit" name="login" value="Login"/></p>
 </form>
 </div>

 <div id="register" style="background-color:rgb(200,200,210);height:480px;width:400px;float:right;">
 <form method="post"><br><br>
        <h1>Sign up<br></h1><br><br><br><br>
   <?php
   if($flag==1)
   echo "YOu have not filled the form correctly , please try again";
   ?>
       <table style="width:400px">
       <tr><td>Name*</td>
          <td><input type="text" name="name" value=""/></td></tr>

          <tr><td><br>Username*</td><td><br><input type="text" name="reguser" value=""/></td></tr>
          <tr><td><br>Password*</td><td><br><input type="text" name="regpass" value=""/></td></tr>
          <tr><td><br>Email*</td><td><br><input type="text" name="email" value=""/></td></tr>
	  <tr><td></td><td><br><br><br><input type="submit" name="register" value="Register"/></p></td><tr>
        </table>
 </div>

  <div id="about" style="background-color:rgb(50,100,120);height:480px;width:892px;float:right;">
  <h1> Content of the website </h1>
  <br><iframe width="600" height="360"
      src="http://youtube.com/embed/wYH7wyXYlAM">
      </iframe>
  </div><br>

  <br>
  <div id="source" style="background-color:rgb(0,200,170);text-align:center;margin-top:100px;">
  <a href="https://fpaste.org/78138/15737139/"><br>Source Code<br></a><br>
</div>
</body>
</html>
