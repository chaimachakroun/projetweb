<?php
include('../entities/sign.php');
include('../core/logincore.php');
if(isset($_POST['first']) and isset($_POST['last'])and isset($_POST['user']) and isset($_POST['email'])and isset($_POST['mdp'])) 
	{
		$c1= new sign(($_POST['first']),($_POST['last']),($_POST['user']),($_POST['email']),($_POST['mdp']));
		$logincore= new logincore();
		$logincore->ajoutersign($c1);
		
	}


?>


