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
		echo "<brS>";

		# String operation

		$str_1 = "<b>String 1</b><br>";
		$str_2 = "<i>String 2</i><br><input type\"text\">";
		echo $str_1." ".$str_2.'" "'." \" \""."\\";

		#Logical operation

		$x = 12;
		$y = 34;
		$z = 4.25;

		$bool_1 = $x != $z; // == or !=

		$bool_2 = $x < $y; // <,> or >=

		echo "<br>".$bool_1."<br>".$bool_2."<hr>";

		$bool_3 = !($x == $y);
		$bool_4 = $x == $y || $z < $y; // logical disjunction
		$bool_5 = $x < $y && $x < $y; // logical conjunction
		$bool_6 = $x < $y ^ $z < $y;  // 1 or 0
		echo "<br>".$bool_3."<br>".$bool_4."<hr>".$bool_5."<br>".$bool_6."<hr>";

		$bool = !($x != $y && $z < $x) || $x != $y;

		echo "<br>".$bool;

		#equivalence operator

		$string = "Example";
		$mun = 0;

		$bool_1 = $string == true;

		echo "<hr>";
		echo "$bool_1 = $string == true;"."<br>";

		$bool_2 = $num == ""; # ===

		echo "$bool_2 = $num ==\"\"";






?>