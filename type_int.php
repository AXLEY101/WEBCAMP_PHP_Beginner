<?php

$i = 123;
var_dump($i);
var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MIN);

//最大値を超えた場合はどうか？
$over_max = PHP_INT_MAX +1;
var_dump($over_max);

//最小値を下回った場合はどうか？
$under_min = PHP_INT_MIN -1;
var_dump($under_min);
?>