<?php 
include('../config.php');

class logincore

{
	function ajoutersign($sign)
{
		
		
		$sql="insert into sign1 (first, last, user, email, mdp) values (:first, :last, :user, :email, :mdp)";
		$db = config::getConnexion();
        
		try{
        $req=$db->prepare($sql);
            
		$first=$sign->getFirst();
        $last=$sign->getLast();
        $user=$sign->getUser();
        $email=$sign->getEmail();
        $mdp=$sign->getMdp();
        
            
        $req->bindValue(':first',$first);
		$req->bindValue(':last',$last);
		$req->bindValue(':user',$user);
		$req->bindValue(':email',$email);
		$req->bindValue(':mdp',$mdp);
		
            $req->execute();
           
        }
	
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	
	
	
	function afficher()
	{
		$sql="SElECT * FROM sign1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimer($first)
	{
		$sql="DELETE FROM client where first= :first";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':first',$first);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
?> 
 
