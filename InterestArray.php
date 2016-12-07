
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

	<!--ADITYA CHIMBALKAR
	 CHAPTER 1 - Exercise: 1 -->
	<html>

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Interest Array</title>

	<style type="text/css">
	<!--
	.style1 {color: #000099}
	-->
	</style>
	</head>

	<body>

	<span class="style1">
			<?php
			$RatesArray = array(
			"InterestRate1 = .0725",
			"InterestRate2 = .0750",
			"InterestRate3 = .0775",
			"InterestRate4 = .0800",
			"InterestRate5 = .0825",
			"InterestRate6 = .0850",
			"InterestRate7 = .0875"

			);
			echo "Interest Rates are as follows <br><br>";
			echo $RatesArray[0]. "<br>";
			echo $RatesArray[1]. "<br>";
			echo $RatesArray[2]. "<br>";
			echo $RatesArray[3]. "<br>";
			echo $RatesArray[4]. "<br>";
			echo $RatesArray[5]. "<br>";
			echo $RatesArray[6]. "<br>";

			echo "<br><br>Using print_r() function we display result as follows <br>";
			print_r($RatesArray);


			?>
	</span>

	</body>
	</html> 