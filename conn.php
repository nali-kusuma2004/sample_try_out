<?php
 $host="localhost";
$username="root";
$password="";
$database="project";
$conn=mysqli_connect($host,$username,$password,$database);
global $res;
if(!$conn)
echo "no";
else
echo"  ";?>