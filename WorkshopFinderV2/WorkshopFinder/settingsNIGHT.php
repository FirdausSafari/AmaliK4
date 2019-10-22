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
        background-color: rgb(25,25,25);
        margin: 0;
        color: #ccc;
      }
      #upper{
        /* The image used */
        background-image: url("img/.jpg");
        height: 700px;
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
      }
      </style>
  </head>
  <body><center>
    <section id="upper">
      <div id="greetings"><br><br><br><br>
        <img src="img/settingnight.png" id="logo"><br><br>
        <h1 id="title">Settings</h1><br><br><br><br>
          <p id="subtitle">Hi <?php echo $username; ?>! As for now, you can only change your language preference.</p><br>


          <div id="btn1">
            <a href="settingsBMNIGHT.php"><div id="changelang">TUKAR KE BAHASA MELAYU</div></a>
          </div><br>

           <div id="btn2"><a href="settings.php">
             <div>
               <img src="img/night.png" alt="night mode">
               <p>Night mode is on.</p>
             </div>
          </a></div>

          <div id="btn3">
            <a href="userdashboardNIGHT.php"><div id="changelang"> << Back To Home</div></a>
          </div><br>

      </div>
    </section>
    <section id="lower">
      <p>© Copyright Firdauz, 2019, all rights reserved.</p>
    </section>
  </center></body>
</html>
