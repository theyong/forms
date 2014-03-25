function checkEmail(theForm) {
	alert("I got here");
	if (theForm.email1.value != theForm.email1check.value) {
		alert('Those emails don\'t match!');
		return false;
	} else {
		return true;
	}
}