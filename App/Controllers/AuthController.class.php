<?php 

class AuthController
{
	
	public static function login_user($User)
	{
		
				$userEmail = $_POST['email'];
				$userPassword = $_POST['password'];

				$User = new User ($userEmail, $userPassword);
		
			try 
      {
				
        $loginUser = User::get_user_by_email($User->email);

        $result = $loginUser->fetch(PDO::FETCH_ASSOC);
				$userEmail = $result['email'];
				$userPassword = $result['password'];
				
				if($userEmail == $User->email && $userPassword == $User->password):
					session_start();
					$_SESSION["Email"] = $userEmail;
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
			
			  session_start();
  
				session_destroy();

				header('Location: /public_html/login');
			
		}
	
}


?>