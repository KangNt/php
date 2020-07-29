<?php
require_once "../../connection.php";
$sql = "SELECT * FROM users";


$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</head>

<body>

    <div class="container-fluid">
        <h2>DashBoard</h2>
        <a href="createUser.php"> Thêm thành viên</a>
        <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">STT</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Role</th>
                    <th scope=""> Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $item) : ?>
                    <tr>
                      
                        <td><?= $item['user_id'] ?></td>
                        <td><?= $item['username'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td> <img src="<?= $item['avatar'] ?>" width="100" alt="" /> </td>
                        <td><?= $item['role'] ?></td>
                        <td>
                          <a href="editUser.php&id=<?php echo $item['user_id']?>" class="btn btn-primary"  >
                              Edit
                          <i class="fas fa-user-edit"></i>
                          </a>
                          <a onclick="return confirm('Bạn có muốn xóa member <?php echo $item->username ?> không')" class="btn btn-danger" type="submit" value=""  href="<?php  $item['user_id'] ?>" > 
                          <i class="far fa-trash-alt"></i>
                          Delete
                          </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
              

                    
            </tbody>

        </table>

    </div>

</body>

</html>