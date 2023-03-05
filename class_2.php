<?php

class MyClass
{
    const HOGE = "string";

    public function __construct()
    {
        echo "コンストラクタが動いた！！ \n";
    }

    public function __destruct()
    {
        echo "デストラクタが動いた！！　\n";
    }

}

var_dump(MyClass::HOGE);

$obj = new MyClass();


?>