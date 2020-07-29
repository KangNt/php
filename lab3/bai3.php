<?php

$arr_soN = [2, 54, 65, 23, 12, 45, 3, 5, 7, 5, 75, 3, 5, 3, 6, 5, 4];

$max = null;
$position = null;

for ($i = 0; $i < count($arr_soN); $i++) {
    if ($max == null) {
        $max = $arr_soN[$i];
        $position = $i;
    } else {
        if ($arr_soN[$i] > $max) {
            $max = $arr_soN[$i];
            $position = $i;
        }
    }
}

echo "Giá trị lớn nhất là $max, nằm tại vị trí $position";
