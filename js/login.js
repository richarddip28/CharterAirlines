function validateLogin(){
    	var x = document.forms["myForm"]["username"].value;
   	if (x == "") {
        	alert("Enter Username.");
        	return false;
    	}
	var regex = /^[A-Za-z][A-Za-z0-9]+$/;
	if(!regex.test(x)){
		alert("Username must: \n *Contain letters and numbers.\n *Begin with a letter.");
        	return false;
	}

	var regex = /^(?=.*\d)(?=.*[!*])[A-Za-z][A-Za-z0-9!*]{8,16}.*$/;
	var x = document.forms["myForm"]["password"].value;
   	if (x == "") {
        	alert("Password cannot be empty.");
        	return false;
    	}
	else if(!regex.test(x)){
		alert("Password must: \nMust be between 8 to 16 characters. \n*Must start with a letter. \n*Contain one ! or *. \n *Contain 1 digit.");
        	return false;
	}

	else return true;
}


