
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<!--ADITYA CHIMBALKAR
 CHAPTER 4 - Exercise: 2 -->
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact Me</title>

<style type="text/css">
<!--
.style1 {color: #000099}
-->
</style>
</head>
<body>
<div class="style1" align="center">

			<?php
			function validateInput($data, $fieldName) {
			global $errorCount;
			
			if (empty($data)) {
			echo "\"$fieldName\" is a required field.<br/>\n";
			++$errorCount;
			$retval = "";
			} else { 
			$retval = trim($data);
			$retval = stripslashes($retval);
			}
			return($retval);
			}
			
			function validateEmail($data, $fieldName) {
			global $errorCount;
			  
			if (empty($data)) {
			echo "\"$fieldName\" is a required field.<br/>\n";
			++$errorCount;
			$retval = "";
			} else { 
			$retval = trim($data);
			$retval = stripslashes($retval);
			//$pattern = "/^(([A-Za-z]+\d+)|" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i";
			$pattern = "^[_[:alnum:]-]+" . "(\.[_[:alnum:]-]+)*" . "@[[:alnum:-]+]" . "(\.[_[:alnum:]-]+)*" . "(\.[[:alpha:]]{2,})$";
			//if (preg_match($pattern, $retval)==0) {
			//echo "\"$fieldName\" is not a valid e-mail	address.<br/>\n";
			//++$errorCount;
			
			}
			return($retval);
			}
			
			function displayForm($Sender, $Email, $Subject,$Message) {
			?>
				<h2 style = "text-align:center">Contact Me</h2>
				<hr />
				<form name="contact" action="ContactForm.php" method="post">
				<p>Your Name: <input type="text" name="Sender" value=" <?php echo $Sender; ?>" /></p>
				<p>Your E-mail: <input type="text" name="Email" value="<?php echo $Email; ?>" /></p>
				<p>Subject: <input type="text" name="Subject" value="<?php echo $Subject; ?>" /></p>
				<p>Message: <br />
				<textarea name="Message"><?php echo $Message;?></textarea></p>
				<p><input type="reset" value="Clear Form" />&nbsp;
				&nbsp;<input type="submit" name="Submit" value="Send Form" /></p>
				</form>
				
				
				<?php
				}
		
				$ShowForm = TRUE;
				$errorCount = 0;
				$Sender = "";
				$Email = "";
				$Subject = "";
				$Message = "";
				
				if (isset($_POST['Submit'])) {
				$Sender = validateInput($_POST['Sender'],"Your Name");
				$Email = validateEmail($_POST['Email'],"Your E-mail");
				$Subject = validateInput($_POST['Subject'],"Subject");
				$Message = validateInput($_POST['Message'],"Message");
				if ($errorCount==0)
				$ShowForm = FALSE;
				else
				$ShowForm = TRUE;
				}
				
				if ($ShowForm == TRUE) {
				if ($errorCount>0) // if there were errors
				echo "<p>Please re-enter the form information below.</p>\n";
				displayForm($Sender, $Email, $Subject, $Message);
				}
				else {
				$SenderAddress = "$Sender <$Email>";
				$Headers = "From: $SenderAddress\nCC: $SenderAddress\n";
				$result = mail("adityachimbalkar33@gmail.com",	$Subject, $Message, $Headers);
				if ($result)
				echo "<p>Your message has been sent. Thank you, " . $Sender . ".</p>\n";
				else
				echo "<p>There was an error sending your message, " . $Sender . ".</p>\n";
				}
				
				?>
				
</div>
</body>
</html>