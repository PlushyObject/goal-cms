var RegisterFormValidate = (function(){
	
	return {
		
		checkInput: function(type, $input)
		{
			var str = $input.val();
			var patt = null;
			
			if(type === "username"){
				patt = /^[a-zA-Z0-9]{4,16}$/;
			} else if(type === "password"){
				
			/*
					1.) at least 1 upper case character 
					2.) at least 1 lower case character 
					3.) at least 1 numerical character 
					4.) at least 1 special character
					5.) Min Length 6 characters
					6.) Max Length 255 characters
			*/
				
				patt = /(?=^.{6,255}$)((?=.*\d)(?=.*[A-Z])(?=.*[a-z])|(?=.*\d)(?=.*[^A-Za-z0-9])(?=.*[a-z])|(?=.*[^A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z])|(?=.*\d)(?=.*[A-Z])(?=.*[^A-Za-z0-9]))^.*/;
			}
			
			var res = patt.test(str); 
			
			return res;
			
		}
	}
}

)();

$('#new-user-username').change(function(){

	var $userUsername = $('#new-user-username');
	var $usernameInfo = $('#new-username-info');

	var res = RegisterFormValidate.checkInput('username', $userUsername);
	
	if(res){
		$usernameInfo.text('Good to go');
	} else{
		$usernameInfo.text('Nah Brah');
	}

});

$('#new-user-password').change(function(){

	var $userPassword = $('#new-user-password');
	var $passwordInfo = $('#new-password-info');

	var res = RegisterFormValidate.checkInput('password', $userPassword);
	
	if(res){
		$passwordInfo.text('Good to go');
	} else{
		$passwordInfo.text('Nah Brah');
	}

});

$('#new-user-verify').change(function(){

	var $userPassword = $('#new-user-password').val();
	var $userVerify = $('#new-user-verify').val();
	var $verifyInfo = $('#verify-password-info');
	
	if($userPassword == $userVerify){
		$verifyInfo.text('Good to go');
	} else{
		$verifyInfo.text('Nah Brah');
	}

});

$('#new-user-verify').change(function(){
	
	var $userUsername = $('#new-user-username').val();
	var $userPassword = $('#new-user-password').val();
	var $userVerify = $('#new-user-verify').val();
	
	var validUsername = RegisterFormValidate.checkInput('username', $userUsername);
	var validPassword = RegisterFormValidate.checkInput('password', $userPassword);
	
	alert('This Fired');
	
	if(validUsername && validPassword && $userVerify == $userPassword){
		
		$('#btn-submit-registration').prop('disabled',false);
		
	}
	
	
	
});
