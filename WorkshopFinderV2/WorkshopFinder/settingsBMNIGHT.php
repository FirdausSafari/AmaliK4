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
        height: 700px;
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
        <img src="img/settingnight.png" id="logo"><br><br>
        <h1 id="title">Tetapan</h1><br><br><br><br>
          <p id="subtitle">Hai <?php echo $username; ?>! <br> Buat masa sekarang, anda hanya boleh menukar tetapan bahasa.</p><br><br>


          <div id="btn1">
            <a href="settingsNIGHT.php"><div id="changelang">SWITCH BACK TO ENGLISH</div></a>
          </div><br>

          <div id="btn2"><a href="settingsBM.php">
            <div>
            <img src="img/night.png" alt="night mode">
            <p>Mod malam dihidupkan.</p>
             </div>
          </a></div>

          <div id="btn3">
            <a href="userdashboardBMNIGHT.php"><div id="changelang"> << Kembali Ke Laman Utama</div></a>
          </div><br>

      </div>
    </section>
    <section id="middle">

    </section>
    <section id="lower">
      <p>© Hakmilik Firdauz, 2019, hakcipta terpelihara.</p>
    </section>
  </center></body>
</html>
