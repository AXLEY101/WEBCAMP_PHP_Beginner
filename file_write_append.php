<?php

$file_name = __DIR__ . "/file_write_append.txt";

$write_string = "書き込む内容 \n";

file_put_contents($file_name,$write_string,FILE_APPEND | LOCK_EX);

?>