<?php


$i = random_int(1,999);
$j = random_int(1,999);

$k = $i + $j;

echo "{$i} + {$j} = {$k} \n ";

$k = $i - $j;

echo "{$i} - {$j} = {$k} \n";

$k = $i * $j;

echo "{$i} * {$j} = {$k} \n";

$k = $i / $j;

echo "{$i} / {$j} = {$k} \n";

//剰余　（じょうよ）
$k = $i % $j;

echo "{$i} % {$j} = {$k} \n";
//べき乗 **
$k = $i ** 3;

echo "{$i} ** 3 = {$k} \n";
//べき乗 pow();
$k = pow($i,3);

echo "pow({$i},3) = {$k}";

?>