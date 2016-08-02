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

        // if(!empty($isTaken))
        // {
        //     header('refresh: 0; URL=' . URL . 'register/index');
        //     $message = "Account with the email " . $_POST['email'] . " already exists.";
        //     echo "<script type='text/javascript'>alert('$message');</script>";
        // }
        // else
        // {
        //     return $this->register();
        // }

        switch($isTaken)
        {
            case true:
                $this->displayMsg('exist');
                break;
            default:
                return $this->register();
                break;
        }     
    }

   /**
    * ACTION: register
    * Registers users and saves their information in the database
    */
    public function register()
    {
      	if(isset($_POST['register'])  && !empty($_POST['firstName']) 
                                      && !empty($_POST['lastName'])  
                                      && !empty($_POST['email']) 
                                      && !empty($_POST['password'])
                                      && !empty($_POST['confirm'])
                                      && !empty($_POST['capcha'])
                                      && !empty($_POST['terms']))
      	{   
            // get all data about user       
      		  $newUser = $this->getNewUser();

        		if(!empty($newUser))
        		{
                // save user info to the database
          			$newUser->create();

                $this->displayMsg('success');
        		}
      	}
        else
        {
            $this->displayMsg('blank');
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
      	$pwConfirm = filter_input(INPUT_POST, 'confirm');
      	$capcha = filter_input(INPUT_POST, 'capcha');
      	$terms = filter_input(INPUT_POST, 'terms');

        // making sure registering email domain is correct
      	$validDomain = strstr($email, "@mail.sfsu.edu");

        if($validDomain)
        { 
            if($password == $pwConfirm)
            {
                // hashing password before saving into database
                $password = password_hash($password, PASSWORD_DEFAULT);

                return new User($firstName, $lastName, $password, $email);
            }
            else 
            {
                $this->displayMsg('mismatch');
            }
        }
        else if(!$validDomain)
        {
            $this->displayMsg('invalid');
        }
    }


    public function displayMsg($msg)
    {
        switch($msg)
        {
          case 'exist':
              header('refresh: 0; URL=' . URL . 'register/index');
              $message = "Account with the email " . $_POST['email'] . " already exists.";
              echo "<script type='text/javascript'>alert('$message');</script>";
              break;
          case 'success':
              header('refresh: 0; URL=' . URL . 'login/index');
              $message = "Succesfully registered!";
              echo "<script type='text/javascript'>alert('$message');</script>";
              break;
          case 'blank':
              header('refresh: 0; URL=' . URL . 'register/index');
              $message = "Check for blank fields and check all boxes.";
              echo "<script type='text/javascript'>alert('$message');</script>";
              break;
          case 'mismatch':
              header('refresh: 0; URL=' . URL . 'register/index');
              $message = "Password confirmation does not match the password you entered.";
              echo "<script type='text/javascript'>alert('$message');</script>";
              break;
          case 'invalid':
              header('refresh: 0; URL=' . URL . 'register/index');
              $message = "Invalid email domain! Re-enter email with valid email domain!";
              echo "<script type='text/javascript'>alert('$message');</script>";
              break;
          default:
              echo "Error";
        }




    }
}
