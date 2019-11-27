<?php

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'projet2');


$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];

$s = "select * from abonement where id='$id'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if($num == 1)
{
	echo " Email Already taken";
}
else
{
	$reg=" insert into abonement (id,nom,prenom,email) values ('$id' , '$nom' , '$prenom' , '$email')";
	mysqli_query($con, $reg);
	echo " Registration Successful";
}

?>