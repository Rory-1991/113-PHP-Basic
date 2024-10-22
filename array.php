
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>
<body>


<h2>學生成績陣列(gpt)</h2>
<?php

// 1. 定義學生名單
$students = ["judy", "amo", "john", "peter", "hebe"];

// 2. 定義科目
$subjects = ["國文", "英文", "數學", "地理", "歷史"];

// 3. 定義成績（隨機生成或自定義）
$grades = [
    "judy" => [85, 90, 78, 88, 92],
    "amo" => [76, 85, 80, 70, 75],
    "john" => [90, 88, 94, 89, 91],
    "peter" => [60, 70, 65, 68, 72],
    "hebe" => [88, 92, 85, 90, 87],
];

// 4. 顯示成績表
echo "<table border='1' cellpadding='5'>";
//<th></th>標籤=粗體
echo "<tr><th>姓名</th>";

// 顯示科目標題
foreach ($subjects as $subject) {
    echo "<th>$subject</th>";
}
echo "</tr>";

// 顯示每位學生的成績
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>$student</td>";
    foreach ($grades[$student] as $grade) {
        echo "<td>$grade</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>陣列宣告</h2>    
<?php
$header=['', '國文', '英文', '數學', '地理', '歷史'];
$judy=['judy',95,64,70,90,84];
$amo=['amo',88,78,54,81,71];
$john=['john',45,60,68,70,62];
$students=[['judy',95,64,70,90,84],
           ['amo',88,78,54,81,71],
           ['john',45,60,68,70,62]];
$stus=['judy'=>[95,64,70,90,84],
           'amo'=>[88,78,54,81,71],
           'john'=>[45,60,68,70,62]];
$stus2=['judy'=>[
            '國文'=>95,
            '英文'=>64,
            '數學'=>70,
            '地理'=>90,
            '歷史'=>84],
        'amo'=>[
            '國文'=>88,
            '英文'=>78,
            '數學'=>54,
            '地理'=>81,
            '歷史'=>71],
        'john'=>[
            '國文'=>45,
            '英文'=>60,
            '數學'=>68,
            '地理'=>70,
            '歷史'=>62]];
/* foreach($array as $idx => $value){
    echo "index => ". $idx .": value =>".$value;
    echo "<br>";
}
foreach($array2 as $key => $value){
    echo "index => ". $key .": value =>".$value;
    echo "<br>";
}
 */
?>
<style>
    table{
        border-collapse:collapse;
    }
    td{
        padding:6px 10px;
        text-align: center;
        border:1px solid #ccc;
    }
</style>
<table>
    <tr>
        <?php
    foreach($header as $value){
        
        echo "<td>{$value}</td>";
    }
?>  
    </tr>
    <tr>
        <?php
    foreach($judy as $value){
 
        echo "<td>{$value}</td>";
    }   
    ?>
    </tr>
    <tr>
        <?php
    foreach($amo as $value){        
        echo "<td>{$value}</td>";
    }   
    ?>
    </tr>
    <tr>
        <?php
    foreach($john as $value){
        echo "<td>{$value}</td>";
    }   
    ?>
    </tr>
</table>
<hr>
<table>
    <tr>
        <?php
    foreach($header as $value){
        
        echo "<td>{$value}</td>";
    }
?>  
    </tr>
    <?php
    foreach($students as $student){
        echo "<tr>";
        foreach($student as $value){
            echo "<td>{$value}</td>";
        }   
        echo "</tr>";
    }
    ?>
</table>
<hr>
<table>
    <tr>
        <?php
    foreach($header as $value){   
        echo "<td>{$value}</td>";
    }
?>  
    </tr>
    <?php
    foreach($stus as $name => $student){
        echo "<tr>";
        echo "<td>";
        echo $name;
        echo "</td>";
        foreach($student as $score){
            echo "<td>{$score}</td>";
        }   
        echo "</tr>";
    }
    ?>
</table>
<hr>
<?php 
$tmp=$stus2;
echo "<pre>";
print_r($stus2);
echo "</pre>";
$keys=array_keys($stus2);
$first=array_shift($stus2);
$header=array_keys($first);
array_unshift($header,'學生');
$nstu=array_merge([$first],array_values($stus2));
echo "<pre>";
echo "nstu<br>";
print_r($nstu);
echo "</pre>";
echo "<pre>";
print_r($keys);
echo "</pre>";
echo "<pre>";
print_r($header);
echo "</pre>";
//echo $key;
//$stus2[$key]=$first;
$tt=[];
foreach($keys as $idx => $name){
    $tt[$name]=$nstu[$idx];
}
echo "<pre>";
echo "tt<br>";
print_r($tt);
echo "</pre>";
?>
<table>
    <tr>
        <?php
    foreach($header as $value){   
        echo "<td>{$value}</td>";
    }
?>  
    </tr>
    <?php
    foreach($tt as $name => $student){
        echo "<tr>";
        echo "<td>";
        echo $name;
        echo "</td>";
        foreach($student as $score){
            echo "<td>{$score}</td>";
        }   
        echo "</tr>";
    }
    ?>
</table>

<h2>利用程式來產生陣列</h2>

<ul>
     <li>以迴圈的方式產生一個九九乘法表</li>
    <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
    <li>再以迴圈方式將陣列內容印出</li>
</ul>

<?php
$nine=[];

for ($i=1; $i<=9; $i++) { 
    for ($j=1; $j<=9; $j++) { 
        $nine[]="$i x $j = " . ($i*$j);
        // echo "$i x $j = ";
        // echo $i*$j;
        // echo ",";
    }
}

// echo "<pre>";
// // <pre>標籤裡的資料用原本的格式來呈現
// print_r($nine);
// echo "<pre>"


/* 另一種斷行的方法
    $counter=0;
    foreach($nine as $idx => $n){
    $counter++;
    if($counter==9){
        echo $n . "<br>";
        $counter=0;
    }else{
        echo $n . ",";
    
    }
} */


foreach($nine as $idx => $n)
    if(($idx + 1) % 9 == 0){
        echo $n . "<br>";
    }else{
        echo $n . ",";
}


   /*  echo "<table>";
    for ($i=1; $i <=9; $i++) { 
    echo "<tr>";
    for ($j=1; $j <=9; $j++) { 
        echo "<td>";
         echo "$i x $j =";
         echo $i*$j;
         echo "</td>";
    }
}  */



?>
<hr>
<?php
// 完整版
$nine = []; // 建立一個空陣列來儲存乘法表

// 使用兩層迴圈生成九九乘法表
for ($i = 1; $i <= 9; $i++) { 
    for ($j = 1; $j <= 9; $j++) { 
        $nine[] = "$i x $j = " . ($i * $j); // 將每個項目存入陣列
    }
}

// 使用迴圈印出陣列的內容
foreach ($nine as $idx => $n) {
    if (($idx + 1) % 9 == 0) {
        echo $n . "<br>"; // 每 9 個項目換行
    } else {
        echo $n . ", "; // 其他項目之間用逗號分隔
    }
}

?>
<hr>
<?php
$nine = []; // 建立一個空陣列來儲存乘法表

// 使用兩層迴圈生成九九乘法表
for ($i = 1; $i <= 9; $i++) { 
    for ($j = 1; $j <= 9; $j++) { 
        $nine[] = "$i x $j = " . ($i * $j); // 將每個項目存入陣列
    }
}

// 開始建立 HTML 表格
echo "<table border='1' style='border-collapse:collapse;'>";
echo "<tr>"; // 開始一行

foreach ($nine as $idx => $n) {
    echo "<td>$n</td>"; // 每個乘法項目放入一個表格單元格

    // 每 9 個項目換行
    if (($idx + 1) % 9 == 0) {
        echo "</tr>"; // 關閉當前行
        if ($idx + 1 < count($nine)) {
            echo "<tr>"; // 開始新的一行
        }
    }
}

echo "</table>"; // 關閉表格
?>
<?php
$nine = []; // 建立一個空陣列來儲存乘法表

// 使用兩層迴圈生成九九乘法表
for ($i = 1; $i <= 9; $i++) { 
    for ($j = 1; $j <= 9; $j++) { 
        $result = $i * $j; // 計算結果
        $nine[] = "$result"; // 僅將計算結果存入陣列
    }
}

// 開始建立 HTML 表格
echo "<table border='1' style='border-collapse:collapse;'>";
echo "<tr>"; // 開始一行

foreach ($nine as $idx => $n) {
    echo "<td>$n</td>"; // 每個計算結果放入一個表格單元格

    // 每 9 個項目換行
    if (($idx + 1) % 9 == 0) {
        echo "</tr>"; // 關閉當前行
        if ($idx + 1 < count($nine)) {
            echo "<tr>"; // 開始新的一行
        }
    }
}

echo "</table>"; // 關閉表格
?>

<!-- <?php
// 老師的寫法
$nine=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine[]="$i x $j = ".($i*$j);
    }    
}

echo "<table>";
foreach($nine as $idx => $n){
    $v=explode("=",$n)[1];
    if($idx%9==8){
        echo "<td>$v</td></tr>";

    }else if($idx%9==0){
        echo "<tr><td>$v</td>";

    }else{
        echo "<td>$v</td>";
    }
}
echo "</table>";


?> -->
<?php
echo "<hr>";
$nine2=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine2["$i x $j"]=$i*$j;
    }    
}

echo "<pre>";
print_r($nine2);
echo "</pre>";

echo "<hr>";

$counter=0;
foreach($nine2 as $key => $n){
    $counter++;
    if($counter==9){
        echo $key  . " = ".$n ."<br>";
        $counter=0;
    }else{
        echo $key  . " = ".$n .", ";

    }
}
echo "<hr>";

echo "<table>";
$counter=0;
foreach($nine2 as $n){
    $counter++;
    if($counter==9){
        echo "<td>$n</td></tr>";
        $counter=0;
    }else if($counter==1){
        echo "<tr><td>$n</td>";

    }else{
        echo "<td>$n</td>";
    }
}
echo "</table>";
echo "<hr>";
echo "<hr>";
$nine3=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine3[]=['formula' => "$i x $j",'value'=>$i*$j];
    }    
}

echo "<pre>";
print_r($nine3);
echo "</pre>";

echo "<hr>";

foreach($nine3 as $idx =>$item){
    if($idx%9==8){
        echo $item['formula'] . " = ".$item['value']. "<br>";
    }else{
        echo $item['formula'] . " = ".$item['value'];

    }
}

?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>