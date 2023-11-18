<?php

include_once "./include/connect.php";

$sql="delete from `users` where `id`='{$_GET['id']}'";
// 因為目前“消失”會員資料是使用網址傳址(js語法) 所以使用get傳值即可

$pdo->exec($sql);

unset($_SESSION['user']);
// 這邊要注意 在執行sql刪除後 要同步unset session不去記憶先前會員的狀態 不然會出現會員資料裡面的亂碼＋頁面還是登入中的畫面

header("location:index.php");

?>