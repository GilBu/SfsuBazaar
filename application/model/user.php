<?php

class User
{
	private $userID;
	private $firstName;
	private $lastName;
	private $password;
	private $email;
	private $imagePath;
	private $rating;
	private $dateOfAccountCreation;
	private $dateOfLastAccountUpdate;
	private $isActive;

	public function __construct(	$firstName, $lastName, $password,
					$email,	$imagePath	)
	{
		$this->firstName	= $firstName;
		$this->lastName		= $lastName;
		$this->password		= $password;
		$this->email		= $email;
		$this->imagePath	= $imagePath;
	}

	public function create()
	{
		return Database::getInstance()->addUser($this);
	}

	public static function get($userID)
	{
		return Database::getInstance()->getUserByID($userID);
	}

	public function update()
	{
		// TODO: Needs an actual schema for updating.
	}

	public static function delete($userID)
	{
		return Database::getInstance()->deleteUserByID($userID);
	}
}
