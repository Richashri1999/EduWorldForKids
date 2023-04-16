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
        background-image: url(../../assets/images/bg/img12.jpg);
        height: 600px;
        background-size: cover;
        width: 100%;


	}
	/*cards start*/
	/* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-card {
  background-color: transparent;
  /*border-radius: 100px;*/
  width: 300px;
  height: 200px;
  /*border: 1px solid #f1f1f1;*/
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  border-radius: 70px;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}
.flip-card-front img
{
	height: 200px;width: 300px;border-radius: 80px;
}

/* Style the back side */
.flip-card-back {
  background-color: #adff2f;
  color: white;
  transform: rotateY(180deg);
}
	/*cards end*/

	/*why choose start*/


.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  /*border: 1px solid #f1f1f1;*/
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateX(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  padding: 20px;
  background-color: #00ff7f;
  color: white;
  transform: rotateX(180deg);
}
	/*why choose end*/
	</style>
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



	<!-- <img src="../../assets/images/bg/bgweb.jpg"> -->
<!-- </div> -->
<div id="topimg" class="view intro-2" style="">
        <div class="full-bg-img">
            <div class="mask rgba-purple-light flex-center">
                <div class="container text-center white-text wow fadeInUp"><br>
                    <h2>Making Smart kid, More Smarter</h2>
                    <br>
                    <h5>Most Fun-filled learning.We value every Child.</h5>
                    <!-- <p>Navbar's background will switch from transparent to solid color while scrolling down</p>
                    <br>
                    <p>Full page intro with background image will be always displayed in full screen mode, regardless of device </p> -->
                </div>
            </div>
        </div>
    </div>


<!-- cards start -->
<div style="width: 100%;height: 1050px;padding: 50px;padding-left: 120px;background-image: url(../../assets/images/bg/bg1.jpg);" id="cardparent">
   <div class="row">

    <div class="col-sm-12 col-md-4">
		<div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
                   <img src="../../assets/images/bg/img10.jpg" alt="Avatar">
                   <h2 style="position: absolute;top: 40%;left: 1%;padding: 37px;border-radius: 500px;background-color: lightgreen;box-shadow: 3px 3px 3px 3px green;">&nbsp&nbsp&nbspLKG&nbsp&nbsp&nbsp</h2>
               </div>
               <div class="flip-card-back">
                  <h4>LKG</h4> 
                  <p>Counting Objects,inside and outside,longer and shorter,letter names,rhyming words or more</p>
                  <hr> 
                  <div class="row">
                  	<div class="col-sm-6">Maths<br>English</div>
                  	<div class="col-sm-6">
                  		<li><a href="#">55 skills>></a></li>
                  		<li><a href="#">48 skills>></a></li>
                  	</div>
                  </div>
               </div>
            </div>
        </div>
	</div>

    <div class="col-sm-12 col-md-4">
		<div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
                   <img src="../../assets/images/bg/img10.jpg" alt="Avatar">
                   <h2 style="position: absolute;top: 40%;left: 1%;padding: 37px;border-radius: 500px;background-color: lightgreen;box-shadow: 3px 3px 3px 3px green;">&nbsp&nbspUKG&nbsp&nbsp&nbsp</h2>
                   
               </div>
               <div class="flip-card-back">
                  <h4>UKG</h4> 
                  <p>Counting Objects,inside and outside,longer and shorte&nbspr,letter names,rhyming words or more</p>
                  <hr> 
                  <div class="row">
                  	<div class="col-sm-6">Maths<br>English</div>
                  	<div class="col-sm-6">
                  		<li><a href="#">55 skills>></a></li>
                  		<li><a href="#">48 skills>></a></li>
                  	</div>
                  </div>
               </div>
            </div>
        </div>
	</div>

    <div class="col-sm-12 col-md-4">
		<div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
                   <img style="height: 200px;width: 300px;" src="../../assets/images/bg/img10.jpg" alt="Avatar" style="width:300px;height:300px;">
                    <h2 style="position: absolute;top: 40%;left: 1%;padding: 37px;border-radius: 500px;background-color: lightgreen;box-shadow: 3px 3px 3px 3px green;">&nbspClass I&nbsp</h2>                  
               </div>
               <div class="flip-card-back">
                  <h4>Class I</h4> 
                  <p>Counting Objects,inside and outside,longer and shorter,letter names,rhyming words or more</p>
                  <hr> 
                  <div class="row">
                  	<div class="col-sm-6">Maths<br>English</div>
                  	<div class="col-sm-6">
                  		<li><a href="#">55 skills>></a></li>
                  		<li><a href="#">48 skills>></a></li>
                  	</div>
                  </div>
               </div>
            </div>
        </div>
	</div>		

   </div>
<br><br>

   <div class="row">

    <div class="col-sm-12 col-md-4">
		<div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
                   <img style="height: 200px;width: 300px;" src="../../assets/images/bg/img10.jpg" alt="Avatar" style="width:300px;height:300px;">\
                    <h2 style="position: absolute;top: 40%;left: 1%;padding: 37px;border-radius: 500px;background-color: lightgreen;box-shadow: 3px 3px 3px 3px green;">Class II</h2> 
               </div>
               <div class="flip-card-back">
                  <h4>Class II</h4> 
                  <p>Counting Objects,inside and outside,longer and shorter,letter names,rhyming words or more</p>
                  <hr> 
                  <div class="row">
                  	<div class="col-sm-6">Maths<br>English</div>
                  	<div class="col-sm-6">
                  		<li><a href="#">55 skills>></a></li>
                  		<li><a href="#">48 skills>></a></li>
                  	</div>
                  </div>
               </div>
            </div>
        </div>
	</div>

    <div class="col-sm-12 col-md-4">
		<div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
                   <img style="height: 200px;width: 300px;" src="../../assets/images/bg/img10.jpg" alt="Avatar" style="width:300px;height:300px;">
                    <h2 style="position: absolute;top: 40%;left: 1%;padding: 37px;border-radius: 500px;background-color: lightgreen;box-shadow: 3px 3px 3px 3px green;">Class III</h2> 
               </div>
               <div class="flip-card-back">
                  <h4>Class III</h4> 
                  <p>Counting Objects,inside and outside,longer and shorter,letter names,rhyming words or more</p>
                  <hr> 
                  <div class="row">
                  	<div class="col-sm-6">Maths<br>English</div>
                  	<div class="col-sm-6">
                  		<li><a href="#">55 skills>></a></li>
                  		<li><a href="#">48 skills>></a></li>
                  	</div>
                  </div>
               </div>
            </div>
        </div>
	</div>

    <div class="col-sm-12 col-md-4">
		<div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
                   <img style="height: 200px;width: 300px;" src="../../assets/images/bg/img10.jpg" alt="Avatar" style="width:300px;height:300px;">
                    <h2 style="position: absolute;top: 40%;left: 1%;padding: 37px;border-radius: 500px;background-color: lightgreen;box-shadow: 3px 3px 3px 3px green;">Class IV</h2> 
               </div>
               <div class="flip-card-back">
                  <h4>Class IV</h4> 
                  <p>Counting Objects,inside and outside,longer and shorter,letter names,rhyming words or more</p>
                  <hr> 
                  <div class="row">
                  	<div class="col-sm-6">Maths<br>English</div>
                  	<div class="col-sm-6">
                  		<li><a href="#">55 skills>></a></li>
                  		<li><a href="#">48 skills>></a></li>
                  	</div>
                  </div>
               </div>
            </div>
        </div>
	</div>		

   </div>
<br><br>
   <div class="row">

    <div class="col-sm-12 col-md-4">
		<div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
                   <img style="height: 200px;width: 300px;" src="../../assets/images/bg/img10.jpg" alt="Avatar" style="width:300px;height:300px;">
                    <h2 style="position: absolute;top: 40%;left: 1%;padding: 37px;border-radius: 500px;background-color: lightgreen;box-shadow: 3px 3px 3px 3px green;">Class V</h2> 
               </div>
               <div class="flip-card-back">
                  <h4>Class V</h4> 
                  <p>Counting Objects,inside and outside,longer and shorter,letter names,rhyming words or more</p>
                  <hr> 
                  <div class="row">
                  	<div class="col-sm-6">Maths<br>English</div>
                  	<div class="col-sm-6">
                  		<li><a href="#">55 skills>></a></li>
                  		<li><a href="#">48 skills>></a></li>
                  	</div>
                  </div>
               </div>
            </div>
        </div>
	</div>

    <div class="col-sm-12 col-md-4">
		<div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
                   <img style="height: 200px;width: 300px;" src="../../assets/images/bg/img10.jpg" alt="Avatar" style="width:300px;height:300px;">
                    <h2 style="position: absolute;top: 40%;left: 1%;padding: 37px;border-radius: 500px;background-color: lightgreen;box-shadow: 3px 3px 3px 3px green;">Class VI</h2> 
               </div>
               <div class="flip-card-back">
                  <h4>Class VI</h4> 
                  <p>Counting Objects,inside and outside,longer and shorter,letter names,rhyming words or more</p>
                  <hr> 
                  <div class="row">
                  	<div class="col-sm-6">Maths<br>English</div>
                  	<div class="col-sm-6">
                  		<li><a href="#">55 skills>></a></li>
                  		<li><a href="#">48 skills>></a></li>
                  	</div>
                  </div>
               </div>
            </div>
        </div>
	</div>

    <div class="col-sm-12 col-md-4">
		<div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
                   <img style="height: 200px;width: 300px;" src="../../assets/images/bg/img10.jpg" alt="Avatar" style="width:300px;height:300px;">
                    <h2 style="position: absolute;top: 40%;left: 1%;padding: 37px;border-radius: 500px;background-color: lightgreen;box-shadow: 3px 3px 3px 3px green;">Class VII</h2> 
               </div>
               <div class="flip-card-back">

                  <h4>Class VII</h4> 
                  <p>Counting Objects,inside and outside,longer and shorter,letter names,rhyming words or more</p>
                  <hr> 
                  <div class="row">
                  	<div class="col-sm-6">Maths<br>English</div>
                  	<div class="col-sm-6">
                  		<li><a href="#">55 skills>></a></li>
                  		<li><a href="#">48 skills>></a></li>
                  	</div>
                  </div>
               </div>
            </div>
        </div>
	</div>		

   </div>
<br><br>
   <div class="row">

    <div class="col-sm-12 col-md-4">
		<div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
                   <img style="height: 200px;width: 300px;" src="../../assets/images/bg/img10.jpg" alt="Avatar" style="width:300px;height:300px;">
                    <h2 style="position: absolute;top: 40%;left: 1%;padding: 37px;border-radius: 500px;background-color: lightgreen;box-shadow: 3px 3px 3px 3px green;">Class VIII</h2> 
               </div>
               <div class="flip-card-back">
                  <h4>Class VIII</h4> 
                  <p>Counting Objects,inside and outside,longer and shorter,letter names,rhyming words or more</p>
                  <hr> 
                  <div class="row">
                  	<div class="col-sm-6">Maths<br>English</div>
                  	<div class="col-sm-6">
                  		<li><a href="#">55 skills>></a></li>
                  		<li><a href="#">48 skills>></a></li>
                  	</div>
                  </div>
               </div>
            </div>
        </div>
	</div>

    <div class="col-sm-12 col-md-4">
		<div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
                   <img style="height: 200px;width: 300px;" src="../../assets/images/bg/img10.jpg" alt="Avatar" style="width:300px;height:300px;">
                    <h2 style="position: absolute;top: 40%;left: 1%;padding: 37px;border-radius: 500px;background-color: lightgreen;box-shadow: 3px 3px 3px 3px green;">Class IX</h2> 
               </div>
               <div class="flip-card-back">
                  <h4>Class IX</h4> 
                  <p>Counting Objects,inside and outside,longer and shorter,letter names,rhyming words or more</p>
                  <hr> 
                  <div class="row">
                  	<div class="col-sm-6">Maths<br>English</div>
                  	<div class="col-sm-6">
                  		<li><a href="#">55 skills>></a></li>
                  		<li><a href="#">48 skills>></a></li>
                  	</div>
                  </div>
               </div>
            </div>
        </div>
	</div>

    <div class="col-sm-12 col-md-4">
		<div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
                   <img style="height: 200px;width: 300px;" src="../../assets/images/bg/img10.jpg" alt="Avatar" style="width:300px;height:300px;">
                    <h2 style="position: absolute;top: 40%;left: 1%;padding: 37px;border-radius: 500px;background-color: lightgreen;box-shadow: 3px 3px 3px 3px green;">Class X</h2> 
               </div>
               <div class="flip-card-back">
                  <h4>Class X</h4> 
                  <p>Counting Objects,inside and outside,longer and shorter,letter names,rhyming words or more</p>
                  <hr> 
                  <div class="row">
                  	<div class="col-sm-6">Maths<br>English</div>
                  	<div class="col-sm-6">
                  		<li><a href="#">55 skills>></a></li>
                  		<li><a href="#">48 skills>></a></li>
                  	</div>
                  </div>
               </div>
            </div>
        </div>
	</div>		

   </div>

</div>
	


<!-- cards end -->

<!-- why eduworld -->
<div  class="container-fluid" style="width: 100%padding: 30px;padding-bottom: 50px;background-image: url(../../assets/images/bg/img3.jpg);">
	<center><br>
	<h3 style="color: white;">Why EduWorld</h3><hr>
	<i style="color: white;">Explore benefits of learning with EduWorld.</i></center><br><br>
	<div class="row">
		<div class="col-md-3">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    	<br>
    	<img style="width: 140px;" src="../../assets/images/bg/edu.png">
      <h4>High Quality Education</h4>
    </div>
    <div class="flip-box-back">
      <h2>High Quality Education</h2><hr>
      <p>With EduWorld, its easy to  meet your learning objectives!</p>
    </div>
  </div>
</div>
           
		</div>
		<div class="col-md-3">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    	<br>
    	<img style="width: 140px;" src="../../assets/images/bg/awards.png">
      <h4>Awards</h4>
    </div>
    <div class="flip-box-back">
      <h2>Awards</h2><hr>
      <p>Embark on virtual trasure hunt  as you  tackle maths challenges and reveal fuz prizes .The more you practise, the more you win.</p>
    </div>
  </div>
</div>
		</div>
		<div class="col-md-3">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    	<br>
    	<img style="width: 140px;" src="../../assets/images/bg/national.png">
      <h4>National curriculum</h4><hr>
    </div>
    <div class="flip-box-back">
      <h2>National curriculum</h2><hr>
      <p> All of EduWorld's skills corredpond to  the indian national curriculum.</p>
    </div>
  </div>
</div>
		</div>
		<div class="col-md-3">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    	<br>
    	<img style="width: 140px;" src="../../assets/images/bg/analytics.png">
      <h4>Analytics</h4>
    </div>
    <div class="flip-box-back">
      <h2>Analytics</h2><hr>
      <p>Get unprecedented insight into student performance with EduWorld Analytics.View real-time data on usage, trouble spots and more!</p>
    </div>
  </div>
</div>
		</div>
	</div>
	
</div>
<!-- why eduworld end -->

<!-- testimonials start -->

<div class="container-fluid" style="padding: 40px;height:450px;background-image: url(../../assets/images/bg/bg2.png);box-shadow: 10px 10px 10px 10px lightgrey;">
	<div style="box-shadow: 10px 10px 10px 10px grey; width: 900px;background-color: transparent;background-image: url(../../assets/images/bg/testimonials1.png);" class="container">
		<center>
			<br><br>
		<h3 style="color: white;">Testimonials</h3><br>
		<p style="color: grey;">I am a 6th grader who absolutely despised math. I would try and fail and fail. But EduWorld has helped me tremendously.<br>
		<i>Andrew N., student</i><br>
		<i>Bradford, Tennessee, U.S.A.</i><br><br>
		<a href="#">Read More</a><br><br><br></p>
	    </center>
	</div>
</div>
<!-- testimonials end -->

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