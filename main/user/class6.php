<!DOCTYPE html>
<html>
<head>
  <title>EduWorld For Kids | Learn, Exlpore & Grow</title>
  <script type="text/javascript" src="../../assets/js/jquery.js"></script>
  <script type="text/javascript" src="../../assets/js/popper.js"></script>
  <script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="../../assets/js/index.js"></script>
  
  <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">

  <style type="text/css">

  #topimg
  {
    /*border: 1px solid;*/
        background-image: url(../../assets/images/bg/math1.jpg);
        height: 760px;
        background-size: contain;
        width: 100%;


  }
  .skillnext:hover
  {
     opacity:0.8;
     cursor: pointer;
  }
  #mySidenav a {
  position: absolute;
  left: -125px;
  transition: 0.3s;
  padding: 7px;
  width: 180px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
  z-index: 1;
  /*height: 400px;*/
}

#mySidenav a:hover {
  left: 0;
}

#a{
  top: 300px;
  background-color: lightgrey;
}

#b{
  top: 370px;
  background-color: lightgrey;
}

#c {
  top: 440px;
  background-color: lightgrey;
}

#d {
  top: 510px;
  background-color: lightgrey;
}

#e{
  top: 580px;
  background-color: lightgrey;
}

#f{
  top: 650px;
  background-color: lightgrey;
}

#g {
  top: 720px;
  background-color: lightgrey;
}
#h {
  top: 790px;
  background-color: lightgrey;
}
#i {
  top: 860px;
  background-color: lightgrey;
}
#j {
  top: 930px;
  background-color: lightgrey;
}
#k {
  top: 1000px;
  background-color: lightgrey;
}
#l {
  top: 1070px;
  background-color: lightgrey;
}

  </style>
  <!-- <script type="text/javascript">
    $(document).ready(function(){
      // alert();
      $('.skillnext').click(function(){
        alert();
        id=document.getElementById(".skillnext");
        // if(id==lkgmath)
        // {
          // window.location.href="lkgmath.php;"
          alert(id);
        // }
      })
    })
  </script> -->
</head>
<body>  

 <div style="border:1px grey;background-image: linear-gradient(to left,lightgreen,white,white,lightgreen);"><center>
  <a href="index.php">
    <img style="width: 170px;height: 120px;" src="../../assets/images/bg/logo.png">
    
  </a>
  
 </center></div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <!-- <img style="width: 100px;" src="../../assets/images/bg/logo.png"> -->
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="learning.php">Learning</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="analytics.php">Analytics</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Skills Here">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- 2nd menu start -->
<div class="container">
  <div style="padding: 10px;" class="row">
    <div style="border-right: 1px solid grey;" class="col-md-3">
    <center>
      <a href="learning.php">
        <img style="width: 48px;" src="../../assets/images/icons/math-book.png"><br>
    Maths
      </a>
    
    </center>
    </div>
    <div style="border-right: 1px solid grey;" class="col-md-3">
    <center>
      <a href="english.php">
        <img style="width: 48px;" src="../../assets/images/icons/dictionary.png"><br>
    English
      </a>
    
    </center></div>
    <div style="border-right: 1px solid grey;" class="col-md-3">
    <center>
      <a href="nc.php">
         <img style="width: 48px;" src="../../assets/images/icons/flag.png"><br>
      National Curriculum
      </a>
     
    </center></div>
    <div class="col-md-3">
    <center>
      <a href="awards.php">
        <img style="width: 48px;" src="../../assets/images/icons/award.png"><br>
      Awards
      </a>
      
    </center></div>
  </div>
</div>
<!-- 2nd menu end -->
<hr>

<!-- middle start -->


<div id="mySidenav" class="sidenav" style="height: 420px;background-image: linear-gradient(to left ,grey,lightgrey);width: 45px;float: left;">
  <a href="home.php" id="a">LowerKG &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b style="font-size: 25px;">L</b></a>
  <a href="agent.php" id="b">UpperKG&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b style="font-size: 25px;">U</b></a>
  <a href="users.php" id="c">Class I&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b style="font-size: 25px;">I</b> </a>
   <a href="feedback.php" id="d">Class II &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b style="font-size: 25px;">II</b></a>
  <!-- <a href="#" id="d">AddAgent<img style="float: right;width: 45px;" src="../../assets/images/icons/addagentc.png"></a> -->
  <a href="orders.php" id="e">Class III &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b style="font-size: 25px;">III</b></a>
  <a href="delivereds.php" id="f">Class IV &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b style="font-size: 25px;">IV</b></a>
  <a href="adminpower.php" id="g">Class V &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b style="font-size: 25px;">V</b></a>
  <a href="adminpower.php" id="h">Class VI &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b style="font-size: 25px;">VI</b></a>
  <a href="adminpower.php" id="i">Class VII &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b style="font-size: 25px;">VII</b></a>
  <a href="adminpower.php" id="j">Class VIII &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b style="font-size: 25px;">VIII</b></a>
  <a href="adminpower.php" id="k">Class IX &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b style="font-size: 25px;">IX</b></a>
  <a href="adminpower.php" id="l">Class X &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b style="font-size: 25px;">X</b></a>

</div>


<div class="container">
  <h1 style="color: green;">Class VI maths</h1>
  <p>Here is a list of all of the maths skills students learn in class II! These skills are organised into categories, and you can move your mouse over any skill name to preview the skill. To start practising, just click on any link. IXL will track your score, and the questions will automatically increase in difficulty as you improve!</p>
  <div class="row">
    <div class="col-md-4">
      <pre>
<b style="color: #7cfc00">Counting and number patterns</b>
A.1 Skip-counting
A.2 Skip-counting sequences
A.3 Counting patterns - up to 100
A.4 Number lines - up to 100
A.5 Hundreds chart
A.6 Even or odd
A.7 Identify numbers as even or odd
A.8 Select even or odd numbers
A.9 Even or odd numbers on number lines
A.10  Which even or odd number comes before or after?
A.11  Skip-counting stories
A.12  Skip-counting puzzles
<b style="color: #7cfc00">Comparing and ordering</b>
B.1 Comparing numbers up to 100
B.2 Put numbers up to 100 in order
B.3 Greatest and least - word problems - up to 100
<b style="color: #7cfc00">Names of numbers</b>
C.1 Ordinal numbers up to 10th
C.2 Ordinal numbers up to 100th
C.3 Writing numbers up to 100 in words
C.4 Distinguishing ordinal and cardinal numbers
<b style="color: #7cfc00">Patterns</b>
D.1 Repeating patterns
D.2 Growing patterns
D.3 Find the next shape in a pattern
D.4 Complete a repeating pattern
D.5 Make a repeating pattern
D.6 Find the next row in a growing pattern
<b style="color: #7cfc00">Addition - one digit</b>
E.1 Review - add one-digit numbers - sums to 10
E.2 Review - ways to make a number - sums to 10
E.3 Review - writing addition sentences - sums to 10
E.4 Add doubles
E.5 Add one-digit numbers
E.6 Addition with pictures - sums to 20
E.7 Write addition sentences to describe pictures - sums to 20
E.8 Addition input/output tables - sums to 20
E.9 Add zero
E.10  Addition word problems - one digit
E.11  Complete the addition sentence - one digit
E.12  Write the addition sentence - one digit
E.13  Balance addition equations - one digit
E.14  Add three or more one-digit numbers
E.15  Add three or more one-digit numbers - word problems
E.16  Identify repeated addition in arrays: sums to 10
E.17  Write addition sentences for arrays: sums to 10
E.18  Identify repeated addition in arrays: sums to 25
E.19  Write addition sentences for arrays: sums to 25
<b style="color: #7cfc00">Subtraction - one digit</b>
F.1 Review - subtract one-digit numbers - up to 10
F.2 Review - ways to subtract - up to 10
F.3 Review - writing subtraction sentences - up to 10
F.4 Subtract doubles
F.5 Subtract a one-digit number from a two-digit number up to 18
F.6 Subtraction with pictures
F.7 Write subtraction sentences to describe pictures - up to 18
F.8 Subtraction input/output tables - up to 18
F.9 Subtract zero/all
F.10  Subtraction word problems - up to 18
F.11  Complete the subtraction sentence - up to 18
F.12  Write the subtraction sentence - up to 18
F.13  Balance subtraction equations - up to 18
      </pre>
    </div>
    <div class="col-md-4">
      <pre>
<b style="color: #7cfc00">Addition - two digits</b>
G.1 Add multiples of 10
G.2 Add a two-digit and a one-digit number - without regrouping
G.3 Add a two-digit and a one-digit number - with regrouping
G.4 Add two two-digit numbers - without regrouping
G.5 Add two two-digit numbers - with regrouping
G.6 Write addition sentences to describe pictures
G.7 Addition input/output tables - up to two digits
G.8 Ways to make a number using addition
G.9 Addition word problems - up to two digits
G.10  Complete the addition sentence - up to two digits
G.11  Write the addition sentence - up to two digits
G.12  Balance addition equations - up to two digits
G.13  Add three or more numbers up to two digits each
G.14  Add three or more numbers up to two digits - word problems
<b style="color: #7cfc00">Subtraction - two digits</b>
H.1 Subtract multiples of 10
H.2 Subtract a one-digit number from a two-digit number - without regrouping
H.3 Subtract a one-digit number from a two-digit number - with regrouping
H.4 Subtract two two-digit numbers - without regrouping
H.5 Subtract two two-digit numbers - with regrouping
H.6 Write subtraction sentences to describe pictures - up to two digits
H.7 Subtraction input/output tables - up to two digits
H.8 Ways to make a number using subtraction
H.9 Subtraction word problems - up to two digits
H.10  Complete the subtraction sentence - up to two digits
H.11  Write the subtraction sentence - up to two digits
H.12  Balance subtraction equations - up to two digits
<b style="color: #7cfc00">Properties</b>
I.1 Related addition facts
I.2 Related subtraction facts
I.3 Fact families
I.4 Addition and subtraction terms
<b style="color: #7cfc00">Place values</b>
J.1 Place value models - tens and ones
J.2 Place value - tens and ones
J.3 Regroup tens and ones
J.4 Regroup tens and ones - ways to make a number
J.5 Convert to/from a number - tens and ones
J.6 Convert between place values - tens and ones
<b style="color: #7cfc00">Estimation and rounding</b>
K.1 Estimate to the nearest ten
K.2 Round to the nearest ten
K.3 Estimate sums
      </pre>
    </div>
    <div class="col-md-4">
      <pre>
<b style="color: #7cfc00">Money</b>
L.1 Coin values
L.2 Count money - up to 10 rupees
L.3 Count money - up to 50 rupees
L.4 Equivalent amounts of money - up to 10 rupees
L.5 Equivalent amounts of money - up to 50 rupees
L.6 Exchanging coins
L.7 Comparing groups of coins
L.8 Add and subtract money - word problems - up to 10 rupees
L.9 Which picture shows more - up to 10 rupees
L.10  Which picture shows more - up to 50 rupees
L.11  Least number of coins
L.12  Purchases - do you have enough money - up to 10 rupees
L.13  Purchases - do you have enough money - up to 50 rupees
L.14  Making change
<b style="color: #7cfc00">Time</b>
M.1 Days of the week
M.2 Seasons
M.3 Read a calendar
M.4 Months of the year
M.5 Number of days in each month
M.6 Relate time units
M.7 A.M. or P.M.
Data and graphs
N.1 Which tally chart is correct?
N.2 Interpret tally charts
<b style="color: #7cfc00">Geometry</b>
O.1 Name the two-dimensional shape
O.2 Select two-dimensional shapes
O.3 Count sides and vertices
O.4 Compare sides and vertices
O.5 Name the three-dimensional shape
O.6 Select three-dimensional shapes
O.7 Count vertices, edges and faces
O.8 Compare vertices, edges and faces
O.9 Flip, turn and slide
<b style="color: #7cfc00">Measurement</b>
P.1 Long and short
P.2 Tall and short
P.3 Light and heavy
P.4 Holds more or less
P.5 Compare size, weight and capacity
P.6 Choose the appropriate measuring tool
P.7 Measure using objects
P.8 Measure using a centimetre ruler
<b style="color: #7cfc00">Logical reasoning</b>
Q.1 Guess the number
<b style="color: #7cfc00">Probability</b>
R.1 More, less and equally likely
R.2 Certain, probable, unlikely and impossible
<b style="color: #7cfc00">Mixed operations</b>
S.1 Add and subtract numbers up to 20
S.2 Addition and subtraction - ways to make a number - up to 20
S.3 Addition and subtraction word problems - up to 20
S.4 Addition and subtraction - balance equations - up to 20
S.5 Input/output tables - write the rule - up to 20
S.6 Add and subtract numbers up to 100
S.7 Addition and subtraction - ways to make a number - up to 100
S.8 Addition and subtraction word problems - up to 100
S.9 Addition and subtraction - balance equations - up to 100
S.10  Input/output tables - write the rule - up to 100
S.11  Which sign (+ or -) makes the number sentence true?
S.12  Write addition and subtraction sentences
      </pre>
    </div>
  </div>
</div>

<!-- middles end -->

<!-- footer start -->
<div  style="padding: 60px;padding-left: 150px;padding-right: 150px;" id="footer">
  <div class="row">
    <div class="col-md-4">
          &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp   <img style="width: 170px;height: 120px;" src="../../assets/images/bg/logo.png">  

    <br>It is an immersive learning experience<br> that provides comprehensive, <br>curriculum-aligned maths and English<br>content for LKG to class XII.

    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-4">
        <h5 style="color: green;">What We Offer</h5>
        <li><a href="#">Maths</a></li>
        <li><a href="#">English</a></li>
        <li><a href="#">Awards</a></li>
        <li><a href="#">Analytics</a></li>
        <p></p>
      </div>
      <div class="col-md-4">
        <h5 style="color: green;">Resources</h5>
        <li><a href="#">Help Centre<a/></li>
        <li><a href="#">Tell us what you think<a/></li>
        <li><a href="#">Testimonials</a></li>
        <li><a href="#">Contact Us</a></li>
        <p></p>
      </div>
      <div class="col-md-4">
        <h5 style="color: green;">About</h5>
        <p>
          <li><a href="#">Terms of services</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Careers</a></li>
        </p>
      </div>
      </div>
      
    </div>
  </div>
<br>
<hr>
  <div style="color: grey">
    <center>@2019 EduWorld.All Rights reserved</center>
  </div>
</div>
<!-- footer end -->

</body>
</html>