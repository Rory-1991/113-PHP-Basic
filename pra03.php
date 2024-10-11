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
<h3>菱形</h3>

<?php

for ($i=0; $i<9; $i++) { 
    if($i>4){

    for($k=0;$k<$i-4;$k++){
        echo "&nbsp";
    }

    for($j=0; $j<2*($i-(2*($i-4)))+1; $j++) { 
        echo "*";
    }
    echo "<br>";

}else{

    for($k=0;$k<4-$i;$k++){
        echo "&nbsp";
    }

    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
    echo "<br>";
}

}

?>

</body>
</html>

