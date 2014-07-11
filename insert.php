<?php
if (isset($_POST['test1'])){

     $con=mysqli_connect("localhost","vijeshkk", "nit", "nitdb") or die('cannot connect : '. mysql_error());
     
	 $sql= "INSERT INTO emp (Emp_ID,Emp_Name,Emp_Age) VALUES ('" . $_POST["test1"] . "','" . $_POST["test2"] . "','" . $_POST["test3"] . "')";
     
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
}
?>
<! DOCTYPE html>
<html>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST">
<label>Emp ID</label><input type="text" name="test1"/><br>
<label>Emp Name</label><input type="text" name="test2"/><br>
<label>Emp Age</label><input type="text" name="test3"/><br>
<input type="submit" value="Submit"><br>
</form>
</body>
</html>
