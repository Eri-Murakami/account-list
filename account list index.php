<?php
try{ //データベースaccountに接続
$db = newPDO('mysql:dbname=account;host=localhost;charset=utf8','root','root');
}catch(PDOExeption $e){
//接続できなかったらエラー表示
echo 'DB接続エラー:'.$e->getMessage();
}
?>