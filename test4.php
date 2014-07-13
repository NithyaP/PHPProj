<html>
<head>
<title>Paging Using PHP</title>
</head>
<body>
<?php

$rec_limit = 10;

$conn = mysqli_connect('localhost', 'vijeshkk', 'nit','nitdb');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

/* Get total number of records */
$sql = "SELECT count(Emp_ID) FROM emp ";
$retval = mysqli_query( $conn,$sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
$row = mysqli_fetch_array($retval, MYSQL_NUM );
$rec_count = $row[0];

if( isset($_GET{'page'} ) )
{
   $page = $_GET{'page'} + 1;
   $offset = $rec_limit * $page ;
}
else
{
   $page = 0;
   $offset = 0;
}
$left_rec = $rec_count - ($page * $rec_limit);

$sql = "SELECT Emp_ID, Emp_Name, Emp_Age ".
       "FROM emp ".
       "LIMIT $offset, $rec_limit";

$retval = mysqli_query( $conn,$sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
    echo "EMP ID :{$row['Emp_ID']}  <br> ".
         "EMP NAME : {$row['Emp_Name']} <br> ".
         "EMP SALARY : {$row['Emp_Age']} <br> ".
         "--------------------------------<br>";
} 

if( $page > 0 )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a> |";
   echo "<a href=\"$_PHP_SELF?page=$page\">Next 10 Records</a>";
}
else if( $page == 0 )
{
   echo "<a href=\"$_PHP_SELF?page=$page\">Next 10 Records</a>";
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a>";
}
mysqli_close($conn);
?>