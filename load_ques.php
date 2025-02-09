<?php 
include 'conn1.php';
for($id=1;$id<50;$id++)
{
$sql="select * from question_maths where ques_id='$id'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)!=0)
{
echo $id;
if($row=mysqli_fetch_assoc($res))
{
$x="{$row['question']}";$x1="{$row['option_1']}";$x2="{$row['option_2']}";
$x3="{$row['option_3']}";$x4="{$row['option_4']}";
} 
}
}
mysqli_close($conn);
?> 