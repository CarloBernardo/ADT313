<h1>Loops</h1>

<?php
    $i = 1;
    while ($i < 6){
        echo $i;
        $i++;

    }
    $a = 1;
    do{
        echo $a;
        $a++;
    } 
    while ($a < 6);

    echo "<br/>";
    $color = array("red","green");
    foreach ($color as $x) {
        echo $x."<br/>";
    }
?>