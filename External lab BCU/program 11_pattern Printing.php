<?php
 $rows = 5;
 for ($i = 1; $i <= $rows; $i++) { 
 for ($j = 1; $j < $i; $j++) {
 echo "&nbsp;";
 } 
 for ($k = $i; $k <= $rows; $k++) {
 echo "*";
 } 
 echo "<br>";
 }
 ?>
