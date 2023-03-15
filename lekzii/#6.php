<?php
$a = 1;
$b = 30;
$c = 1;
$D = $b*$b-4*$a*$c;
echo $D;
if ($D > 0) {
    echo 'два корня' . "<br>";
    echo "<sub>1</sub> =" . ($b-sqrt($D))/(2*$a) . "<br>";
    echo "<sub>2</sub> =" . ($b+sqrt($D))/(2*$a) . "<br>";
}elseif ($D < 0) {
    echo 'нет корней';
}else{
    echo 'один корень' . "<br>";
    echo "<sub>1</sub> =" . ($b-sqrt($D))/(2*$a) . "<br>";
}
