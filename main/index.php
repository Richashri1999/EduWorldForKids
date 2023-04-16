<!DOCTYPE html>
<html>
<head>
	<title>EduWorld For Kids | Learn, Exlpore & Grow</title>
  <script type="text/javascript" src="../assets/js/jquery.js"></script>
  <script type="text/javascript" src="../assets/js/popper.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="../assets/js/index.js"></script>
  
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/kidstyle.css">
  
</head>
<body>


<!-- <img src="../assets/images/bg/img13.jpg"> -->



<!-- Login form start -->
<form id="login-form">
  <div class="imgcontainer">
    <img style="width: 140px; height: 130px;" src="../assets/images/bg/loginicon.jpg" alt="Avatar" class="avatar">
  </div>
  <div class="form-group text-danger text-center" id="err1"></div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <button title="login to Your Account.." id="btnlogin">Login</button>

    <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->

  </div>

<!-- Button to open signup the modal -->
<div class="container">
<button style="background-color: #ff69b4;" title="New User? Create New Account.." onclick="document.getElementById('id01').style.display='block'">Sign Up</button>
</div>


 <!--  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div> -->
</form>

<!-- login form end -->





<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">
    <img src="../assets/images/icons/closebtn.png">
  </span>
  <form id="signup-form" class="modal-content">
    <div style="color: #ff69b4;" class="container">
      <h2>Sign Up</h2>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      <!-- <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label> -->

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button title="close Signup form and go back to loginpage."  type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button id="signupbtn" class="signup">Sign Up</button>
      </div>
    </div>
  </form>
</div>
  <!-- The Modal (contains the Sign Up form) end -->



</body>
</html>