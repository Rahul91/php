<html>
<head>
<title>Logout</title>
<meta charset="utf-8">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.poptrox-2.2.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/init.js"></script>
<noscript>
<link rel="stylesheet" href="css/skel-noscript.css">
<link rel="stylesheet" href="css/style.css">
</noscript>
</head>

<?php
session_start();
unset($_SESSION['name']);
?>
<body>
<div id="container">

 <div id="menu" style="background-color:rgb(200,200,200);padding:4px">

 <div class="menutext">Xarvis</div>
 </div>

<br><br>
 <!--div id="register" style="background-color:rgb(200,200,210);height:480px;width:400px;float:right;"></div>

 <div id="about" style="background-color:rgb(50,100,120);height:480px;width:892px;float:right;text-shadow:4px 4px 8px blue;">
  <h1><p style="text-color:'yellow';"-->
    <div class="infotext">You have been successfully loggedout, please click 
       <a class="link" href="http://rahul.site90.net/index_try.php">here</a> to login again.</div>
   <br><br><br><br>
  <div class="mediumtext">
  <script language="javascript" type="text/javascript">
<!--
 function Redirect()
 {
   window.location="http://rahul.site90.net/index_try.php";
 }

document.write("You will be redirected to main page in 10 sec");
setTimeout('Redirect()', 10000);
//-->
</script>
</div>
 <br>
  <br><br>
   <div id="source" style="text-align:center">
   <br><a href="fpaste/3113"><br>Source Code<br></a><br>
  </div>

</div>

/*<?php
session_start();
session_distroy();
header('location:registration.php');
?>*/
</body>
</html>
