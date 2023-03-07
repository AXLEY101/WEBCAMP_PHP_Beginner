<?php

$file_name = __DIR__."/data.csv";

$file_obj = new SplFileObject($file_name);

$file_obj->setFlags(SplFileObject::READ_CSV);

foreach($file_obj as $no => $datum){
    var_dump($datum);
}

?>