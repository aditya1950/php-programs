<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<!--ADITYA CHIMBALKAR
 CHAPTER 3 - Exercise: 4 -->
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Perfect Palindrome</title>

<style type="text/css">
<!--
.style1 {color: #000099}
-->
</style>
</head>
<body>
<div class="style1">
<h1>Perfect Palindrome</h1><hr />
			<?php
			
			$w = array("racecar","car","madam");

			foreach($w as $word){
			echo "<br>String: " . $word . "<br>";
			$reverse = strrev($word); // reverse the word
			if ($word == $reverse) // compare if  the original word is same as the reverse of the same word
				echo 'Output: This string is a palindrome';
			else
				echo 'Output: This is not a palindrome';
			}
						
			?>



</div>
</body>
</html>