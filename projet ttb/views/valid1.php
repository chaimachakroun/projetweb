<?php 


session_start() ; 
//header('location:member.html') ; 
$con = mysqli_connect('localhost','root','') ; 
mysqli_select_db($con, 'projet2') ; 


 
$user = $_POST['user'];  
$pass = $_POST['mdp']; 



$s = " select * from sign1 where user = '$user' && mdp = '$pass' "; 

$result = mysqli_query($con, $s); 

$num = mysqli_num_rows($result); 

if($num == 1) {
    //header('location:index.html') ;
	echo'cv'; 
} else{
    //header('location:login.html') ;
	echo('try again');
} 



?>