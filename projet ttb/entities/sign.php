<?php

class sign
{
	private $first;
	private $last;
	private $user;
	private $email;
	private $mdp;
	
	
	function getFirst()
	{
		return $this->first;
	}
	function getLast()
	{
		return $this->last;
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
	function setFirst ($first)
	{
		$this->first=$first;
	}
	function setLast ($last)
	{
		$this->last=$last;
	}
	function setUser ($user)
	{
		$this->user=$user;
	}
	function setEmail ($email)
	{
		$this->email=$email;
	}
	function setMdp ($mdp)
	{
		$this->mdp=$mdp;
	}
	function __constract($first,$last,$user,$email,$mdp)
	{
		$this->first=$first;
		$this->last=$last;
		$this->user=$user;
		$this->email=$email;
		$this->mdp=$mdp;
		
	}
	
	
}


?>