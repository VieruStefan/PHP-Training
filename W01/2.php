//Generate a random array of numbers and search for a specific one. If you find it then use a break to exit the loop.
<?php

$ok = false;
$arr = array();
$rand = range(0, 20);
for ($i = 1; $i <= 10; $i++){
	$arr[$i] = array_rand($rand);
}
foreach($arr as &$value){
	if($value == 2)
	{
		$ok = true;
		break;
	}
}
print_r($arr);
echo $ok ? "am gasit numarul" : "nu am gasit numarul";

?>