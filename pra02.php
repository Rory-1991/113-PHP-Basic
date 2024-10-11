<?php

$n=50;
echo "n=".$n."<br>";
for ($i=1; $i<=$n ; $i=$i+2) { 
    echo $i;
    echo ",";
}

echo "<br>";

$n=50;
echo "n=".$n."<br>";
for ($i=1; $i <=$n ; $i++) { 
    echo $i *10 ;
    echo ",";
}

echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;

for ($i=4; $i <= $n ; $i++) { 
    $t=true;
    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }
    if($t==true){
        echo "$i ,";
    }
}


echo "<br>";
echo "$count";


echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;

for ($i=4; $i <= $n ; $i++) { 
    $t=true;
    for($j=2;$j<=sqrt($i);$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }
    if($t==true){
        echo "$i ,";
    }
}


echo "<br>";
echo "$count";
echo "<br>";

?>

<h2>九九乘法表</h2>

<?php

for ($j=1; $j <=9 ; $j++){ 
    for ($i = 1; $i <= 9; $i++){
        echo "$j x $i= ".($j*$i);
        echo ","."<br>";
    }
    echo "<br>";
}
?>

<?php
echo "<table border=1>";
for ($j=1; $j <=9 ; $j++){
    echo "<tr>"; 
    for ($i = 1; $i <= 9; $i++){
        echo "<td>"; 
        echo "$i x $j= ".($j*$i);
        echo "</td>"; 
    }
    echo "</tr>"; 
}
echo "</table>";

?>
<?php
//我是第一版
echo "<table border=1>";
echo "<tr>";
echo "<td></td>";
echo "<td>1</td>";
echo "<td>2</td>";
echo "<td>3</td>";
echo "<td>4</td>";
echo "<td>5</td>";
echo "<td>6</td>";
echo "<td>7</td>";
echo "<td>8</td>";
echo "<td>9</td>";
echo "</tr>";
for ($j=1; $j <=9 ; $j++){
    echo "<tr>"; 
    echo "<td>$j</td>";
    for ($i = 1; $i <= 9; $i++){
        echo "<td>"; 
        echo ($j*$i);
        echo "</td>"; 
    }
    echo "</tr>"; 
}
echo "</table>";

?>

<?php
//我是第二版
echo "<table border=1>";
echo "<tr>";
for ($k=0; $k < 10; $k++) { 
    echo "<td>$k</td>";
}

echo "</tr>";
for ($j=1; $j <=9 ; $j++){
    echo "<tr>"; 
    echo "<td>$j</td>";
    for ($i = 1; $i <= 9; $i++){
        echo "<td>"; 
        echo ($j*$i);
        echo "</td>"; 
    }
    echo "</tr>"; 
}
echo "</table>";

?>

<?php
//我是第三版
echo "<table border=1>";
for($j=0; $j<=9 ; $j++){
    echo "<tr>";
    for ($i=0;$i<=9;$i++){
        echo "<td>"; 
        if($j==0 && $i==0){
            echo "";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else{
            echo ($j*$i);
        }

        echo "</td>";
    }     
        echo "</tr>"; 
        
}
echo "</table>";

?>

<style>
.nine{
    border-collapse:collapse;
    margin:20px;

}   
.nine td{
    border:1px solid #aaa;
    width:30px;
    height:30px;
    text-align: center;
} 
.nine tr:nth-child(1),
.nine td:nth-child(1){
    background:blue;
    color:white
}

</style>
<?php
//我是第四版
echo "<table class='nine'>";
for($j=0; $j<=9 ; $j++){
    echo "<tr>";
    for ($i=0;$i<=9;$i++){
        echo "<td>"; 
        if($j==0 && $i==0){
            echo "";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else{
            echo ($j*$i);
        }

        echo "</td>";
    }     
        echo "</tr>"; 
        
}
echo "</table>";

?>

