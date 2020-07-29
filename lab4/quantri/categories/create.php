<?php
require_once "../../connection.php";
if (isset($_POST['btnlLuu'])) {
    $cate_name = $_POST['cate_name'];
    $description = $_POST['description'];

    if ($_FILES['cate_image']['size']) {
        $cate_name = $_FILES['cate_image']['name'];
    } else {
        $cate_image = "";
    }
}

//viet cau lenh insert

$sql = "INSERT INTO categories(cate_name,cate_image,description) 
values ('$cate_name','$cate_image','$description')";

//
$stmt = $conn->prepare($sql);

$stmt->execute();
if (!empty($cate_image)) {
    move_uploaded_file($_FILES['cate_image']['tmp_name'], "../images" . $cate_image);
}
header("location:index.php?message=Thêm dữ liệu thành công");
die;





?>


<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create | Categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>


    <div class="container-fluid" style="width: 60%;">
        <h2>New Category</h2>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Ten Danh Mục</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Không được để trống </small>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Hình ảnh</label>
                <input type="file" class="form-control" id="exampleInputFile">
            </div>
            <div class="form-group">
                <label for="exampleInputDesc">Mô tả</label>
                <input type="text" class="form-control" id="exampleInputDesc">
            </div>
            <button type="submit" class="btn btn-primary" name="btnLuu">Submit</button>
        </form>
    </div>


</body>

</html>