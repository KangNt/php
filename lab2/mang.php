<?php

$arr = [
    ['id' => 1, 'name' => 'Nguyễn văn Nam', 'email' => 'namnv@g
   mail.com', 'address' => 'Hòa Bình'],
    ['id' => 2, 'name' => 'Lê Quang Long', 'email' => 'longlq@g
   mail.com', 'address' => 'Hòa Bình'],
    ['id' => 3, 'name' => 'Trinh Lê Ninh', 'email' => 'Ninhtl@g
   mail.com', 'address' => 'Hà Nam'],
    ['id' => 4, 'name' => 'Bùi Đúc Huy', 'email' => 'huybh@gmai
   l.com', 'address' => 'Hà Nội'],
    ['id' => 5, 'name' => 'Lưu quang điệp', 'email' => 'dienlq@
   gmail.com', 'address' => 'Thái Bình']
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>

    <style>
        td {
            font: 12px verdana, arial, sans-serif;
            border: 1px solid #00CCFF;
            padding: 15px;
            text-align: center;
        }

        .title {
            color: #FFF;
            background: grey;
            font-weight: bold;
        }

        tr:hover {
            background: #00CCFF;
        }
    </style>
    </style>
</head>

<body>
    <table align="center" width="900" border="1">
        <tr>
            <td class="title">ID</td>
            <td class="title">Name</td>
            <td class="title">Email</td>
            <td class="title">Address</td>

        </tr>


        <?php
        foreach ($arr as $k => $v) {
            echo "<tr>";
            echo "<td>$k</td>";
            echo "<td>$v[name]</td>";
            echo "<td>$v[address]</td>";
            echo "<td>$v[email]</td>";
            echo "</tr>";
        }

        ?>

    </table>
</body>

</html>