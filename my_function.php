<?php

function numToDouble($i):int{
    $ret = $i * 2;

    return $ret;
}
$num = numToDouble(10);
echo "10 を2倍にしたら{$num}になった \n";

function numAdd(int $a,int $b):int{
    $ret = $a + $b;

    return $ret;
}
$add = numAdd(5,6);
echo "5と6を足したら{$add}になった \n";



?>