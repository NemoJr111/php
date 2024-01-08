<?php
function find($x){
    echo "Number: $x";
    echo "<br/>";
    $n=$x;

    $l = $s = (int) ($x % 10);
    while ($x > 0) {
        $rem = (int) ($x % 10);
        if ($rem > $l) {
            $l = $rem;
        }
        elseif($rem < $s) {
            $s = $rem;
        }
        $x = (int) ($x / 10);

    }
    echo "Largest digit in $n is $l";
    echo "<br/>";
    echo "Smallest digit in $n is $s";
    
}
find(75);
?>