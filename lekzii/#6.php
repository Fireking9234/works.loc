<?php
//$a = 1;
//$b = 20;
//$c = 1;
//$D = $b*$b-4*$a*$c;
//echo $D;
//if ($D > 0) {
//    echo 'два корня' . "<br>";
//    $x1  = ($b-sqrt($D))/(2*$a);
//    $x2  = ($b+sqrt($D))/(2*$a);
//    echo "<sub>1</sub> =" . $x1 . "<br>";
//    echo "<sub>2</sub> =" . $x2 . "<br>";
//}elseif ($D < 0) {
//    echo 'нет корней';
//}else{
//    echo 'один корень' . "<br>";
//    $x1  = ($b-sqrt($D))/(2*$a);
//    echo "<sub>1</sub> =" . $x1 . "<br>";
//};

function dis($a , $b , $c){
    $D = $b*$b-4*$a*$c;
    echo $D;
    if ($D>0){
        $x1  = ($b-sqrt($D))/(2*$a);
        $x2  = ($b+sqrt($D))/(2*$a);
        echo "<sub>1</sub> =" . $x1 . "<br>";
        echo "<sub>2</sub> =" . $x2 . "<br>";
    }
    elseif ($D<0){
        echo 'нет корней';
    }
    else{
        echo 'один корень' . "<br>";
        $x1  = ($b-sqrt($D))/(2*$a);
        echo "<sub>1</sub> =" . $x1 . "<br>";
    }
};
dis(1 , 2 , 1);
