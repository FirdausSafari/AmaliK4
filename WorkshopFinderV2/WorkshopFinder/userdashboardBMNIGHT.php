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
    <link rel="stylesheet" href="style/userdashboardNIGHT.css">
    <style media="screen">
      body{
        background-color: rgb(25,25,25);
        margin: 0;
        color: #ccc;
      }
      #upper{
        height: 700px;
      }
      #faq{
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
  <!-- <button onclick="topFunction()" id="backtotopbtn" title="Go to top">Ke atas</button> -->
  <section id="header">
    <div id="navbar">
      <a href="userdashboardBMNIGHT.php">Laman Utama</a>
      <a href="settingsBMNIGHT.php">Tetapan</a>
      <a href="logout.php">Logout</a>
      <p id="navtitle" style="color:#ccc;">Workshop Finder</p>
    </div>
  </section>
    <section id="upper">
      <div id="greetings"><br><br><br><br>
        <img src="img/homenight.png" id="logo"><br><br>
        <h1 id="title">Selamat Kembali!</h1><br><br><br><br>
        <p id="subtitle">Klik butang dibawah untuk memilih lokasi bengkel yang terdekat dengan anda.</p><br><br>
          <div id="btn1">
            <a href="#middle"><div id="selectlocationbtn">PILIH LOKASI</div></a>
          </div>
      </div>
    </section>
    <section id="middle">
      <div id="selectlocation" style="height:800px;background-color:#333;"><br><br><br>
       <h2>Pilih lokasi anda dibawah :</h2>
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
         <p>Menunjukkan semua bengkel yang terdekat.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d510106.03362755623!2d101.80573074860902!3d2.7560406775301263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Kuala+Lumpur%2C+Federal+Territory+of+Kuala+Lumpur!5e0!3m2!1sen!2smy!4v1566348291238!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Putrajaya" class="tabcontent">
         <h3>Putrajaya</h3>
         <p>Menunjukkan semua bengkel yang terdekat.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d127508.39911904966!2d101.65910796596503!3d2.9201724295664806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Putrajaya!5e0!3m2!1sen!2smy!4v1566348990387!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Selangor" class="tabcontent">
         <h3>Selangor</h3>
         <p>Menunjukkan semua bengkel yang terdekat.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d127484.7152493535!2d101.651433740188!3d3.1218438720366612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+selangor!5e0!3m2!1sen!2smy!4v1566347961286!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
       </div>
       <div id="Perak" class="tabcontent">
         <h3>Perak</h3>
         <p>Menunjukkan semua bengkel yang terdekat.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2039756.6072666864!2d100.5999754018279!3d3.1212447011507147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+perak!5e0!3m2!1sen!2smy!4v1566348157692!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="NegeriSembilan" class="tabcontent">
         <h3>Negeri Sembilan</h3>
         <p>Menunjukkan semua bengkel yang terdekat.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d510106.0054202429!2d101.80573384482365!3d2.7561064918772122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Negeri+Sembilan!5e0!3m2!1sen!2smy!4v1566348249482!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Melaka" class="tabcontent">
         <h3>Melaka</h3>
         <p>Menunjukkan semua bengkel yang terdekat.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d127577.61484264124!2d102.17188784538399!3d2.228628817501948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Malacca!5e0!3m2!1sen!2smy!4v1566348376851!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Pahang" class="tabcontent">
         <h3>Pahang</h3>
         <p>Menunjukkan semua bengkel yang terdekat.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2038303.5493027456!2d102.36194683720859!3d3.873815242650989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Pahang!5e0!3m2!1sen!2smy!4v1566348426547!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Kedah" class="tabcontent">
         <h3>Kedah</h3>
         <p>Menunjukkan semua bengkel yang terdekat.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1015876.6201480079!2d100.01561659484567!3d5.958588789742402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Kedah!5e0!3m2!1sen!2smy!4v1566348500786!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Kelantan" class="tabcontent">
         <h3>Kelantan</h3>
         <p>Menunjukkan semua bengkel yang terdekat.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d508046.9058096092!2d101.87258847924078!3d5.839206154388827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Kelantan!5e0!3m2!1sen!2smy!4v1566348539397!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="PulauPinang" class="tabcontent">
         <h3>Pulau Pinang</h3>
         <p>Menunjukkan semua bengkel yang terdekat.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d127108.75687770167!2d100.23862899869044!3d5.394307179640226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Pulau+Pinang!5e0!3m2!1sen!2smy!4v1566348619434!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Terengganu" class="tabcontent">
         <h3>Terengganu</h3>
         <p>Menunjukkan semua bengkel yang terdekat.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1017300.93011802!2d103.2930177429912!3d5.012531246603813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Terengganu!5e0!3m2!1sen!2smy!4v1566348702074!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Johor" class="tabcontent">
         <h3>Johor</h3>
         <p>Menunjukkan semua bengkel yang terdekat.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d510513.66344327404!2d103.54388802719745!3d1.5364677474868678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Johor!5e0!3m2!1sen!2smy!4v1566348830174!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>
       <div id="Perlis" class="tabcontent">
         <h3>Perlis</h3>
         <p>Menunjukkan semua bengkel yang terdekat.</p>
         <iframe class="gglmaps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d253737.4201964462!2d100.11082130606161!3d6.439334914253482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sworkshops+near+Perlis!5e0!3m2!1sen!2smy!4v1566348872067!5m2!1sen!2smy" frameborder="0" style="border:0" allowfullscreen>
         </iframe>
       </div>


<div class="clearfix"></div>
      </div>
      <div id="faq" style="height:900px;"><br><br><br>
        <h2 style="color:#ccc;"></b>Soalan Yang Selalu Dipersoalkan (FAQ)</b></h2>
        <p style="color:#ccc;">
          <b>1.Macam mana nak tukar lokasi? </b><br> Klik butang 'PILIH LOKASI' dan pilih lokasi anda. <br><br>
          <b>2.Boleh tukar background jadi night mode ke? </b><br> Laman web ini tiada night mode buat masa sekarang dan kami tidak merancang untuk menambahnya pada masa akan datang. <br><br>
          <b>3.Bagaimanakah cara untuk saya menghubungi pihak bengkel? </b><br> Laman web kami hanya menunjukkan lokasi mereka. Namun begitu, anda boleh menghubungi mereka dengan info yang diberikan pada Google Map. <br><br>
          <b>4.Adakah bengkel-bengkel diatas dibuka sepanjang masa? </b><br> Tidak, kebanyakan bengkel mempunyai jadual bekerja sendiri. Kami tidak bertanggungjawab atas sebarang info salah tentang jadual pembukaan bengkel. <br><br>
          <b>5.Ada tak aplikasi mobile untuk laman web ni? </b><br> Tidak, kami hanya terdiri daripada beberapa pelajar sekolah menengah dan kami tidak mempunyai ilmu yang cukup untuk membangunkan sebuah aplikasi. Sekiranya kami ada mengeluarkan aplikasi, kami akan memberitahu semua pengguna kami. <br><br>
          <b>6.Bolehkah saya memesan lori penunda untuk menunda kenderaan saya? </b><br> Malangnya tidak. Laman web kami hanya bertujuan untuk menunjukkan lokasi bengkel dan tidak lebih dari itu. <br><br>
          <b>7.Bahasa Inggeris bukannya bahasa ibunda saya, adakah terdapat pilihan bahasa lain? </b><br> Ya, anda boleh menukarkan bahasa daripada bahasa Inggeris kepada Bahasa Melayu. <br><br>
          <b>8.Minta tolong, bagaimanakah cara saya logout? </b><br> Anda hanya perlu klik 'logout' pada navbar <br><br>
          <b>9.Boleh tukar password ke?</b><br> Anda boleh tukar password, hanya apabila anda telah login dan pergi ke halaman 'Settings' untuk mengubahnya. Jika anda terlupa password dan tidak dapat login, anda tidak boleh menukarnya. <br><br>
        </p>
      </div>
    </section>
    <section id="lower">
      <p>© Hakmilik Firdauz, 2019, hakcipta terpelihara.</p>
    </section>
  </center></body>
</html>
