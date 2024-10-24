<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>給定兩個日期，計算中間間隔天數</h1>

<?php
date_default_timezone_set("Asia/Taipei");

echo date("Y/m/d H:i:s");
echo "<br>";

$start="2024-10-01";
$end="2024-10-30";
$startTime=strtotime($start);
echo '開始時間:'.$startTime;
echo "<br>";
$endTime=strtotime($end);
echo '結束時間:'.$endTime;
echo "<br>";
$gap=$endTime-$startTime;
echo '差距秒:'.$gap;
echo "<br>";
$days=$gap/(60*60*24);
echo '間隔:'.$days.'天';
echo "<br>";



?>
<h1>計算距離自己下一次生日還有幾天</h1>

<?php
// 獲取今天的日期
$start = date("Y-m-d");
$startTime = strtotime($start);
echo '今天日期: ' . $startTime;
echo "<br>";

// 設定下次生日的日期
$end = "2024-10-07";
$endTime = strtotime($end);
echo '下次生日: ' . $endTime;
echo "<br>";

// 如果今年生日已經過去，則將年份加一
if ($endTime < $startTime) {
    $endTime = strtotime("+1 year", $endTime);
}

// 計算差距
$gap = $endTime - $startTime;
echo '差距秒: ' . $gap;
echo "<br>";

// 計算距離下次生日的天數
$days = $gap / (60 * 60 * 24);
echo "距下次生日還有: " . $days . " 天";
echo "<br>";
?>




<h1>利用date()函式的格式化參數，完成以下的日期格式呈現</h1>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>
<?php 

echo date("d"); 
// 1-9前面有補0 是字串
echo "<br>";
echo date("j");  
// 沒有補0 是數字
echo "<br>";

echo date("Y/m/d");
echo "<br>";
echo date("Y/m/d H:i:s" );
echo "<br>";
// echo date('Y-m-d'); 也可以
echo date('Y年m月d號 l'); 
// l=Sunday 到 Saturday

echo "<br>";

$weekString=[
        'Monday'=>['min'=>'一','short'=>'周一','fulltext'=>'星期一'],
        'Tuesday'=>['min'=>'二','short'=>'周二','fulltext'=>'星期二'],
        'Wednesday'=>['min'=>'三','short'=>'周三','fulltext'=>'星期三'],
        'Thursday'=>['min'=>'四','short'=>'周四','fulltext'=>'星期四'],
        'Friday'=>['min'=>'五','short'=>'周五','fulltext'=>'星期五'],
        'Saturday'=>['min'=>'六','short'=>'周六','fulltext'=>'星期六'],
        'Sunday'=>['min'=>'七','short'=>'周日','fulltext'=>'星期日']
        ];
echo date("Y年m月d日");
echo "<br>";
echo date("m月d日 l");
echo "<br>";
echo date("m月d日").$weekString[date("l")]['min'];
echo "<br>";
echo date("m月d日").$weekString[date("l")]['short'];
echo "<br>";
echo date("m月d日").$weekString[date("l")]['fulltext'];
echo "<br>";
echo "今天是西元".date("Y年m月d日");
if(date("N")>5){
    echo "假日";
}else{
    echo "上班日";
}
echo "<br>";

?>
<h1>利用迴圈來計算連續五個周一的日期</h1>
<ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>

<?php
for($i=0;$i<5;$i++){
    $timestamp=strtotime("+$i weeks".date("Y-m-d"));
    echo date("Y-m-d",$timestamp);
    echo "&nbsp;";
    echo $weekString[date("l")]['fulltext'];
    echo "<br>";
}

?>

<!-- $i 由上到下 控制直行 -->
<!-- $j 由左到右 控制橫行 -->
<h1>線上月曆製作</h1>

<ul>
    <li>以表格方式呈現整個月份的日期</li>
    <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
    <li>嘗試以block box或flex box的方式製作月曆</li>
</ul>
<style>
    table{
        border-collapse:collapse;

    }
    td{
        padding:5px 10px;
        text-align: center;
        border:1px solid #999;
    }
    .holiday{
        background:pink;
        color:#999;
    }
    .grey-text{
        color:#999;
    }
    .today{
        background:blue;
        color:white;
        font-weight:bolder;
    }
</style>
<h3><?php echo date("m月");?></h3>
<table>
<tr>
    <td></td>
    <td>日</td>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
</tr>
<?php
$d=strtotime("2024-6");
// 至少要寫到完整年+月 (2024-6)
$firstDayWeek=date("w",strtotime(date("Y-m-1")));

for($i=0;$i<6;$i++){
    echo "<tr>";
    echo "<td>";
    echo $i+1;
    echo "</td>";
    for($j=0;$j<7;$j++){
        echo "<td>";
        $dayNum=$i*7 + $j +1 - $firstDayWeek;
        if($dayNum<=date('t') && $dayNum >0){
            echo $dayNum;
        }
        echo "</td>";
    }

    echo "</tr>";


}

?>
</table>
<h3><?php echo date("m月");?></h3>
<table>
<tr>
    <td></td>
    <td>日</td>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
</tr>
<?php
$firstDay=date("Y-m-1");
$firstDayTime=strtotime($firstDay);
$firstDayWeek=date("w",strtotime(date("Y-m-1")));

for($i=0;$i<6;$i++){
    echo "<tr>";
    echo "<td>";
    echo $i+1;
    echo "</td>";
    for($j=0;$j<7;$j++){
        //echo "<td class='holiday'>";
        $cell=$i*7+$j -$firstDayWeek;
        $theDayTime=strtotime("$cell days".$firstDay);

        //所需樣式css判斷
        $theMonth=(date("m",$theDayTime)==date("m"))?'':'grey-text';
        // 不屬於這個月月份的日期變灰色
        $isToday=(date("Y-m-d",$theDayTime)==date("Y-m-d"))?'today':'';
        // 判斷是不是今天
        $w=date("w",$theDayTime);
        $isHoliday=($w==0 || $w==6)?'holiday':'';
        // 判斷是不是六日
        
        echo "<td class='$isHoliday $theMonth $isToday'>";
        echo date("d",$theDayTime);
        echo "</td>";
        
    }
    echo "</tr>";
}



?>
</table>
 
</body>
</html>