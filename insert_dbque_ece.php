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
$sql='select * from question_physics where ques_id=1';
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
<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=1';
$res=mysqli_query($conn,$sql);
global $xi1;

if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x76="{$row['question']}";$x76_1="{$row['option_1']}";$x76_2="{$row['option_2']}";
$x76_3="{$row['option_3']}";$x76_4="{$row['option_4']}";
}
}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans76="{$row['answer']}";

}
}
?> 

<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=5';
$res=mysqli_query($conn,$sql);
global $xi2;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi2="{$row['ques_id']}";
$x77="{$row['question']}";$x77_1="{$row['option_1']}";$x77_2="{$row['option_2']}";
$x77_3="{$row['option_3']}";$x77_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi2'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans77="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=6';
$res=mysqli_query($conn,$sql);
global $xi3;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi3="{$row['ques_id']}";
$x78="{$row['question']}";$x78_1="{$row['option_1']}";$x78_2="{$row['option_2']}";
$x78_3="{$row['option_3']}";$x78_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi3'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans78="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=8';
$res=mysqli_query($conn,$sql);
global $xi4;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi4="{$row['ques_id']}";
$x79="{$row['question']}";$x79_1="{$row['option_1']}";$x79_2="{$row['option_2']}";
$x79_3="{$row['option_3']}";$x79_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi4'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans79="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=26';
$res=mysqli_query($conn,$sql);
global $xi5;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi5="{$row['ques_id']}";
$x80="{$row['question']}";$x80_1="{$row['option_1']}";$x80_2="{$row['option_2']}";
$x80_3="{$row['option_3']}";$x80_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi5'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans80="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=6';
$res=mysqli_query($conn,$sql);
global $xi6;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi6="{$row['ques_id']}";
$x81="{$row['question']}";$x81_1="{$row['option_1']}";$x81_2="{$row['option_2']}";
$x81_3="{$row['option_3']}";$x81_4="{$row['option_4']}";
}
}
$sql1="select * from answers_chemistry where option_id='$xi6'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans81="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=7';
$res=mysqli_query($conn,$sql);
global $xi7;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi7="{$row['ques_id']}";
$x82="{$row['question']}";$x82_1="{$row['option_1']}";$x82_2="{$row['option_2']}";
$x82_3="{$row['option_3']}";$x82_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi7'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans82="{$row['answer']}";
}
}?> <?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=27';
$res=mysqli_query($conn,$sql);
global $xi8;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi8="{$row['ques_id']}";
$x83="{$row['question']}";$x83_1="{$row['option_1']}";$x83_2="{$row['option_2']}";
$x83_3="{$row['option_3']}";$x83_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans83="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=9';
$res=mysqli_query($conn,$sql);
global $xi9;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi9="{$row['ques_id']}";
$x84="{$row['question']}";$x84_1="{$row['option_1']}";$x84_2="{$row['option_2']}";
$x84_3="{$row['option_3']}";$x84_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi9'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans84="{$row['answer']}";
}
}
?> 

<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=10';
$res=mysqli_query($conn,$sql);
global $xi10;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi10="{$row['ques_id']}";
$x85="{$row['question']}";$x85_1="{$row['option_1']}";$x85_2="{$row['option_2']}";
$x85_3="{$row['option_3']}";$x85_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi10'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans85="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=11';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x86="{$row['question']}";$x86_1="{$row['option_1']}";$x86_2="{$row['option_2']}";
$x86_3="{$row['option_3']}";$x86_4="{$row['option_4']}";
}
}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans86="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=12';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x87="{$row['question']}";$x87_1="{$row['option_1']}";$x87_2="{$row['option_2']}";
$x87_3="{$row['option_3']}";$x87_4="{$row['option_4']}";
}

}$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans87="{$row['answer']}";
}
}
?> 
<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=13';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x88="{$row['question']}";$x88_1="{$row['option_1']}";$x88_2="{$row['option_2']}";
$x88_3="{$row['option_3']}";$x88_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans88="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=14';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x89="{$row['question']}";$x89_1="{$row['option_1']}";$x89_2="{$row['option_2']}";
$x89_3="{$row['option_3']}";$x89_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans89="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=15';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x90="{$row['question']}";$x90_1="{$row['option_1']}";$x90_2="{$row['option_2']}";
$x90_3="{$row['option_3']}";$x90_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans90="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=35';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x91="{$row['question']}";$x91_1="{$row['option_1']}";$x91_2="{$row['option_2']}";
$x91_3="{$row['option_3']}";$x91_4="{$row['option_4']}";
}
}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans91="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=36';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x92="{$row['question']}";$x92_1="{$row['option_1']}";$x92_2="{$row['option_2']}";
$x92_3="{$row['option_3']}";$x92_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans92="{$row['answer']}";
}
}?> <?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=18';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x93="{$row['question']}";$x93_1="{$row['option_1']}";$x93_2="{$row['option_2']}";
$x93_3="{$row['option_3']}";$x93_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans93="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=19';
$res=mysqli_query($conn,$sql);
global $xi1;         
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x94="{$row['question']}";$x94_1="{$row['option_1']}";$x94_2="{$row['option_2']}";
$x94_3="{$row['option_3']}";$x94_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{

$x_ans94="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=20';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x95="{$row['question']}";$x95_1="{$row['option_1']}";$x95_2="{$row['option_2']}";
$x95_3="{$row['option_3']}";$x95_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans95="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=21';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x96="{$row['question']}";$x96_1="{$row['option_1']}";$x96_2="{$row['option_2']}";
$x96_3="{$row['option_3']}";$x96_4="{$row['option_4']}";
}
}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans96="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=22';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x97="{$row['question']}";$x97_1="{$row['option_1']}";$x97_2="{$row['option_2']}";
$x97_3="{$row['option_3']}";$x97_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans97="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=23';
$res=mysqli_query($conn,$sql);
global $xi1 ;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x98="{$row['question']}";$x98_1="{$row['option_1']}";$x98_2="{$row['option_2']}";
$x98_3="{$row['option_3']}";$x98_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans98="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=24';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x99="{$row['question']}";$x99_1="{$row['option_1']}";$x99_2="{$row['option_2']}";
$x99_3="{$row['option_3']}";$x99_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans99="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_chemistry where ques_id=25';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x100="{$row['question']}";$x100_1="{$row['option_1']}";$x100_2="{$row['option_2']}";
$x100_3="{$row['option_3']}";$x100_4="{$row['option_4']}";
}

}
$sql1="select * from answers_chemistry where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans100="{$row['answer']}";

}
}?> 



<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=2';
$res=mysqli_query($conn,$sql);
global $xi1;

if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x101="{$row['question']}";$x101_1="{$row['option_1']}";$x101_2="{$row['option_2']}";
$x101_3="{$row['option_3']}";$x101_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans101="{$row['answer']}";

}
}
?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=4';
$res=mysqli_query($conn,$sql);
global $xi2;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi2="{$row['ques_id']}";
$x102="{$row['question']}";$x102_1="{$row['option_1']}";$x102_2="{$row['option_2']}";
$x102_3="{$row['option_3']}";$x102_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi2'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans102="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=5';
$res=mysqli_query($conn,$sql);
global $xi3;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi3="{$row['ques_id']}";
$x103="{$row['question']}";$x103_1="{$row['option_1']}";$x103_2="{$row['option_2']}";
$x103_3="{$row['option_3']}";$x103_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi3'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans103="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=8';
$res=mysqli_query($conn,$sql);
global $xi4;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi4="{$row['ques_id']}";
$x104="{$row['question']}";$x104_1="{$row['option_1']}";$x104_2="{$row['option_2']}";
$x104_3="{$row['option_3']}";$x104_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi4'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans104="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=10';
$res=mysqli_query($conn,$sql);
global $xi5;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi5="{$row['ques_id']}";
$x105="{$row['question']}";$x105_1="{$row['option_1']}";$x105_2="{$row['option_2']}";
$x105_3="{$row['option_3']}";$x105_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi5'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans105="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=12';
$res=mysqli_query($conn,$sql);
global $xi6;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi6="{$row['ques_id']}";
$x106="{$row['question']}";$x106_1="{$row['option_1']}";$x106_2="{$row['option_2']}";
$x106_3="{$row['option_3']}";$x106_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi6'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans106="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=13';
$res=mysqli_query($conn,$sql);
global $xi7;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi7="{$row['ques_id']}";
$x107="{$row['question']}";$x107_1="{$row['option_1']}";$x107_2="{$row['option_2']}";
$x107_3="{$row['option_3']}";$x107_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi7'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans107="{$row['answer']}";
}
}?> <?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=17';
$res=mysqli_query($conn,$sql);
global $xi8;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi8="{$row['ques_id']}";
$x108="{$row['question']}";$x108_1="{$row['option_1']}";$x108_2="{$row['option_2']}";
$x108_3="{$row['option_3']}";$x108_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans108="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=18';
$res=mysqli_query($conn,$sql);
global $xi9;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi9="{$row['ques_id']}";
$x109="{$row['question']}";$x109_1="{$row['option_1']}";$x109_2="{$row['option_2']}";
$x109_3="{$row['option_3']}";$x109_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi9'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans109="{$row['answer']}";
}
}
?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=20';
$res=mysqli_query($conn,$sql);
global $xi10;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi10="{$row['ques_id']}";
$x110="{$row['question']}";$x110_1="{$row['option_1']}";$x110_2="{$row['option_2']}";
$x110_3="{$row['option_3']}";$x110_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi10'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans110="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=21';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x111="{$row['question']}";$x111_1="{$row['option_1']}";$x111_2="{$row['option_2']}";
$x111_3="{$row['option_3']}";$x111_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans111="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=23';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x112="{$row['question']}";$x112_1="{$row['option_1']}";$x112_2="{$row['option_2']}";
$x112_3="{$row['option_3']}";$x112_4="{$row['option_4']}";
}

}$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans112="{$row['answer']}";
}
}
?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=19';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x113="{$row['question']}";$x113_1="{$row['option_1']}";$x113_2="{$row['option_2']}";
$x113_3="{$row['option_3']}";$x113_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans113="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=20';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x114="{$row['question']}";$x114_1="{$row['option_1']}";$x114_2="{$row['option_2']}";
$x114_3="{$row['option_3']}";$x114_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans114="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=15';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x115="{$row['question']}";$x115_1="{$row['option_1']}";$x115_2="{$row['option_2']}";
$x115_3="{$row['option_3']}";$x115_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans115="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=33';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x116="{$row['question']}";$x116_1="{$row['option_1']}";$x116_2="{$row['option_2']}";
$x116_3="{$row['option_3']}";$x116_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans116="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=37';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x117="{$row['question']}";$x117_1="{$row['option_1']}";$x117_2="{$row['option_2']}";
$x117_3="{$row['option_3']}";$x117_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans117="{$row['answer']}";
}
}?> <?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=38';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x118="{$row['question']}";$x118_1="{$row['option_1']}";$x118_2="{$row['option_2']}";
$x118_3="{$row['option_3']}";$x118_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans118="{$row['answer']}";}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=39';
$res=mysqli_query($conn,$sql);
global $xi1;         
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x119="{$row['question']}";$x119_1="{$row['option_1']}";$x119_2="{$row['option_2']}";
$x119_3="{$row['option_3']}";$x119_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{

$x_ans119="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=40';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x120="{$row['question']}";$x120_1="{$row['option_1']}";$x120_2="{$row['option_2']}";
$x120_3="{$row['option_3']}";$x120_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans120="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=37';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x121="{$row['question']}";$x121_1="{$row['option_1']}";$x121_2="{$row['option_2']}";
$x121_3="{$row['option_3']}";$x121_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans121="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=43';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x122="{$row['question']}";$x122_1="{$row['option_1']}";$x122_2="{$row['option_2']}";
$x122_3="{$row['option_3']}";$x122_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans122="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=45';
$res=mysqli_query($conn,$sql);
global $xi1 ;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x123="{$row['question']}";$x123_1="{$row['option_1']}";$x123_2="{$row['option_2']}";
$x123_3="{$row['option_3']}";$x123_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans123="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=49';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x124="{$row['question']}";$x124_1="{$row['option_1']}";$x124_2="{$row['option_2']}";
$x124_3="{$row['option_3']}";$x124_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans124="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=50';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x125="{$row['question']}";$x125_1="{$row['option_1']}";$x125_2="{$row['option_2']}";
$x125_3="{$row['option_3']}";$x125_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans125="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=52';
$res=mysqli_query($conn,$sql);
global $xi1 ;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x126="{$row['question']}";$x126_1="{$row['option_1']}";$x126_2="{$row['option_2']}";
$x126_3="{$row['option_3']}";$x126_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans126="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=55';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x127="{$row['question']}";$x127_1="{$row['option_1']}";$x127_2="{$row['option_2']}";
$x127_3="{$row['option_3']}";$x127_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans127="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=56';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x128="{$row['question']}";$x128_1="{$row['option_1']}";$x128_2="{$row['option_2']}";
$x128_3="{$row['option_3']}";$x128_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans128="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=58';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x129="{$row['question']}";$x129_1="{$row['option_1']}";$x129_2="{$row['option_2']}";
$x129_3="{$row['option_3']}";$x129_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans129="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=58';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x130="{$row['question']}";$x130_1="{$row['option_1']}";$x130_2="{$row['option_2']}";
$x130_3="{$row['option_3']}";$x130_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans130="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=64';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x131="{$row['question']}";$x131_1="{$row['option_1']}";$x131_2="{$row['option_2']}";
$x131_3="{$row['option_3']}";$x131_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans131="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=65';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x132="{$row['question']}";$x132_1="{$row['option_1']}";$x132_2="{$row['option_2']}";
$x132_3="{$row['option_3']}";$x132_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans132="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=66';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x133="{$row['question']}";$x133_1="{$row['option_1']}";$x133_2="{$row['option_2']}";
$x133_3="{$row['option_3']}";$x133_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans133="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=67';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x134="{$row['question']}";$x134_1="{$row['option_1']}";$x134_2="{$row['option_2']}";
$x134_3="{$row['option_3']}";$x134_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans134="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=70';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x135="{$row['question']}";$x135_1="{$row['option_1']}";$x135_2="{$row['option_2']}";
$x135_3="{$row['option_3']}";$x135_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans135="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=71';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x136="{$row['question']}";$x136_1="{$row['option_1']}";$x136_2="{$row['option_2']}";
$x136_3="{$row['option_3']}";$x136_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans136="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=74';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x137="{$row['question']}";$x137_1="{$row['option_1']}";$x137_2="{$row['option_2']}";
$x137_3="{$row['option_3']}";$x137_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans137="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=76';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x138="{$row['question']}";$x138_1="{$row['option_1']}";$x138_2="{$row['option_2']}";
$x138_3="{$row['option_3']}";$x138_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans138="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=78';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x139="{$row['question']}";$x139_1="{$row['option_1']}";$x139_2="{$row['option_2']}";
$x139_3="{$row['option_3']}";$x139_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans139="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=80';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x140="{$row['question']}";$x140_1="{$row['option_1']}";$x140_2="{$row['option_2']}";
$x140_3="{$row['option_3']}";$x140_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans140="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=81';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x141="{$row['question']}";$x141_1="{$row['option_1']}";$x141_2="{$row['option_2']}";
$x141_3="{$row['option_3']}";$x141_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans141="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=84';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x142="{$row['question']}";$x142_1="{$row['option_1']}";$x142_2="{$row['option_2']}";
$x142_3="{$row['option_3']}";$x142_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans142="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=86';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x143="{$row['question']}";$x143_1="{$row['option_1']}";$x143_2="{$row['option_2']}";
$x143_3="{$row['option_3']}";$x143_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans143="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=87';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x144="{$row['question']}";$x144_1="{$row['option_1']}";$x144_2="{$row['option_2']}";
$x144_3="{$row['option_3']}";$x144_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans144="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=90';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x145="{$row['question']}";$x145_1="{$row['option_1']}";$x145_2="{$row['option_2']}";
$x145_3="{$row['option_3']}";$x145_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans145="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=92';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x146="{$row['question']}";$x146_1="{$row['option_1']}";$x146_2="{$row['option_2']}";
$x146_3="{$row['option_3']}";$x146_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans146="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=94';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x147="{$row['question']}";$x147_1="{$row['option_1']}";$x147_2="{$row['option_2']}";
$x147_3="{$row['option_3']}";$x147_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans147="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=93';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x148="{$row['question']}";$x148_1="{$row['option_1']}";$x148_2="{$row['option_2']}";
$x148_3="{$row['option_3']}";$x148_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans148="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=99';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x149="{$row['question']}";$x149_1="{$row['option_1']}";$x149_2="{$row['option_2']}";
$x149_3="{$row['option_3']}";$x149_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans149="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=86';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x150="{$row['question']}";$x150_1="{$row['option_1']}";$x150_2="{$row['option_2']}";
$x150_3="{$row['option_3']}";$x150_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans150="{$row['answer']}";

}
}?>

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=102';
$res=mysqli_query($conn,$sql);
global $ai2;

if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$ai2="{$row['ques_id']}";
$x151="{$row['question']}";$x151_1="{$row['option_1']}";$x151_2="{$row['option_2']}";
$x151_3="{$row['option_3']}";$x151_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$ai2'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans151="{$row['answer']}";

}
}
?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=104';
$res=mysqli_query($conn,$sql);
global $ai4;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$ai4="{$row['ques_id']}";
$x152="{$row['question']}";$x152_1="{$row['option_1']}";$x152_2="{$row['option_2']}";
$x152_3="{$row['option_3']}";$x152_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$ai4'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans152="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=107';
$res=mysqli_query($conn,$sql);
global $ai6;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$ai6="{$row['ques_id']}";
$x153="{$row['question']}";$x153_1="{$row['option_1']}";$x153_2="{$row['option_2']}";
$x153_3="{$row['option_3']}";$x153_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$ai6'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans153="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=108';
$res=mysqli_query($conn,$sql);
global $ai8;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$ai8="{$row['ques_id']}";
$x154="{$row['question']}";$x154_1="{$row['option_1']}";$x154_2="{$row['option_2']}";
$x154_3="{$row['option_3']}";$x154_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$ai8'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans154="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=11';
$res=mysqli_query($conn,$sql);
global $ai10;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$ai10="{$row['ques_id']}";
$x155="{$row['question']}";$x155_1="{$row['option_1']}";$x155_2="{$row['option_2']}";
$x155_3="{$row['option_3']}";$x155_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$ai10'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans155="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=112';
$res=mysqli_query($conn,$sql);
global $ai12;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$ai12="{$row['ques_id']}";
$x156="{$row['question']}";$x156_1="{$row['option_1']}";$x156_2="{$row['option_2']}";
$x156_3="{$row['option_3']}";$x156_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$ai12'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans156="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=114';
$res=mysqli_query($conn,$sql);
global $ai14;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$ai14="{$row['ques_id']}";
$x157="{$row['question']}";$x157_1="{$row['option_1']}";$x157_2="{$row['option_2']}";
$x157_3="{$row['option_3']}";$x157_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$ai14'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans157="{$row['answer']}";
}
}?> <?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=21';
$res=mysqli_query($conn,$sql);
global $ai16;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$ai16="{$row['ques_id']}";
$x158="{$row['question']}";$x158_1="{$row['option_1']}";$x158_2="{$row['option_2']}";
$x158_3="{$row['option_3']}";$x158_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$ai16'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans158="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=118';
$res=mysqli_query($conn,$sql);
global $ai18;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$ai18="{$row['ques_id']}";
$x159="{$row['question']}";$x159_1="{$row['option_1']}";$x159_2="{$row['option_2']}";
$x159_3="{$row['option_3']}";$x159_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$ai18'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans159="{$row['answer']}";
}
}
?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=120';
$res=mysqli_query($conn,$sql);
global $ai20;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$ai20="{$row['ques_id']}";
$x160="{$row['question']}";$x160_1="{$row['option_1']}";$x160_2="{$row['option_2']}";
$x160_3="{$row['option_3']}";$x160_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$ai20'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans160="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=123';
$res=mysqli_query($conn,$sql);
global $ai22;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$ai22="{$row['ques_id']}";
$x161="{$row['question']}";$x161_1="{$row['option_1']}";$x161_2="{$row['option_2']}";
$x161_3="{$row['option_3']}";$x161_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$ai22'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans161="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=124';
$res=mysqli_query($conn,$sql);
global $ai24;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$ai24="{$row['ques_id']}";
$x162="{$row['question']}";$x162_1="{$row['option_1']}";$x162_2="{$row['option_2']}";
$x162_3="{$row['option_3']}";$x162_4="{$row['option_4']}";
}

}$sql1="select * from answers_ece where option_id='$ai24'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans162="{$row['answer']}";
}
}
?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=126';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x163="{$row['question']}";$x163_1="{$row['option_1']}";$x163_2="{$row['option_2']}";
$x163_3="{$row['option_3']}";$x163_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans163="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=128';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x164="{$row['question']}";$x164_1="{$row['option_1']}";$x164_2="{$row['option_2']}";
$x164_3="{$row['option_3']}";$x164_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans164="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=130';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x165="{$row['question']}";$x165_1="{$row['option_1']}";$x165_2="{$row['option_2']}";
$x165_3="{$row['option_3']}";$x165_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans165="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=132';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x166="{$row['question']}";$x166_1="{$row['option_1']}";$x166_2="{$row['option_2']}";
$x166_3="{$row['option_3']}";$x166_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans166="{$row['answer']}";}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=133';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x167="{$row['question']}";$x167_1="{$row['option_1']}";$x167_2="{$row['option_2']}";
$x167_3="{$row['option_3']}";$x167_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans167="{$row['answer']}";
}
}?> <?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=136';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x168="{$row['question']}";$x168_1="{$row['option_1']}";$x168_2="{$row['option_2']}";
$x168_3="{$row['option_3']}";$x168_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans168="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=139';
$res=mysqli_query($conn,$sql);
global $xi1;         
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x169="{$row['question']}";$x169_1="{$row['option_1']}";$x169_2="{$row['option_2']}";
$x169_3="{$row['option_3']}";$x169_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{

$x_ans169="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=143';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x170="{$row['question']}";$x170_1="{$row['option_1']}";$x170_2="{$row['option_2']}";
$x170_3="{$row['option_3']}";$x170_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans170="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=145';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x171="{$row['question']}";$x171_1="{$row['option_1']}";$x171_2="{$row['option_2']}";
$x171_3="{$row['option_3']}";$x171_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans171="{$row['answer']}";

}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=148';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x172="{$row['question']}";$x172_1="{$row['option_1']}";$x172_2="{$row['option_2']}";
$x172_3="{$row['option_3']}";$x172_4="{$row['option_4']}";

}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans172="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=149';
$res=mysqli_query($conn,$sql);
global $xi1 ;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x173="{$row['question']}";$x173_1="{$row['option_1']}";$x173_2="{$row['option_2']}";
$x173_3="{$row['option_3']}";$x173_4="{$row['option_4']}";

}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans173="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=150';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x174="{$row['question']}";$x174_1="{$row['option_1']}";$x174_2="{$row['option_2']}";
$x174_3="{$row['option_3']}";$x174_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans174="{$row['answer']}";

}
}?> 






<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=152';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x175="{$row['question']}";$x175_1="{$row['option_1']}";$x175_2="{$row['option_2']}";
$x175_3="{$row['option_3']}";$x175_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans175="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=153';
$res=mysqli_query($conn,$sql);
global $xi1;

if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x176="{$row['question']}";$x176_1="{$row['option_1']}";$x176_2="{$row['option_2']}";
$x176_3="{$row['option_3']}";$x176_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans176="{$row['answer']}";

}
}
?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=155';
$res=mysqli_query($conn,$sql);
global $xi2;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi2="{$row['ques_id']}";
$x177="{$row['question']}";$x177_1="{$row['option_1']}";$x177_2="{$row['option_2']}";
$x177_3="{$row['option_3']}";$x177_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi2'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans177="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=157';
$res=mysqli_query($conn,$sql);
global $xi3;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi3="{$row['ques_id']}";
$x178="{$row['question']}";$x178_1="{$row['option_1']}";$x178_2="{$row['option_2']}";
$x178_3="{$row['option_3']}";$x178_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi3'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans178="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=159';
$res=mysqli_query($conn,$sql);
global $xi4;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi4="{$row['ques_id']}";
$x179="{$row['question']}";$x179_1="{$row['option_1']}";$x179_2="{$row['option_2']}";
$x179_3="{$row['option_3']}";$x179_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi4'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans179="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=161';
$res=mysqli_query($conn,$sql);
global $xi5;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi5="{$row['ques_id']}";
$x180="{$row['question']}";$x180_1="{$row['option_1']}";$x180_2="{$row['option_2']}";
$x180_3="{$row['option_3']}";$x180_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi5'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans180="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=163';
$res=mysqli_query($conn,$sql);
global $xi6;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi6="{$row['ques_id']}";
$x181="{$row['question']}";$x181_1="{$row['option_1']}";$x181_2="{$row['option_2']}";
$x181_3="{$row['option_3']}";$x181_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi6'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans181="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=164';
$res=mysqli_query($conn,$sql);
global $xi7;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi7="{$row['ques_id']}";
$x182="{$row['question']}";$x182_1="{$row['option_1']}";$x182_2="{$row['option_2']}";
$x182_3="{$row['option_3']}";$x182_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi7'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans182="{$row['answer']}";
}
}?> <?php 
include 'conn.php';
$sql='select * from question_ece where ques_id="167"';
$res=mysqli_query($conn,$sql);
global $xi8;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi8="{$row['ques_id']}";
$x183="{$row['question']}";$x183_1="{$row['option_1']}";$x183_2="{$row['option_2']}";
$x183_3="{$row['option_3']}";$x183_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans183="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=168';
$res=mysqli_query($conn,$sql);
global $xi9;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi9="{$row['ques_id']}";
$x184="{$row['question']}";$x184_1="{$row['option_1']}";$x184_2="{$row['option_2']}";
$x184_3="{$row['option_3']}";$x184_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi9'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans184="{$row['answer']}";
}
}
?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=171';
$res=mysqli_query($conn,$sql);
global $xi10;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi10="{$row['ques_id']}";
$x185="{$row['question']}";$x185_1="{$row['option_1']}";$x185_2="{$row['option_2']}";
$x185_3="{$row['option_3']}";$x185_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi10'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans185="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=173';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x186="{$row['question']}";$x186_1="{$row['option_1']}";$x186_2="{$row['option_2']}";
$x186_3="{$row['option_3']}";$x186_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans186="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=174';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x187="{$row['question']}";$x187_1="{$row['option_1']}";$x187_2="{$row['option_2']}";
$x187_3="{$row['option_3']}";$x187_4="{$row['option_4']}";
}

}$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans187="{$row['answer']}";
}
}
?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=176';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x188="{$row['question']}";$x188_1="{$row['option_1']}";$x188_2="{$row['option_2']}";
$x188_3="{$row['option_3']}";$x188_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans188="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=178';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x189="{$row['question']}";$x189_1="{$row['option_1']}";$x189_2="{$row['option_2']}";
$x189_3="{$row['option_3']}";$x189_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans189="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=183';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x190="{$row['question']}";$x190_1="{$row['option_1']}";$x190_2="{$row['option_2']}";
$x190_3="{$row['option_3']}";$x190_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans190="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=184';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x191="{$row['question']}";$x191_1="{$row['option_1']}";$x191_2="{$row['option_2']}";
$x191_3="{$row['option_3']}";$x191_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans191="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=15';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x192="{$row['question']}";$x192_1="{$row['option_1']}";$x192_2="{$row['option_2']}";
$x192_3="{$row['option_3']}";$x192_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans192="{$row['answer']}";
}
}?> <?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=187';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x193="{$row['question']}";$x193_1="{$row['option_1']}";$x193_2="{$row['option_2']}";
$x193_3="{$row['option_3']}";$x193_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans193="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=189';
$res=mysqli_query($conn,$sql);
global $xi1;         
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x194="{$row['question']}";$x194_1="{$row['option_1']}";$x194_2="{$row['option_2']}";
$x194_3="{$row['option_3']}";$x194_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{

$x_ans194="{$row['answer']}";
}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=190';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{
$xi1="{$row['ques_id']}";
$x195="{$row['question']}";$x195_1="{$row['option_1']}";$x195_2="{$row['option_2']}";
$x195_3="{$row['option_3']}";$x195_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans195="{$row['answer']}";
}
}?> 
<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=191';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x196="{$row['question']}";$x196_1="{$row['option_1']}";$x196_2="{$row['option_2']}";
$x196_3="{$row['option_3']}";$x196_4="{$row['option_4']}";
}
}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans196="{$row['answer']}";

}
}?> 
<?php
include 'conn.php';
$sql='select * from question_ece where ques_id=193';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x197="{$row['question']}";$x197_1="{$row['option_1']}";$x197_2="{$row['option_2']}";
$x197_3="{$row['option_3']}";$x197_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans197="{$row['answer']}";

}
}?> <?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=196';
$res=mysqli_query($conn,$sql);
global $xi1 ;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";$x198="{$row['question']}";$x198_1="{$row['option_1']}";$x198_2="{$row['option_2']}";
$x198_3="{$row['option_3']}";$x198_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans198="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=198';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x199="{$row['question']}";$x199_1="{$row['option_1']}";$x199_2="{$row['option_2']}";
$x199_3="{$row['option_3']}";$x199_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans199="{$row['answer']}";

}
}?> 

<?php 
include 'conn.php';
$sql='select * from question_ece where ques_id=199';
$res=mysqli_query($conn,$sql);
global $xi1;
if(mysqli_num_rows($res))
{
while($row=mysqli_fetch_assoc($res))
{$xi1="{$row['ques_id']}";
$x200="{$row['question']}";$x200_1="{$row['option_1']}";$x200_2="{$row['option_2']}";
$x200_3="{$row['option_3']}";$x200_4="{$row['option_4']}";
}

}
$sql1="select * from answers_ece where option_id='$xi1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1))
{
while($row=mysqli_fetch_assoc($res1))
{
$x_ans200="{$row['answer']}";

}
}?> 
















