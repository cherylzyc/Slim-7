<?php
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

		
		// (2) mail()
		// mail() sends an email from your webserver to any address
		// to send email we need to know a few things:
		// (1) receipient email address (who gets it?)
		// (2) subject line
		// (3) message body
		// optionally, you might also want to set the sender address,
		// or maybe add a file attachment...
		
		$email_recipient = "mazeyu@gmail.com";
		$email_subject = "A test email from PHP";
		$email_body = "Welcome to email spam from PHP!";
		
		//the mail() function takes the values in this order:
		//(1) recipient, (2) subject, (3) body
		$success = mail($email_recipient, $email_subject, $email_body);
		// check to see if email sent successfully
		if ($success) {
			// if the value in $success = true our code here runs
			readfile("emailsent.html");
		} else {
			readfile("emailreject.html");
		}
	?>