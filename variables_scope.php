<?php

$a = 10;
echo "global:a is {$a} \n";

function myFunc(){
    $b = 999;
    echo "in function:b is {$b} \n";

}


myFunc();

echo "global:b is {$b} \n";


?>