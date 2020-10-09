<?php

	/*for($a=1;$a<10;$a++){
		for($b=$a;$b<10;$b++){
			echo "=";
		}
		for($c=2*$a ; $c>0;$c--){
			echo "X";
		}
		echo "<br>";
	}
	$n = 10;
	for($a=10;$a>0;$a--){
		for($b=$n-$a;$b>0;$b--){
			echo "=";
		}
		for($c=2*$a-2 ; $c>0;$c--){
			echo "X";
		}
		echo "<br>";
	}*/

	for( $a=10;$a>0;$a--){
		for($i=1; $i<=$a; $i++){
			echo "_";
		}
		for($a1=10;$a1>$a;$a1--){
			echo "x";
		}
		for($a2=10;$a2>$a;$a2--){
			echo "x";
		}
		echo "<br>";
	}

	for($b=0; $b<=10;$b++){
		for($j=1;$j<=$b;$j++){
			echo "_";
		}
		for($b1=10; $b1>$b;$b1--){
			echo "x";
		}
		for($b2=10; $b2>$b;$b2--){
			echo "x";
		}
		echo "<br>";
	}

?>