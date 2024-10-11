<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>重複結構</title>
</head>
<body>
<h1>for loop</h1>    

<?php

for($i=0 ; $i<5 ; $i++){
    echo ($i*2+1)*10;
    echo "<br>";
}
?>

<H1>While</H1>
<?php

$score=50;
$counter=0;
while($score<60){
    $score=$score+10;
    $counter++;
}

echo $score;
echo "<br>";
echo $counter;

?>

<h1>陣列</h1>
<div>['a','b','good','sad','john',123,999]</div>
<?php
$a=['a','b','good','sad','john',123,999];

/*echo $a[0];
echo "<br>";
echo $a[1];
echo "<br>";
echo $a[3];
echo "<br>";
echo "<br>";*/

for($i=0;$i<count($a);$i++){
    echo $a[$i];
    echo "<br>";
}


$b=['姓名'=>'Rory','數學'=>90,'國文'=>80,'英文'=>99,];
//獲取陣列的鍵

$keys = array_keys($b);

//使用 for 迴圈遍歷鍵
for ($i = 0; $i < count($keys); $i++) { 
    $key = $keys[$i]; // 當前的鍵
    $value = $b[$key]; //使用鍵獲取對應的值
    echo $key . ': ' . $value . '<br>';
} 

foreach ($b as $value) {
    echo $value . '<br>';
}


?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

;
</body>
</html>