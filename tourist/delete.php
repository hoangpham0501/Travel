<?php 
$link = mysqli_connect('localhost:3306','root','','tourist') or die("Could not connect");
	mysqli_set_charset($link,"utf8");
	$sql = "DELETE FROM `place` WHERE ID = '".$_GET['id']."'";
	$result = mysqli_query($link,$sql);
?>