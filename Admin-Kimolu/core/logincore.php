<?php 
include('../entities/sign.php');
include('../config.php');
class logincore

{
    function ajoutersign($sign1)
{
		
		$sql="insert into sign1 (first, last, user, email, mdp) values (:first, :last, :user, :email, :mdp)";
		$db = config::getConnexion();
        
		try{
        $req=$db->prepare($sql);
            
		$first=$sign1->getFisrt();
        $last=$sign1->getLast();
        $user=$sign1->getUser();
        $email=$sign1->getEmail();
        $mdp=$sign1->getMdp();
        
            
        $req->bindValue(':first',$first);
		$req->bindValue(':last',$last);
		$req->bindValue(':user',$user);
		$req->bindValue(':email',$email);
		$req->bindValue(':mdp',$mdp);
		
            $req->execute();
           
        }
		catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function AfficherSign($sign)
	{
		echo "first: ".$sign->getFirst()."<br>";
		echo "last: ".$sign->getLast()."<br>";
		echo "user: ".$sign->getUser()."<br>";
		echo "email: ".$sign->getEmail()."<br>";
		echo "mdp: ".$sign->getMdp()."<br>";
	}
	
	function afficher_Sign_return()
	{
		$sql="SElECT * From sign1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
		
	}
	function supprimer($first)
	{ 
		$sql="DELETE FROM sign1 where first= :first";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':first',$first);
		try{
            $req->execute();
        }
        catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
	}
	
}
?> 
 
