<?php
  $con = mysqli_connect("localhost","root","","workshopfinder");
  if (mysqli_connect_error()) {
    echo "Sambungan ke pangkalan data GAGAL : ".mysqli_connect_error();
  }
 ?>
