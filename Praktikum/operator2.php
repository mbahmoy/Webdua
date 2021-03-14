<?php
	$a = 6;
	$b = 5;
		echo "$a == $b : ". ($a == $b);
		echo "<br>$a != $b : ". ($a != $b);
		echo "<br>$a > $b : ". ($a > $b);
		echo "<br>$a < $b : ". ($a < $b);
		echo "<br>($a == $b) && ($a > $b) : ".(($a != $b) && ($a > $b));
		echo "<br>($a == $b) || ($a > $b) : ".(($a != $b) || ($a > $b));
?>