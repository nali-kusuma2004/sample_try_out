<?php  include 'insert_dbque_ece.php';?>
<html>
<head>
    <title>Test Website</title>
    <link rel="stylesheet" href="testPage.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
.mn{
    margin-top:10px;
    margin-left:10px;
    margin-right:10 px;
   }
.heading{
 	background:orange;
}

</style>
</head>
<body class="mn">
    <div class="heading"><h1>ECET MOCK TEST</h1></div>
    <div class="sub-heading">
        <h2>Electrical and Communication Engineering</h2>
        <div class="timing"><h2>Time :</h2>
            <div id="countdown"></div>

        </div>
    </div>
    <div class="top-container">
        <div class="table-container">
            <a href="#questionNumber1" onclick="updateQuestionbynum(1)"> <div>Maths</div></a>
            <hr class="solid">
           <a href="#questionNumber51" onclick="updateQuestionbynum(51)"> <div>Physics</div></a>
            <hr class="solid">
            <a href="#questionNumber76" onclick="updateQuestionbynum(76)"><div>Chemistry</div></a>
            <hr class="solid">
            <a href="#questionNumber101" onclick="updateQuestionbynum(101)"><div>Core subject</div></a>
            <hr class="rounded">
            <div>Questions</div>
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example">
                <a id="link-question"><div id="question-numbers-container"></div></a>
            </div>
            
        </div>
        
        <div class="question-container">
            <div class="question"> <p class="question-text">1. Question 1?</p>
            </div>
           
            <form>
                <div class="space-container"></div>
                <input type="radio" name="q1" value="option1" ><label id="option1"></label>
                <hr class="solid">
                <input type="radio" name="q1" value="option2" ><label id="option2"></label>
                <hr class="solid">
                <input type="radio" name="q1" value="option3" ><label id="option3"></label>
                <hr class="solid">
                <input type="radio" name="q1" value="option4" ><label id="option4"></label>
            </form>
        </div>
    </div>
    <div class="buttons">
        <button onclick="prevQuestion()" class="button btn-primary">Prev</button>
        <button onclick="nextQuestion()"  class="nextbtn">Next</button>
       <div class="button submitBtn"><form action="resultpage.php"><button onclick="onclickSubmit()"  class="nextbtn">Submit</button></form></div> 
    </div>

    <script>
        const numQuestions = 200; // Replace with the actual number of questions
        const questionNumbersContainer = document.getElementById('question-numbers-container');
      
        for (let i = 1; i <= numQuestions; i++) {
          const questionNumberElement = document.createElement('div');
          questionNumberElement.textContent = i;
          questionNumberElement.setAttribute('id',`questionNumber${i}`);
          questionNumberElement.classList.add('question-number');
          questionNumberElement.addEventListener('click', () => {
            // Replace with logic to show the corresponding question
            console.log(`Clicked on question ${i}`);
            updateQuestionbynum(i);
          });
          questionNumbersContainer.appendChild(questionNumberElement);
      
          const dividerElement = document.createElement('hr');
          dividerElement.classList.add("question-number-divider");
          questionNumbersContainer.appendChild(dividerElement);
        }
      </script>
      
</html>

    <script>
        var currentQuestion = 1;
        var totalQuestions = 200;
        
        // Set the countdown time (in seconds)
var countdownTime = 3 * 60 * 60; // 3 hours in seconds

// Update the countdown timer every second
var countdownTimer = setInterval(function() {
  // Decrement the countdown time
  countdownTime--;

  // If the countdown has ended, stop the timer
  if (countdownTime < 0) {
    clearInterval(countdownTimer);
    alert("Time's up!");
  } else {
    // Convert the countdown time to hours, minutes, and seconds
    var hours = Math.floor(countdownTime / 3600);
    var minutes = Math.floor((countdownTime - (hours * 3600)) / 60);
    var seconds = countdownTime - (hours * 3600) - (minutes * 60);

    // Update the countdown display
    var countdownDiv = document.getElementById("countdown");
    countdownDiv.innerHTML =  " 0"+hours + ":" + minutes + ":" + seconds + "";
  }
}, 1000);
    function navigate(){
        var num=document.getElementById("question-number1");
        var mydiv= num.innerHTML;
        console.log(mydiv);
    }
        function prevQuestion() {
            if (currentQuestion > 1) {
                currentQuestion--;
                updateQuestion();
            }
        }

        function nextQuestion() {
            if (currentQuestion < totalQuestions) {
                currentQuestion++;
                updateQuestion();
            }

document.querySelector('input[name="q1"]:checked').checked=false;
        }
        const questions = [
  {
    question: "<?php echo $x ;?>",
    options: ["<?php echo $x1_1?>", "<?php echo $x1_2?>", "<?php echo $x1_3?>", "<?php echo $x1_4?>"],
    answer: <?php echo $x_ans1;?>,
  },
 { 
    question: "<?php  echo $x2;?>",
    options: ["<?php echo $x2_1 ;?>", "<?php echo $x2_2 ?>", "<?php echo $x2_3 ?>", "<?php echo $x2_4 ?>"],
    answer: <?php echo $x_ans2;?>,
  },
  {
    question: "<?php echo $x3;?>",
    options: ["<?php echo $x3_1 ;?>", "<?php echo $x3_2 ;?>", "<?php echo $x3_3 ;?>", "<?php echo $x3_4 ;?>"],
    answer: <?php echo $x_ans3;?>,
  },
  {
    question: "<?php echo $x4 ;?>",
    options: ["<?php echo $x4_1 ;?>", "<?php echo $x4_2 ;?>", "<?php echo $x4_3 ;?>", "<?php echo $x4_4 ;?>"],
    answer: <?php echo $x_ans4;?>,
  },
{
    question: "<?php echo $x5 ;?>",
    options: ["<?php echo $x5_1 ;?>", "<?php echo $x5_2 ;?>", "<?php echo $x5_3 ;?>", "<?php echo $x5_4 ;?>"],
    answer: <?php echo $x_ans5;?>,
  },
{
    question: "<?php echo $x6 ?>",
    options: ["<?php echo $x6_1?>", "<?php echo $x6_2?>", "<?php echo $x6_3?>", "<?php echo $x6_4?>"],
    answer: <?php echo $x_ans6;?>,
  },
 { 
    question: "<?php  echo $x7;?>",
    options: ["<?php echo $x7_1 ;?>", "<?php echo $x7_2 ?>", "<?php echo $x7_3 ?>", "<?php echo $x7_4 ?>"],
    answer: <?php echo $x_ans7;?>,
  },
  {
    question: "<?php echo $x8;?>",
    options: ["<?php echo $x8_1 ;?>", "<?php echo $x8_2 ;?>", "<?php echo $x8_3 ;?>", "<?php echo $x8_4 ;?>"],
    answer: <?php echo $x_ans8;?>,
  },
  {
    question: "<?php echo $x9 ;?>",
    options: ["<?php echo $x9_1 ;?>", "<?php echo $x9_2 ;?>", "<?php echo $x9_3 ;?>", "<?php echo $x9_4 ;?>"],
    answer: <?php echo $x_ans9;?>,
  },
{
    question: "<?php echo $x10 ;?>",
    options: ["<?php echo $x10_1 ;?>", "<?php echo $x10_2 ;?>", "<?php echo $x10_3 ;?>", "<?php echo $x10_4 ;?>"],
    answer: <?php echo $x_ans10;?>,
  },

{
    question: "<?php echo $x11 ;?>",
    options: ["<?php echo $x11_1?>", "<?php echo $x11_2?>", "<?php echo $x11_3?>", "<?php echo $x11_4?>"],
    answer: <?php echo $x_ans11;?>,
  },
 { 
    question: "<?php  echo $x12;?>",
    options: ["<?php echo $x12_1 ;?>", "<?php echo $x12_2 ?>", "<?php echo $x12_3 ?>", "<?php echo $x12_4 ?>"],
    answer: <?php echo $x_ans12;?>,
  },
  {
    question: "<?php echo $x13;?>",
    options: ["<?php echo $x13_1 ;?>", "<?php echo $x13_2 ;?>", "<?php echo $x13_3 ;?>", "<?php echo $x13_4 ;?>"],
    answer: <?php echo $x_ans13;?>,
  },
  {
    question: "<?php echo $x14 ;?>",
    options: ["<?php echo $x14_1 ;?>", "<?php echo $x14_2 ;?>", "<?php echo $x14_3 ;?>", "<?php echo $x14_4 ;?>"],
    answer: <?php echo $x_ans14;?>,
  },
{
    question: "<?php echo $x15 ;?>",
    options: ["<?php echo $x15_1 ;?>", "<?php echo $x15_2 ;?>", "<?php echo $x15_3 ;?>", "<?php echo $x15_4 ;?>"],
    answer: <?php echo $x_ans15;?>,
  },
{
    question: "<?php echo $x16 ?>",
    options: ["<?php echo $x16_1?>", "<?php echo $x16_2?>", "<?php echo $x16_3?>", "<?php echo $x16_4?>"],
    answer: <?php echo $x_ans16;?>,
  },
 { 
    question: "<?php  echo $x17;?>",
    options: ["<?php echo $x17_1 ;?>", "<?php echo $x17_2 ?>", "<?php echo $x17_3 ?>", "<?php echo $x17_4 ?>"],
    answer: <?php echo $x_ans17;?>,
  },
  {
    question: "<?php echo $x18;?>",
    options: ["<?php echo $x18_1 ;?>", "<?php echo $x18_2 ;?>", "<?php echo $x18_3 ;?>", "<?php echo $x18_4 ;?>"],
    answer: <?php echo $x_ans18;?>,
  },
  {
    question: "<?php echo $x19 ;?>",
    options: ["<?php echo $x19_1 ;?>", "<?php echo $x19_2 ;?>", "<?php echo $x19_3 ;?>", "<?php echo $x19_4 ;?>"],
    answer: <?php echo $x_ans19;?>,
  },
{
    question: "<?php echo $x20 ;?>",
    options: ["<?php echo $x20_1 ;?>", "<?php echo $x20_2 ;?>", "<?php echo $x20_3 ;?>", "<?php echo $x20_4 ;?>"],
    answer: <?php echo $x_ans20;?>,
  },
{
    question: "<?php echo $x21 ;?>",
    options: ["<?php echo $x21_1?>", "<?php echo $x21_2?>", "<?php echo $x21_3?>", "<?php echo $x21_4?>"],
    answer: <?php echo $x_ans21;?>,
  },
 { 
    question: "<?php  echo $x22;?>",
    options: ["<?php echo $x22_1 ;?>", "<?php echo $x22_2 ?>", "<?php echo $x22_3 ?>", "<?php echo $x22_4 ?>"],
    answer: <?php echo $x_ans22;?>,
  },
  {
    question: "<?php echo $x23;?>",
    options: ["<?php echo $x23_1 ;?>", "<?php echo $x23_2 ;?>", "<?php echo $x23_3 ;?>", "<?php echo $x23_4 ;?>"],
    answer: <?php echo $x_ans23;?>,
  },
  {
    question: "<?php echo $x24 ;?>",
    options: ["<?php echo $x24_1 ;?>", "<?php echo $x24_2 ;?>", "<?php echo $x24_3 ;?>", "<?php echo $x24_4 ;?>"],
    answer: <?php echo $x_ans24;?>,
  },
{
    question: "<?php echo $x25 ;?>",
    options: ["<?php echo $x25_1 ;?>", "<?php echo $x25_2 ;?>", "<?php echo $x25_3 ;?>", "<?php echo $x25_4 ;?>"],
    answer: <?php echo $x_ans25;?>,
  },
{
    question: "<?php echo $x26 ?>",
    options: ["<?php echo $x26_1?>", "<?php echo $x26_2?>", "<?php echo $x26_3?>", "<?php echo $x26_4?>"],
    answer: <?php echo $x_ans26;?>,
  },
 { 
    question: "<?php  echo $x27;?>",
    options: ["<?php echo $x27_1 ;?>", "<?php echo $x27_2 ?>", "<?php echo $x27_3 ?>", "<?php echo $x27_4 ?>"],
    answer: <?php echo $x_ans27;?>,
  },
  {
    question: "<?php echo $x28;?>",
    options: ["<?php echo $x28_1 ;?>", "<?php echo $x28_2 ;?>", "<?php echo $x28_3 ;?>", "<?php echo $x28_4 ;?>"],
    answer: <?php echo $x_ans28;?>,
  },
  {
    question: "<?php echo $x29 ;?>",
    options: ["<?php echo $x29_1 ;?>", "<?php echo $x29_2 ;?>", "<?php echo $x29_3 ;?>", "<?php echo $x29_4 ;?>"],
    answer: <?php echo $x_ans29;?>,
  },
{
    question: "<?php echo $x30 ;?>",
    options: ["<?php echo $x30_1 ;?>", "<?php echo $x30_2 ;?>", "<?php echo $x30_3 ;?>", "<?php echo $x30_4 ;?>"],
    answer: <?php echo $x_ans30;?>,
  },
{
    question: "<?php echo $x31 ;?>",
    options: ["<?php echo $x31_1?>", "<?php echo $x31_2?>", "<?php echo $x31_3?>", "<?php echo $x31_4?>"],
    answer: <?php echo $x_ans31;?>,
  },
 { 
    question: "<?php  echo $x32;?>",
    options: ["<?php echo $x32_1 ;?>", "<?php echo $x32_2 ?>", "<?php echo $x32_3 ?>", "<?php echo $x32_4 ?>"],
    answer: <?php echo $x_ans32;?>,
  },
  {
    question: "<?php echo $x33;?>",
    options: ["<?php echo $x33_1 ;?>", "<?php echo $x33_2 ;?>", "<?php echo $x33_3 ;?>", "<?php echo $x33_4 ;?>"],
    answer: <?php echo $x_ans33;?>,
  },
  {
    question: "<?php echo $x34 ;?>",
    options: ["<?php echo $x34_1 ;?>", "<?php echo $x34_2 ;?>", "<?php echo $x34_3 ;?>", "<?php echo $x34_4 ;?>"],
    answer: <?php echo $x_ans34;?>,
  },
{
    question: "<?php echo $x35 ;?>",
    options: ["<?php echo $x35_1 ;?>", "<?php echo $x35_2 ;?>", "<?php echo $x35_3 ;?>", "<?php echo $x35_4 ;?>"],
    answer: <?php echo $x_ans35;?>,
  },
{
    question: "<?php echo $x36 ?>",
    options: ["<?php echo $x36_1?>", "<?php echo $x36_2?>", "<?php echo $x36_3?>", "<?php echo $x36_4?>"],
    answer: <?php echo $x_ans36;?>,
  },
 { 
    question: "<?php  echo $x37;?>",
    options: ["<?php echo $x37_1 ;?>", "<?php echo $x37_2 ?>", "<?php echo $x37_3 ?>", "<?php echo $x37_4 ?>"],
    answer: <?php echo $x_ans37;?>,
  },
  {
    question: "<?php echo $x38;?>",
    options: ["<?php echo $x38_1 ;?>", "<?php echo $x38_2 ;?>", "<?php echo $x38_3 ;?>", "<?php echo $x38_4 ;?>"],
    answer: <?php echo $x_ans8;?>,
  },
  {
    question: "<?php echo $x39 ;?>",
    options: ["<?php echo $x39_1 ;?>", "<?php echo $x39_2 ;?>", "<?php echo $x39_3 ;?>", "<?php echo $x39_4 ;?>"],
    answer: <?php echo $x_ans39;?>,
  },
{
    question: "<?php echo $x40 ;?>",
    options: ["<?php echo $x40_1 ;?>", "<?php echo $x40_2 ;?>", "<?php echo $x40_3 ;?>", "<?php echo $x40_4 ;?>"],
    answer: <?php echo $x_ans40;?>,
  },
{
    question: "<?php echo $x41 ;?>",
    options: ["<?php echo $x41_1?>", "<?php echo $x41_2?>", "<?php echo $x41_3?>", "<?php echo $x41_4?>"],
    answer: <?php echo $x_ans41;?>,
  },
 { 
    question: "<?php  echo $x42;?>",
    options: ["<?php echo $x42_1 ;?>", "<?php echo $x42_2 ?>", "<?php echo $x42_3 ?>", "<?php echo $x42_4 ?>"],
    answer: <?php echo $x_ans42;?>,
  },
  {
    question: "<?php echo $x43;?>",
    options: ["<?php echo $x43_1 ;?>", "<?php echo $x43_2 ;?>", "<?php echo $x43_3 ;?>", "<?php echo $x43_4 ;?>"],
    answer: <?php echo $x_ans43;?>,
  },
  {
    question: "<?php echo $x44 ;?>",
    options: ["<?php echo $x44_1 ;?>", "<?php echo $x44_2 ;?>", "<?php echo $x44_3 ;?>", "<?php echo $x44_4 ;?>"],
    answer: <?php echo $x_ans44;?>,
  },
{
    question: "<?php echo $x45 ;?>",
    options: ["<?php echo $x45_1 ;?>", "<?php echo $x45_2 ;?>", "<?php echo $x45_3 ;?>", "<?php echo $x45_4 ;?>"],
    answer: <?php echo $x_ans5;?>,
  },
{
    question: "<?php echo $x46 ?>",
    options: ["<?php echo $x46_1?>", "<?php echo $x46_2?>", "<?php echo $x46_3?>", "<?php echo $x46_4?>"],
    answer: <?php echo $x_ans46;?>,
  },
 { 
    question: "<?php  echo $x47;?>",
    options: ["<?php echo $x47_1 ;?>", "<?php echo $x47_2 ?>", "<?php echo $x47_3 ?>", "<?php echo $x47_4 ?>"],
    answer: <?php echo $x_ans7;?>,
  },
  {
    question: "<?php echo $x48;?>",
    options: ["<?php echo $x48_1 ;?>", "<?php echo $x48_2 ;?>", "<?php echo $x48_3 ;?>", "<?php echo $x48_4 ;?>"],
    answer: <?php echo $x_ans48;?>,
  },
  {
    question: "<?php echo $x49 ;?>",
    options: ["<?php echo $x49_1 ;?>", "<?php echo $x49_2 ;?>", "<?php echo $x49_3 ;?>", "<?php echo $x49_4 ;?>"],
    answer: <?php echo $x_ans49;?>,
  },
{
    question: "<?php echo $x50 ;?>",
    options: ["<?php echo $x50_1 ;?>", "<?php echo $x50_2 ;?>", "<?php echo $x50_3 ;?>", "<?php echo $x50_4 ;?>"],
    answer: <?php echo $x_ans50;?>,
  },
 {
    question: "<?php echo $x51 ;?>",
    options: ["<?php echo $x51_1?>", "<?php echo $x51_2?>", "<?php echo $x51_3?>", "<?php echo $x51_4?>"],
    answer: <?php echo $x_ans51;?>,
  },
 { 
    question: "<?php  echo $x52;?>",
    options: ["<?php echo $x52_1 ;?>", "<?php echo $x52_2 ?>", "<?php echo $x52_3 ?>", "<?php echo $x52_4 ?>"],
    answer: <?php echo $x_ans52;?>,
  },
  {
    question: "<?php echo $x53;?>",
    options: ["<?php echo $x53_1 ;?>", "<?php echo $x53_2 ;?>", "<?php echo $x53_3 ;?>", "<?php echo $x53_4 ;?>"],
    answer: <?php echo $x_ans53;?>,
  },
  {
    question: "<?php echo $x54 ;?>",
    options: ["<?php echo $x54_1 ;?>", "<?php echo $x54_2 ;?>", "<?php echo $x54_3 ;?>", "<?php echo $x54_4 ;?>"],
    answer: <?php echo $x_ans54;?>,
  },
{
    question: "<?php echo $x55 ;?>",
    options: ["<?php echo $x55_1 ;?>", "<?php echo $x55_2 ;?>", "<?php echo $x55_3 ;?>", "<?php echo $x55_4 ;?>"],
    answer: <?php echo $x_ans55;?>,
  },
{
    question: "<?php echo $x56 ?>",
    options: ["<?php echo $x56_1?>", "<?php echo $x56_2?>", "<?php echo $x56_3?>", "<?php echo $x56_4?>"],
    answer: <?php echo $x_ans56;?>,
  },
 { 
    question: "<?php  echo $x57;?>",
    options: ["<?php echo $x57_1 ;?>", "<?php echo $x57_2 ?>", "<?php echo $x57_3 ?>", "<?php echo $x57_4 ?>"],
    answer: <?php echo $x_ans57;?>,
  },
  {
    question: "<?php echo $x58;?>",
    options: ["<?php echo $x58_1 ;?>", "<?php echo $x58_2 ;?>", "<?php echo $x58_3 ;?>", "<?php echo $x58_4 ;?>"],
    answer: <?php echo $x_ans58;?>,
  },
  {
    question: "<?php echo $x59 ;?>",
    options: ["<?php echo $x59_1 ;?>", "<?php echo $x59_2 ;?>", "<?php echo $x59_3 ;?>", "<?php echo $x59_4 ;?>"],
    answer: <?php echo $x_ans59;?>,
  },
{
    question: "<?php echo $x60 ;?>",
    options: ["<?php echo $x60_1 ;?>", "<?php echo $x60_2 ;?>", "<?php echo $x60_3 ;?>", "<?php echo $x60_4 ;?>"],
    answer: <?php echo $x_ans60;?>,
  },
{
    question: "<?php echo $x61 ;?>",
    options: ["<?php echo $x61_1;?>", "<?php echo $x61_2?>", "<?php echo $x61_3?>", "<?php echo $x61_4?>"],
    answer: <?php echo $x_ans61;?>,
  },
 { 
    question: "<?php  echo $x62;?>",
    options: ["<?php echo $x62_1 ;?>", "<?php echo $x62_2 ?>", "<?php echo $x62_3 ?>", "<?php echo $x62_4 ?>"],
    answer: <?php echo $x_ans62;?>,
  },
  {
    question: "<?php echo $x63;?>",
    options: ["<?php echo $x63_1 ;?>", "<?php echo $x63_2 ;?>", "<?php echo $x63_3 ;?>", "<?php echo $x63_4 ;?>"],
    answer: <?php echo $x_ans63;?>,
  },
  {
    question: "<?php echo $x64 ;?>",
    options: ["<?php echo $x64_1 ;?>", "<?php echo $x64_2 ;?>", "<?php echo $x64_3 ;?>", "<?php echo $x64_4 ;?>"],
    answer: <?php echo $x_ans64;?>,
  },
{
    question: "<?php echo $x65 ;?>",
    options: ["<?php echo $x65_1 ;?>", "<?php echo $x65_2 ;?>", "<?php echo $x65_3 ;?>", "<?php echo $x65_4 ;?>"],
    answer: <?php echo $x_ans65;?>,
  },
{
    question: "<?php echo $x66 ?>",
    options: ["<?php echo $x66_1?>", "<?php echo $x66_2?>", "<?php echo $x66_3?>", "<?php echo $x66_4?>"],
    answer: <?php echo $x_ans66;?>,
  },
 { 
    question: "<?php  echo $x67;?>",
    options: ["<?php echo $x67_1 ;?>", "<?php echo $x67_2 ?>", "<?php echo $x67_3 ?>", "<?php echo $x67_4 ?>"],
    answer: <?php echo $x_ans67;?>,
  },
  {
    question: "<?php echo $x68;?>",
    options: ["<?php echo $x68_1 ;?>", "<?php echo $x68_2 ;?>", "<?php echo $x68_3 ;?>", "<?php echo $x68_4 ;?>"],
    answer: <?php echo $x_ans68;?>,
  },
  {
    question: "<?php echo $x69 ;?>",
    options: ["<?php echo $x69_1 ;?>", "<?php echo $x69_2 ;?>", "<?php echo $x69_3 ;?>", "<?php echo $x69_4 ;?>"],
    answer: <?php echo $x_ans69;?>,
  },
{
    question: "<?php echo $x70 ;?>",
    options: ["<?php echo $x70_1 ;?>", "<?php echo $x70_2 ;?>", "<?php echo $x70_3 ;?>", "<?php echo $x70_4 ;?>"],
    answer: <?php echo $x_ans70;?>,
  },

{
    question: "<?php echo $x71 ;?>",
    options: ["<?php echo $x71_1?>", "<?php echo $x71_2?>", "<?php echo $x71_3?>", "<?php echo $x71_4?>"],
    answer: <?php echo $x_ans71;?>,
  },
 { 
    question: "<?php  echo $x72;?>",
    options: ["<?php echo $x72_1 ;?>", "<?php echo $x72_2 ?>", "<?php echo $x72_3 ?>", "<?php echo $x72_4 ?>"],
    answer: <?php echo $x_ans72;?>,
  },
 {
    question: "<?php echo $x73;?>",
    options: ["<?php echo $x73_1 ;?>", "<?php echo $x73_2 ;?>", "<?php echo $x73_3 ;?>", "<?php echo $x73_4 ;?>"],
    answer: <?php echo $x_ans73;?>,
  },
{
    question: "<?php echo $x74 ;?>",
    options: ["<?php echo $x74_1 ;?>", "<?php echo $x74_2 ;?>", "<?php echo $x74_3 ;?>", "<?php echo $x74_4 ;?>"],
    answer: <?php echo $x_ans74;?>,
  },

{
    question: "<?php echo $x75 ;?>",
    options: ["<?php echo $x75_1 ;?>", "<?php echo $x75_2 ;?>", "<?php echo $x75_3 ;?>", "<?php echo $x75_4 ;?>"],
    answer: <?php echo $x_ans75;?>,
  },{
    question: "<?php echo $x76 ;?>",
    options: ["<?php echo $x76_1?>", "<?php echo $x76_2?>", "<?php echo $x76_3?>", "<?php echo $x76_4?>"],
    answer: <?php echo $x_ans76;?>,
  },

 { 
    question: "<?php  echo $x77;?>",
    options: ["<?php echo $x77_1 ;?>", "<?php echo $x77_2 ?>", "<?php echo $x77_3 ?>", "<?php echo $x77_4 ?>"],
    answer: <?php echo $x_ans77;?>,
  },

  {
    question: "<?php echo $x78;?>",
    options: ["<?php echo $x78_1 ;?>", "<?php echo $x78_2 ;?>", "<?php echo $x78_3 ;?>", "<?php echo $x78_4 ;?>"],
    answer: <?php echo $x_ans78;?>,
  },

  {
    question: "<?php echo $x79 ;?>",
    options: ["<?php echo $x79_1 ;?>", "<?php echo $x79_2 ;?>", "<?php echo $x79_3 ;?>", "<?php echo $x79_4 ;?>"],
    answer: <?php echo $x_ans79;?>,
  },{
    question: "<?php echo $x80 ;?>",
    options: ["<?php echo $x80_1 ;?>", "<?php echo $x80_2 ;?>", "<?php echo $x80_3 ;?>", "<?php echo $x80_4 ;?>"],
    answer: <?php echo $x_ans80;?>,
  },{
    question: "<?php echo $x81 ?>",
    options: ["<?php echo $x81_1?>", "<?php echo $x81_2?>", "<?php echo $x81_3?>", "<?php echo $x81_4?>"],
    answer: <?php echo $x_ans81;?>,
  },
 { 
    question: "<?php  echo $x82;?>",
    options: ["<?php echo $x82_1 ;?>", "<?php echo $x82_2 ?>", "<?php echo $x82_3 ?>", "<?php echo $x82_4 ?>"],
    answer: <?php echo $x_ans82;?>,
  },
  {
    question: "<?php echo $x83;?>",
    options: ["<?php echo $x83_1 ;?>", "<?php echo $x83_2 ;?>", "<?php echo $x83_3 ;?>", "<?php echo $x83_4 ;?>"],
    answer: <?php echo $x_ans83;?>,
  },
  {
    question: "<?php echo $x84 ;?>",
    options: ["<?php echo $x84_1 ;?>", "<?php echo $x84_2 ;?>", "<?php echo $x84_3 ;?>", "<?php echo $x84_4 ;?>"],
    answer: <?php echo $x_ans84;?>,
  },
{
    question: "<?php echo $x85 ;?>",
    options: ["<?php echo $x85_1 ;?>", "<?php echo $x85_2 ;?>", "<?php echo $x85_3 ;?>", "<?php echo $x85_4 ;?>"],
    answer: <?php echo $x_ans85;?>,
  },{
    question: "<?php echo $x86 ;?>",
    options: ["<?php echo $x86_1?>", "<?php echo $x86_2?>", "<?php echo $x86_3?>", "<?php echo $x86_4?>"],
    answer: <?php echo $x_ans86;?>,
  },
 { 
    question: "<?php  echo $x87;?>",
    options: ["<?php echo $x87_1 ;?>", "<?php echo $x87_2 ?>", "<?php echo $x87_3 ?>", "<?php echo $x87_4 ?>"],
    answer: <?php echo $x_ans87;?>,
  },
  {
    question: "<?php echo $x88;?>",
    options: ["<?php echo $x88_1 ;?>", "<?php echo $x88_2 ;?>", "<?php echo $x88_3 ;?>", "<?php echo $x88_4 ;?>"],
    answer: <?php echo $x_ans88;?>,
  },
  {
    question: "<?php echo $x89 ;?>",
    options: ["<?php echo $x89_1 ;?>", "<?php echo $x89_2 ;?>", "<?php echo $x89_3 ;?>", "<?php echo $x89_4 ;?>"],
    answer: <?php echo $x_ans89;?>,
  },
{
    question: "<?php echo $x90 ;?>",
    options: ["<?php echo $x90_1 ;?>", "<?php echo $x90_2 ;?>", "<?php echo $x90_3 ;?>", "<?php echo $x90_4 ;?>"],
    answer: <?php echo $x_ans90;?>,
  },{
    question: "<?php echo $x91 ?>",
    options: ["<?php echo $x91_1?>", "<?php echo $x91_2?>", "<?php echo $x91_3?>", "<?php echo $x91_4?>"],
    answer: <?php echo $x_ans91;?>,
  },
 { 
    question: "<?php  echo $x92;?>",
    options: ["<?php echo $x92_1 ;?>", "<?php echo $x92_2 ?>", "<?php echo $x92_3 ?>", "<?php echo $x92_4 ?>"],
    answer: <?php echo $x_ans92;?>,
  },
  {
    question: "<?php echo $x93;?>",
    options: ["<?php echo $x93_1 ;?>", "<?php echo $x93_2 ;?>", "<?php echo $x93_3 ;?>", "<?php echo $x93_4 ;?>"],
    answer: <?php echo $x_ans93;?>,
  },
  {
    question: "<?php echo $x94 ;?>",
    options: ["<?php echo $x94_1 ;?>", "<?php echo $x94_2 ;?>", "<?php echo $x94_3 ;?>", "<?php echo $x94_4 ;?>"],
    answer: <?php echo $x_ans94;?>,
  },
{
    question: "<?php echo $x95 ;?>",
    options: ["<?php echo $x95_1 ;?>", "<?php echo $x95_2 ;?>", "<?php echo $x95_3 ;?>", "<?php echo $x95_4 ;?>"],
    answer: <?php echo $x_ans95;?>,
  },{
    question: "<?php echo $x96 ;?>",
    options: ["<?php echo $x96_1?>", "<?php echo $x96_2?>", "<?php echo $x96_3?>", "<?php echo $x96_4?>"],
    answer: <?php echo $x_ans96;?>,
  },
 { 
    question: "<?php  echo $x97;?>",
    options: ["<?php echo $x97_1 ;?>", "<?php echo $x97_2 ?>", "<?php echo $x97_3 ?>", "<?php echo $x97_4 ?>"],
    answer: <?php echo $x_ans97;?>,
  },{
    question: "<?php echo $x98;?>",
    options: ["<?php echo $x98_1 ;?>", "<?php echo $x98_2 ;?>", "<?php echo $x98_3 ;?>", "<?php echo $x98_4 ;?>"],
    answer: <?php echo $x_ans98;?>,
  },
  {
    question: "<?php echo $x99 ;?>",
    options: ["<?php echo $x99_1 ;?>", "<?php echo $x99_2 ;?>", "<?php echo $x99_3 ;?>", "<?php echo $x99_4 ;?>"],
    answer: <?php echo $x_ans99;?>,
  },{
    question: "<?php echo $x100 ;?>",
    options: ["<?php echo $x100_1 ;?>", "<?php echo $x100_2 ;?>", "<?php echo $x100_3 ;?>", "<?php echo $x100_4 ;?>"],
    answer: <?php echo $x_ans100;?>,
  },

  {
    question: "<?php echo $x101 ;?>",
    options: ["<?php echo $x101_1?>", "<?php echo $x101_2?>", "<?php echo $x101_3?>", "<?php echo $x101_4?>"],
    answer: <?php echo $x_ans101;?>,
  },
 { 
    question: "<?php  echo $x102;?>",
    options: ["<?php echo $x102_1 ;?>", "<?php echo $x102_2 ?>", "<?php echo $x102_3 ?>", "<?php echo $x102_4 ?>"],
    answer: <?php echo $x_ans102;?>,
  },
  {
    question: "<?php echo $x103;?>",
    options: ["<?php echo $x103_1 ;?>", "<?php echo $x103_2 ;?>", "<?php echo $x103_3 ;?>", "<?php echo $x103_4 ;?>"],
    answer: <?php echo $x_ans103;?>,
  },
  {
    question: "<?php echo $x104 ;?>",
    options: ["<?php echo $x104_1 ;?>", "<?php echo $x104_2 ;?>", "<?php echo $x104_3 ;?>", "<?php echo $x104_4 ;?>"],
    answer: <?php echo $x_ans4;?>,
  },{
    question: "<?php echo $x105 ;?>",
    options: ["<?php echo $x105_1 ;?>", "<?php echo $x105_2 ;?>", "<?php echo $x105_3 ;?>", "<?php echo $x105_4 ;?>"],
    answer: <?php echo $x_ans105;?>,
  },{
    question: "<?php echo $x106 ?>",
    options: ["<?php echo $x106_1?>", "<?php echo $x106_2?>", "<?php echo $x106_3?>", "<?php echo $x106_4?>"],
    answer: <?php echo $x_ans106;?>,
  },
 { 
    question: "<?php  echo $x107;?>",
    options: ["<?php echo $x107_1 ;?>", "<?php echo $x107_2 ?>", "<?php echo $x107_3 ?>", "<?php echo $x107_4 ?>"],
    answer: <?php echo $x_ans107;?>,
  },
  {
    question: "<?php echo $x108;?>",
    options: ["<?php echo $x108_1 ;?>", "<?php echo $x108_2 ;?>", "<?php echo $x108_3 ;?>", "<?php echo $x108_4 ;?>"],
    answer: <?php echo $x_ans108;?>,
  },
  {
    question: "<?php echo $x109 ;?>",
    options: ["<?php echo $x109_1 ;?>", "<?php echo $x109_2 ;?>", "<?php echo $x109_3 ;?>", "<?php echo $x109_4 ;?>"],
    answer: <?php echo $x_ans109;?>,
  },
{
    question: "<?php echo $x110 ;?>",
    options: ["<?php echo $x110_1 ;?>", "<?php echo $x110_2 ;?>", "<?php echo $x110_3 ;?>", "<?php echo $x110_4 ;?>"],
    answer: <?php echo $x_ans110;?>,
  },
{
    question: "<?php echo $x111 ;?>",
    options: ["<?php echo $x111_1?>", "<?php echo $x111_2?>", "<?php echo $x111_3?>", "<?php echo $x111_4?>"],
    answer: <?php echo $x_ans111;?>,
  },
 { 
    question: "<?php  echo $x112;?>",
    options: ["<?php echo $x112_1 ;?>", "<?php echo $x112_2 ?>", "<?php echo $x112_3 ?>", "<?php echo $x112_4 ?>"],
    answer: <?php echo $x_ans112;?>,
  },
{
    question: "<?php echo $x113;?>",
    options: ["<?php echo $x113_1 ;?>", "<?php echo $x113_2 ;?>", "<?php echo $x113_3 ;?>", "<?php echo $x113_4 ;?>"],
    answer: <?php echo $x_ans113;?>,
  },
{
    question: "<?php echo $x114 ;?>",
    options: ["<?php echo $x114_1 ;?>", "<?php echo $x114_2 ;?>", "<?php echo $x114_3 ;?>", "<?php echo $x114_4 ;?>"],
    answer: <?php echo $x_ans114;?>,
  },
{
    question: "<?php echo $x115 ;?>",
    options: ["<?php echo $x115_1 ;?>", "<?php echo $x115_2 ;?>", "<?php echo $x115_3 ;?>", "<?php echo $x115_4 ;?>"],
    answer: <?php echo $x_ans115;?>,
  },
{
    question: "<?php echo $x116 ?>",
    options: ["<?php echo $x116_1?>", "<?php echo $x116_2?>", "<?php echo $x116_3?>", "<?php echo $x116_4?>"],
    answer: <?php echo $x_ans116;?>,
  },
{ 
    question: "<?php  echo $x117;?>",
    options: ["<?php echo $x117_1 ;?>", "<?php echo $x117_2 ?>", "<?php echo $x117_3 ?>", "<?php echo $x117_4 ?>"],
    answer: <?php echo $x_ans117;?>,
  },
{
    question: "<?php echo $x118;?>",
    options: ["<?php echo $x118_1 ;?>", "<?php echo $x118_2 ;?>", "<?php echo $x118_3 ;?>", "<?php echo $x118_4 ;?>"],
    answer: <?php echo $x_ans118;?>,
  },
{
    question: "<?php echo $x119 ;?>",
    options: ["<?php echo $x119_1 ;?>", "<?php echo $x119_2 ;?>", "<?php echo $x119_3 ;?>", "<?php echo $x119_4 ;?>"],
    answer: <?php echo $x_ans119;?>,
  },
{
    question: "<?php echo $x120 ;?>",
    options: ["<?php echo $x120_1 ;?>", "<?php echo $x120_2 ;?>", "<?php echo $x120_3 ;?>", "<?php echo $x120_4 ;?>"],
    answer: <?php echo $x_ans120;?>,
  },
{
    question: "<?php echo $x121 ;?>",
    options: ["<?php echo $x121_1?>", "<?php echo $x121_2?>", "<?php echo $x121_3?>", "<?php echo $x121_4?>"],
    answer: <?php echo $x_ans121;?>,
  },
{ 
    question: "<?php  echo $x122;?>",
    options: ["<?php echo $x122_1 ;?>", "<?php echo $x122_2 ?>", "<?php echo $x122_3 ?>", "<?php echo $x122_4 ?>"],
    answer: <?php echo $x_ans122;?>,
  },
{
    question: "<?php echo $x123;?>",
    options: ["<?php echo $x123_1 ;?>", "<?php echo $x123_2 ;?>", "<?php echo $x123_3 ;?>", "<?php echo $x123_4 ;?>"],
    answer: <?php echo $x_ans123;?>,
  },
{
    question: "<?php echo $x124 ;?>",
    options: ["<?php echo $x124_1 ;?>", "<?php echo $x124_2 ;?>", "<?php echo $x124_3;?>", "<?php echo $x124_4 ;?>"],
    answer: <?php echo $x_ans124;?>,
  },
{
    question: "<?php echo $x125 ;?>",
    options: ["<?php echo $x125_1 ;?>", "<?php echo $x125_2 ;?>", "<?php echo $x125_3 ;?>", "<?php echo $x125_4 ;?>"],
    answer: <?php echo $x_ans125;?>,
  },
{
    question: "<?php echo $x126 ?>",
    options: ["<?php echo $x126_1?>", "<?php echo $x126_2?>", "<?php echo $x126_3?>", "<?php echo $x126_4?>"],
    answer: <?php echo $x_ans126;?>,
  },
 { 
    question: "<?php  echo $x127;?>",
    options: ["<?php echo $x127_1 ;?>", "<?php echo $x127_2 ?>", "<?php echo $x127_3 ?>", "<?php echo $x127_4 ?>"],
    answer: <?php echo $x_ans127;?>,
  },
{
    question: "<?php echo $x128;?>",
    options: ["<?php echo $x128_1 ;?>", "<?php echo $x128_2 ;?>", "<?php echo $x128_3 ;?>", "<?php echo $x128_4 ;?>"],
    answer: <?php echo $x_ans128;?>,
  },
{
    question: "<?php echo $x129 ;?>",
    options: ["<?php echo $x129_1 ;?>", "<?php echo $x129_2 ;?>", "<?php echo $x129_3 ;?>", "<?php echo $x129_4 ;?>"],
    answer: <?php echo $x_ans129;?>,
  },
{
    question: "<?php echo $x130 ;?>",
    options: ["<?php echo $x130_1 ;?>", "<?php echo $x130_2 ;?>", "<?php echo $x130_3 ;?>", "<?php echo $x130_4 ;?>"],
    answer: <?php echo $x_ans130;?>,
  },
{
    question: "<?php echo $x131 ;?>",
    options: ["<?php echo $x131_1?>", "<?php echo $x131_2?>", "<?php echo $x131_3?>", "<?php echo $x131_4?>"],
    answer: <?php echo $x_ans131;?>,
  },
{ 
    question: "<?php  echo $x132;?>",

    options: ["<?php echo $x132_1 ;?>", "<?php echo $x132_2 ?>", "<?php echo $x132_3 ?>", "<?php echo $x132_4 ?>"],
    answer: <?php echo $x_ans132;?>,
  },
{
    question: "<?php echo $x133;?>",
    options: ["<?php echo $x133_1 ;?>", "<?php echo $x133_2 ;?>", "<?php echo $x133_3 ;?>", "<?php echo $x133_4 ;?>"],
    answer: <?php echo $x_ans133;?>,
  },
{
    question: "<?php echo $x134 ;?>",
    options: ["<?php echo $x134_1 ;?>", "<?php echo $x134_2 ;?>", "<?php echo $x134_3 ;?>", "<?php echo $x134_4 ;?>"],
    answer: <?php echo $x_ans134;?>,
  },
{
    question: "<?php echo $x135 ;?>",
    options: ["<?php echo $x135_1 ;?>", "<?php echo $x135_2 ;?>", "<?php echo $x135_3 ;?>", "<?php echo $x135_4 ;?>"],
    answer: <?php echo $x_ans135;?>,
  },
{
    question: "<?php echo $x136 ?>",
    options: ["<?php echo $x136_1?>", "<?php echo $x136_2?>", "<?php echo $x136_3?>", "<?php echo $x136_4?>"],
    answer: <?php echo $x_ans136;?>,
  },
{ 
    question: "<?php  echo $x137;?>",
    options: ["<?php echo $x137_1 ;?>", "<?php echo $x137_2 ?>", "<?php echo $x137_3?>", "<?php echo $x137_4 ?>"],
    answer: <?php echo $x_ans137;?>,
  },
  {
    question: "<?php echo $x138;?>",
    options: ["<?php echo $x138_1 ;?>", "<?php echo $x138_2 ;?>", "<?php echo $x138_3 ;?>", "<?php echo $x138_4 ;?>"],
    answer: <?php echo $x_ans138;?>,
  },
{
    question: "<?php echo $x139 ;?>",
    options: ["<?php echo $x139_1 ;?>", "<?php echo $x139_2 ;?>", "<?php echo $x139_3 ;?>", "<?php echo $x139_4 ;?>"],
    answer: <?php echo $x_ans139;?>,
  },
{
    question: "<?php echo $x140 ;?>",
    options: ["<?php echo $x140_1 ;?>", "<?php echo $x140_2 ;?>", "<?php echo $x140_3 ;?>", "<?php echo $x140_4 ;?>"],
    answer: <?php echo $x_ans140;?>,
  },
{
    question: "<?php echo $x141 ;?>",
    options: ["<?php echo $x141_1?>", "<?php echo $x141_2?>", "<?php echo $x141_3?>", "<?php echo $x141_4?>"],
    answer: <?php echo $x_ans141;?>,
  },
 { 
    question: "<?php  echo $x142;?>",
    options: ["<?php echo $x142_1 ;?>", "<?php echo $x142_2 ?>", "<?php echo $x142_3?>", "<?php echo $x142_4 ?>"],
    answer: <?php echo $x_ans142;?>,
  },
{
    question: "<?php echo $x143;?>",
    options: ["<?php echo $x143_1 ;?>", "<?php echo $x143_2 ;?>", "<?php echo $x143_3 ;?>", "<?php echo $x143_4 ;?>"],
    answer: <?php echo $x_ans143;?>,
  },
 {
    question: "<?php echo $x144 ;?>",
    options: ["<?php echo $x144_1 ;?>", "<?php echo $x144_2 ;?>", "<?php echo $x144_3 ;?>", "<?php echo $x144_4 ;?>"],
    answer: <?php echo $x_ans144;?>,
  },
{
    question: "<?php echo $x145 ;?>",
    options: ["<?php echo $x145_1 ;?>", "<?php echo $x145_2 ;?>", "<?php echo $x145_3 ;?>", "<?php echo $x145_4 ;?>"],
    answer: <?php echo $x_ans145;?>,
  },
{
    question: "<?php echo $x146 ?>",
    options: ["<?php echo $x146_1?>", "<?php echo $x146_2?>", "<?php echo $x146_3?>", "<?php echo $x146_4?>"],
    answer: <?php echo $x_ans146;?>,
  },
{ 
    question: "<?php  echo $x147;?>",
    options: ["<?php echo $x147_1 ;?>", "<?php echo $x147_2 ?>", "<?php echo $x147_3 ?>", "<?php echo $x147_4 ?>"],
    answer: <?php echo $x_ans147;?>,
  },
{
    question: "<?php echo $x148;?>",
    options: ["<?php echo $x148_1 ;?>", "<?php echo $x148_2 ;?>", "<?php echo $x148_3 ;?>", "<?php echo $x148_4 ;?>"],
    answer: <?php echo $x_ans148;?>,
  },
{
    question: "<?php echo $x149;?>",
    options: ["<?php echo $x149_1 ;?>", "<?php echo $x149_2 ;?>", "<?php echo $x149_3 ;?>", "<?php echo $x149_4 ;?>"],
    answer: <?php echo $x_ans149;?>,
  },
{
    question: "<?php echo $x150 ;?>",
    options: ["<?php echo $x150_1 ;?>", "<?php echo $x150_2 ;?>", "<?php echo $x150_3 ;?>", "<?php echo $x150_4 ;?>"],
    answer: <?php echo $x_ans150;?>,
  },

{
    question: "<?php echo $x151 ;?>",
    options: ["<?php echo $x151_1?>", "<?php echo $x151_2?>", "<?php echo $x151_3?>", "<?php echo $x151_4?>"],
    answer: <?php echo $x_ans151;?>,
  },
{ 
    question: "<?php  echo $x152;?>",
    options: ["<?php echo $x152_1 ;?>", "<?php echo $x152_2 ?>", "<?php echo $x152_3 ?>", "<?php echo $x152_4 ?>"],
    answer: <?php echo $x_ans152;?>,
  },
{
    question: "<?php echo $x153;?>",
    options: ["<?php echo $x153_1 ;?>", "<?php echo $x153_2 ;?>", "<?php echo $x153_3 ;?>", "<?php echo $x153_4 ;?>"],
    answer: <?php echo $x_ans153;?>,
  },
 {
    question: "<?php echo $x154 ;?>",
    options: ["<?php echo $x154_1 ;?>", "<?php echo $x154_2 ;?>", "<?php echo $x154_3 ;?>", "<?php echo $x154_4 ;?>"],
    answer: <?php echo $x_ans154;?>,
  },
{
    question: "<?php echo $x155 ;?>",
    options: ["<?php echo $x155_1 ;?>", "<?php echo $x155_2 ;?>", "<?php echo $x155_3 ;?>", "<?php echo $x155_4 ;?>"],
    answer: <?php echo $x_ans155;?>,
  },
{
    question: "<?php echo $x156 ?>",
    options: ["<?php echo $x156_1?>", "<?php echo $x156_2?>", "<?php echo $x156_3?>", "<?php echo $x156_4?>"],
    answer: <?php echo $x_ans156;?>,
  },
{ 
    question: "<?php  echo $x157;?>",
    options: ["<?php echo $x157_1 ;?>", "<?php echo $x157_2 ?>", "<?php echo $x157_3 ?>", "<?php echo $x157_4 ?>"],
    answer: <?php echo $x_ans157;?>,
  },
{
    question: "<?php echo $x158;?>",
    options: ["<?php echo $x158_1 ;?>", "<?php echo $x158_2 ;?>", "<?php echo $x158_3 ;?>", "<?php echo $x158_4 ;?>"],
    answer: <?php echo $x_ans158;?>,
  },
{
    question: "<?php echo $x159 ;?>",
    options: ["<?php echo $x159_1 ;?>", "<?php echo $x159_2 ;?>", "<?php echo $x159_3 ;?>", "<?php echo $x159_4 ;?>"],
    answer: <?php echo $x_ans159;?>,
  },
{
    question: "<?php echo $x160 ;?>",
    options: ["<?php echo $x160_1 ;?>", "<?php echo $x160_2 ;?>", "<?php echo $x160_3 ;?>", "<?php echo $x160_4 ;?>"],
    answer: <?php echo $x_ans160;?>,
  },
{
    question: "<?php echo $x161 ;?>",
    options: ["<?php echo $x161_1;?>", "<?php echo $x161_2?>", "<?php echo $x161_3?>", "<?php echo $x161_4?>"],
    answer: <?php echo $x_ans161;?>,
  },
{ 
    question: "<?php  echo $x162;?>",
    options: ["<?php echo $x162_1 ;?>", "<?php echo $x162_2 ?>", "<?php echo $x162_3 ?>", "<?php echo $x162_4 ?>"],
    answer: <?php echo $x_ans162;?>,
  },
{
    question: "<?php echo $x163;?>",
    options: ["<?php echo $x163_1 ;?>", "<?php echo $x163_2 ;?>", "<?php echo $x163_3 ;?>", "<?php echo $x163_4 ;?>"],
    answer: <?php echo $x_ans163;?>,
  },
{
    question: "<?php echo $x164 ;?>",
    options: ["<?php echo $x164_1 ;?>", "<?php echo $x164_2 ;?>", "<?php echo $x164_3 ;?>", "<?php echo $x164_4 ;?>"],
    answer: <?php echo $x_ans164;?>,
  },
{
    question: "<?php echo $x165 ;?>",
    options: ["<?php echo $x165_1 ;?>", "<?php echo $x165_2 ;?>", "<?php echo $x165_3 ;?>", "<?php echo $x165_4 ;?>"],
    answer: <?php echo $x_ans165;?>,
  },
{
    question: "<?php echo $x166 ?>",
    options: ["<?php echo $x166_1?>", "<?php echo $x166_2?>", "<?php echo $x166_3?>", "<?php echo $x166_4?>"],
    answer: <?php echo $x_ans166;?>,
  },
{ 
    question: "<?php  echo $x167;?>",
    options: ["<?php echo $x167_1 ;?>", "<?php echo $x167_2 ?>", "<?php echo $x167_3 ?>", "<?php echo $x167_4 ?>"],
    answer: <?php echo $x_ans167;?>,
  },
{
    question: "<?php echo $x168;?>",
    options: ["<?php echo $x168_1 ;?>", "<?php echo $x168_2 ;?>", "<?php echo $x168_3 ;?>", "<?php echo $x168_4 ;?>"],
    answer: <?php echo $x_ans168;?>,
  },
{
    question: "<?php echo $x169 ;?>",
    options: ["<?php echo $x169_1 ;?>", "<?php echo $x169_2 ;?>", "<?php echo $x169_3 ;?>", "<?php echo $x169_4 ;?>"],
    answer: <?php echo $x_ans169;?>,
  },
{
    question: "<?php echo $x170 ;?>",
    options: ["<?php echo $x170_1 ;?>", "<?php echo $x170_2 ;?>", "<?php echo $x170_3 ;?>", "<?php echo $x170_4 ;?>"],
    answer: <?php echo $x_ans170;?>,
  },

{
    question: "<?php echo $x171 ;?>",
    options: ["<?php echo $x171_1;?>", "<?php echo $x171_2?>", "<?php echo $x171_3?>", "<?php echo $x171_4?>"],
    answer: <?php echo $x_ans171;?>,
  }, 
{ 
    question: "<?php  echo $x172;?>",
    options: ["<?php echo $x172_1 ;?>", "<?php echo $x172_2 ?>", "<?php echo $x172_3 ?>", "<?php echo $x172_4 ?>"],
    answer: <?php echo $x_ans172;?>,
  },
{
    question: "<?php echo $x173;?>",
    options: ["<?php echo $x173_1 ;?>", "<?php echo $x173_2 ;?>", "<?php echo $x173_3 ;?>", "<?php echo $x173_4 ;?>"],
    answer: <?php echo $x_ans173;?>,
  },
{
    question: "<?php echo $x174 ;?>",
    options: ["<?php echo $x174_1 ;?>", "<?php echo $x174_2 ;?>", "<?php echo $x174_3 ;?>", "<?php echo $x174_4 ;?>"],
    answer: <?php echo $x_ans174;?>,
  },

{
    question: "<?php echo $x175 ;?>",
    options: ["<?php echo $x175_1 ;?>", "<?php echo $x175_2 ;?>", "<?php echo $x175_3 ;?>", "<?php echo $x175_4 ;?>"],
    answer: <?php echo $x_ans175;?>,
  },
{
    question: "<?php echo $x176 ;?>",
    options: ["<?php echo $x176_1?>", "<?php echo $x176_2?>", "<?php echo $x176_3?>", "<?php echo $x176_4?>"],
    answer: <?php echo $x_ans176;?>,
  },
{ 
    question: "<?php  echo $x177;?>",
    options: ["<?php echo $x177_1 ;?>", "<?php echo $x177_2 ?>", "<?php echo $x177_3 ?>", "<?php echo $x177_4 ?>"],
    answer: <?php echo $x_ans177;?>,
  },
{
    question: "<?php echo $x178;?>",
    options: ["<?php echo $x178_1 ;?>", "<?php echo $x178_2 ;?>", "<?php echo $x178_3 ;?>", "<?php echo $x178_4 ;?>"],
    answer: <?php echo $x_ans178;?>,
  },
{
    question: "<?php echo $x179 ;?>",
    options: ["<?php echo $x179_1 ;?>", "<?php echo $x179_2 ;?>", "<?php echo $x179_3 ;?>", "<?php echo $x179_4 ;?>"],
    answer: <?php echo $x_ans4;?>,
  },
{
    question: "<?php echo $x180 ;?>",
    options: ["<?php echo $x180_1 ;?>", "<?php echo $x180_2 ;?>", "<?php echo $x180_3 ;?>", "<?php echo $x180_4 ;?>"],
    answer: <?php echo $x_ans180;?>,
  },
{
    question: "<?php echo $x181 ?>",
    options: ["<?php echo $x181_1?>", "<?php echo $x181_2?>", "<?php echo $x181_3?>", "<?php echo $x181_4?>"],
    answer: <?php echo $x_ans181;?>,
  },
{ 
    question: "<?php  echo $x182;?>",
    options: ["<?php echo $x182_1 ;?>", "<?php echo $x182_2 ?>", "<?php echo $x182_3 ?>", "<?php echo $x182_4 ?>"],
    answer: <?php echo $x_ans182;?>,
  },
{
    question: "<?php echo $x183;?>",
    options: ["<?php echo $x183_1 ;?>", "<?php echo $x183_2 ;?>", "<?php echo $x183_3 ;?>", "<?php echo $x183_4 ;?>"],
    answer: <?php echo $x_ans183;?>,
  },
{
    question: "<?php echo $x184 ;?>",
    options: ["<?php echo $x184_1 ;?>", "<?php echo $x184_2 ;?>", "<?php echo $x184_3 ;?>", "<?php echo $x184_4 ;?>"],
    answer: <?php echo $x_ans184;?>,
  },
{
    question: "<?php echo $x185 ;?>",
    options: ["<?php echo $x185_1 ;?>", "<?php echo $x185_2 ;?>", "<?php echo $x185_3 ;?>", "<?php echo $x185_4 ;?>"],
    answer: <?php echo $x_ans185;?>,
  },
{
    question: "<?php echo $x186 ;?>",
    options: ["<?php echo $x186_1?>", "<?php echo $x186_2?>", "<?php echo $x186_3?>", "<?php echo $x186_4?>"],
    answer: <?php echo $x_ans186;?>,
  },
{ 
    question: "<?php  echo $x187;?>",
    options: ["<?php echo $x187_1 ;?>", "<?php echo $x187_2 ?>", "<?php echo $x187_3 ?>", "<?php echo $x187_4 ?>"],
    answer: <?php echo $x_ans187;?>,
  },
{
    question: "<?php echo $x188;?>",
    options: ["<?php echo $x188_1 ;?>", "<?php echo $x188_2 ;?>", "<?php echo $x188_3 ;?>", "<?php echo $x188_4 ;?>"],
    answer: <?php echo $x_ans188;?>,
  },
{
    question: "<?php echo $x189 ;?>",
    options: ["<?php echo $x189_1 ;?>", "<?php echo $x189_2 ;?>", "<?php echo $x189_3 ;?>", "<?php echo $x189_4 ;?>"],
    answer: <?php echo $x_ans189;?>,
  },
{
    question: "<?php echo $x190 ;?>",
    options: ["<?php echo $x190_1 ;?>", "<?php echo $x190_2 ;?>", "<?php echo $x190_3 ;?>", "<?php echo $x190_4 ;?>"],
    answer: <?php echo $x_ans190;?>,
  },
{
    question: "<?php echo $x191 ?>",
    options: ["<?php echo $x191_1?>", "<?php echo $x191_2?>", "<?php echo $x191_3?>", "<?php echo $x191_4?>"],
    answer: <?php echo $x_ans191;?>,
  },
{ 
    question: "<?php  echo $x192;?>",
    options: ["<?php echo $x192_1 ;?>", "<?php echo $x192_2 ?>", "<?php echo $x192_3 ?>", "<?php echo $x192_4 ?>"],
    answer: <?php echo $x_ans192;?>,
  },
{
    question: "<?php echo $x193;?>",
    options: ["<?php echo $x193_1 ;?>", "<?php echo $x193_2 ;?>", "<?php echo $x193_3 ;?>", "<?php echo $x193_4 ;?>"],
    answer: <?php echo $x_ans193;?>,
  },
{
    question: "<?php echo $x194 ;?>",
    options: ["<?php echo $x194_1 ;?>", "<?php echo $x194_2 ;?>", "<?php echo $x194_3 ;?>", "<?php echo $x194_4 ;?>"],
    answer: <?php echo $x_ans194;?>,
  },
{
    question: "<?php echo $x195 ;?>",
    options: ["<?php echo $x195_1 ;?>", "<?php echo $x195_2 ;?>", "<?php echo $x195_3 ;?>", "<?php echo $x195_4 ;?>"],
    answer: <?php echo $x_ans195;?>,
  },
{
    question: "<?php echo $x196 ;?>",
    options: ["<?php echo $x196_1?>", "<?php echo $x196_2?>", "<?php echo $x196_3?>", "<?php echo $x196_4?>"],
    answer: <?php echo $x_ans196;?>,
  },
{ 
    question: "<?php  echo $x197;?>",
    options: ["<?php echo $x197_1 ;?>", "<?php echo $x197_2 ?>", "<?php echo $x197_3 ?>", "<?php echo $x197_4 ?>"],
    answer: <?php echo $x_ans197;?>,
  },
{
    question: "<?php echo $x198;?>",
    options: ["<?php echo $x198_1 ;?>", "<?php echo $x198_2 ;?>", "<?php echo $x23_3 ;?>", "<?php echo $x198_4 ;?>"],
    answer: <?php echo $x_ans198;?>,
  },
{
    question: "<?php echo $x199 ;?>",
    options: ["<?php echo $x199_1 ;?>", "<?php echo $x199_2 ;?>", "<?php echo $x199_3 ;?>", "<?php echo $x199_4 ;?>"],
    answer: <?php echo $x_ans199;?>,
  },
{
    question: "<?php echo $x200 ;?>",
    options: ["<?php echo $x200_1 ;?>", "<?php echo $x200_2 ;?>", "<?php echo $x200_3 ;?>", "<?php echo $x200_4 ;?>"],
    answer: <?php echo $x_ans200;?>,
  },

];

        function updateQuestionbynum(i) {
            currentQuestion=i;
            var nextButton = document.querySelector(".nextbtn");
    if (currentQuestion == totalQuestions) {
        nextButton.innerHTML = "Submit";
        nextButton.classList.add("disablebtn");
    } else {
        nextButton.innerHTML = "Next";
        nextButton.classList.remove("disablebtn");
    }
            var questionNumberElements = document.getElementsByClassName("question-number");
            for (var i = 0; i < questionNumberElements.length; i++) {
                questionNumberElements[i].classList.remove("current-question");
            }
            questionNumberElements[currentQuestion - 1].classList.add("current-question");

            var questionTextElement = document.querySelector(".question-text");
            questionTextElement.innerHTML = currentQuestion +"."+questions[currentQuestion-1].question;
            var optionsT = questions[currentQuestion-1].options;
            var text= questions[currentQuestion-1].options[0];
            var text2 =questions[currentQuestion-1].options[1];
            var text3= questions[currentQuestion-1].options[2];
            var text4 =questions[currentQuestion-1].options[3];
             var option1 = document.getElementById("option1").innerHTML= text;
            
            var option2 = document.getElementById("option2").innerHTML=text2;
            var option3 = document.getElementById("option3").innerHTML=text3;
            var option4 = document.getElementById("option4").innerHTML=text4;
 
            option1.textContent = optionsT[0];
                     
            var radios = document.querySelectorAll('input[type="radio"]');
        }
        function updateQuestion() {
           
            var nextButton = document.querySelector(".nextbtn");
    if (currentQuestion == totalQuestions) {
        nextButton.innerHTML = "Submit";
        nextButton.classList.add("disablebtn");
    } else {
        nextButton.innerHTML = "Next";
        nextButton.classList.remove("disablebtn");
    }
            var questionNumberElements = document.getElementsByClassName("question-number");
            for (var i = 0; i < questionNumberElements.length; i++) {
                questionNumberElements[i].classList.remove("current-question");
            }
            questionNumberElements[currentQuestion - 1].classList.add("current-question");

            var questionTextElement = document.querySelector(".question-text");
            questionTextElement.innerHTML = currentQuestion +" "+questions[currentQuestion-1].question + currentQuestion + "?";
            var optionsT = questions[currentQuestion-1].options;
            var text= questions[currentQuestion-1].options[0];
            var text2 =questions[currentQuestion-1].options[1];
            var text3= questions[currentQuestion-1].options[2];
            var text4 =questions[currentQuestion-1].options[3];
             var option1 = document.getElementById("option1").innerHTML= text;
            
            var option2 = document.getElementById("option2").innerHTML=text2;
            var option3 = document.getElementById("option3").innerHTML=text3;
            var option4 = document.getElementById("option4").innerHTML=text4;
 
            option1.textContent = optionsT[0];
                     
            var radios = document.querySelectorAll('input[type="radio"]');
        }
        updateQuestion();
    </script>
</body>
</html>
