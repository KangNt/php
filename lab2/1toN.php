
<?php 
$soNT = "";

if (isset($_POST['soNT'])) {
    $soNT = $_POST['soNT'];
}

function kiemtra($soNT) {
   
    if ($soNT < 2) {
        return false;
    }
    
    $squareRoot = sqrt ( $soNT );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($soNT % $i == 0) {
            return false;
        }
    }
    return true;
}
 
echo ("Các số nguyên tố nhỏ hơn $soNT là: <br>");
for($i = 0; $i < $soNT; $i ++) {
    if (kiemtra ( $i )) {
        echo ($i . " ");
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 -> N</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
    <form style="width: 50%; margin-top:5% " action="" method="POST">

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">N Random</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" min="0" name="soNT" value="<?= $soNT ?>">
        </div>
       
        <button type="submit" name="btn" class="btn btn-primary">Submit</button>

    </form>
</div>
</body>
</html>