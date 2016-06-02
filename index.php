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

		echo "$bool_2 = $num ==\"\""."<br>";

		#Conditional operators

		$x = 10;
		$y = 5;
		if ($x != $y && $x != 12 && $y == 5 && ($x + 5) == 15) {
			echo "work!";
		} else if ($x != 4) {
			// cod
		} else {
			// cod
		}

		$x == $y ? $string = "Yes" : $string = "No";
		echo "<br>".$string;


		# Operator Switch () case

		$x = 12;


		switch ($x) {
			case 'Hello':
				# code...
				break;
			case 5:

				#code
				break;
			case 12:
				echo "<hr>Work!"; // +
				break;
			
			default:
				# code...
				break;
		}

		switch($x) {
			  case 'x':  // if (x === 'value1')
			    # code
			    break;

			  case 'y':  // if (x === 'value2')
			    # code
			    break;

			  default:
			    # code
			  	echo "<br>Work default!";
			    break;
			}
				echo "<hr>";

			# cycle for, while and do while


			for($i = 0; $i <= 10; $i ++) {
				if($i % 5 == 0) continue;  // continue !!! use in this thre cycle
				if($i == 7) break; //break !!!
				echo "cycle for #$i<br>";  // for
			}
				echo "<hr>";

				$x = 5;

				while ($x < 10) {				//While
					echo "Work while!#$x<br>";
					$x++;
				}
				echo "<hr>";

				$z = 10;

				do {
					echo "Work do while.";
				} while ($z < 5);
				

				# function

				function printWords ($word, $x, $y) {
					$word = math ($x, $y);
					echo $word;
				}

				function math ($first, $second) {
					$summa = $first + $second;
					return $summa;
				}

				$x = 12;
				$y = 35;

				$sum = math ($x, $y);
				echo "<hr>";

				printWords ($sum, $x, $y);

				# array

				$array = array (12, -3.25, "String", false);

				echo $array[1];
				$array[1] = "String";
				$array[2] = 4.25;
				echo "<br>".$array[1]."<br>".$array[2];  // array
				$array[] = "New element";
				acho "<br>".$array[4];

				for ($i = 0; $i < count($array); i++) {
					echo "<br> Elememt array =".$array[$i];
				}

				$list = array ("age" => 12, "name" => "Alex", "schoolBoy" => true);
				$list["age"] = 10;

				$summa = 0;

				echo getAverage (array ("first" => 12, "sec" => 45, "third" => 23, "forth" => 55));

				function getAverage ($array) {
					foreach ($array as $key => $value){
						$summa += $value;
						echo $key."<br>";
					}
					return $summa / count ($array);
				}
				echo "<hr>";

				# Two-dimensional arrays

				$array = array (array (12, 4.46, "string", true), array ("Exemple"), array (45, "strong"));

				echo $array [0][2];

				for ($i = 0; $i < count($array); $i++) {
					for($j = 0; $j < count($array[$i]);) {
						echo $array[$i][$j];
					}
					echo "<br>";
				}












?>