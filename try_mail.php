<hmtl>
<head>
<body>
<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$add=$_POST['address'];
$email=$_POST['email'];

if(!$name)
{
 echo "wrong";
// <form action="invalid.html">
}
else{
$to="koolrahulwtf@gmail.com";
$subject=$_POST['sub'];
$message=$_POST['message'];

$res=mail($to, $subject, $message);
if(!$res)
 {
  echo "mail not sent";
 }
}
?>

<form action="<?php $_PHP_SELF ?>" method="post">
<p>Name:<input type="text" name="name" lenght="20" maxlength="20" value=""/></p>
<p>Phone:<input type="text" name="phone" length="20" maxlength="20" value=""/></p>
<p>Address:<input type="text" name="address" length="20" maxlength="20" value=""/></p>
<p>Email:<input type="text" name="email" length="20" maxlength="40" value=""/></p>
<p>Subject:<input type="text" name="sub" length="50" value=""/></p>
<p>Message:<input type="textbox" name="message" size="50" size_width="30" value=""/></p>
<p></p>
<p><input type="submit" name="submit" value="submit"/></p>
</form>
</head>
</html>
