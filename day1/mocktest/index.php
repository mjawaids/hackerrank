<?php

$arr = [
    [19, 2, 15, 4],
    [5, 6, 17, 8],
    [12, 11, 10, 9],
    [13, 14, 15, 1]
];

/*
19 15 15 13
 8 17 10  5
12 11  6  9
 4 14  2  1
*/

print_r($arr);

$rows = $cols = count($arr);
$len = $cols / 2;

do {
    $rowUpdated = $colUpdated = false;

    for ($row = 0; $row < $rows; $row++) {
        $sumLeft = 0;
        for ($col = 0; $col < $len; $col++) {
            $sumLeft += $arr[$row][$col];
        }

        $sumRight = 0;
        for ($col = $len; $col < $cols; $col++) {
            $sumRight += $arr[$row][$col];
        }

        if ($sumLeft < $sumRight) {
            echo "left < right\r\n";
            $arr[$row] = array_reverse($arr[$row]);
            $rowUpdated = true;
        }
    }

    for ($col = 0; $col < $cols; $col++) {
        $sumTop = 0;
        $arrTop = [];
        for ($row = 0; $row < $len; $row++) {
            $sumTop += $arr[$row][$col];
            $arrTop[] = $arr[$row][$col];
        }

        $sumBottom = 0;
        $arrBottom = [];
        for ($row = $len; $row < $rows; $row++) {
            $sumBottom += $arr[$row][$col];
            $arrBottom[] = $arr[$row][$col];
        }

        if ($sumTop < $sumBottom) {
            echo "top < bottom\r\n";
            $arrCol = array_reverse( array_merge($arrTop, $arrBottom) );
            for ($row = 0; $row < $rows; $row++) {
                $arr[$row][$col] = $arrCol[$row];
            }
            $colUpdated = true;
        }
    }
} while ($rowUpdated || $colUpdated);

print_r($arr);