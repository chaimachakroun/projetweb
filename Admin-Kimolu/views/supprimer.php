<?PHP
include "../Core/logincore.php";
$logincore=new logincore();
if (isset($_POST["first"])){
	$logincore->supprimer($_POST["first"]);
	header('Location: tables.php');
}

?>