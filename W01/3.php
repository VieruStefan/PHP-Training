//For a given array, reverse the order of the elements.
<?php

$arr = array(1, 2, 4, 3, 6, 3, 7);
$tmp = 0;
for($i = count($arr); $i > count($arr)/2; $i--){
    $tmp = $arr[$i-1];
    $arr[$i-1] = $arr[count($arr) - $i];
    $arr[count($arr) - $i] = $tmp;
}
print_r($arr);

?>