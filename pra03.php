<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星星</title>
    <style>
        * {
            font-family:'Courier New', Courier, monospace;
        }

    </style>
</head>
<body>
    
<h3>直角三角形</h3>

<?php

for ($i=0; $i <5; $i++) { 
    for ($j=0; $j<($i+1); $j++) { 
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h3>倒直角三角形</h3>
<?php

for ($i=5; $i >0; $i--) { 
    for ($j=$i; $j>0; $j--) { 
        echo "*";
    }
    echo "<br>";
}

//    for ($j=0; $j<$i; $j++) { 

?>

<hr>
<h3>正三角形</h3>

<?php

for ($i=0; $i<5; $i++) { 

    for($k=0;$k<4-$i;$k++){
        echo "&nbsp";
    }

    for ($j=0; $j<(2*$i+1); $j++) { 
        echo "*";
    }
    echo "<br>";
}

?>
<hr>
<h3>倒正三角形(作法一)</h3>

<?php

for ($i=0; $i<5; $i++) { 

    for($k=0;$k<$i;$k++){
        echo "&nbsp";
    }

    for ($j=0; $j<(2*(4-$i)+1); $j++) { 
        echo "*";
    }
    echo "<br>";
}

?>

<hr>
<h3>倒正三角形(作法二)</h3>

<?php

for ($i=4; $i>=0; $i--) { 

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp";
    }

    for ($j=0; $j<(2*$i+1); $j++) { 
        echo "*";
    }
    echo "<br>";
}

?>
<hr>
<h3>菱形(作法一)</h3>

<?php

for($i=0;$i<21;$i++){
    if($i>10){
        /* $t=$i-4;
        $i-4     => 1,2,3,4
        2*($i-4) => 2,4,6,8
        $i       => 5,6,7,8
        2*($i-(2*($i-4)))+1 => 7, 5 , 3,1
        2*($i-(2$i-8))+1
        2*(8-$i)+1
        17-2$i */

        for($k=0;$k<$i-10;$k++){
            echo "&nbsp;";
        }
    
        for($j=0;$j<2*($i-(2*($i-10)))+1;$j++){
            echo "*";
        }
        echo "<br>";

    }else{

        for($k=0;$k<10-$i;$k++){
            echo "&nbsp;";
        }
    
        for($j=0;$j<(2*$i+1);$j++){
            echo "*";
        }
        echo "<br>";
    }

}

?>
<h3>菱形(作法一+變數控制)</h3>

<?php

$size=11;

for($i=0;$i<$size;$i++){
    if($i>floor($size/2)){
        for($k=0;$k<$i-floor($size/2);$k++){
            echo "&nbsp;";
        }
    
        for($j=0;$j<2*($i-(2*($i-floor($size/2))))+1;$j++){
            echo "*";
        }
        echo "<br>";

    }else{

        for($k=0;$k<floor($size/2)-$i;$k++){
            echo "&nbsp;";
        }
    
        for($j=0;$j<(2*$i+1);$j++){
            echo "*";
        }
        echo "<br>";
    }

}


?>

<hr>
<h3>菱形(精簡)</h3>

<?php 
for($i=0;$i<21;$i++){
    if($i>10){
        $k1=$i-10;
        $j1=2*($i-(2*($i-10)))+1;
    }else{
        $k1=10-$i;
        $j1=(2*$i+1);
    }

    for($k=0;$k<$k1;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$j1;$j++){
        echo "*";
    }
    echo "<br>";
    
}
?>

<hr>
<h3>菱形(精簡+變數控制)</h3>

<?php 
$size=21;
for($i=0;$i<$size;$i++){
    if($i>(floor($size/2))){
        $k1=$i-(floor($size/2));
        $j1=2*($i-(2*($i-(floor($size/2)))))+1;
    }else{
        $k1=(floor($size/2))-$i;
        $j1=(2*$i+1);
    }

    for($k=0;$k<$k1;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$j1;$j++){
        echo "*";
    }
    echo "<br>";
    
}
?>

<hr>
<h3>矩形</h3>

<?php

for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        if($i==0 || $i==4){
            echo "*";
        }else if($j==0 || $j==4){
            echo "*";
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}

?>
<hr>
<h3>矩形(變數控制)</h3>

<?php
$height=8;
$width=7;

for($i=0;$i<$height;$i++){
    for($j=0;$j<$width;$j++){
        if($i==0 || $i==$height-1){
            echo "*";
        }else if($j==0 || $j==$width-1){
            echo "*";
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}

?>

<hr>
<h3>對角線矩形-奇數</h3>

<?php

$height=7;
$width=7;

for($i=0;$i<$height;$i++){
    for($j=0;$j<$width;$j++){
        if($i==0 || $i==$height-1){
            echo "*";
        }else if($j==0 || $j==$width-1){
            echo "*";
        }else if($i==$j || $j+$i==$width-1){
            echo "*";
        
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}


?>

<h3>對角線矩形-偶數</h3>

<?php

$height=6;
$width=6;

for($i=0;$i<$height;$i++){
    for($j=0;$j<$width;$j++){
        if($i==0 || $i==$height-1){
            echo "*";
        }else if($j==0 || $j==$width-1){
            echo "*";
        }else if($i==$j || $j+$i==$width-1){
            echo "*";
        
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}
?>
<h3>空心菱形</h3>

<?php

$size=11;
//確保菱形一定是奇數
if($size>=3){
    if ($size%2==0){
        $size++;
    }
}else{
    echo "數字太小,無法畫出菱形<br>";
}

for($i=0;$i<$size;$i++){
    if($i>(floor($size/2))){
        $k1=$i-(floor($size/2));
        $j1=2*($i-(2*($i-(floor($size/2)))))+1;
    }else{
        $k1=(floor($size/2))-$i;
        $j1=(2*$i+1);
    }

    for($k=0;$k<$k1;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$j1;$j++){
        if($j==0 || $j==$j1-1) {
            echo "*";
        }else{
            echo "&nbsp";
        }
        
    }
    echo "<br>";
    
}


?>

<h3>空心菱形對角線</h3>

<?php

$size=11;
//確保菱形一定是奇數
if($size>=3){
    if ($size%2==0){
        $size++;
    }
}else{
    echo "數字太小,無法畫出菱形<br>";
}

for($i=0;$i<$size;$i++){
    if($i>(floor($size/2))){
        $k1=$i-(floor($size/2));
        $j1=2*($i-(2*($i-(floor($size/2)))))+1;
    }else{
        $k1=(floor($size/2))-$i;
        $j1=(2*$i+1);
    }

    for($k=0;$k<$k1;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$j1;$j++){
        if($j==0 || $j==$j1-1 || $i==(floor($size/2)) || $j==floor(($j1-1)/2)) {
            echo "*";
        }else{
            echo "&nbsp";
        }
        
    }
    echo "<br>";
    
}

?>

<h3>練習-空心正三角形</h3>




</body>
</html>

