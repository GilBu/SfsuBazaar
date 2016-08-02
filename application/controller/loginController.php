<?php

class loginController extends Controller
{
    /**
     * PAGE: index
     * Renders the login index page
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/login/index.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
    * ACTION: login
    * Logs user onto website by checking entered information to the database
    */
    public function login()
    {
        // check if the form is set and not empty
        if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password']))
        {
            $username = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password');
            $validDomain = strstr($username, "@mail.sfsu.edu");

            if($validDomain)
            {
                $user = Database::getInstance()->getUserInfoByEmail($username);
                $hashRealPW = $user->password;
                $verifyPasswordMatches = password_verify($password, $hashRealPW);                
                
                if($verifyPasswordMatches)
                { 
                    //header('refresh: 0; URL=' . URL . 'home/index');

                    $_SESSION['userID'] = $user->userID;
                    $_SESSION['userEmail'] = $user->email;
                    $_SESSION['userLoginStatus'] = 1;

                    header('refresh: 0; URL=' . URL . 'home/index');
                }
                else
                {
                    header('refresh: 0; URL=' . URL . 'login/index');
                    $message = "Invalid username or password! Please try again.";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
            }
            else if(!$validDomain)
            {
                header('refresh: 0; URL=' . URL . 'login/index');
                $message = "Invalid email domain! Login using valid email domain!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
        else
        {
            header('refresh: 0; URL=' . URL . 'login/index');
            $message = "Please enter your username and password.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    public function userLogout()
    {
        $_SESSION = array();
        session_destroy();

        header('refresh: 0; URL=' . URL . 'home/index');
    }
}
