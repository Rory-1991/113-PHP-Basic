
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>