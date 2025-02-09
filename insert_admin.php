<?php
$FIRSTNAME=$_POST['firstname'];
$LASTNAME=$_POST['lastname'];
$EMAIL_ID=$_POST['e-mail'];
$PASSWRD=$_POST['password'];
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
$sql="INSERT INTO admin_details( FIRSTNAME,LASTNAME,EMAIL_ID,PASSWORD)
VALUES('$FIRSTNAME','$LASTNAME','$EMAIL_ID','$PASSWRD')";
if(mysqli_query($conn,$sql))
{
echo"data inserted successfully";
}
else
{
echo"could not insert data";
}
mysqli_close($conn);
?>
