<?php

try{
    //自力で例外を発生させる（例外を投げる）
    throw new \Exception("自力で投げた例外");

    $obj = new SplFileObject("dummy");

    echo "例外が起きた後の処理。ここは徹？ \n";
}catch(\Throwable $e){
    echo "例外が発生したらここを通る \n";
    var_dump($e->getMessage());
}

echo "fin. \n";

?>