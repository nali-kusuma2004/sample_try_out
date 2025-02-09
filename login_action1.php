<?php
$STUDENT_ID=$_POST['id'];
$username1= $_POST['username'];
$password1=$_POST['password'];
$host="localhost";
$username="root";
$password="";
$database="student";
$conn=mysqli_connect($host,$username,$password,$database);
if(! $conn)
{
echo "connection unsuccessfull";
}
echo " ";

$sql="select * from student_details where STUDENTID='$STUDENT_ID'";
$result=mysqli_query($conn,$sql);
global $x;
global $x1;
 global $x2;
if(mysqli_num_rows($result)>0)
{
if($row=mysqli_fetch_assoc($result))
{ 
$x="{$row['EMAIL']}";
$x1="{$row['PASSWORD']}";
$x2="{$row['STUDENTID']}";
 if($STUDENT_ID==$x2)
  {
  	 if($username1==$x && $password1==$x1)

		{
		echo'<html>';
   		echo"<head><style>
      		.ln{ font-family: Arial, sans-serif;
    font-size: 16px solid white;
    line-height: 1.6;
     align:center;
    color: #333;
    background-image: url('loginsu.jpeg');
 /*   background-repeat: no-repeat;*/ 
    background-size: contain;
        
}
			.d{
                               font-size:40;
                                color:black;
				margin-left:50 px;
				margin-right:50 px;
				margin-top:80 px;
				align:center;
                           
	
.lin{
width:130px;
    height: 40px;
    background-color:white;
    box-shadow:10px  white;
    border-radius: 5px;
align:center;
}
.lin1{
width:130px;
    height: 40px;
    background-color:white;
    box-shadow:10px  white;
    border-radius: 5px;
margin-left:15%;
align:center;

			</style></head>";	
		echo'<body class="ln"><br><br><br><br>';
		 echo'<div class="d" align="center">';
                 echo'<h2 style="color:black;">LOGIN SUCCESSFULL</h2><br><br><br>';
		echo '<form action="test.html">';
		echo'<button src="HOMEPAGE.HTML"  class="lin" width="100">HOME</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo'<button class="lin1" width="100">NEXT</button>';
		echo'</form>';
		echo '</div>';
		echo '</body>';
		echo '</html>';
		}
else
{

	echo'<html>';
	echo"<head><style>
		.ln1{
		font-family: Arial, sans-serif;
    font-size: 16px solid white;
    line-height: 1.6;
    color: #333;
    background-image: url('loginu.jpeg');
    /* background-repeat: no-repeat; */
    background-size: cover;
opacity:2.0 px
        
		
		}
.r{
border:10 px solid black;
     color:blue;
font-size:40 ;
     margin-top:10%;
	margin-left:50px;
	margin-right:50 px;
}
.b{   
width:130px;
    height: 40px;
    background-color:white;
    box-shadow:10px  white;
    border-radius: 5px;
align:center;
}
</style></head>";
	echo'<body class="ln1"><br><br>';
	echo'<div  class="r" align="center"><br>';
	echo'<h4 style="color:white;"> please enter a valid credentials</h4><br><br>';
	echo'<form action="login.html" width="100" height="100" align="center">';
	echo'<button class="b" >TRY AGAIN</button>';
	echo'</form>';
	echo'</div>';
	echo'</body>';
	echo'</html>';


}
}
}
}

if($STUDENT_ID!=$x2)
{
    
	echo'<html>';
	echo"<head><style>
		.ln1{
			background:#44ff23;
		
		}
.r{
border:10 px solid black;
     color:blue;
font-size:40 ;
     margin-top:50 px;
	margin-left:100px;
	margin-right:100 px;
}
.b{   
width:130px;
    height: 40px;
    background-color:white;
    box-shadow:10px  white;
    border-radius: 5px;
align:center;
}
</style></head>";
	echo'<body class="ln1"><br><br><br><br>';
	echo'<div  class="r" align="center"><br><br><br><br>';
	echo'<h4> please enter a valid credentials</h4><br><br>';
	echo'<form action="login.html" width="100" height="100" align="center">';
	echo'<button class="b" >TRY AGAIN</button>';
	echo'</form>';
	echo'</div>';
	echo'</body>';
	echo'</html>';

}
mysqli_close($conn);

?>