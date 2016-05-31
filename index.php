<?php
		/*This is study php.

		*/
		echo "Hello World!<br />";
		echo "Hello World!<br>";

		$myNumber = 5;
		$float = -3.25;
		$string = "Hello World!";
		$bool = true;
		$boolFalse = false;

		echo "Variable myNumber = $myNumber";
		echo "<br>";
		echo "Variable float = $float";
		echo "<br>";
		echo "Variable string = $string";
		echo "<br>";
		echo "Variable bool = $bool"; // = 1
		echo "<br>";
		echo "Variable boolFalse = $boolFalse"; # ""
		$myNumber = 12;
		echo "Variable myNumber = $myNumber";
		echo "<br>";


		# constant
		echo PHP_VERSION; # version
		define("PI", 3.14); # new constant
		echo "<br>";
		echo PI;
		echo "<br>";
		echo defined("PI"); #seach constant
		echo "<br>";

		#Arithmetic operations
		$x = 32;
		$y = 22.13;
		$summ = $x + $y;
		$diff = $x - $y;
		$mult = $x * $y;
		$division = $x / $y;
		//$residue = $x % $y;

		echo "summa = $summ<br> differant = $diff<br> multiply = $mult<br> division = $division";
		$z = 12;
		$reside = $x % $z;
		echo "<br>";
		echo "reside = $reside";
		echo "<br>";

		$q = 400; # 1
		$q = $q + 10;
		echo "$q";
		echo "<br>";

		$q -= 10; # 2
		echo "$q";
		echo "<br>";

		$q++; # 3
		echo "$q";


?>