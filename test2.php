<? php
$conn=mysqli_connect("localhost","vijeshkk","nit","nitdb") or die('Error:' .mysql_connect());
$sql="SELECT * From emp";
$result=$mysqli-query($conn,$sql);


//uery = mysql_query("SELECT * FROM  `PropertyInfo` WHERE  `sitestreet` LIKE  '$street'");
// display query results
while($row = mysql_fetch_array($result))
    {
     <input value="<?php echo $row[Emp_Id];?>"/>
	}
	
	?>