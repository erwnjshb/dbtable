<?php
  include 'shesh.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>CodePen - Double Slider Sign in/up Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="sheeeeesh.php" method="POST">
        <h1>Create Account</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or use your email for registration</span>
        <input type="text" placeholder="Name" id="user" name="NAME" require />
        <input type="email" placeholder="Email" id="email" name="EMAIL" require />
        <input type="text" placeholder="Section" id="user" name="SECTION" require />
        <input type="password" placeholder="Password" id="pass" name="PASSWORD" require />
        <button name="submit">Sign Up</button>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form action="sheeeeesh.php" method="POST">
        <h1>Sign in</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or use your account</span>
        <input type="email" placeholder="Email" name="EMAIL"/>
        <input type="password" placeholder="Password" name="PASSWORD" />
        <a href="#">Forgot your password?</a>
        <button type="submit" name="login" >Sign In</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>
            To keep connected with us please login with your personal info
          </p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello, Friend!</h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
  <!-- partial -->
  <script src="./script.js"></script>
</body>

</html>