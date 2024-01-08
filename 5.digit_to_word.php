<?php
function digit_to_word(int $num){
    switch($num){
    case 0: echo "zero";
        break;    
    case 1: echo "one";
        break;
    case 2: echo "two";
        break;
    case 3: echo "three";
        break;
    case 4: echo "four";
        break;
    case 5: echo "five";
        break;
    case 6: echo "six";
        break;
    case 7: echo "seven";
        break;
    case 8: echo "eight";
        break;
    case 9: echo "nine";
        break;
    default: echo "enter a single digit number";
    }
}
digit_to_word(3);
?>
