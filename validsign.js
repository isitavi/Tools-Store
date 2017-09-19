function validation(){

	var Name = document.regForm.firstname;
	var Lastname = document.regForm.lastname;
	var Email=document.regForm.email;
	var Password = document.regForm.pass;
	var Repass = document.regForm.repass;

	if(validFirstname(Name)){
		if(validLastname(Lastname)){
			if (validEmail(Email)) {
				if (validPassword(Password)){
					if (validRepass(Repass)){
					}

				}


			}

		}

	}

	
}

function validFirstname(firstname){
	var regName=/^([a-zA-Z ]){2,30}$/;
	
	if(firstname.value==""){
		alert("First Name is Invalid");
		firstname.focus();
		return false;
	}
	else{
		if(firstname.value.match(regName)){
		return true;
	}else{
		alert("First Name is Invalid");
		firstname.focus();
		return false;
	}
	}
}

function validLastname(lastname) {
	var regLastname=/^([a-zA-Z ]){2,30}$/;

	if(lastname.value==""){
		alert("Last Name is Invalid");
		lastname.focus();
		return false;
	}else{
		if(lastname.value.match(regLastname)){
			return true;
		}else{
			alert("Last Name is not valid");
			lastname.focus();
			return false;
		}
	}
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
function validRepass(repass) {
	var regRepass=/^[a-zA-Z0-9!@#$%^&*]{3,6}$/;

	if(repass.value==""){
		alert("Confirm Password is Invalid");
		return false;
	}else{
		if(repass.value.match(regRepass)){
			return true;
		}else{
			alert("Confirm Password is not valid");
			repass.focus();
			return false;
		}
	}
}