	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

	<!--ADITYA CHIMBALKAR
	 CHAPTER 1 - Exercise: 6 -->
	<html>

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Is Even</title>

	<style type="text/css">
	<!--
	.style1 {color: #000099}
	-->
	</style>
	</head>

	<body>
	<div class="style1">

			<?php
			$tests = array(
			  "7", "10", "2.3", "3.6", "xyz"
				
			);


			foreach ($tests as $element) {
				if (is_numeric($element)){
					echo "'{$element}' is numeric and rounded to ", round($element),"<br>";
					if ($element % 2 == 0 ){
							  echo "The number is even <br>";
					  }else 
								  echo "The number is odd <br>";
					} 
			  /*elseif ($element % 2 == 0){
					  echo "even <br>";
					}*/
			  else {
					echo "'{$element}' is NOT numeric";
				}
			} 
			?> 


	</div>
	</body>
	</html> 