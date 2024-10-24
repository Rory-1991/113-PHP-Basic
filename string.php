<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>字串取代</h1>
<h3>將”aaddw1123”改成”*********”</h3>
<?php
$str='aaddw1123';
echo $str . "<br>";
/* $str=str_replace('aa',"**",$str);
echo $str . "<br>";
$str=str_replace('d',"*",$str);
echo $str . "<br>"; */
$str=str_replace(['a','d','w','1','2','3'],"*",$str);
echo $str . "<br>";

$str=str_repeat("*",mb_strlen($str));
echo $str . "<br>";

$str=str_replace(str_split($str), '*', $str);
echo $str . "<br>";

?>

<h1>字串分割</h1>
<h3>將”this,is,a,book”依”,”切割後成為陣列</h3>

<?php

$str="this,is,a,book";
$str=explode(",",$str);
// 這邊explode已經將字串轉成陣列
echo "<pre>";
print_r($str);
echo "</pre>";

?>

<h1>字串組合</h1>
<h3>將上例陣列重新組合成“this is a book"</h3>
<?php
// 所以這裡才能直接給join用
$str=join(" ", $str);
echo $str . "<br>";

?>

<!-- join正確用法 -->
<!-- <?php
$str = "this,is,a,book";
$array = explode(",", $str); // 先用 explode 將字串轉成陣列
$str = join(" ", $array); // 然後用 join 將陣列組合成字串
echo $str . "<br>"; // 輸出: this is a book
?> -->

<!-- 或者使用implode -->
<!-- <?php
$array = ['this', 'is', 'a', 'book'];
$combinedString = implode(" ", $array);
echo $combinedString; // 輸出: this is a book
?> -->



<h1>子字串取用</h1>
<h3>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</h3>
<?php

$str="The reason why a great man is great is that he resolves to be a great man";
$str=mb_substr($str,0,10) . "...";
// $str=substr($str,0,10) . "..."; 在英文裡與mb_substr效果一樣
echo $str . "<br>";

$str="偉人之所以偉大，在於他立志成為偉人。";
// $str=substr($str,0,10) . "..."; 在中文字時使用就會出錯 
$str=mb_substr($str,0,10) . "...";
echo $str . "<br>";
?>

<h1>尋找字串與HTML、css整合應用</h1>
<h3>
<ul>
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>
    </ul>
</h3>
<?php

$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$key="程式設計";
// $key="PHP"; 字可以替換
$large="<span style='font-size:28px;color:blue'>". $key . "</span>";
// $large=<span style='font-size:28px;color:blue'>$key</span>; 這樣寫也可以
$str=str_replace($key,$large,$str);
echo $str . "<br>";



/* $str=str_replace($key,$large,$str);
動作: 使用 str_replace 函數將原始字串中的關鍵字替換為帶有樣式的關鍵字。
第一個參數: $key （要替換的字元）。
第二個參數: $large （替換為的字元）。
第三個參數: $str （要處理的字串）。 */

?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


</body>
</html>