<?php
function fibo($m){
    $x = 0;
    $y = 1;
    $str = ",";
    if ($m == 1) {
        print 1;
    }else {
        print $y . $str;
        for($i = 1; $i < $m; $i ++) {
            if ($i == ($m - 1)) {
                $str = "";
            }
            $sum = add ( $x, $y);
            print $sum . $str;
            $x = $y;
            $y = $sum;
        }
    }
}
function add($x, $y){
    return $x + $y;
}

fibo (20);
?>