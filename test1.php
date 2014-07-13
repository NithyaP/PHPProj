<?php
if(isset($_POST["txtbx1"]))
{
$conn=mysqli_connect("localhost" ,"vijeshkk","nit","nitdb") or die('cannot connect'.mysql_connect());
$sql="INSERT INTO emp(Emp_Id,Emp_Name,Emp_Id) VALUES ('".$_POST["txtbx1"]."','".$_POST["txtbx2"]."','".$_POST["txtbx3"]."')";
if(!mysql_query($conn,$sql))

  {
    die('Error:'.mysqli_error());
	}
	mysql_close();
	}
?>	 
<! DOCTYPE html>
<html>
<head>
<style>
form{
height:300px;
width:500px;
background:black;
color:white;
}
form label{
font:;
}
input[type=button]{
   position:relative;
   left:50%;
   bottom:0px;
   visibility:show;
   padding:
}
</style>

</head>
<body>

<form action="<?php $_PHP_SELF ?>" method="POST" >
<label>Emp_Id </label><input type="text" name="txtbx1" /><br>
<label>Emp_Name</label><input type="text" name="txtbx2" /><br>
<label>Emp_Add</label><input type="text" name="txtbx3" /><br>
<label>Emp_Age</label><input type="text" name="txtbx4" /><br>
<label>Emp_Skills</label><input type="text" name="txtbx5" /><br>
<input type="button" value="submit" />

</form>
</body>
</html>