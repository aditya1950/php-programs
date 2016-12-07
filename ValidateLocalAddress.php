<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<!--ADITYA CHIMBALKAR
 CHAPTER 3 - Exercise: 3 -->
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Validate Local Address</title>

<style type="text/css">
<!--
.style1 {color: #000099}
-->
</style>
</head>
<body>
<div class="style1">
<h1>Validate Local Address</h1><hr />
			<?php
			
			$email = array(
			"jsmith123@example.org",
			"john.smith.mail@example.org",
			"john.smith@example.org",
			"john.smith@example",
			"jsmith123@mail.example.org");
			
			foreach ($email as $emailAddress){
			echo "The email address &ldquo;" . $emailAddress ."&rdquo; ";
			if (preg_match("/^(([A-Za-z]+\d+)|" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i",
			$emailAddress)==1)
			echo " is a valid e-mail address.<br><br>";
			else
			echo " is not a valid e-mail address.<br><br>";
			}
			
			?>



</div>
</body>
</html>