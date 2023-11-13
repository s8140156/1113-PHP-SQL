<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$acc=htmlspecialchars(trim($_POST['acc']));
// 資料清洗 data wash/clean, 檢查機制
// 用特殊function, or內建程式 去清除特殊字元
// 所有送過來的表單不要立即放進資料庫 建議一定都要檢查機制

$sql="insert into `users`(`acc`,`pw`,`name`,`email`,`address`)
                   values('{$acc}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['address']}')";

$pdo->exec($sql);

// header()裡面都是字串喔
header("Location:index.php");

?>