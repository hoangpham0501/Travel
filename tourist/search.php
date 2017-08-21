<?php
session_start();
  $link = mysqli_connect('localhost:3306','root','','tourist') or die("Could not connect");
  mysqli_set_charset($link,"utf8");

      $search = $_GET['search'];
      if(strcasecmp($search, 'đà nẵng') == 0)
        header("location: city.php?city=DN");
      else if(strcasecmp($search, 'quảng nam') == 0)
        header("location: city.php?city=QN");
      else if(strcasecmp($search, 'huế') == 0)
        header("location: city.php?city=HUE");
      else if(strcasecmp($search, 'hà nội') == 0)
        header("location: city.php?city=HN");
      else if(strcasecmp($search, 'sài gòn') == 0 || strcasecmp($search, 'hồ chí minh') == 0)
        header("location: city.php?city=HCM");
      else{
        header("location: location_list.php?location=$search");
      }

     
      // $result2 = $link->query($sql);

      // header('Location: info.php');

      mysqli_close($link);
?>