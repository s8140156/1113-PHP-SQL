
<!-- add_user.php只做接收表單 做完動作會回到首頁或其他頁面 -->

<?php

include_once "../include/connect.php";
// $dsn="mysql:host=localhost;charset=utf8;dbname=member";
// $pdo=new PDO($dsn,'root','');
//設定資料庫連線by PDO

$acc=htmlspecialchars(trim($_POST['acc']));
// 資料清洗 data wash/clean, 檢查機制
// 用特殊function, or內建程式 去清除特殊字元' / _變成字串處理
// 所有送過來的表單不要立即放進資料庫 建議一定都要檢查機制（原本是在values直接寫接收post資料 設變數提出來 不要直接暴露）
// 1. function trim()是去除字串前後空白符號
// 2. function htmlspecialchars()將html特殊符號改成字串 ex.&=>&amp;
// 做完清理後 才把變數放到sql去執行, 注意是每個變數都要做這樣的清理

// 增sql語法：新增資料表欄位, 值是$_POST傳過來的喔
// $sql="insert into `users`(`acc`,`pw`,`name`,`email`,`address`) 
//                    values('{$acc}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['address']}')";
                //欄位是用``; 值使用''; 但這邊因為是接收$_POST傳來的值會有包夾''''情形 
                // 會造成程式誤判斷行不正確 所以裡面使用{}包住變數

// $pdo->exec($sql);

insert("users",['acc'=>"{$acc}",'pw'=>"{$_POST['pw']}",'name'=>"{$_POST['name']}",'email'=>"{$_POST['email']}",'address'=>"{$_POST['address']}"]);
// 這邊要將原' '=>" "
// 然後就已寫好的function取代先前寫的直觀


// 執行sql指令 by PDO連線寫進資料庫 exec()是執行指令沒有回傳資料

// header()指令型式都是字串喔 用""包
header("Location:../index.php");


?>