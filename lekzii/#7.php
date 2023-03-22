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