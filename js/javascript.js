//called from onChange
function check(input) {
	if (document.getElementById('email1') != document.getElementById('email1check').value) {
		input.setCustomValidity("The two lead's email addresses must match!")
	} else {
		//input is valid -- reset the error message
		input.setCustomValidity('');
	}
	
	if (document.getElementById('email2') != document.getElementById('email2check').value) {
		input.setCustomValidity("The two follow's email addresses must match!")
	} else {
		//input is valud -- reset the error message
		input.setCustomValidity('');
	}
}
