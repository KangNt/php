<?php
$x = 5;
$y= 1;
//phát biểu điều kiện if
if ($x > 10) {
    echo "Số $x >10";
} else if ($x == 10) {
    echo "Số $x =10";
} else {
    echo "Số $x <10";
}

echo "<pre>";
//phát biếu switch case

switch ($y) {
    case 1:
        echo "Bạn chọn phương án 1";
        break;
    case 2:
        echo "Bạn chọn phương án 2";
        break;
    default:
        echo "Không có phương án nào phù hợp";
        break;
}
