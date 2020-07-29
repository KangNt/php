<?php

$heso_a = "";
$heso_b = "";
$heso_c = "";

if (isset($_POST['heso_a'])) {
    $heso_a = $_POST['heso_a'];
}
if (isset($_POST['heso_b'])) {
    $heso_b = $_POST['heso_b'];
}
if (isset($_POST['heso_c'])) {
    $heso_c = $_POST['heso_c'];
}

function giaiPTB2($a, $b, $c)
{

    if ($a == "")
        $a = 0;
    if ($b == "")
        $b = 0;
    if ($c == "")
        $c = 0;

    echo "Phương trình: " . $a . "x2 + " . $b . "x + " . $c . " = 0";
    echo "<br>";

    if ($a == 0) {
        if ($b == 0) {
            echo ("Phương trình vô nghiệm!");
        } else {
            echo ("Phương trình có một nghiệm: " . "x = " . (-$c / $b));
        }
        return;
    }

    $delta = $b * $b - 4 * $a * $c;
    $x1 = "";
    $x2 = "";

    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
    } else if ($delta == 0) {
        $x1 = (-$b / (2 * $a));
        echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
    } else {
        echo ("Phương trình vô nghiệm!");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ptb2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>

</body>

</html>


<div class="container-fluid">
    <form style="width: 50%; margin-top:5% " action="" method="POST">

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Hệ số a</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" min="0" name="heso_a" value="<?= $heso_a ?>">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Hệ số b</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" min="0" name="heso_b" value="<?= $heso_b ?>">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Hệ số c</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" min="0" name="heso_c" value="<?= $heso_c ?>">
        </div>


        <button type="submit" name="btn" class="btn btn-primary">Tính</button>

    </form>

</div>
<br>


<?php
if (
    is_numeric($GLOBALS['heso_a']) && is_numeric($GLOBALS['heso_b'])
    && is_numeric($GLOBALS['heso_c'])
) {
    giaiPTB2($GLOBALS['heso_a'], $GLOBALS['heso_b'], $GLOBALS['heso_c']);
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>