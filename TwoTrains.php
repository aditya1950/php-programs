 <!DOCTYPE>
<html>
<head>
<title>Two Trains</title>
</head>
<body>
<?php
function validateInput($data, $fieldName) {
        global $errorCount;
        if (empty($data))
        {
        echo "\"$fieldName\" is a required field.<br />\n";
                ++$errorCount;
                $retval = "";
        }
        else
        {
                $retval = trim($data);
                $retval = stripslashes($retval);
        }
                return($retval);
}
function validateDistance($data, $fieldName)
{
        global $errorCount;
        if (empty($data))
        {
        echo "\"$fieldName\" is a required field.<br />\n";
                ++$errorCount;
                $retval = "";
        }
        else
        {
        $retval = trim($data);
        $retval = stripslashes($retval);
        $pattern = "/^-?[1-9][0-9]*$/D";
        if (preg_match($pattern, $retval)!=0)
        {
			return($retval);
                }
		}
		echo "\"$fieldName\" division by zero not allowed.<br />\n;";
        ++$errorCount;
		}

		function displayForm($SpeedA, $SpeedB, $Distance)
		{
		?>
		<h2 style = "text-align:center">Two Trains</h2>
		<form name="Two Trains" action="TwoTrains.php"  method= "post">
        <p>SpeedA: <input type="integer" name="SpeedA" value="<?php echo $SpeedA; ?>" /></p>
        <p>SpeedB: <input type="integer" name="SpeedB" value="<?php echo $SpeedB; ?>" /></p>
        <p>Distance: <input type="integer" name="Distance" value="<?php echo $Distance; ?>" /></p>
        <p><input type="reset" value="Clear Form" />&nbsp;
        &nbsp;<input type="submit" name="Submit" value="Submit" /></p>
        </form>
<?php
}

        $ShowForm = TRUE;
        $errorCount = 0;
        $SpeedA = "";
        $SpeedB = "";
        $Distance = "";
        if (isset($_POST['Submit'])) {
                $SpeedA = validateInput($_POST['SpeedA'], "SpeedA");
                $SpeedB = validateInput($_POST['SpeedB'], "SpeedB");
                $Distance = validateInput($_POST['Distance'], "Distance");
        if ($errorCount==0)
                $ShowForm = FALSE;
        else
                $ShowForm = TRUE;
        }
		
        if ($ShowForm == TRUE)
        {
                if ($errorCount>0)
                        echo "<p>Please re-enter the speeds below.</p>\n";
                        displayForm($SpeedA, $SpeedB, $Distance);
                }
                else
                {
                $DistanceA = (($SpeedA / $SpeedB) * $Distance) / (1 + ($SpeedA / $SpeedB));
				if ($DistanceA)
                echo "Distance Traveled By Train A = ",round($DistanceA,3),"<br />";
                $DistanceB = $Distance - $DistanceA;
                echo "Distance Traveled By Train B = ", round($DistanceB,3),"<br />";
                $TimeA = $DistanceA / $SpeedA;
                echo "Time Traveled By Train A = ",round($TimeA,3),"<br />";
                $TimeB = $DistanceB / $SpeedB;
                echo "Time Traveled By Train B = ",round($TimeB,3),"<br />";
                }

?>
</body>
</html>