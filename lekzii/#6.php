<?php
$a = 1;
$b = -1;
$c = 1;
$D = $b*$b-4*$a+$c;
echo $D;
if ($D > 0) {
    echo 'два корня';
}elseif ($D < 0) {
    echo 'нет корней';
}else{
    echo 'один корень';
}
