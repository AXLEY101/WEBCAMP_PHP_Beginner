<?php

class クラス名
{
    private $変数;

    public function 関数(){
        echo "メソッドの処理 \n";
    }

    public function set変数($v)
    {
        $this->変数 = $v;
    }

    public function get変数()
    {
        return $this->変数;
    }

}

$obj = new クラス名();
var_dump($obj);
$obj->関数();

$obj->set変数("date");
echo $obj->get変数(), "\n";


?>