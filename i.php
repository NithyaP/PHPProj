<?php
$conn=mysqli_connect("localhost","vijeshkk","nit","nitdb") or die('Error:' .mysql_connect());

$sql = 'SELECT Emp_id, Emp_name, Emp_Age from emp';


$retval = mysqli_query(  $conn,$sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval))
{
?>
<form>
   <input type="text" name="txtbx1" value="<?php echo (htmlspecialchars($row['Emp_id']));?>"/><br>
   <input type="text" name="txtbx2" value="<?php echo (htmlspecialchars($row['Emp_name']));?>"/><br>
   <input type="text" name="txtbx3" value="<?php echo (htmlspecialchars($row['Emp_Age']));?>"/><br>
</form>
<?php	 
} 
echo "Fetched data successfully\n";
mysqli_close($conn);
?>

