<?php

session_start();
  $link = mysqli_connect('localhost:3306','root','','tourist') or die("Could not connect");
  mysqli_set_charset($link,"utf8");

  $sql_user = "select * from users where username = '".$_SESSION['username']."'";
  echo $sql_user;
  $result = mysqli_query($link, $sql_user);
  if(mysqli_num_rows($result) >0)
  {
    while($row = mysqli_fetch_assoc($result)){
      $id_user = $row['id'];
      $username = $row['username'];
    }
  }



  if(isset($_SESSION['username']))
    if(isset($_POST['OK']))
    {
      $comment = $_POST['content'];
      echo $comment;

      if($comment){
        $link = new mysqli('localhost:3306', 'root', '', 'tourist');
        mysqli_set_charset($link,"utf8");
        if ($link->connect_error) {
          die("Kết nối thất bại: " . $link->connect_error);
        }

      $sql = "Insert into comments(id_user,username,id_post,content) values('".$id_user."','".$username."','".$_SESSION['ID']."','".$comment."')";
      echo $sql;
      $result2 = $link->query($sql);


      // header('Location: info.php?name='.$_GET['name']);

      mysqli_close($link);
      }
    }
?>