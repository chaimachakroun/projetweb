<?PHP
include "../Core/abonementC.php";
include "../config.php" ; 
$abonementC=new abonementC();
if (isset($_POST["id"])){
	$abonementC->suppabonement($_POST["id"]);
	header('Location: tables.php');
}

?>