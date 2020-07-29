<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab 1</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container-fluid" style="margin-top: 5%;">
    <form action="" method="POST">
      <table class="table table-dark">
        <h2>Bảng tính tiền</h2>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tên món</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Số lượng</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Cà ri</td>
            <td>15000đ</td>
            <td><input type="number" name="row1" id="" value="<?= isset($a) ? $a : '' ?>"></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Rau sào</td>
            <td>5000đ</td>
            <td><input type="number" name="row2" id="" value="<?= isset($b) ? $b : '' ?>"></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Cá kho </td>
            <td>25000đ</td>
            <td><input type="number" name="row3" id="" value="<?= isset($c) ? $d : '' ?>"></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Cơm </td>
            <td>10000đ</td>
            <td><input type="number" name="row4" id="" value="<?= isset($d) ? $d : '' ?>"></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td colspan="2">Tổng tiền thanh toán</td>
            <td>
              <?php
              if (isset($tongtien)) {
                echo $tongtien;
              }
              ?>

            </td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td> <button type="button" name="btnTT" class="btn btn-primary">Tính tiền</button></td>


          </tr>
        </tbody>
      </table>
    </form>
  </div>
</body>

</html>

<?php
if (isset($_POST['btnTT'])) {
  $a = $_POST['row1'];
  $b = $_POST['row2'];
  $c = $_POST['row3'];
  $d = $_POST['row4'];
  $slot1 = 15000 * $a;
  $slot2 = 5000 * $b;
  $slot3 = 25000 * $c;
  $slot4 = 10000 * $d;
  $tongtien = $slot1 + $slot2 + $slot3 + $slot4;
}
?>
