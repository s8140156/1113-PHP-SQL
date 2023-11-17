<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

session_start();

// include_once 是用在常用、重複的片段程式碼集中管理放在資料夾下
// 引入檔案，可避免重複引入。引不到檔案會出現錯誤息，但程式不會停止。
// 在這個project裡 常用的是資料庫連線及session_start 可以寫在一起 但視該頁對於這兩項程式碼的應用 不一定一定都要加上
// 這邊不用寫include_once "./include/connect.php";  請注意寫法 once後面沒有: 是空格


?>

