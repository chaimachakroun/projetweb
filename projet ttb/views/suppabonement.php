<?PHP
include "../Core/abonementC.php";
$abonementC=new abonementC();
if (isset($_POST["id"])){
	$abonementC->supprimer($_POST["id"]);
	header('Location: tables.php');
}

?>