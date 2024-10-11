<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式語言基礎/github 操作練習</title>
</head>
<body style='text-align:center'>
<?php

define('PI',3.1415);


$price=100;
echo $price;

echo'<br>';

$name='roy.roy';
echo $name;
echo'<br>';
$total=100*5+32/10*3;

echo $total;

echo'<br>';
$num=rand(1,49).','.rand(1,49).','.rand(1,49).','.rand(1,49).','.rand(1,49).','.rand(1,49);
echo $num;

echo'<br>';
echo 'PI是'.PI;

echo'<br>';

echo 'PI是'.PI;
?>
<h1>練習</h1>
<pre>
例：
$a = 10; $b = 50;
交換後
$a = 50; $b = 10;
</pre>

<?php

$a=10;
$b=50;

$temp = $a; // 將 $a 的值存入 $temp
$a = $b;    // 將 $b 的值賦給 $a
$b = $temp; // 將 $temp 的值賦給 $b


echo $a;
echo'<br>';
echo $b;

?>


</body>
</html>
