<?php

function hour ( $b){
$s = $b / 24;
$f = round($s , 2);
echo $b." часы <br>" . $f . " дни<br> ";
}
hour(78);
function day ($b){
    $s = $b * 24;
    $f = round($s , 2);
    echo $b." Дни <br>" . $f . " Часы<br> ";
}
day(3);

function nedel($b){
    $i = 1;
    while ($i <= 10):
        echo $i * 24 . "<br>";
        $i++;
    endwhile;
}
nedel(1);
sf