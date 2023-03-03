<?php

$awk = [123];
var_dump($awk);

$awk2 = [999, "Hello" , 3.14];
var_dump($awk2);

var_dump($awk2[0]);

$awk2[0] = 654321;
var_dump($awk2[0]);

$awk[] = 1.41421356;
$awk[] = "string value";

var_dump($awk);



?>