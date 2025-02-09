<?php
$host='localhost';
$user='root';
$password='';
$database='student';
$conn=mysqli_connect($host,$user,$password,$database);
if( !$conn)
{
 echo "connection not successfully";
}

echo "connection  successfully";


$sql=' CREATE  TABLE Admin_details( NAME varchar(50),EMAIL varchar(20),USERNAME varchar(50),PASSWORD varchar(30) )';
if(mysqli_query( $conn,$sql))
{
echo"table created";
}
else
{
echo" could not create ";
}
mysqli_close($conn);
?>
