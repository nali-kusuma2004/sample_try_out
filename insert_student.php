<?php
$NAME=$_POST['name'];
$STUDENT_ID=$_POST['student_id'];
$COLLEGE_NAME=$_POST['college_name'];
$COURSE=$_POST['course'];
$E_MAIL=$_POST['e-mail'];
$USERNAME=$_POST['username'];
$PASSWRD=$_POST['password'];
$host='localhost';
$user='root';
$password='';
$database='student';
$conn=mysqli_connect($host,$user,$password,$database);
if( !$conn)
{
 echo " ";
}
echo " ";

$sql1="select * from student_details where STUDENTID='$STUDENT_ID'";
$sql="INSERT INTO student_details(NAME,STUDENTID,COLLEGENAME,COURSE,EMAIL,USERNAME,PASSWORD)
VALUES('$NAME','$STUDENT_ID','$COLLEGE_NAME','$COURSE','$E_MAIL','$USERNAME','$PASSWRD')";
$result1=mysqli_query($conn,$sql1);
global $x;
if(mysqli_num_rows($result1)>0)
{
if($row=mysqli_fetch_assoc($result1))
{
   $x="{$row['STUDENTID']}" ;
   if($STUDENT_ID==$x)
    {
     echo'<html>';
  echo"<head> <style> .div{
                           font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.6;
    color: #333;
    background-image: url('signu1.jpeg');
    /* background-repeat: no-repeat; */
    background-size:cover;
                             
}
.mn{ 			font-size:16px;
                         border:10 solid grey;
                             width:1000 px;
                           height:1000 px ;
 				margin-top:15%;
				margin-left:10%;
				margin-right:10%;

}

.bt{
    color:white;
    width:130px;
    height: 40px;
    background-color:white;
    box-shadow:10px  white;
    border-radius: 5px;
align:center;
}
</style></head>";
     echo'<body class="div"><br><br><br><br><br><br><br>';
     echo'<div align="center" class="mn">';
     echo'<h3 style="color:white;">YOU HAVE ALREADY SIGN IN ,PLEASE LOGIN HERE</h3><br><br><br>';
     echo'<button class="bt" ><a href="login.html" align="center" >LOGIN</a></button>';
     echo'</div>';
     echo'</body>';
     echo'</html>';
}
}

}
if($STUDENT_ID!=$x)
{
if(mysqli_query($conn,$sql))
{
echo'<html>';
echo"<head><style>
 .fram{  
font-family: Arial, sans-serif;
    font-size: 16px solid white;
    line-height: 1.6;
    color: #333;
    background-image: url('signs.jpeg');
    /* background-repeat: no-repeat; */
    background-size: contain;
        
     }
.dv{ 
      margin-top:10%;
      margin-left:40%;
     
}
.lin{
width:130px;
    height: 40px;
    background-color:white;
    box-shadow:10px  white;
    border-radius: 5px;
margin-right:40%

}
.lin1{
width:130px;
    height: 40px;
    background-color:white;
    box-shadow:10px  white;
    border-radius: 5px;
margin-left:50%;
}
</style>
</head>";
echo'<body class="fram">';
echo'<div class="dv"><br><br><br>';
echo'<h2 style="color:white;">SIGN IN SUCCESSFULLY</h2><br><br><br>';
echo'<table><tr><td>';
echo'<button class="lin"><a href="HOMEPAGE.html">HOME</a></button></td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo'<td><button class="lin1"><a href="terms_conditions.html">NEXT</a></button></td>';
echo'</tr></table>';
echo'</div>';
echo'</body></html>';
}
}
mysqli_close($conn);
?>
