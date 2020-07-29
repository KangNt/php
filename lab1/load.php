<?php
// $name = $_POST['name'];
// $password = $_POST['password'];
// echo "Name : $name<pre>Password: $password";


$a = $_POST['soA'];
$b = $_POST['soB'];
if ($a != 0) {
    $x = $b /$a;
    echo "Phương trình có nghiệm $x";
} else {

    echo "Phương trình vô nghiệm";
}
