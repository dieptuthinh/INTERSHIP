<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo ('<h4> Bài Tập: String</h4>');
//1. Xác định số phần tử của chuỗi

$chuoi = 'this is an example';

//Cách 1: sử dụng hàm strlen (string length)
  

 echo('Số phần tử của chuỗi: '.strlen($chuoi)); 

 echo ('<br /> -------------------------------------- End Ex1. <br />');

 //Cách 2: sử dụng hàm str_plit để chuyển đổi chuỗi thành mảng và sử dụng hàm count để xác định độ dài của mảng

 echo('Số phần tử của chuỗi: '.count(str_split($chuoi))); 

 echo ('<br /> -------------------------------------- End Ex1. <br />');

 //2. Xác định số từ của chuỗi
 

 $chuoi2 = 'this is an example';

 /**
  * Cách 1: sử dụng hàm str_word_count 
  */

 echo('Số từ trong chuỗi: '.str_word_count($chuoi2).' từ'); 

 echo ('<br /> -------------------------------------- End Ex2. <br />');

 /**
  * Cách 2: sử dụng hàm explode để chuyển đổi chuỗi thành mảng và sử dụng hàm count để xác định độ dài của mảng
  */

 echo('Số từ trong chuỗi: '.count(explode(' ',$chuoi2)).' từ'); 

 echo ('<br /> -------------------------------------- End Ex2. <br />');

 /**
 * 3. Cắt chuỗi Nguyenvanhieu ra khỏi chuỗi "this is an example"
 */

$chuoi3 = 'this is an example';

/**
  * Cách 1: Sử dụng hàm substr(str,vị trí cắt, độ dài chuỗi cắt)  
  */

$chuoi3 = substr($chuoi3,0,13);
echo $chuoi3;
echo ('<br /> -------------------------------------- End Ex2. <br />');

/**
  * Cách 1: Sử dụng hàm substr(str,vị trí cắt, tham số âm -- vị trí cắt tính từ cuối chuỗi)  
  */

$chuoi4 = 'this is an example';
$chuoi4 = substr($chuoi4,0,-2);
echo $chuoi4;
?>
</body>
</html>