// JavaScript Document
$(document).ready(function() {
	$('#mms_register').submit(function() {
		// /[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/
		var username = $(this).find('input[name="username"]').val();
		var email    = $(this).find('input[name="email"]').val();
		
		var re = /\S+@\S+\.\S+/;
		var ru = /^[a-zA-Z0-9]+$/;
		var err = false;
		if(!re.test(email)) {
			$('#email_err').show();
			err = true;
		}else
			$('#email_err').hide();
		
		if(!ru.test(username)) {
			$('#username_err').show();
			err = true;
		}else
			$('#username_err').hide();
		
		if(!err)
			return true;
		else
			return false
	});
});
