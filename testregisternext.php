<?php

include('testconreg.php');

//test to see if username is alphanumeric
$test=$_POST[username];

 if(!eregi("([^A-Za-z0-9]"),$test))
 {
  //test for duplicate names
  $query ="select * from user where username='$_POST[username]'"
  $result  = mysql_query($query);
  $num=myaql_num_rows($result);

   if($num == 0)
   {
   $query2 ="select * from user where username='$_POST[username]'"
   $result2  = mysql_query($query2);
   $num2=myaql_num_rows($result2);

    if($num2==0)
    {
     if (($_POST['pass']==$_POST['pass2']) && ($_POST['email']==$_POST['email2'])){
     //generate random confirmation code
     $confirm_code=md5(uniqid(rand()));

     //get rid of all html hackers
     $name=$_POST['username'];
     $email=$_POST['email'];
     $password=$_POST['pass'];

        //insert into database
        $sql="insert into temp set code='$confirmation_code', username='$name', email='$email', password='$password'";
	$result =mysql_query($sql);

           if ($result){
              

 		$message="your confirmation link\r \n";
		$message.="Click on this link to activate your account \r \n";
		$message.="https://localhost/confirmation.php?passkey=$confirm_code";
	     }
     }
    }


   }
   else
   {
      header("Location:nameinuse.html");
   }
 }
 else
 {
  header("Location:invalidname.html");
 }
 
?>
