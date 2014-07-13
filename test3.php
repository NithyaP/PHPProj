<?php
if(isset($_POST["fname"]))   

{
$conn=mysqli_connect("localhost","vijeshkk","nit","nitdb");
$sql="INSERT INTO test3(FName,LName,Gender,Food,Tile,Education) VALUES('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["gender"]."','".$_POST["food"]."','".$_POST["quto"]."','".$_POST["edu"]."') ";
if(!mysqli_query($conn,$sql))
{
die('Error:'.mysql_error());
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST">
	<input type="text" name="fname" />
	<input type="text" name="lname" />
	<input type="radio" value="male" name="gender" />
	<input type="radio" value="female" name="gender" />
	<input type="radio" value="pizza" name="food" />
	<input type="radio" value="steak" name="food" />
	<input type="radio" value="chicken" name="food" />
	<textarea rows="4" cols="50" name="quto">
	Enter Ur favourite quotes
	</textarea>
	Select Level of Education
	<select name="edu">
	<option value="sslc">SSLC</option>
	<option value="12th">12th</option>
	<option value="degree">Degree</option>
	<option value="ms">Ms</option>
	</select>
	<input type="submit" name="submit" value="SUBMIT" />
<form>
</body>
</html>