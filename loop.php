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

$score=10;
$counter=0;
while($score<60){
    $score=$score+10;
    $counter++;
}

echo $score;
echo "<br>";
echo $counter;

?>

</body>
</html>