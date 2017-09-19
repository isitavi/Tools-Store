function validation(){

	var Name = document.contactForm.firstname;
	var Email=document.contactForm.email;

	if(validFirstname(Name)){
			if (validEmail(Email)) {
				
			}
	}
	return false;
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

