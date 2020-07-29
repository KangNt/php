<?php
require_once "../../connection.php";
if (isset($_POST['btnlLuu'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($_FILES['avatar']['size']) {
        $avatar = $_FILES['avatar']['name'];
    } else {
        $avatar = "";
    }
    $role = $_POST['role'];
}

//viet cau lenh insert

$sql = "INSERT INTO users(user_id,username,email,password,avatar,role) 
values 
('$user_id',$username','$email','$avatar','$password',$role')";


//
$stmt = $conn->prepare($sql);
$stmt->execute();
if (!empty($avatar)) {
    move_uploaded_file($_FILES['avatar']['tmp_name'], "../images" . $avatar);
}

// header("location:index.php?message=Thêm dữ liệu thành công");
//die;

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create | Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>


    <div class="container-fluid" style="width: 60%;">
        <h2>New Member</h2>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputUsername">UserName</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                <small id="nameHelp" class="form-text text-muted">Không được để trống </small>
            </div>

            <div class="form-group">
                <label for="exampleInputUsername">Email</label>
                <input type="email" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                <small id="nameHelp" class="form-text text-muted">Không được để trống </small>
            </div>

            <div class="form-group">
                <label for="exampleInputUsername">Password</label>
                <input type="password" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                <small id="nameHelp" class="form-text text-muted">Không được để trống </small>
            </div>

            <div class="form-group">
                <label for="exampleInputUsername">Avatar</label>
                <input type="file" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                <small id="nameHelp" class="form-text text-muted">Không được để trống </small>
            </div>

            <div class="form-group">
                <label for="exampleInputUsername">Role</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">

            </div>


            <button type="submit" class="btn btn-primary" name="btnLuu">Submit</button>
        </form>
    </div>


</body>

</html>