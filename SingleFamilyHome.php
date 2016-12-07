	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

	<!--ADITYA CHIMBALKAR
	 CHAPTER 1 - Exercise: 3 -->
	<html>

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Single Family Home</title>

	<style type="text/css">
	<!--
	.style1 {color: #000099}
	-->
	</style>
	</head>

	<body>
	<div class="style1">
			<?php

			$SingleFamilyHome = 399500;
			$SingleFamilyHome_Display =
			number_format($SingleFamilyHome, 2);
			echo "<p>The current median price of a single family home in Pleasanton, CA is $$SingleFamilyHome_Display.</p><br>";

			?>

	</div>
	</body>
	</html> 