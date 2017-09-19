function validation(){
	var Email=document.loginForm.email;
	var Password = document.loginForm.pass;


			if (validEmail(Email)) {
				if (validPassword(Password)){

				}

			}
	
	return false;
}
function validEmail(email){
	var regEmail=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
	if (email.value=="") {
		alert("Plz enter your email");
		return false;
	}else{
		if (email.value.match(regEmail)) {
			return true;
		}else{
			alert("Email not valid");
			email.focus();
			return false;
		}
	}

}
function validPassword(pass) {
	var regPassword=/^[a-zA-Z0-9!@#$%^&*]{3,6}$/;

	if(pass.value==""){
		alert("Password is Invalid");
		return false;
	}else{
		if(pass.value.match(regPassword)){
			return true;
		}else{
			alert("Password is not valid");
			pass.focus();
			return false;
		}
	}
}