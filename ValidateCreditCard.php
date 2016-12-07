
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<!--ADITYA CHIMBALKAR
 CHAPTER 3 - Exercise: 1 -->
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Validate Credit Card</title>

<style type="text/css">
<!--
.style1 {color: #000099}
-->
</style>
</head>
<body>
<div class="style1">

<h1>Validate Credit Card</h1><hr />
		<?php

		$CreditCard = array(
		"",
		"8910-1234-5678-6543",
		"OOOO-9123-4567-0123");

		foreach ($CreditCard as $CardNumber) {
		if (empty($CardNumber))
		echo "<p>This Credit Card Number is invalid because it contains an empty string.</p>";

		else {
		$CreditCardNumber = $CardNumber;
		$CreditCardNumber = str_replace("-", "",$CreditCardNumber);
		$CreditCardNumber = str_replace(" ", "",$CreditCardNumber);
		if (!is_numeric($CreditCardNumber))
		echo "<p>Credit Card Number " . $CreditCardNumber . " is not a valid Credit Card number because it contains a non-numeric character. </p>";
		else
		echo "<p>Credit Card Number " . $CreditCardNumber . " is a valid Credit Card number.</p>";
		}
		}

		?>


</div>
</body>
</html>