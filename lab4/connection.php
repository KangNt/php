<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=wish", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



// function connection()
// {
//     try {
//         $conn = new PDO("mysql:host=localhost; dbname=wish; charset=utf8", "root", "");
//     } catch (PDOException $e) {
//         echo "Lỗi kết nối đến cơ sở dữ liệu " . $e->getMessage();
//     }
//     return $conn;
// }








// function listAll($table)
// {
//     $conn = connection();
//     try {
//         $sql = "SELECT * FROM $table ORDER BY id DESC";
//         $stmt = $conn->prepare($sql);
//         $stmt->execute();
//         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     } catch (PDOException $e) {
//         echo "Lỗi xử lý dữ liệu " . $e->getMessage();
//     } finally {
//         unset($conn);
//     }
//     return $result;
// }