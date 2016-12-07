<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Paycheck Results</title>
<meta http-equiv="Content-Type"
	content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="php_styles.css" type="text/css" />
</head>
<body>
<h1>Paycheck Calculations</h1>
<?php

$hoursWorked = $_GET["hours"];
$wages = $_GET["wage"];


echo "You entered that you worked: $hoursWorked hours.<br>";
echo "You entered that your hourly wage is: $wages per hour.<br>";

if ($hoursWorked <= 40)
{
	$payCheck = ($hoursWorked * $wages);
		echo "Your Paycheck is: $payCheck";
}

if ($hoursWorked > 40) 
{
	$payCheck = ($hoursWorked * $wages) + (($hoursWorked - 40) * $wages * 1.5);
	   echo "Your Paycheck is: $payCheck";
}


?>
</body>
</html>

