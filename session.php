<?php
//バッファリング開始
ob_start();
//セッション開始
session_start();

function h(string $s):string
{
    return htmlspecialchars($s,ENT_QUOTES);
}

$counter = $_SESSION["counter"] ?? 1;

echo "セッション）あなたがこのサイトを訪れたのは", h(strval($counter)),"回目ですね。";

$next_counter = $counter + 1;

$_SESSION["counter"] = $next_counter;

ob_end_flush();


?>