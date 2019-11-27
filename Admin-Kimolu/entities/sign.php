<?php

class sign
{
	private $first;
	private $last;
	private $user;
	private $email;
	private $mdp;
	
	function __constract($first,$last,$user,$email,$mdp)
	{
		$this->first=$first;
		$this->last=$last;
		$this->user=$user;
		$this->email=$email;
		$this->mdp=$mdp;
		
	}
	
	function getFirst()
	{
		return $first->first;
	}
	function getLast()
	{
		return $last->last;
	}
	function getUser()
	{
		return $this->user;
	}
		function getEmail()
	{
		return $this->email;
	}
		function getMdp()
	{
		return $this->mdp;
	}
	
	
}


?>