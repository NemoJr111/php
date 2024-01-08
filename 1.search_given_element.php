<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8); 
$num = 4;
echo "searching for $num in array";
echo "<br/>";
$arr_key = array_keys($arr, $num);
$n = count($arr_key);
echo "<br/>";

foreach($arr_key as $key){
    echo "found $num at index $key";
    echo "<br/>";
}
?>
