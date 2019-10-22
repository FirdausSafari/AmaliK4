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
    <link rel="stylesheet" href="style/userdashboard.css">
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
      #faq{
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
            document.getElementById("navbar").style.top = "-60px";
            document.getElementById("backtotopbtn").style.display = "none";
          }
        }
        // When the user scrolls down 20px from the top of the document, show the button
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        //selectlocation
        function selectlocation(evt, selectlocation) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(selectlocation).style.display = "block";
          evt.currentTarget.className += " active";
        }
      </script>
  </head>
  <body><center>
  <button onclick="topFunction()" id="backtotopbtn" title="Go to top">Back to Top</button>
  <section id="header">
    <div id="navbar">
      <a href="userdashboard.php">Home</a>
      <a href="settings.php">Settings</a>
      <a href="logout.php">Logout</a>
      <p id="navtitle" style="color:#ccc;">Workshop Finder</p>
    </div>
  </section>
    <section id="upper">
      <div id="greetings"><br><br><br><br>
        <img src="img/home.png" id="logo"><br><br>
        <h1 id="title">Welcome back!</h1><br><br><br><br>
        <p id="subtitle">Click the button below to start searching for the nearest workshops.</p><br><br>
          <div id="btn1">
            <a href="#middle"><div id="selectlocationbtn">SELECT LOCATION</div></a>
          </div>
      </div>
    </section>
    <section id="middle">
      <div id="selectlocation" style="height:800px;background-color:white;"><br><br><br>
       <h2>Select your location below.</h2>
       <div class="tab">
         <button class="tablinks" onmouseover="selectlocation(event, 'KualaLumpur')">Kuala Lumpur</button>
         <button class="tablinks" onmouseover="selectlocation(event, 'Putrajaya')">Putrajaya</button>
         <button class="tablinks" onmouseover="selectlocation(event, 'Selangor')">Selangor</button>
         <button class="tablinks" onmouseover="selectlocation(event, 'Perak')">Perak</button>
         <button class="tablinks" onmouseover="selectlocation(event, 'NegeriSembilan')">Negeri Sembilan</button>
         <button class="tablinks" onmouseover="selectlocation(event, 'Melaka')">Melaka</button>
         <button class="tablinks" onmouseover="selectlocation(event, 'Pahang')">Pahang</button>
         <button class="tablinks" onmouseover="selectlocation(event, 'Kedah')">Kedah</button>
         <button class="tablinks" onmouseover="selectlocation(event, 'Kelantan')">Kelantan</button>
         <button class="tablinks" onmouseover="selectlocation(event, 'PulauPinang')">Pulau Pinang</button>
         <button class="tablinks" onmouseover="selectlocation(event, 'Terengganu')">Terengganu</button>
         <button class="tablinks" onmouseover="selectlocation(event, 'Johor')">Johor</button>
         <button class="tablinks" onmouseover="selectlocation(event, 'Perlis')">Perlis</button>
       </div>

       <div id="KualaLumpur" class="tabcontent">
         <h3>Kuala Lumpur</h3>
         <p>Showing all nearby workshops.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d510106.03362755623!2d101.80573074860902!3d2.7560406775301263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Kuala+Lumpur%2C+Federal+Territory+of+Kuala+Lumpur!5e0!3m2!1sen!2smy!4v1566348291238!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Putrajaya" class="tabcontent">
         <h3>Putrajaya</h3>
         <p>Showing all nearby workshops.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d127508.39911904966!2d101.65910796596503!3d2.9201724295664806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Putrajaya!5e0!3m2!1sen!2smy!4v1566348990387!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Selangor" class="tabcontent">
         <h3>Selangor</h3>
         <p>Showing all nearby workshops.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d127484.7152493535!2d101.651433740188!3d3.1218438720366612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+selangor!5e0!3m2!1sen!2smy!4v1566347961286!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
       </div>
       <div id="Perak" class="tabcontent">
         <h3>Perak</h3>
         <p>Showing all nearby workshops.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2039756.6072666864!2d100.5999754018279!3d3.1212447011507147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+perak!5e0!3m2!1sen!2smy!4v1566348157692!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="NegeriSembilan" class="tabcontent">
         <h3>Negeri Sembilan</h3>
         <p>Showing all nearby workshops.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d510106.0054202429!2d101.80573384482365!3d2.7561064918772122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Negeri+Sembilan!5e0!3m2!1sen!2smy!4v1566348249482!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Melaka" class="tabcontent">
         <h3>Melaka</h3>
         <p>Showing all nearby workshops.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d127577.61484264124!2d102.17188784538399!3d2.228628817501948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Malacca!5e0!3m2!1sen!2smy!4v1566348376851!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Pahang" class="tabcontent">
         <h3>Pahang</h3>
         <p>Showing all nearby workshops.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2038303.5493027456!2d102.36194683720859!3d3.873815242650989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Pahang!5e0!3m2!1sen!2smy!4v1566348426547!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Kedah" class="tabcontent">
         <h3>Kedah</h3>
         <p>Showing all nearby workshops.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1015876.6201480079!2d100.01561659484567!3d5.958588789742402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Kedah!5e0!3m2!1sen!2smy!4v1566348500786!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Kelantan" class="tabcontent">
         <h3>Kelantan</h3>
         <p>Showing all nearby workshops.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d508046.9058096092!2d101.87258847924078!3d5.839206154388827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Kelantan!5e0!3m2!1sen!2smy!4v1566348539397!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="PulauPinang" class="tabcontent">
         <h3>Pulau Pinang</h3>
         <p>Showing all nearby workshops.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d127108.75687770167!2d100.23862899869044!3d5.394307179640226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Pulau+Pinang!5e0!3m2!1sen!2smy!4v1566348619434!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Terengganu" class="tabcontent">
         <h3>Terengganu</h3>
         <p>Showing all nearby workshops.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1017300.93011802!2d103.2930177429912!3d5.012531246603813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Terengganu!5e0!3m2!1sen!2smy!4v1566348702074!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Johor" class="tabcontent">
         <h3>Johor</h3>
         <p>Showing all nearby workshops.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d510513.66344327404!2d103.54388802719745!3d1.5364677474868678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Johor!5e0!3m2!1sen!2smy!4v1566348830174!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Perlis" class="tabcontent">
         <h3>Perlis</h3>
         <p>Showing all nearby workshops.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d253737.4201964462!2d100.11082130606161!3d6.439334914253482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Perlis!5e0!3m2!1sen!2smy!4v1566348872067!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>


<div class="clearfix"></div>
      </div>
      <div id="faq" style="height:900px;"><br><br><br>
        <h2 style="color:#ccc;"></b>Frequently Asked Question (FAQ)</b></h2>
        <p style="color:#ccc;">
          <b>1.How do I select my location? </b><br> Just click the button that says 'Select Location'. Duh. <br><br>
          <b>2.How do I change the background color to night mode? </b><br> As of now, we dont have any night mode for the website and we dont plan to add it. <br><br>
          <b>3.How do I contact the workshops provided? </b><br> Our website simply redirect you to google maps with the nearest workshops available. You can contact them using their info on the google maps. <br><br>
          <b>4.Do all the workshops open 24/7? </b><br> No, most of them have specific working hours and some may have unusual working schedule. We are not responsible for any incorrect info on the workshops' working hour. <br><br>
          <b>5.Is there a mobile app for this website? </b><br> No, we consists of only a few students and right now we are incapable of developing a mobile app. If we ever release one, we will announce it to our users. <br><br>
          <b>6.Can I order a towing truck to tow my vehicle? </b><br> No. Our website only redirects you, the user to Google Maps to find the nearest workshops. We dont have any other features. <br><br>
          <b>7.English is not my first language, is there another language option? </b><br> Yes, we do have an option to change your language to Bahasa Melayu. <br><br>
          <b>8.Help, how do I logout?</b><br>Just simply click 'logout' on the navbar.<br><br>
          <b>9.Can I change my password?</b><br>Well, yes. But actually no. Since you need to be logged in to change your password in 'settings'.<br><br>
        </p>
      </div>
    </section>
    <section id="lower">
      <p>© Copyright Firdauz, 2019, all rights reserved.</p>
    </section>
  </center></body>
</html>
