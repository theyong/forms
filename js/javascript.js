//called from onChange
function checklead(laddress2) {
	laddress1 = $('[name="email1"]');
	if (laddress2.value != laddress1.val()) {
		$("#leaderror").html("The lead's email addresses must match!<br/>");
	} else {
		//input is valid -- reset the error message
		$("#leaderror").html("");
	}
}

function checkfollow(faddress2) {
	faddress1 = $('[name="email2"]');
	if (faddress2.value != faddress1.val()) {
		$("#followerror").html("The two follow's email addresses must match<br/>!")
	} else {
		//input is valud -- reset the error message
		$("#folowerror").html("");
	}
}
