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
  <h1 style="color: green;">Class I maths</h1>
  <p>Here is a list of all of the maths skills students learn in class I! These skills are organised into categories, and you can move your mouse over any skill name to preview the skill. To start practising, just click on any link. IXL will track your score, and the questions will automatically increase in difficulty as you improve!</p>
  <div class="row">
    <div class="col-md-4">
      <pre>
<b style="color: #7cfc00">Counting and number patterns</b>
A.1 Counting review - up to 10
A.2 Count to fill a ten frame
A.3 Counting review - up to 20
A.4 Counting tens and ones - up to 30
A.5 Count on ten frames - up to 40
A.6 Counting - up to 100
A.7 Counting tens and ones - up to 99
A.8 Counting by twos, fives and tens with pictures
A.9 Counting by twos, fives and tens
A.10  Counting forward and backward
A.11  Number lines - up to 100
A.12  Hundred chart
A.13  Even or odd
A.14  Identify numbers as even or odd
A.15  Even or odd numbers on number lines
A.16  Which even or odd number comes before or after?
A.17  Skip-counting patterns - with tables
A.18  Sequences - count up and down by 1, 2, 3, 5 and 10
A.19  Sequences - count up and down by 100
A.20  Ordinal numbers
A.21  Writing numbers in words
<b style="color: #7cfc00">Place values</b>
B.1 Place value models - tens and ones
B.2 Place value models - up to hundreds
B.3 Write tens and ones - up to 30
B.4 Write tens and ones - up to 100
<b style="color: #7cfc00">Understand addition</b>
C.1 Add with pictures - sums up to 10
C.2 Addition sentences - sums up to 10
C.3 Addition sentences using number lines - sums up to 10
C.4 Adding zero
<b style="color: #7cfc00">Addition skill builders</b>
D.1 Adding 1
D.2 Adding 2
D.3 Adding 3
D.4 Adding 4
D.5 Adding 5
D.6 Adding 6
D.7 Adding 7
D.8 Adding 8
D.9 Adding 9
D.10  Adding 0
<b style="color: #7cfc00">Addition</b>
E.1 Addition facts - sums up to 10
E.2 Ways to make a number - addition sentences
E.3 Make a number using addition - sums up to 10
E.4 Complete the addition sentence - sums up to 10
E.5 Addition word problems - sums up to 10
E.6 Addition sentences for word problems - sums up to 10
E.7 Addition facts - sums up to 18
E.8 Addition sentences using number lines - sums up to 18
E.9 Addition word problems - sums up to 18
E.10  Addition sentences for word problems - sums up to 18
E.11  Addition facts - sums up to 20
E.12  Make a number using addition - sums up to 20
E.13  Addition sentences for word problems - sums up to 20
E.14  Related addition facts
E.15  Addition sentences: true or false?
E.16  Add a one-digit number to a two-digit number - without regrouping
E.17  Add a one-digit number to a two-digit number - with regrouping
      </pre>
    </div>
    <div class="col-md-4">
      <pre>
<b style="color: #7cfc00">Addition strategies</b>
F.1 Add doubles
F.2 Add using doubles plus one
F.3 Add using doubles minus one
F.4 Add three numbers - use doubles
F.5 Complete the addition sentence - make ten
F.6 Add three numbers - make ten
F.7 Add two multiples of ten
F.8 Add a multiple of ten
F.9 Add three numbers
F.10  Add three numbers - word problems
<b style="color: #7cfc00">Understand subtraction</b>
G.1 Subtract with pictures - numbers up to 10
G.2 Subtraction sentences - numbers up to 10
G.3 Subtraction sentences using number lines - numbers up to 10
G.4 Subtract zero and all
<b style="color: #7cfc00">Subtraction skill builders</b>
H.1 Subtracting 1
H.2 Subtracting 2
H.3 Subtracting 3
H.4 Subtracting 4
H.5 Subtracting 5
H.6 Subtracting 6
H.7 Subtracting 7
H.8 Subtracting 8
H.9 Subtracting 9
H.10  Subtracting 0
<b style="color: #7cfc00">Subtraction</b>
I.1 Subtraction facts - numbers up to 10
I.2 Ways to make a number - subtraction sentences
I.3 Ways to subtract from a number - subtraction sentences
I.4 Make a number using subtraction - numbers up to 10
I.5 Complete the subtraction sentence
I.6 Subtraction word problems - numbers up to 10
I.7 Subtraction sentences for word problems - numbers up to 10
I.8 Subtraction facts - numbers up to 18
I.9 Subtraction sentences using number lines - numbers up to 18
I.10  Subtraction word problems - numbers up to 18
I.11  Subtraction sentences for word problems - numbers up to 18
I.12  Make a number using subtraction - numbers up to 20
I.13  Related subtraction facts
I.14  Subtraction sentences: true or false?
I.15  Subtract a one-digit number from a two-digit number - without regrouping
I.16  Subtract a one-digit number from a two-digit number - with regrouping
<b style="color: #7cfc00">Subtraction strategies</b>
J.1 Relate addition and subtraction sentences
J.2 Subtract doubles
J.3 Subtract multiples of 10
J.4 Subtract a multiple of 10
<b style="color: #7cfc00">Comparing</b>
K.1 Comparing - review
K.2 Comparing numbers up to 10
K.3 Comparing numbers up to 100
K.4 Comparison word problems
<b style="color: #7cfc00">Estimation</b>
L.1 Estimate to the nearest ten
<b style="color: #7cfc00">Two-dimensional shapes</b>
M.1 Name the two-dimensional shape
M.2 Select two-dimensional shapes
M.3 Count sides and vertices
M.4 Compare sides and vertices
M.5 Open and closed shapes
M.6 Flip, turn and slide
M.7 Symmetry
      </pre>
    </div>
    <div class="col-md-4">
      <pre>
<b style="color: #7cfc00">Three-dimensional shapes</b>
N.1 Two-dimensional and three-dimensional shapes
N.2 Name the three-dimensional shape
N.3 Cubes and rectangular prisms
N.4 Select three-dimensional shapes
N.5 Count vertices, edges and faces
N.6 Compare vertices, edges and faces
N.7 Identify shapes traced from solids
N.8 Identify faces of three-dimensional shapes
N.9 Shapes of everyday objects I
N.10  Shapes of everyday objects II
<b style="color: #7cfc00">Spatial sense</b>
O.1 Above and below
O.2 Beside and next to
O.3 Left, middle and right
O.4 Top, middle and bottom
O.5 Location in a grid
<b style="color: #7cfc00">Data and graphs</b>
P.1 Which picture graph is correct?
P.2 Interpret picture graphs
P.3 Which tally chart is correct?
P.4 Interpret tally charts
P.5 Which table is correct?
P.6 Interpret data in tables
<b style="color: #7cfc00">Measurement</b>
Q.1 Long and short
Q.2 Tall and short
Q.3 Light and heavy
Q.4 Compare size and weight
<b style="color: #7cfc00">Money</b>
R.1 Coin values
R.2 Count coins
R.3 Count notes
<b style="color: #7cfc00">Patterns</b>
S.1 Introduction to patterns
S.2 Find the next shape in a pattern
S.3 Complete a pattern
S.4 Make a pattern
S.5 Growing patterns
S.6 Find the next shape in a growing pattern
S.7 Find the next row in a growing pattern
<b style="color: #7cfc00">Probability</b>
T.1 More, less and equally likely
T.2 Certain, probable, unlikely and impossible
Sorting, ordering and classifying
U.1 Sort shapes into a Venn diagram
U.2 Count shapes in a Venn diagram
U.3 Put numbers in order
<b style="color: #7cfc00">Time</b>
V.1 Days of the week
V.2 Seasons of the year
V.3 Read a calendar
V.4 Months of the year
V.5 A.M. or P.M.
<b style="color: #7cfc00">Mixed operations</b>
W.1 Addition and subtraction - ways to make a number
W.2 Which sign makes the number sentence true?
W.3 Fact families
W.4 Addition and subtraction facts - numbers up to 10
W.5 Addition and subtraction facts - numbers up to 18
W.6 Addition and subtraction word problems
W.7 Addition and subtraction terms
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