<?php
		//creates an indexed array
	$cars = array("Mbw","Volvo","Toyota",);
	echo "i like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
	echo "<br>";
	echo count($cars);


	$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
// associative array
 $age = array ("peter"=>"35","ben"=>"30","joe"=>"12",);
 	echo "peter is   $age[ben]  years old.";
 	echo "<br>";

 	// loop through associative array
 	$age = array("peter"=>"50","ben"=>"43","joe"=>"12",);
 	foreach ($age as $x => $x_value) {
 		echo "the age of " . $x ."  is = " .$x_value;
 		echo"<br>";
 	}

 	// Multidimennsional array
 	$cars = array(
 				array ("volvo",22,18),
 				array ("BMW",11,23),
 				array("saab",55,88),
 				array("Rover",17,15)
 	);
 		echo $cars[0][0]. ": In Stock :" .$cars[0][1]. ", sold :" .$cars[0][2]. ".<br>";
 		echo $cars[1][0]. ": In Stock :" .$cars[1][1]. ", sold :" .$cars[1][2]. ".<br>";
 		echo $cars[2][0]. ": In Stock :" .$cars[2][1]. ", sold :" .$cars[2][2]. ".<br>";
 		echo $cars[3][0]. ": In Stock :" .$cars[3][1]. ", sold :" .$cars[3][2]. ".<br>";

 		//for loop inside another for loop with array
 		/*
 		 $cars + array(
 		 			array("Volvo",22,18),
 		 			array("BMW",2,8),
 		 			array("saad",122,128),
 		 			array("Rover",222,19)
 		 );

 		 for($row = 0; $row < 4; $row++){
 		 	echo "<p><b>Row Number $row </b></p>";
 		 		echo "<ul>";
 		 			for ($col=0; $col < 3 ; $col++) { 
 		 				echo"<li>" .$cars[$row][$col]."</li>";
 		 			}
 		 			echo "<ul>";
 		 }*/echo "<br>";
 			Echo "sort array in ascending order";
 			echo "<br>";echo "<br>";

 		 	$cars = array("Volvo","Bmw","Saad","Rvoer");
 		 		rsort($cars);

 		 		$clenght = count($cars);
 		 		for ($x=0; $x < $clenght ; $x++) { 
 		 			echo $cars[$x];
 		 			echo "<br>";
 		 		}
 		 		// The following example sorts the elements of the $numbers array in ascending numerical order: in descending we just add tag rsort
 		 		$number = array(1,23,2,3,43,100,99);
 		 		sort($number);
 		 			$arrlength =count($number);
 		 				for ($x=0; $x <$arrlength ; $x++) { 
 		 						echo $number[$x];
 		 						echo"<br>";
					}
						$age = array("peter"=>"35","ben"=>"37", "joe"=>"43");
						 sort($age);
						 	foreach($age as $x => $x_value){
						 		echo "key=" .$x .", Value = " .$x_value;
						 		echo "<br>";
						 	}


?>