<?php
include('session.php');
include('config.php');

$confirm_code=md5(uniqid(rand()));

if(isset($_POST['register']))
{
 $ru=$_POST['reguser'];
 $rp=$_POST['regpass'];
 $name=$_POST['name'];
 $mail=$_POST['email'];

 $sub="confirmation code";
 $msg="Your confirmation code is :" . $confirm_code;
 $msg.="Click on the link to activate \r\n";
 $msg.="http://rahul.site90.net/confirmation.php?passkey=$confirm_code";

 if($ru && $rp && $name && $mail)
  {
   $sql="insert into log values ('$name','$ru','$rp','$mail','$confirm_code')";
   $res=mysql_query($sql,$con);
     if(!$res)
      {
       die('not inserted' .mysql_error());
      }
     else
      {
       mail($mail,$sub,$msg);
       header("Location:check_mail.php");
      }
  }
 else
  {
  // echo "You have not filled the form correctly, please try again";
  header("location:http://rahul.site90.net/index_try.php");
  }
}

if(isset($_POST['login']))
 {
  $lu=$_POST['loguser'];
  $lp=$_POST['logpass'];

 if($lu && $lp)
 {
  $sql="select password from userdata where username='$lu'";
  $res1=mysql_query($sql,$con);

  $count=mysql_num_rows($res1);
  if($count!=1)
   {
     echo 'User Not registered';
   }
  else
   {
    $sqlfetch=mysql_fetch_array($res1);
    $pswd=$sqlfetch['password'];
    if($pswd==$lp)
     {
       //echo $pswd;
       $_SESSION['name']=$lu;
       header("Location:home.php");
     }
    else{
        echo $pswd;
        header("Location:wrong_password.php");
        }
     }
   }
  else
     {
      header('Location:index_try.php');
     }
 }


/*if(isset($_POST['message']))
 {
 $sub="Query/Suggestion";
 $name=$_POST['name'];
 $msg="This message is sent by " . $name; . "\r\n"
 $msg.=$_POST['content'];
 $to="priyrahulmishra@gmail.com";

 mail($sub,$msg,$to);
 }*/

mysql_close($con);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic" rel="stylesheet" type="text/css">
<!--[if lte IE 8]>
<script src="css/ie/html5shiv.js"></script>
<![endif]-->
<!--script src="http://www.clocklink.com/embed.js"></script>
<script type="text/javascript" language="JavaScript">obj=new Object;obj.clockfile="5012-black.swf";obj.TimeZone="GMT0530";obj.width=227;obj.height=75;obj.wmode="transparent";showClock(obj);</script-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.poptrox-2.2.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/init.js"></script>
<noscript>
<link rel="stylesheet" href="css/skel-noscript.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--link rel="stylesheet" href="css/styleadd.css"-->
</noscript>
<!--[if lte IE 8]>
<link rel="stylesheet" href="css/ie/v8.css">
<![endif]-->
</head>
<body>
<!--section id="header"-->
<!--embed src="http://www.clocklink.com/clocks/5012-black.swf?TimeZone=GMT0530&"  width="227" height="75" wmode="transparent" type="application/x-shockwave-flash"-->
<div id="container" style="height:590px;"> 
<!--embed src="http://www.clocklink.com/clocks/5012-black.swf?TimeZone=GMT0530&"  width="227" height="75" wmode="transparent" type="application/x-shockwave-flash"-->
 <div id="login" style="text-align:right;">
  <!--div id="name" style="text-align:left";><h1>Xarvis</h1></div-->
 <form method="post" action="#"><br><!--h1 style="text-align:left";>Xarvis</h1-->
 <input class="inputs1" type="text" name="loguser" width="40" placeholder="Username"/>
 <input class="inputs1" type="password" name="logpass" width="40" placeholder="password"/>
 <!--h1 style="text-align:left";>Xarvis</h1-->
 <a href="http://rahul.site90.net/forget_password.php"><h6>forget password?</h6></a>
 <p><input class="button1" type="submit" name="login" value="Login"/></p>
 </form>
 </div>

 

 <div id="register" style="height:475px;width:400px;float:right;">
  <form method="post"><br><br>
        <h1 class="sign">Sign up!!<br></h1><br><br><h3 class="textadd">Sign up its free n always will be :)</h3><br><br>
        <table style="width:400px">
        <tr><td></td>
          <td><input class="inputs" type="text" name="name" placeholder="Name*"/></td></tr>
          <tr><td><br></td><td><br><input class="inputs" type="text" name="reguser" placeholder="Username*"/></td></tr>
          <tr><td><br></td><td><br><input class="inputs" type="text" name="regpass" placeholder="Password*"/></td></tr>
          <tr><td><br></td><td><br><input class="inputs" type="text" name="email" placeholder="Email*"/></td></tr>
          <tr><td></td><td><br><br><input class="button1" type="submit" name="register" value="Register"/></p></td><tr>
        </table>
  </form>
 </div>
</div>
 <!--header>
    <h1>Overflow</h1>
    <p>By HTML5 UP</p>
  </header>
  <footer> <a href="#banner" class="button style2 scrolly">Proceed as anticipated</a> </footer-->

<!--section id="banner">
  <header>
    <h2>This is Overflow</h2>
  </header>
  <p>A brand new site template designed by AJ for HTML5 UP.<br>
    It’s fully responsive, built on skelJS, and of course entirely free<br>
    under the Creative Commons license.</p>
  <footer> <a href="#first" class="button style2 scrolly">Act on this message</a> </footer>
</section-->
<!--article id="first" class="container box style1 right"> <a href="#" class="image full"><img src="images/pic01.jpg" alt=""></a>
  <div class="inner">
    <header>
      <h2>Lorem ipsum<br>
        dolor sit amet</h2>
    </header>
    <p>Tortor faucibus ullamcorper nec tempus purus sed penatibus. Lacinia pellentesque eleifend vitae est elit tristique velit tempus etiam.</p>
  </div>
</article>
<article class="container box style1 left"> <a href="#" class="image full"><img src="images/pic02.jpg" alt=""></a>
  <div class="inner">
    <header>
      <h2>Mollis posuere<br>
        lectus lacus</h2>
    </header>
    <p>Rhoncus mattis egestas sed fusce sodales rutrum et etiam ullamcorper. Etiam egestas scelerisque ac duis magna lorem ipsum dolor.</p>
  </div>
</article-->
<!--article class="container box style2">
  <header>
    <h2>Magnis parturient</h2>
    <p>Justo phasellus et aenean dignissim<br>
      placerat cubilia purus lectus.</p>
  </header>
  <div class="inner gallery">
    <div class="row flush">
      <div class="3u"><a href="images/fulls/01.jpg" class="image full"><img src="images/thumbs/01.jpg" alt="" title="Ad infinitum"></a></div>
      <div class="3u"><a href="images/fulls/02.jpg" class="image full"><img src="images/thumbs/02.jpg" alt="" title="Dressed in Clarity"></a></div>
      <div class="3u"><a href="images/fulls/03.jpg" class="image full"><img src="images/thumbs/03.jpg" alt="" title="Raven"></a></div>
      <div class="3u"><a href="images/fulls/04.jpg" class="image full"><img src="images/thumbs/04.jpg" alt="" title="I'll have a cup of Disneyland, please"></a></div>
    </div>
    <div class="row flush">
      <div class="3u"><a href="images/fulls/05.jpg" class="image full"><img src="images/thumbs/05.jpg" alt="" title="Cherish"></a></div>
      <div class="3u"><a href="images/fulls/06.jpg" class="image full"><img src="images/thumbs/06.jpg" alt="" title="Different."></a></div>
      <div class="3u"><a href="images/fulls/07.jpg" class="image full"><img src="images/thumbs/07.jpg" alt="" title="History was made here"></a></div>
      <div class="3u"><a href="images/fulls/08.jpg" class="image full"><img src="images/thumbs/08.jpg" alt="" title="People come and go and walk away"></a></div>
    </div>
  </div>
</article-->
<embed src="http://www.clocklink.com/clocks/5012-black.swf?TimeZone=GMT0530&"  width="227" height="75" wmode="transparent" type="application/x-shockwave-flash">
<br><br><br><br><br><br><br><br><br><br><br>
<article class="container box style3">
 <header>
    <h2>If u have any suggestion, please drop by</h2>
    <!--p>Diam dignissim lectus eu ornare volutpat orci.</p-->
  </header>
  <form method="post">
    <!--div class="row half"-->
      <div>
        <input type="text" class="inputs" name="name" placeholder="Name">
      <br>
      <br> 
        <input type="text" class="inputs" name="email" placeholder="Email">
      </div>
    <div class="row half">
      <div class="12u">
        <textarea name="content" class="inputs" placeholder="Message"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="12u">
        <ul class="actions"><br>
          <li><input type="submit" name="message" class="button form"></a></li>
        </ul>
      </div>
    </div>
  </form>
</article>
<section id="footer">
  <ul class="icons">
    <li><a href="#" class="icon icon-twitter solo"><span>Twitter</span></a></li>
    <li><a href="#" class="icon icon-facebook solo"><span>Facebook</span></a></li>
    <li><a href="#" class="icon icon-google-plus solo"><span>Google+</span></a></li>
    <!--li><a href="#" class="icon icon-pinterest solo"><span>Pinterest</span></a></li>
    <li><a href="#" class="icon icon-dribbble solo"><span>Dribbble</span></a></li-->
    <li><a href="#" class="icon icon-linkedin solo"><span>LinkedIn</span></a></li>
</section>
  </ul>
  <div class="copyright">
    <ul class="menu">
      <li><a href="https://www.facebook.com/rahul.mishra.94402">Rahul</a></li>
      <li><a href="fpaste.org">Source_Code</a></li>
    </ul>
  </div>
</body>
</html>
