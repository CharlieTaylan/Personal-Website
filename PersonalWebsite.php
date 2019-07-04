<!DOCTYPE html>
<html>
<head>
	<title>Sample Functions</title>
</head>
<body>
	<?php 

	function charlie() {
		echo "Charlie Moring Taylan";
		}

		charlie();

		function familyName($fname) {
			echo "$fname Refsnes.<br>";
		}

		familyName("Jeni");
		familyName("Seve");
		familyName("Philip");
		familyName("Charles");
		familyName("marnie");

		function car($name) {
			echo "$name A beutiful. <br>";
		}
		car("mitsubishi");
		car("Lazada");
		car("Vio");
		car("kia");

		function lastName($fname, $year) {
			echo "$fname Lamadora was born on $year <br>";
		}

		lastName ("Philip", "1998");
		lastName ("Shiela", "1995");
		lastName ("Juna", "1998");
		lastName ("Gerome", "1999");

		function setHeight($minheight = 50) {
			echo "The height is : $minheight <br>";
		}

		setHeight ("23");
		setHeight ("80");
		setHeight ("565");
		setHeight ();
		setHeight ("66");
		setHeight ("70");

		function sum($x, $y) {
			$z = ($x + $y);
			return $z;
		}
		echo "11 + 1 = " .sum(60, 1). "<br>" ;
		echo "50 + 1 = " .sum(50, 1). "<br>" ;
		echo "40 + 1 = " .sum(40, 1). "<br>" ;
		echo "30 + 1 = " .sum(30, 1). "<br>" ;
		echo "20 + 1 = " .sum(20, 1). "<br>" ;
		echo "10 + 1 = " .sum(10, 1). "<br>" ;
		echo "5 + 1 = " .sum(5, 1). "<br>" ;

		// $cars = array("toyota" => "50",  "honda" => "40", "BMW" => "30", "isusuzo" => "20");

			// echo " this my favorite cars " . $cars[0] . "," . $cars[1] . "," . $cars[2] . ",and " . $cars[3] . "<br>";
			// echo count($cars);
			// $arlenght = count($cars);

			// for ($x=0; $x < $arlenght ; $x++) { 
			// 	echo $cars[$x];
			// 	echo "<br>";
			// }
			// echo "The DownPayment for my cars is " . $cars['toyota'] . " that why I keep this.";

			// foreach ($cars as $x => $x_value) {
			// 	echo "key = " . $x . ", Value = " . $x_value ;
			// 	echo "<br>";
			// }

		$cp = array("nokia" => "6000", "samsung" => "7000", "Cherrymobile" => "9000", "oppo" =>  "10000", "Huawie" => "10000" );

		// echo "This is my phone from that I used before: " . $cp[1];
		// echo count($cp);
		// $more = count($cp);

		// for ($p=0; $p < $more ; $p++) { 
		// 	echo $cp[$p];
		// 	echo "<br>";

		foreach ($cp as $p => $p_value) {
			echo "key = " . $p . ", Value = " . $p_value;
			echo "<br>";
		}
 	?>	

</body>
</html>