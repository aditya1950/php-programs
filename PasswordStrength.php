<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<!--ADITYA CHIMBALKAR
 CHAPTER 3 - Exercise: 5 -->
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Password Strength</title>

<style type="text/css">
<!--
.style1 {color: #000099}
-->
</style>
</head>
<body>
<div class="style1">
<h1>Password Strength</h1><hr />
<?php
function testPass($password)
{
    if ( strlen( $password ) == 0 )
    {
        return 1;
    }
 
    $strength = 0;
 
    /*** get the length of the password ***/
    $length = strlen($password);
	echo "<br>", $length ," is the length<br>";
 
    /*** check if password is not all lower case ***/
    if(strtolower($password) == $password)
    {
        $strength += 1;
		
		echo "All password is lower case<br>";
    }
	
 
    /*** check if password is not all upper case ***/
    if(strtoupper($password) == $password)
    {
        $strength += 1;
		echo "All password is upper case<br>";
    }
	
 
	/*** check string length is under 8chars ***/
    if($length < 8)
    {
        $strength += 1;
		echo "Length is under 8 characters<br>";
    }
 
    /*** check string length is 8-15 chars ***/
    if($length >= 8 && $length <= 15)
    {
        $strength += 2;
		echo "Length is between 8-16 characters<br>";
    }
 
    /*** check if lenth is 16 - 35 chars ***/
    if($length >= 16 && $length <=35)
    {
        $strength += 3;
		echo "Length is between 16-35 characters<br>";
    }
 
    /*** check if length greater than 35 chars ***/
    if($length > 35)
    {
        $strength += 3;
		echo "Length exceeds than 35 characters<br>";
    }
 
    /*** get the numbers in the password ***/
    preg_match_all('/[0-9]/', $password, $numbers);
    $strength += count($numbers[0]);
	
 
    /*** check for special chars ***/
    if (preg_match_all('/[|!@#$%&*\/=?,;.:\-_+~^\\\]/', $password, $specialchars)){
		$strength += sizeof($specialchars[0]);
		
		echo "Special characters are present <br>";
	}
	else {
		echo "Special characters not present<br>";
		}

	

    /*** get the number of unique chars ***/
    $chars = str_split($password);
    $num_unique_chars = sizeof( array_unique($chars) );
	$strength += $num_unique_chars * 2;
	
	
 
    /*** strength is a number 1-10; ***/
    $strength = $strength > 99 ? 99 : $strength;
    $strength = floor($strength / 10 + 1);
 
    /*return $strength;*/
	
	if ($strength > 3){
		echo "Password is Good<br><br>";
	}
	else{
		echo "Password is Weak<br><br>";
	}
	
}
 
/*** example usage ***/
$pass = array('aditya','ADITYA','aditya_chimbalkar@#1950','@Aditya','aditya123','cHiMbaL@43_.fe','adi_tya@123','12345','AD','abcd1234asdf32552');
foreach($pass as $password){
	echo "The password is ", $password;
	echo testPass($password);
}

 
?>
</div>

</body>
<html>