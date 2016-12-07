 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<!--ADITYA CHIMBALKAR
 CHAPTER 2 - Exercise: 6 -->
 
 
<html>
    <head>
        <title>Temp. Conversion</title>
    </head>
	
	
    <body>
	
	<?php
    function f2c($given)
    {
        $celsius=5/9*($given-32);
        return $celsius ;
    }

    function c2f($given)
    {
        $fahrenheit=$given*9/5+32;
        return $fahrenheit ;
    }

    ?>
	
        <form action="" method="post">
			<p>TEMPERATURE CONVERSION</p>
                    <select name="first_temp">
                        <option value="fahrenheit">Fahrenheit</option>
                        <option value="celsius">Celsius</option>
                    </select>
                
                    <input type="text" name="given">
               
                    
                    <input type="submit" name="btn" value="Convert">
              <br><br>
                    <?php
                    if(isset($_POST['btn']))
                    {
                        $first_temp=$_POST['first_temp'];
                        
                        $given=$_POST['given'];
                        if($first_temp=='fahrenheit')
                        {   $celsious=f2c($given);
							
                            echo "Fahrenheit $given =",round($celsious,1) . "  Celsius";
                        }
                        if($first_temp=='celsius')
                        {  $fahrenheit=c2f($given);
							
                            echo "Celsius  $given = ", round($fahrenheit,1) . "  Fahrenheit";
                        }                    
                    }
                   
                    ?>
         
        </form>
		

    </body>
</html>