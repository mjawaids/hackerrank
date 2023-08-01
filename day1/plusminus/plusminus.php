<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    $counts = [0,0,0];
    foreach ($arr as $val) {
        if ($val > 0) {
            ++$counts[0];
        }
        
        if ($val < 0) {
            ++$counts[1];
        }
        
        if ($val === 0) {
            ++$counts[2];
        }
    }
    
    $cnt = count($arr);
    foreach ($counts as $val) {
        printf("%6f \n", ($val/$cnt));   
    }
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
