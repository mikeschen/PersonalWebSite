<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
		$email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
		$message = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS));

		if ($name == "" || $email == "" || $message == "") {
			echo "Please fill in the required fields: Name, Email, Message";
			exit;
		}

		if ($_POST["address"] != "") {
			echo "Bad form input";
			exit;
		}

		require_once("inc/phpmailer/class.phpmailer.php");
		require_once("inc/phpmailer/class.smtp.php");

		$mail = new PHPMailer();
		if (!$mail->ValidateAddress($email)) {
			echo "Invalid Email Address";
		}
		$email_body = "";
		$email_body .= "Name " . $name . "\n";
		$email_body .= "Email " . $email . "\n";
		$email_body .= "Message " . $message . "\n";

		$mail->isSMTP();
		$mail->SMTPDebug = 1;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587;
		$mail->isHTML(true);
		$mail->Username = "mikeschendev@gmail.com";

		$mail->setFrom($email, $name);
		$mail->Subject = "mikeschen.com message from" . $name;
		$mail->Body    = $email_body;
		$mail->addAddress("mikeschendev@gmail.com");
		$mail->SMTPSecure = "tls";
		$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

		if(!$mail->send()) {
		    echo "Message could not be sent.";
		    echo "Mailer Error: " . $mail->ErrorInfo;
		    exit;
		}
		header("location:contactme.php?status=thanks");
	}

	$pageTitle = "Contact Michael Schennum";
	$section = "contactme";
	include("inc/header.php");
	include("inc/navbar.php"); ?>

		<div class="section page">
			<div class="wrapper">
				<h1>Contact Me</h1>
				<?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
						echo "<p>Thanks for the email! I&rsquo;ll check out your message shortly!</p>";
					} else { ?>
				<form method="post" action="contactme.php">
					<table>
					<tr>
						<th><label for="name">Name</label></th>
						<td><input type="text" id="name" name="name" /></td>
					</tr>
					<tr>
						<th><label for="email">Email</label></th>
						<td><input type="text" id="email" name="email" /></td>
					</tr>
					<tr>
						<th><label for="message">Message</label></th>
						<td><textarea name="message" id="message"></textarea></td>
					</tr>
					<tr style="display:none">
						<th><label for="address">Address</label></th>
						<td><input type="address" id="address" name="address" />
						<p>Please leave this field blank</p></td>
					</tr>
					</table>
					<input type="submit" value="Send" />
				</form>
				<?php } ?>
			</div>
		</div>
	</body>
</html>
