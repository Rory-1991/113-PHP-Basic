<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</body>
</html>

<!DOCTYPE html>
<html>
    <head>
    <title> 程式語言基礎-流程</title>
    </head>
<body>
 <h1>流程-if-else</h1>   


<?php
$score=75;

//echo 'fshdfaiufha $score ssahfiuash';
//echo "djfihiaf($score)sfdjzjsfoi";

$score=76;
if($score=75){
    echo "及格";
}else{
    echo "不及格";
}


?>

<h1>swith...case</h1>

<?php

$level='S';
switch($level){
    case "A":
        echo "表現優良，請繼續保持";
    break;
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
        echo "是否無心學業?";
    break;
}

?>
<h1>三元運算子</h1>
<?php

$score=65;
/* if($score>=60){
    echo "及格"
    }else{
        echo "不及格";
} */
echo ($score>=60)?'及格':'不及格';

?>

</body>
</html>