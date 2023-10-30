<?php
	if ($_POST) {
        	$n = $_POST["size"];

       		echo "<p style='text-align: right;'>Multiplication Table of $n:</p>";

        	echo "<table border='1'>";

        	for ($i = 1; $i <= $n; $i++) {
            		echo "<tr>";
            		for ($j = 1; $j <= $n; $j++) {
                		echo "<td style='text-align: left; padding: 5px;'>" . ($i * $j) . "</td>";
            		}
            		echo "</tr>";
        	}

        	echo "</table>";
    	}
?>
