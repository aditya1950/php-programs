<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<!--ADITYA CHIMBALKAR
 CHAPTER 1 - Exercise: 5 -->
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Rounded Values</title>

<style type="text/css">
<!--
.style1 {color: #000099}
-->
</style>
</head>

<body>
<div class="style1">
		<?php

		  echo "<br>Rounded Values <br> ";
		  echo "round(0.10)  =", (round(0.10) . "<br>");
		  echo "round(0.75)  =", (round(0.75) . "<br>");
		  echo "round(0.37)  =", (round(0.37) . "<br>");
		  echo "round(-8.50) =", (round(-8.50) . "<br>");
		  echo "round(-3.70) =", (round(-3.70) . "<br>");

		  echo "<br><br>Ceil Values <br> ";
		  echo "ceil(0.10)   =", (ceil(0.10) . "<br>");
		  echo "ceil(0.75)   =", (ceil(0.75) . "<br>");
		  echo "ceil(0.37)   =", (ceil(0.37) . "<br>");
		  echo "ceil(-8.50)  =", (ceil(-8.50) . "<br>");
		  echo "ceil(-3.70)  =", (ceil(-3.70) . "<br>");

		  echo "<br><br>Floor Values <br> ";
		  echo "floor(0.10)  =", (floor(0.10) . "<br>");
		  echo "floor(0.75)  =", (floor(0.75) . "<br>");
	      echo "floor(0.37)  =", (floor(0.37) . "<br>");
		  echo "floor(-8.50) =", (floor(-8.50) . "<br>");
		  echo "floor(-3.70) =", (floor(-3.70) . "<br>");

		?> 

</div>
</body>
</html>