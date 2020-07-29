<?php
require_once "../../connection.php";
$sql = "SELECT * FROM categories";


$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($result);



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
        <h2>Danh mục sản phẩm</h2>
        <a href="create.php"> Thêm danh mục</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Cate_ID</th>
                    <th scope="col">Cate_name</th>
                    <th scope="col">Cate_image</th>
                    <th scope="col">Description</th>
                    <th scope=""> Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $item) : ?>
                    <tr>
                        <th scope="row"></th>
                        <td><?= $item['cate_id'] ?></td>
                        <td><?= $item['cate_name'] ?></td>
                        <td> <img src="<?= $item['cate_image'] ?>" width="100" alt="" /> </td>
                        <td><?= $item['description'] ?></td>
                        <td>
                          <a href="#" class="btn btn-primary">
                            <i class="fas fa-pen-alt" ></i> 
                            Edit
                          </a>
                          <a onclick="return confirm('Bạn có muốn xóa danh mục <?php echo $item->cate_name ?> không')" class="btn btn-danger" type="submit" value=""  href="<?php  ?>" > 
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