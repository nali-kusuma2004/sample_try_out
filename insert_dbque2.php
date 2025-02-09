<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=1';
$res=mysqli_query($conn,$sql);
global $xi1;

if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x="{$row['question']}";$x1_1="{$row['option_1']}";$x1_2="{$row['option_2']}";
$x1_3="{$row['option_3']}";$x1_4="{$row['option_4']}";
}
}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans1="{$row['answer']}";

}
}
?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=2';
$res=mysqli_query($conn,$sql);
global $xi2;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi2="{$row['ques_id']}";
$x2="{$row['question']}";$x2_1="{$row['option_1']}";$x2_2="{$row['option_2']}";
$x2_3="{$row['option_3']}";$x2_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi2'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans2="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=3';
$res=mysqli_query($conn,$sql);
global $xi3;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi3="{$row['ques_id']}";
$x3="{$row['question']}";$x3_1="{$row['option_1']}";$x3_2="{$row['option_2']}";
$x3_3="{$row['option_3']}";$x3_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi3'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans3="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=4';
$res=mysqli_query($conn,$sql);
global $xi4;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi4="{$row['ques_id']}";
$x4="{$row['question']}";$x4_1="{$row['option_1']}";$x4_2="{$row['option_2']}";
$x4_3="{$row['option_3']}";$x4_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi4'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans4="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=5';
$res=mysqli_query($conn,$sql);
global $xi5;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi5="{$row['ques_id']}";
$x5="{$row['question']}";$x5_1="{$row['option_1']}";$x5_2="{$row['option_2']}";
$x5_3="{$row['option_3']}";$x5_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi5'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans5="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=6';
$res=mysqli_query($conn,$sql);
global $xi6;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi6="{$row['ques_id']}";
$x6="{$row['question']}";$x6_1="{$row['option_1']}";$x6_2="{$row['option_2']}";
$x6_3="{$row['option_3']}";$x6_4="{$row['option_4']}";
}
}
$sql1="select * from answers_maths where option_id='$xi6'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans6="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=7';
$res=mysqli_query($conn,$sql);
global $xi7;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi7="{$row['ques_id']}";
$x7="{$row['question']}";$x7_1="{$row['option_1']}";$x7_2="{$row['option_2']}";
$x7_3="{$row['option_3']}";$x7_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi7'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans7="{$row['answer']}";
}
}?> <?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=8';
$res=mysqli_query($conn,$sql);
global $xi8;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi8="{$row['ques_id']}";
$x8="{$row['question']}";$x8_1="{$row['option_1']}";$x8_2="{$row['option_2']}";
$x8_3="{$row['option_3']}";$x8_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans8="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=9';
$res=mysqli_query($conn,$sql);
global $xi9;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi9="{$row['ques_id']}";
$x9="{$row['question']}";$x9_1="{$row['option_1']}";$x9_2="{$row['option_2']}";
$x9_3="{$row['option_3']}";$x9_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi9'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans9="{$row['answer']}";
}
}
?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=10';
$res=mysqli_query($conn,$sql);
global $xi10;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi10="{$row['ques_id']}";
$x10="{$row['question']}";$x10_1="{$row['option_1']}";$x10_2="{$row['option_2']}";
$x10_3="{$row['option_3']}";$x10_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi10'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans10="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=11';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x11="{$row['question']}";$x11_1="{$row['option_1']}";$x11_2="{$row['option_2']}";
$x11_3="{$row['option_3']}";$x11_4="{$row['option_4']}";
}
}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans11="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=12';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x12="{$row['question']}";$x12_1="{$row['option_1']}";$x12_2="{$row['option_2']}";
$x12_3="{$row['option_3']}";$x12_4="{$row['option_4']}";
}

}$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans12="{$row['answer']}";
}
}
?> 
<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=13';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x13="{$row['question']}";$x13_1="{$row['option_1']}";$x13_2="{$row['option_2']}";
$x13_3="{$row['option_3']}";$x13_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans13="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=14';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x14="{$row['question']}";$x14_1="{$row['option_1']}";$x14_2="{$row['option_2']}";
$x14_3="{$row['option_3']}";$x14_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans14="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=15';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x15="{$row['question']}";$x15_1="{$row['option_1']}";$x15_2="{$row['option_2']}";
$x15_3="{$row['option_3']}";$x15_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans15="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=16';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x16="{$row['question']}";$x16_1="{$row['option_1']}";$x16_2="{$row['option_2']}";
$x16_3="{$row['option_3']}";$x16_4="{$row['option_4']}";
}
}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans16="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=17';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x17="{$row['question']}";$x17_1="{$row['option_1']}";$x17_2="{$row['option_2']}";
$x17_3="{$row['option_3']}";$x17_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans17="{$row['answer']}";
}
}?> <?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=18';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x18="{$row['question']}";$x18_1="{$row['option_1']}";$x18_2="{$row['option_2']}";
$x18_3="{$row['option_3']}";$x18_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans18="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=19';
$res=mysqli_query($conn,$sql);
global $xi1;         
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x19="{$row['question']}";$x19_1="{$row['option_1']}";$x19_2="{$row['option_2']}";
$x19_3="{$row['option_3']}";$x19_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{

$x_ans19="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=20';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x20="{$row['question']}";$x20_1="{$row['option_1']}";$x20_2="{$row['option_2']}";
$x20_3="{$row['option_3']}";$x20_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans20="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=21';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x21="{$row['question']}";$x21_1="{$row['option_1']}";$x21_2="{$row['option_2']}";
$x21_3="{$row['option_3']}";$x21_4="{$row['option_4']}";
}
}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans21="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=22';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x22="{$row['question']}";$x22_1="{$row['option_1']}";$x22_2="{$row['option_2']}";
$x22_3="{$row['option_3']}";$x22_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans22="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=23';
$res=mysqli_query($conn,$sql);
global $xi1 ;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x23="{$row['question']}";$x23_1="{$row['option_1']}";$x23_2="{$row['option_2']}";
$x23_3="{$row['option_3']}";$x23_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans23="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=24';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x24="{$row['question']}";$x24_1="{$row['option_1']}";$x24_2="{$row['option_2']}";
$x24_3="{$row['option_3']}";$x24_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans24="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=25';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x25="{$row['question']}";$x25_1="{$row['option_1']}";$x25_2="{$row['option_2']}";
$x25_3="{$row['option_3']}";$x25_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans25="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=26';
$res=mysqli_query($conn,$sql);
global $xi1 ;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x26="{$row['question']}";$x26_1="{$row['option_1']}";$x26_2="{$row['option_2']}";
$x26_3="{$row['option_3']}";$x26_4="{$row['option_4']}";
}
}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans26="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=27';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x27="{$row['question']}";$x27_1="{$row['option_1']}";$x27_2="{$row['option_2']}";
$x27_3="{$row['option_3']}";$x27_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans27="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=28';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x28="{$row['question']}";$x28_1="{$row['option_1']}";$x28_2="{$row['option_2']}";
$x28_3="{$row['option_3']}";$x28_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans28="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=29';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x29="{$row['question']}";$x29_1="{$row['option_1']}";$x29_2="{$row['option_2']}";
$x29_3="{$row['option_3']}";$x29_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans29="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=30';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x30="{$row['question']}";$x30_1="{$row['option_1']}";$x30_2="{$row['option_2']}";
$x30_3="{$row['option_3']}";$x30_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans30="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=31';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x31="{$row['question']}";$x31_1="{$row['option_1']}";$x31_2="{$row['option_2']}";
$x31_3="{$row['option_3']}";$x31_4="{$row['option_4']}";
}
}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans31="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=32';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x32="{$row['question']}";$x32_1="{$row['option_1']}";$x32_2="{$row['option_2']}";
$x32_3="{$row['option_3']}";$x32_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans32="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=33';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x33="{$row['question']}";$x33_1="{$row['option_1']}";$x33_2="{$row['option_2']}";
$x33_3="{$row['option_3']}";$x33_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans33="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=34';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x34="{$row['question']}";$x34_1="{$row['option_1']}";$x34_2="{$row['option_2']}";
$x34_3="{$row['option_3']}";$x34_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans34="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=35';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x35="{$row['question']}";$x35_1="{$row['option_1']}";$x35_2="{$row['option_2']}";
$x35_3="{$row['option_3']}";$x35_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans35="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=36';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x36="{$row['question']}";$x36_1="{$row['option_1']}";$x36_2="{$row['option_2']}";
$x36_3="{$row['option_3']}";$x36_4="{$row['option_4']}";
}
}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans36="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=37';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x37="{$row['question']}";$x37_1="{$row['option_1']}";$x37_2="{$row['option_2']}";
$x37_3="{$row['option_3']}";$x37_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans37="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=38';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x38="{$row['question']}";$x38_1="{$row['option_1']}";$x38_2="{$row['option_2']}";
$x38_3="{$row['option_3']}";$x38_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans38="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=39';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x39="{$row['question']}";$x39_1="{$row['option_1']}";$x39_2="{$row['option_2']}";
$x39_3="{$row['option_3']}";$x39_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans39="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=40';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x40="{$row['question']}";$x40_1="{$row['option_1']}";$x40_2="{$row['option_2']}";
$x40_3="{$row['option_3']}";$x40_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans40="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=41';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x41="{$row['question']}";$x41_1="{$row['option_1']}";$x41_2="{$row['option_2']}";
$x41_3="{$row['option_3']}";$x41_4="{$row['option_4']}";
}
}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans41="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=42';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x42="{$row['question']}";$x42_1="{$row['option_1']}";$x42_2="{$row['option_2']}";
$x42_3="{$row['option_3']}";$x42_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans42="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=43';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x43="{$row['question']}";$x43_1="{$row['option_1']}";$x43_2="{$row['option_2']}";
$x43_3="{$row['option_3']}";$x43_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans43="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=44';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x44="{$row['question']}";$x44_1="{$row['option_1']}";$x44_2="{$row['option_2']}";
$x44_3="{$row['option_3']}";$x44_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans44="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=45';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x45="{$row['question']}";$x45_1="{$row['option_1']}";$x45_2="{$row['option_2']}";
$x45_3="{$row['option_3']}";$x45_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans45="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=6';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x46="{$row['question']}";$x46_1="{$row['option_1']}";$x46_2="{$row['option_2']}";
$x46_3="{$row['option_3']}";$x46_4="{$row['option_4']}";
}
}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans46="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=47';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x47="{$row['question']}";$x47_1="{$row['option_1']}";$x47_2="{$row['option_2']}";
$x47_3="{$row['option_3']}";$x47_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans47="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=48';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x48="{$row['question']}";$x48_1="{$row['option_1']}";$x48_2="{$row['option_2']}";
$x48_3="{$row['option_3']}";$x48_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans48="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=49';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x49="{$row['question']}";$x49_1="{$row['option_1']}";$x49_2="{$row['option_2']}";
$x49_3="{$row['option_3']}";$x49_4="{$row['option_4']}";
}

}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans49="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_maths where ques_id=50';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x50="{$row['question']}";$x50_1="{$row['option_1']}";$x50_2="{$row['option_2']}";
$x50_3="{$row['option_3']}";$x50_4="{$row['option_4']}";
}
}
$sql1="select * from answers_maths where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans50="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=112';
$res=mysqli_query($conn,$sql);
global $ai2;

if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$ai2="{$row['ques_id']}";
$x51="{$row['question']}";$x51_1="{$row['option_1']}";$x51_2="{$row['option_2']}";
$x51_3="{$row['option_3']}";$x51_4="{$row['option_4']}";
}
}
$sql1="select * from answers_physics where option_id='$ai2'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans51="{$row['option_answers']}";
}
}
?> 

<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=3';
$res=mysqli_query($conn,$sql);
global $ai4;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$ai4="{$row['ques_id']}";
$x52="{$row['question']}";$x52_1="{$row['option_1']}";$x52_2="{$row['option_2']}";
$x52_3="{$row['option_3']}";$x52_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$ai4'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans52="{$row['option_answers']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=5';
$res=mysqli_query($conn,$sql);
global $ai6;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$ai6="{$row['ques_id']}";
$x53="{$row['question']}";$x53_1="{$row['option_1']}";$x53_2="{$row['option_2']}";
$x53_3="{$row['option_3']}";$x53_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$ai6'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans53="{$row['option_answers']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=7';
$res=mysqli_query($conn,$sql);
global $ai8;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$ai8="{$row['ques_id']}";
$x54="{$row['question']}";$x54_1="{$row['option_1']}";$x54_2="{$row['option_2']}";
$x54_3="{$row['option_3']}";$x54_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$ai8'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans54="{$row['option_answers']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=11';
$res=mysqli_query($conn,$sql);
global $ai10;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$ai10="{$row['ques_id']}";
$x55="{$row['question']}";$x55_1="{$row['option_1']}";$x55_2="{$row['option_2']}";
$x55_3="{$row['option_3']}";$x55_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$ai10'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans55="{$row['option_answers']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=13';
$res=mysqli_query($conn,$sql);
global $ai12;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$ai12="{$row['ques_id']}";
$x56="{$row['question']}";$x56_1="{$row['option_1']}";$x56_2="{$row['option_2']}";
$x56_3="{$row['option_3']}";$x56_4="{$row['option_4']}";
}
}
$sql1="select * from answers_physics where option_id='$ai12'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans56="{$row['option_answers']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=17';
$res=mysqli_query($conn,$sql);
global $ai14;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$ai14="{$row['ques_id']}";
$x57="{$row['question']}";$x57_1="{$row['option_1']}";$x57_2="{$row['option_2']}";
$x57_3="{$row['option_3']}";$x57_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$ai14'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans57="{$row['option_answers']}";
}
}?> <?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=19';
$res=mysqli_query($conn,$sql);
global $ai16;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$ai16="{$row['ques_id']}";
$x58="{$row['question']}";$x58_1="{$row['option_1']}";$x58_2="{$row['option_2']}";
$x58_3="{$row['option_3']}";$x58_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$ai16'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans58="{$row['option_answers']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=23';
$res=mysqli_query($conn,$sql);
global $ai18;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$ai18="{$row['ques_id']}";
$x59="{$row['question']}";$x59_1="{$row['option_1']}";$x59_2="{$row['option_2']}";
$x59_3="{$row['option_3']}";$x59_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$ai18'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans59="{$row['option_answers']}";
}
}
?> 

<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=27';
$res=mysqli_query($conn,$sql);
global $ai20;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$ai20="{$row['ques_id']}";
$x60="{$row['question']}";$x60_1="{$row['option_1']}";$x60_2="{$row['option_2']}";
$x60_3="{$row['option_3']}";$x60_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$ai20'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans60="{$row['option_answers']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=29';
$res=mysqli_query($conn,$sql);
global $ai22;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$ai22="{$row['ques_id']}";
$x61="{$row['question']}";$x61_1="{$row['option_1']}";$x61_2="{$row['option_2']}";
$x61_3="{$row['option_3']}";$x61_4="{$row['option_4']}";
}
}
$sql1="select * from answers_physics where option_id='$ai22'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans61="{$row['option_answers']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=33';
$res=mysqli_query($conn,$sql);
global $ai24;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$ai24="{$row['ques_id']}";
$x62="{$row['question']}";$x62_1="{$row['option_1']}";$x62_2="{$row['option_2']}";
$x62_3="{$row['option_3']}";$x62_4="{$row['option_4']}";
}

}$sql1="select * from answers_physics where option_id='$ai24'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans62="{$row['option_answers']}";
}
}
?> 
<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=35';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x63="{$row['question']}";$x63_1="{$row['option_1']}";$x63_2="{$row['option_2']}";
$x63_3="{$row['option_3']}";$x63_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans63="{$row['option_answers']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=37';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x64="{$row['question']}";$x64_1="{$row['option_1']}";$x64_2="{$row['option_2']}";
$x64_3="{$row['option_3']}";$x64_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans64="{$row['option_answers']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=39';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x65="{$row['question']}";$x65_1="{$row['option_1']}";$x65_2="{$row['option_2']}";
$x65_3="{$row['option_3']}";$x65_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans65="{$row['option_answers']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=43';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x66="{$row['question']}";$x66_1="{$row['option_1']}";$x66_2="{$row['option_2']}";
$x66_3="{$row['option_3']}";$x66_4="{$row['option_4']}";
}
}
$sql1="select * from answers_physics where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans66="{$row['option_answers']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=45';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x67="{$row['question']}";$x67_1="{$row['option_1']}";$x67_2="{$row['option_2']}";
$x67_3="{$row['option_3']}";$x67_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans67="{$row['option_answers']}";
}
}?> <?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=49';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x68="{$row['question']}";$x68_1="{$row['option_1']}";$x68_2="{$row['option_2']}";
$x68_3="{$row['option_3']}";$x68_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans68="{$row['option_answers']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=53';
$res=mysqli_query($conn,$sql);
global $xi1;         
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x69="{$row['question']}";$x69_1="{$row['option_1']}";$x69_2="{$row['option_2']}";
$x69_3="{$row['option_3']}";$x69_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{

$x_ans69="{$row['option_answers']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=55';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x70="{$row['question']}";$x70_1="{$row['option_1']}";$x70_2="{$row['option_2']}";
$x70_3="{$row['option_3']}";$x70_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans70="{$row['option_answers']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=57';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x71="{$row['question']}";$x71_1="{$row['option_1']}";$x71_2="{$row['option_2']}";
$x71_3="{$row['option_3']}";$x71_4="{$row['option_4']}";
}
}
$sql1="select * from answers_physics where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans71="{$row['option_answers']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=59';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x72="{$row['question']}";$x72_1="{$row['option_1']}";$x72_2="{$row['option_2']}";
$x72_3="{$row['option_3']}";$x72_4="{$row['option_4']}";

}

}
$sql1="select * from answers_physics where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans72="{$row['option_answers']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=63';
$res=mysqli_query($conn,$sql);
global $xi1 ;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x73="{$row['question']}";$x73_1="{$row['option_1']}";$x73_2="{$row['option_2']}";
$x73_3="{$row['option_3']}";$x73_4="{$row['option_4']}";

}

}
$sql1="select * from answers_physics where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans73="{$row['option_answers']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=67';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x74="{$row['question']}";$x74_1="{$row['option_1']}";$x74_2="{$row['option_2']}";
$x74_3="{$row['option_3']}";$x74_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans74="{$row['option_answers']}";

}
}?> 






<?php 
include 'conn.php';
$sql='select * from question_physics where ques_id=69';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x75="{$row['question']}";$x75_1="{$row['option_1']}";$x75_2="{$row['option_2']}";
$x75_3="{$row['option_3']}";$x75_4="{$row['option_4']}";
}

}
$sql1="select * from answers_physics where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans75="{$row['option_answers']}";

}
}?> 






