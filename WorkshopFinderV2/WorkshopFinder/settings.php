<?php
  require('config.php');

  include('uservalidation.php');

  $username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="icon" src="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WorkshopFinder</title>
    <link rel="stylesheet" href="style/settings.css">
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
    <section id="upper">
      <div id="greetings"><br><br><br><br>
        <img src="img/setting.png" id="logo"><br><br>
        <h1 id="title">Settings</h1><br><br><br><br>
        <p id="subtitle">Hi <?php echo $username; ?>! As for now, you can only change your language preference.</p><br>

          <div id="btn1">
            <a href="settingsBM.php"><div id="changelang">TUKAR KE BAHASA MELAYU</div></a>
          </div><br>

           <div id="btn2"><a href="settingsNIGHT.php">
             <div>
               <img src="img/notnight.png" alt="night mode">
               <p>Night mode is off.</p>
             </div>
          </a></div>

          <div id="btn3">
            <a href="userdashboard.php"><div id="changelang"> << Back To Home</div></a>
          </div><br>

      </div>
    </section>
    <section id="lower">
      <p>© Copyright Firdauz, 2019, all rights reserved.</p>
    </section>
  </center></body>
</html>
