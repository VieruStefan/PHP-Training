//Verify if a string is a palindrome and return the result.
<?php

$str = "is PHP si";
$arr = str_split($str);
$n = count($arr) - 1;
$ok = true;
for($i = $n; $i > $n/2; $i--){
    if($arr[$i] != $arr[$n - $i]){
        $ok = false;
    }
}
echo $ok?"palindrom":"nu e palindrom";

?>