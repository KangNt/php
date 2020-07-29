<?php 
$arr = [
    1,3,"hello",12,3,"Quang","Kang"
];
 echo count($arr);
 echo "<pre>";


 //mang nhieu chieu 
 $arr2 = [
   [ 1,"string",4,6,"hello"],
   ['nguyen', 'thien', 'quang']
];
echo $arr2[1][0];
echo "<pre>";


//mang cho khoa và gia tri

$arr3 = [
    1=>"Nguyen thien Quang",
    'email'=>"quangnt@gmail.com",
    'phone'=>"0967521045",

];

echo $arr3['email'];
echo "<pre>";

// vong lap foreach
// truy cap vao mang 2 chieu 
foreach($arr as $item ){
    echo "Phan tu $item<br>";
}

//truy cap mang nhieu chieu 
foreach($arr2  as $items){
    foreach($items as $item ){
        echo "Phan tu trong mang arr2: $item<br>";
    }
}


//truy cap mang co khoa va gia tri 
foreach($arr3 as $k=>$v){
    echo "key : $k, value: $v<br>";
}
