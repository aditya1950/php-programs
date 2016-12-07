<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<!--ADITYA CHIMBALKAR
 CHAPTER 1 - Exercise: 2 -->
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Return Value</title>

<style type="text/css">
<!--
.style1 {color: #000099}
-->
</style>
</head>

<body>
<div class="style1">

		<?php
		$p=2;
		$q=3;

		echo " Result of the Values<br><br> ";
		
		echo "ReturnValue of 2 == 3 is ", $ReturnValue ;
		$ReturnValue = var_dump($p == $q);

		echo "<br> ReturnValue of " ,"'2'"," + ","'3'" ," is ", $ReturnValue ;
		$ReturnValue = var_dump($p + $q);

		echo "<br>ReturnValue of  2 >= 3 is ", $ReturnValue ;
		$ReturnValue = var_dump($p >= $q);

		echo "<br>ReturnValue of   2 <= 3 is ", $ReturnValue ;
		$ReturnValue = var_dump($p <= $q);

		echo "<br>ReturnValue of  2 + 3 is ", $ReturnValue ;
		$ReturnValue = var_dump($p + $q);

		echo "<br>ReturnValue of  (2 >= 3) && (2 > 3) is ", $ReturnValue ;
		$ReturnValue = var_dump(($p >= $q) && ($p > $q));

		echo "<br>ReturnValue of  (2 >= 3) || (2 > 3) is ", $ReturnValue ;
		$ReturnValue = var_dump(($p >= $q) ||  ($p > $q));
		 
		?> 
</div>
</body>
</html>