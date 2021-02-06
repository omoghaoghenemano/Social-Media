<?php
date_default_timezone_set("Asia/Manila");
$date=date('F j, Y g:i:a');

//mysqli procedural
$conn=mysqli_connect("localhost","root","","chatme");
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
?>