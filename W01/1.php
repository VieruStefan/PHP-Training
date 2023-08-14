//For an array of elements count the number of occurrences of a given element.


<!DOCTYPE html>

<html>
<body>
	
<?php

$arr = array(1, 2, 2, 3, 2, 6);
$nr = 0;
foreach($arr as &$value){
	if($value == 2)
		$nr += 1;
}
echo "numarul 2 a aparut de $nr ori";

?>
</body>
</html>
