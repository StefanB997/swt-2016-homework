<?php
	$x = 0;
	$a = 0;
	$b = 1;

	while ($x < 10){
		$d = $a + $b;
		echo "$d";
		echo " , ";
		$x++;
		$a = $b;
		$b = $d;
	}
?>