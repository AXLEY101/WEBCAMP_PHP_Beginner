<?php

class MyException extends Exception{

}

try{
    //例外を投げる
    throw new \MyException("自力で投げた例外");
    throw new TypeError("自力で投げたtype error");
    throw new Exception("自力で投げた Exception");
}catch(MyException $e){
    echo "MyException　をキャッチしました \n";
    var_dump($e->getMessage());
}catch(\Error $e){
    echo "Error をキャッチしました \n";
    var_dump($e->getMessage());
}catch(\Throwable $e){
    echo "Throwable をキャッチしました \n";
    var_dump($e->getMessage());
}

echo "fin \n";

?>