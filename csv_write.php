<?php

$write_date = [

        [1,2,3],
        ["aaa","bbb","ccc"],
        [",aa","b\"b","c\n c"],
    ];

    $file_name = __DIR__ . "/data.csv";

    $file_obj = new SplFileObject($file_name, "w");

    foreach($write_date as $datum){
        $file_obj->fputcsv($datum);
    }
?>