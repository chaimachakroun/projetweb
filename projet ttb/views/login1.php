<?php

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'projet2');


$email = $_POST['email'];
$pass = $_POST['password'];


$s = "select * from user where email='$email'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if($num == 1)
{
	echo " Email Already taken";
}
else
{
	$reg=" insert into user (email,password) values ('$email' , '$pass')";
	mysqli_query($con, $reg);
	echo " Registration Successful";
}

?>