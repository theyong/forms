//called from onChange
function check1(input) {
	if (document.getElementById('email1').value != input) {
		input.setCustomValidity("The two lead's email addresses must match!")
	} else {
		//input is valid -- reset the error message
		input.setCustomValidity('');
	}
}

function check2(input) {
	if (document.getElementById('email2').value != input) {
		input.setCustomValidity("The two follow's email addresses must match!")
	} else {
		//input is valud -- reset the error message
		input.setCustomValidity('');
	}
}
