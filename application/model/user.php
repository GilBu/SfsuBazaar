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

	private static $tableName = 'users';

	public function __construct(	$firstName, $lastName, $password,
					$email,	$imagePath	)
	{
		$this->firstName	= $firstName;
		$this->lastName		= $lastName;
		$this->password		= $password;
		$this->email		= $email;
		$this->imagePath	= $imagePath;
	}

	public function create($user)
	{
		return Database::getInstance()->
			addUser(	$firstName, $lastName, $password,
					$email,	$imagePath	);
	}

	public function get()
	{
		return Database::getInstance()->
			getUserByID(	$userID	);
	}

	public function update()
	{
		return Database::getInstance()->
			updateUser(	$firstName, $lastName, $password,
					$email, $imagePath, $userID	);
	}

	public function delete()
	{
		return Database::getInstance()->
			deleteUser(	$userID	);
	}
}
