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
  <h1 style="color: green;">Upper kindergarten maths</h1>
  <p>Here is a list of all of the maths skills students learn in UKG! These skills are organised into categories, and you can move your mouse over any skill name to preview the skill. To start practising, just click on any link. IXL will track your score, and the questions will automatically  </p>
  <div class="row">
    <div class="col-md-4">
      <pre>
<b style="color:#7cfc00">Numbers and counting up to 3</b>
A.1 Learn to count to 3
A.2 Count to 3
A.3 Count using stickers - up to 3
A.4 Count on ten frames - up to 3
A.5 Show numbers on ten frames - up to 3
A.6 Represent numbers - up to 3
<b style="color:#7cfc00">Numbers and counting up to 5</b>
B.1 Learn to count to 5
B.2 Count to 5
B.3 Count using stickers - up to 5
B.4 Count on ten frames - up to 5
B.5 Show numbers on ten frames - up to 5
B.6 Represent numbers - up to 5
B.7 One more - up to 5
B.8 Count one more - up to 5
B.9 One less - up to 5
B.10  Count one less - up to 5
<b style="color:#7cfc00;">Numbers and counting up to 10</b>
C.1 Learn to count to 10
C.2 Count to 10
C.3 Count using stickers - up to 10
C.4 Count on ten frames - up to 10
C.5 Show numbers on ten frames - up to 10
C.6 Represent numbers - up to 10
C.7 One more - up to 10
C.8 Count one more - up to 10
C.9 One less - up to 10
C.10  Count one less - up to 10
C.11  One more and one less - up to 10
C.12  Count one more and one less - up to 10
C.13  Count up and down - with numbers
C.14  Count to fill a ten frame
C.15  Tally marks - up to 10
C.16  Number lines - up to 10
C.17  Before, after and between - up to 10
C.18  Count forward and backward - up to 10
C.19  Names of numbers - up to 10
C.20  Complete a sequence - up to 10
<b style="color:#7cfc00">Numbers and counting up to 20</b>
D.1 Count to 20
D.2 Count on ten frames - up to 20
D.3 Show numbers on ten frames - up to 20
D.4 Represent numbers - up to 20
D.5 Count up and down
D.6 Tally marks - up to 20
D.7 Number lines - up to 20
D.8 Before, after and between - up to 20
D.9 Count forward and backward - up to 20
D.10  Names of numbers - up to 20
D.11  Complete a sequence - up to 20
D.12  Count tens and ones - up to 20
D.13  Learn to skip-count by twos
D.14  Skip-count by twos
D.15  Skip-count by twos on ten frames
<b style="color:#7cfc00;">Comparing</b>
E.1 Are there enough?
E.2 Fewer and more - compare by matching
E.3 Fewer and more - compare by counting
E.4 Fewer and more - compare in a mixed group
E.5 Fewer, more and same
E.6 Compare two numbers - up to 10
E.7 Compare three numbers - up to 10
      </pre>
    </div>
    <div class="col-md-4">
      <pre>
<b style="color: #7cfc00">Patterns</b>
F.1 Colour patterns
F.2 Size patterns
F.3 Shape patterns
F.4 Find the next shape in a pattern
F.5 Complete a pattern
F.6 Growing patterns
F.7 Find the next shape in a growing pattern
F.8 Find the next row in a growing pattern
<b style="color: #7cfc00">Positions</b>
G.1 Inside and outside
G.2 Above and below
G.3 Above and below - find solid figures
G.4 Beside and next to
G.5 Beside and next to - find solid figures
G.6 Left, middle and right
G.7 Top, middle and bottom
G.8 Location in a grid
<b style="color: #7cfc00">Addition up to 5</b>
H.1 Add with pictures - sums up to 5
H.2 Addition sentences - sums up to 5
H.3 Make a number using addition - sums up to 5
H.4 Add two numbers - sums up to 5
H.5 Complete the addition sentence - sums up to 5
H.6 Addition word problems - sums up to 5
<b style="color: #7cfc00">Addition up to 10</b>
I.1 Add with pictures - sums up to 10
I.2 Addition sentences - sums up to 10
I.3 Make a number using addition - sums up to 10
I.4 Add two numbers - sums up to 10
I.5 Complete the addition sentence - sums up to 10
I.6 Complete the addition sentence - make 10
I.7 Write addition sentences
I.8 Addition word problems - sums up to 10
<b style="color: #7cfc00">Subtraction up to 5</b>
J.1 Subtract with pictures - numbers up to 5
J.2 Subtraction sentences - numbers up to 5
J.3 Subtract - numbers up to 5
J.4 Complete the subtraction sentence - numbers up to 5
J.5 Subtraction word problems - numbers up to 5
<b style="color: #7cfc00">Subtraction up to 10</b>
K.1 Subtract with pictures - numbers up to 10
K.2 Subtraction sentences - numbers up to 10
K.3 Make a number using subtraction - numbers up to 10
K.4 Subtract - numbers up to 10
K.5 Complete the subtraction sentence - numbers up to 10
K.6 Write subtraction sentences
K.7 Subtraction word problems - numbers up to 10
      </pre>
    </div>
    <div class="col-md-4">
      <pre>
<b style="color: #7cfc00">Sorting, ordering and classifying</b>
L.1 Same
L.2 Different
L.3 Same and different
L.4 Classify shapes by colour
L.5 Classify and sort by colour
L.6 Classify and sort by shape
L.7 Classify and sort
L.8 Sort shapes into a Venn diagram
L.9 Count shapes in a Venn diagram
L.10  Put numbers up to 10 in order
L.11  Put numbers up to 20 in order
<b style="color: #7cfc00">Data and graphs</b>
M.1 Which picture graph is correct?
<b style="color: #7cfc00">Probability</b>
N.1 More or less likely
<b style="color: #7cfc00">Measurement</b>
O.1 Long and short
O.2 Tall and short
O.3 Wide and narrow
O.4 Light and heavy
<b style="color: #7cfc00">Money</b>
P.1 Coin values
P.2 Count money - 1-rupee coins only
P.3 Count money - 1- and 2-rupee coins
P.4 Count money - 1-, 2- and 5-rupee coins
P.5 Equivalent groups of coins
P.6 Compare two groups of coins
<b style="color: #7cfc00">Two-dimensional shapes</b>
Q.1 Name the two-dimensional shape
Q.2 Circles
Q.3 Triangles
Q.4 Squares and rectangles
Q.5 Hexagons
Q.6 Select two-dimensional shapes
Q.7 Count sides and corners
Q.8 Compare sides and corners
Q.9 Introduction to symmetry
Q.10  Identify pictures with symmetry
<b style="color: #7cfc00">Three-dimensional shapes</b>
R.1 Two-dimensional and three-dimensional shapes
R.2 Name the three-dimensional shape
R.3 Spheres
R.4 Cubes
R.5 Cones
R.6 Cylinders
R.7 Select three-dimensional shapes
R.8 Identify shapes traced from solids
R.9 Shapes of everyday objects I
R.10  Shapes of everyday objects II
<b style="color: #7cfc00">Vocabulary</b>
S.1 Sum and difference
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