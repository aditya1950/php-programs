 <?php 

echo "<table>\n";
foreach($_REQUEST as $k => $v) {
    echo "<tr>\n<td>" . stripslashes(htmlentities($k)) . "</td>\n<td>" . stripslashes(htmlentities($v)) . "</td>\n</tr>\n";
}


?> 