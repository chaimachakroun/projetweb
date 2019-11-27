<?php

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'projet2');


$first = $_POST['first'];
$last = $_POST['last'];
$user = $_POST['user'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];


$s = "select * from sign1 where first='$first'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if($num == 1)
{
	echo " Email used";
}
else
{
	$reg=" insert into sign1 (first,last,user,email,mdp) values ('$first' , '$last' , '$user' , '$email' , '$mdp')";
	mysqli_query($con, $reg);
	echo "Bienvenu au kimolu";
}

?>