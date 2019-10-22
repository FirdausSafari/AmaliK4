
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
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("navbar").style.top = "0";
          } else {
            document.getElementById("navbar").style.top = "-50px";
          }
        }
      </script>
  </head>
  <body><center>
  <section id="header">
    <div id="navbar">
      <a href="index.php">Home</a>
      <a href="about.php">About Us</a>
      <p id="navtitle" style="color:#ccc;">Workshop Finder</p>
    </div>
  </section>
    <section id="upper">
      <div id="greetings"><br><br><br><br><br><br><br><br>
        <h2 style="font-family:'Realistica Demo'">Our history.</h2>
        <p>Workshop Finder was created by a few students in 2019. It was created with a sole purpose in mind, <br><i><b>to help find the nearest workshop from anywhere, anytime.</b></i><br>
        The developers of Workshop Finder consists of 3 students from two different schools. One student who is also <br> the founder studies at KV Sepang while the other two which is his friends studies at SMK Abdul Jalil. </p>
      </div>
    </section>
    <section id="middle">
      <div id="login" style="height:700px;background-color:white;"><br><br><br><br>
       <h2 style="font-family:'Realistica Demo'">Our team</h2><br><br>
       <div class="row">
        <div class="column">
          <div class="card">
            <img src="img/daoz.jpg" style="height:150px;width:150px;">
            <div class="container">
              <h2>Firdaus Safari</h2>
              <p class="title">Founder and Lead Programmer</p>
              <p>Just an average 17 year old Malaysian boy. Loves listening to music and watching anime.</p>
              <p>lordfirdauz@gmail.com</p>
              </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="img/izzat.jpg" style="height:150px;width:150px;">
            <div class="container">
              <h2>Muhd Nur Izzat</h2>
              <p class="title">Designer</p>
              <p>A high tech guy. Loves designing stuff and playing with his gadgets.</p>
              <p>entah@gmail.com</p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="img/danish.jpg" style="height:150px;width:150px;">
            <div class="container">
              <h2>Danish Afiq</h2>
              <p class="title">Programmer</p>
              <p>Nerdy looks but quite the genious himself. Loves solving math problems for no reason.</p>
              <p>entah@gmail.com</p>
              </div>
          </div>
        </div>
      </div>
      </div>
      <div id="register" style="height:800px;"><br><br><br><br><br>
        <h2 style="color:#ccc;font-family:'Realistica Demo'">Got questions? Feel free to contact Us</h2>
        <div id="contactinfo">
          <table>
            <tr>
              <td><p>Email:</p>
                <p>workshopfinder@gmail.com</p><br>
                <p>Phone Number:</p>
                <p>+6019-816 3850</p>
              </td>
              <td><iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1724.1003866841336!2d101.7255247998548!3d2.9001799724190667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdc83ed84698f3%3A0xc73aed3e4f7daa62!2sKolej+Vokasional+Sepang!5e1!3m2!1sen!2smy!4v1564640833292!5m2!1sen!2smy" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></td>
            </tr>
          </table>
        </div>
      </div>
    </section>

    <section id="lower">
      <p>© Copyright Firdauz, 2019, all rights reserved.</p>
    </section>
  </center></body>
</html>
