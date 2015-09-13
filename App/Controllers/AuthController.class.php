<?php 

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

class AuthController
{
	
	public static function login_user()
	{
		
      $userEmail = $_POST['email'];
      $userPassword = $_POST['password'];
		
	try 
      {
				
        $loginUser = User::get_user_by_email($userEmail);

        $result = $loginUser->fetch(PDO::FETCH_ASSOC);
				$dbEmail = $result['email'];
				$dbPassword = $result['password'];
				$dbFirstName = $result['firstName'];
				$dbLastName = $result ['lastName'];
				
				if($dbEmail == $userEmail && $dbPassword == $userPassword):
				
					if (session_status() !== PHP_SESSION_ACTIVE):
						session_start();
					endif;
				
					$_SESSION["Email"] = $dbEmail;
					$_SESSION["FirstName"] = $dbFirstName;
					$_SESSION["LastName"] = $dbLastName;

					header('Location: /public_html/goals?message=login_success');
				
				else:
					header('Location: /public_html/login?message=login_error');
				endif;
         
        $db = null;

      }
      catch(PDOException $e)
      {
        die($e->getMessage());

      }
		
	}
	
	public static function logout_user()
		{
			
			  if (session_status() !== PHP_SESSION_ACTIVE):
                session_start();
              endif;
  
              session_destroy();

              header('Location: /public_html/login');
			
		}
	
}


?>