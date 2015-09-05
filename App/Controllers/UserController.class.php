<?php

include_once ROOT_PATH.'/App/Models/Auth.class.php';
include_once ROOT_PATH.'/App/Models/User.class.php';

class UserController
{	
		public static function add_user()
		{
			
				$userEmail = $_POST['email'];
				$userPassword = $_POST['password'];

				$User = new User ($userEmail, $userPassword);

					if(Auth::check_if_user_exists($User)):
						header('Location: /public_html/register?message=user_exists');
					else:
						User::save_user($User);
						header('Location: /public_html/login?message=user_saved');
					endif;
			
		}
}


?>