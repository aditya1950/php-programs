<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<!--ADITYA CHIMBALKAR
 CHAPTER 3 - Exercise: 4 -->
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Standard Palindrome</title>

<style type="text/css">
<!--
.style1 {color: #000099}
-->
</style>
</head>
<body>
<div class="style1">
<h1>Standard Palindrome</h1><hr />
			<?php
			$o = array("A maj, a plan, a canal, pajama","Madam, I'm Adam");

			foreach($o as $original){
			$palindrome = strtolower(preg_replace("([^A-Za-z0-9])", "", $original ));
			$palindrome2 = strtolower(strrev($palindrome));
			echo "Original Statement: $original <br /><br />";
			if ($palindrome == $palindrome2){
			  echo "$palindrome is a Standard Palindrome of $palindrome2<br><br>";
			}else{
			echo "$palindrome is <strong>not</stong> a Standard Palindrome of $palindrome2";
			}
			};
						
			?>



</div>
</body>
</html>