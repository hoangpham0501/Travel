<?php

$path = $_FILES['image']['name'];
$filename = basename($path);
// $ext = pathinfo($path, PATHINFO_EXTENSION);
if($path){
	$check = $_FILES['image']['tmp_name'];
	$target_dir = "image/";
	$target_file = $target_dir.basename($path);
	if (file_exists($target_file)) {
		$target_file = $target_file."'";
	}
	move_uploaded_file($check, $target_file);
}
$ID = $_POST['ID'];
$name = $_POST['name'];
$address = $_POST['address'];
$time = $_POST['time_open'];
$quality = $_POST['quality'];
$category = $_POST['category'];
$des = $_POST['des'];
$phone = $_POST['phone'];
$city = $_POST['city'];
         if($city == 'Đà Nẵng') $city = 'DN';
         if($city == 'Quảng Nam') $city = 'QN';
         if($city == 'Huế') $city = 'HUE';
         if($city == 'Hà Nội') $city = 'HN';
       		if($city == 'Hồ Chí Minh') $city = 'HCM';

	$link = mysqli_connect('localhost:3306','root','','tourist') or die("Could not connect");
	mysqli_set_charset($link,"utf8");
	if($filename)
	$sql = "UPDATE `place` SET `name`='".$name."',`address`='".$address."',`image`='".$filename."',`category`='".$category."',`description`='".$des."',`city`='".$city."',`phone`='".$phone."',`time_open`='".$time."',`quality`='".$quality."' WHERE ID ='".$ID."'";
	else 
	$sql = "UPDATE `place` SET `name`='".$name."',`address`='".$address."',`category`='".$category."',`description`='".$des."',`city`='".$city."',`phone`='".$phone."',`time_open`='".$time."',`quality`='".$quality."' WHERE ID ='".$ID."'";	
	echo $sql;
	$result = mysqli_query($link,$sql);
	header('Location: info.php?name='.$name);

?>