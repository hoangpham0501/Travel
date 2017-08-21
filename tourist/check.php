<?php
session_start();
$checkrole="";
 if(isset($_SESSION['username'])){
$link = mysqli_connect('localhost:3306','root','','tourist') or die("Could not connect");
  mysqli_set_charset($link,"utf8");
  $sql = "select * from users where username = '".$_SESSION['username']."'";
   $result = mysqli_query($link,$sql);
  if (mysqli_num_rows($result) > 0) 
  {
      // Sử dụng vòng lặp while để lặp kết quả
      while($row = mysqli_fetch_assoc($result)) {
      	$role = $row['role'];
      	$checkrole = $role;
   }
}
}
?>