//called from onChange
function checklead(laddress2) {
	laddress1 = $('[name="email1"]');
	if (laddress2.value != laddress1.val()) {
		document.getElementById("leaderror").innerHTML="The lead's email addresses must match!<br/>";
	} else {
		//input is valid -- reset the error message
		document.getElementById("leaderror").innerHTML="";
	}
}

function checkfollow(faddress2) {
	faddress1 = $('[name="email2"]');
	if (faddress2.value != faddress1.val()) {
		document.getElementById("followerror").innerHTML="The two follow's email addresses must match<br/>!"
	} else {
		//input is valud -- reset the error message
		document.getElementById("folowerror").innerHTML="";
	}
}