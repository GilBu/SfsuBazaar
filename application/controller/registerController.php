<?php

class RegisterController extends Controller
{
    /**
     * PAGE: index
     * Renders the register index page
     */
    public function index()
    {   
        require APP . 'view/register/index.php';
    }

    /**
     * ACTION: checkIfEmailExist
     * Checks if email already exist in the database
     */
    public function checkIfEmailExist()
    {
        $email = filter_input(INPUT_POST, 'email');

        $isTaken = User::isEmailTaken($email);

        if(!empty($isTaken))
        {
            header('refresh: 0; URL=' . URL . 'register/index');
            $message = "Account with the email " . $_POST['email'] . " already exists.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else
        {
            return $this->register();
        }
    }

    /**
    * ACTION: register
    * Registers users and saves their information in the database
    */
    public function register()
    {
      	if(isset($_POST['register'])  && !empty($_POST['firstName']) && !empty($_POST['lastName'])  
                                      && !empty($_POST['email']) && !empty($_POST['password']))
      	{   
            // get all data about user       
      		  $newUser = $this->getNewUser();

        		if(!empty($newUser))
        		{
                // save user info to the database
          			$newUser->create();

                // redirects to home page after successful registration
          			header('refresh: 0; URL=' . URL . 'login/index');
                $message = "Succesfully registered!";
                echo "<script type='text/javascript'>alert('$message');</script>";
        		}
      	}
        else
        {
            header('refresh: 0; URL=' . URL . 'register/index');
            $message = "Please do not leave any fields blank.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    /**
     * ACTION HELPER: getData
     * Get all the user's data for registration
     * @return User
     */
    public function getNewUser()
    {
      	$firstName = filter_input(INPUT_POST, 'firstName');
      	$lastName = filter_input(INPUT_POST, 'lastName');
      	$email = filter_input(INPUT_POST, 'email');
      	$password = filter_input(INPUT_POST, 'password');
        $password = password_hash($password, PASSWORD_DEFAULT);
      	$pwConfirm = filter_input(INPUT_POST, 'confirm');
      	$capcha = filter_input(INPUT_POST, 'capcha');
      	$terms = filter_input(INPUT_POST, 'terms');
      	$validDomain = strstr($email, "@mail.sfsu.edu");


        // checks if email domain is @mail.sfsu.edu 
      	if($validDomain)
      	{	
        		if(!empty($capcha) && !empty($terms))
        		{
        			 return new User($firstName, $lastName, $password, $email);
        		}
        		else if($password !== $pwConfirm)
        		{	
          			header('refresh: 0; URL=' . URL . 'register/index');
          			$message = "Password confirmation does not match the password you entered.";
                echo "<script type='text/javascript'>alert('$message');</script>";
        		}
        		else
        		{
          			header('refresh: 0; URL=' . URL . 'register/index');
                $message = "Capcha and Terms of Agreement checkbox must be checked to proceed.";
                echo "<script type='text/javascript'>alert('$message');</script>";
        		}
      	}
      	else if(!$validDomain)
      	{
        		header('refresh: 0; URL=' . URL . 'register/index');
        		$message = "Invalid email domain! Re-enter email with valid email domain!";
            echo "<script type='text/javascript'>alert('$message');</script>";
      	}
    }
}
