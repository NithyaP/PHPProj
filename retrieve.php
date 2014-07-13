<?php
//Connect Database
$con=mysqli_connect("localhost","vijeshkk", "nit", "nitdb") or die('cannot connect : '. mysql_error());
$sql="SELECT * FROM emp";
//Run Query and save data to "results"
$results=mysqli_query($con,$sql);

 if(mysqli_num_rows($results) >= 1)
 {

 //Display table with data
echo '<table class="table table-striped table-bordered table-hover">'; 
echo"<TR><TD>ID</TD><TD>Name:</TD><TD>Age</TD></TR>"; 
while($row = mysqli_fetch_array($results))
{
echo "<tr><td>"; 
echo $row['Emp_ID'];
echo "</td><td>";   
echo $row['Emp_Name'];
echo "</td><td>";    
echo $row['Emp_Age'];
echo "</TD></tr>";  
}
echo "</table>";    

    }
    else
echo "There was no matching record for the name " . $searchTerm;

?>
