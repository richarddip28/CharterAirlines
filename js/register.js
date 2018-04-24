
function validateForm(){
    	var x = document.forms["myForm"]["firstname"].value;
   	if (x == "") {
        	alert("First Name must be filled out");
        	return false;
    	}

	var x = document.forms["myForm"]["lastname"].value;
   	if (x == "") {
        	alert("Last Name must be filled out");
        	return false;
    	}

	var x = document.forms["myForm"]["postal"].value;
   	if (x == "") {
        	alert("Postal Code must be filled out");
        	return false;
    	}
	
	var x = document.forms["myForm"]["phone"].value;
   	if (x == "") {
        	alert("Phone Number must be filled out");
        	return false;
    	}

	var x = document.forms["myForm"]["username"].value;
   	if (x == "") {
        	alert("Username must be filled out");
        	return false;
    	}
	var regex = /^[A-Za-z][A-Za-z0-9]+$/;
	if(!regex.test(x)){
		alert("Username must: \n *Contain letters and numbers.\n *Begin with a letter.");
        	return false;
	}
	
	var x = document.forms["myForm"]["password"].value;
	var y = document.forms["myForm"]["password2"].value;
	var regex = /^(?=.*\d)(?=.*[!*])[A-Za-z][A-Za-z0-9!*]{8,16}.*$/;

   	if ((x === "") || (y === "")) {
        	alert("Password must be filled out");
        	return false;
    	}
	else if(!(x === y)){
		alert("Passwords must match");
		return false;
	}
	else if(!regex.test(x)){
		alert("Password must: \nMust be between 8 to 16 characters. \n*Must start with a letter. \n*Contain one ! or *. \n *Contain 1 digit.");
        	return false;
	}
	
	else return true;

}

function passwordLength(pw){

	var n = pw.length;

	if(n<8 || n>16) return false;
	else return true;
}
	
