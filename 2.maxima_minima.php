<?php
$arr=array(1,2,3,4,5,6,7,8);
$maxima = max($arr);
$minima = min($arr);

echo "Array:";
foreach($arr as $n){
    echo "$n". " ";
}
echo "<br/>";
echo "Maxima: $maxima";
echo "<br/>";
echo "Minima: $minima";
?>
