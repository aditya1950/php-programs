
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<!--ADITYA CHIMBALKAR
 CHAPTER 3 - Exercise: 2 -->
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Compare Strings</title>

<style type="text/css">
<!--
.style1 {color: #000099}
-->
</style>
</head>
<body>
<div class="style1">
<h1>Compare Strings</h1><hr />
			<?php

			$firstString = "Geek2Geek";
			$secondString = "Geezer2Geek";
			echo "First String = Geek2Geek<br>";
			echo "Second String = Geezer2Geek<br>";

			if ( !empty($firstString) && !empty($secondString)) {
			if ($firstString == $secondString)
			echo "<p>Both strings are the same.</p>";
			else {
			echo "<p>Both strings have " . similar_text($firstString, $secondString)
			. " character(s) in common.<br />";
			echo "<p>You must change " .
			levenshtein($firstString,
			$secondString) . " character(s) to make the strings the same.<br />";
			}
			}

			else
			echo "<p>Either the \$firstString variable or the \$secondString variable does not
			contain a value so the two strings cannot be compared. </p>";


			?>



</div>
</body>
</html>