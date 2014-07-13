<!DOCTYPE HTML>
<html>
<head>
<title></title>
</head>
<body>
<?php
  $con=mysqli_connect("localhost","vijeshkk","nit","nithdb");
  
  if($_POST["subject"]<>"")
  {
   mail("nithyapanniyan@gmail.com", $_POST[subject], $_POST[message]);
   echo("Your message has been sent\n");

} else {
     echo("The subject field was blank.  You must complete the subject field");
}

?>
<form action="$_PHP_SELF" method="POST" >
<input type="text" name="subject" >
<input type="text" name="message" >
</form>
</body>
</html>