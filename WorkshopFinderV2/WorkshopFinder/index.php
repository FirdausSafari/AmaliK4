<?php
  require('config.php');
  session_start();
  if (isset($_SESSION['username'])) {
    header("Location: userdashboard.php");
  }
  if (isset($_POST['username'])) {
    $username=$_POST['username'];
    $pass=$_POST['password'];

  $sql="SELECT * FROM user WHERE username='$username' AND password='$pass'";
    $hasil = mysqli_query($con,$sql);

  if (mysqli_num_rows($hasil)) {
    $_SESSION['username'] = $username;
    header('Location: userdashboard.php');
  }
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="icon" src="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WorkshopFinder</title>
    <link rel="stylesheet" href="style/index.css">
    <style media="screen">
      body{
        margin: 0;
      }
      #upper{
        /* The image used */
        background-image: url("img/background.jpg");
        height: 700px;
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
      }
      #register{
        /* The image used */
        background-image: url("img/black.jpg");
        height: 700px;
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
      }
      </style>
      <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
            document.getElementById("navbar").style.top = "0";
            document.getElementById("backtotopbtn").style.display = "block";
          } else {
            document.getElementById("navbar").style.top = "-50px";
            document.getElementById("backtotopbtn").style.display = "none";
          }
        }
        // When the user scrolls down 20px from the top of the document, show the button
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
  </head>
  <body><center>
  <button onclick="topFunction()" id="backtotopbtn" title="Go to top">Back to Top</button>
  <section id="header">
    <div id="navbar">
      <a href="index.php">Home</a>
      <a href="about.php">About Us</a>
      <p id="navtitle" style="color:#ccc;">Workshop Finder</p>
    </div>
  </section>
    <section id="upper">
      <div id="greetings"><br><br><br><br><br><br><br><br>
        <img src="img/logo.png" id="logo">
        <h1 id="title">Workshop Finder</h1>
        <p id="subtitle">Fix your vehicle <i>anytime, anywhere</i> </p><br><br>
        <p>To start using our services, please <a href="#register">register</a> an account <br>or <br>
           click <a href="#login">here</a> to login as an existing user.</p>
      </div>
    </section>
    <section id="middle">
      <div id="login" style="height:600px;background-color:white;"><br><br><br><br><br>
       <h2 >Already have an account? Login below.</h2>
       <form method="post">
        <label>Username :</label><br><br>
        <input id="name" name="username" placeholder="username" type="text"><br><br>
        <label>Password :</label><br><br>
        <input id="password" name="password" placeholder="**********" type="password"><br><br><br>
        <input type="submit" id="submitbtn" value="Login">
       </form>
      </div>
      <?php
        require('config.php');
        if (isset($_POST['username'])) {
          $username=$_POST['username'];
          $password=$_POST['password'];

          $sql="INSERT INTO user (username,password) VALUES ('$username','$password')";

          $result = mysqli_query($con,$sql);

          if ($result) {
            echo "<script>alert('Congratulations, you have been registered as a user!');
            window.location='index.php'</script>";
          }else {
            echo "<script>alert('Something is wrong. Unfortunately, you cant be registered yet.');
            window.location='register.php'</script>";
          }
        }
      ?>
      <div id="register" style="height:600px;"><br><br><br><br><br>
        <h2 style="color:#ccc;">If you dont have any account, register here.</h2>
        <form action="" method="post">
         <label style="color:#ccc;">Username :</label><br><br>
         <input id="name" name="username" placeholder="username" type="text"><br><br>
         <label style="color:#ccc;">Password :</label><br><br>
         <input id="password" name="password" placeholder="**********" type="password"><br><br>
         <input type="submit" id="submitbtn" value="Register">
        </form>
      </div>
    </section>
    <section id="lower">
      <p>© Copyright Firdauz, 2019, all rights reserved.</p>
    </section>
  </center></body>
</html>
