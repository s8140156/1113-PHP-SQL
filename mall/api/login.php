<?php

// include_once "../include/connect.php";
include_once "../include/db.php";
// session_start();

$acc=$_POST['acc'];
$pw=$_POST['pw'];
// 從login_form會員填寫的資料 method:POST
// 接收到的資料最好先做資料清洗 設變數接收資料

// $dsn="mysql:host=localhost;charset=utf8;dbname=member";
// $pdo=new PDO($dsn,'root','');
// 設定資料庫連線 與資料庫比對會員資料

// $sql="select * from users where `acc`='$acc' && `pw`='$pw'";
// 從資料庫的users資料表找出 `acc`欄位與post接收到的$acc && $acc
// 請注意 後面變數的引號是''單引號不是上引號``(因為寫錯造成網頁無法成功登入請留意) 
// $sql="select count(*) from users where `acc`='$acc' && `pw`='$pw'";

// 因為已傳指令讓資料庫去找與post傳來的會員資料是否相同 若找到相同資料資料庫其實是回傳整筆資料(全部欄位 包括name, email..)
// 只要資料庫比對acc與pw一致 至少有一筆資料是正確的 所以用count符合資料的筆數 只要回傳有正確的筆數 比整筆欄位資料回傳有效率

// 使用語法從資料庫撈資料 比從資料庫撈整筆資料有效率 因為是數值統計 已沒有個資傳遞 比較不會被有心人士竊取 並避免資料庫裡面的內容過於暴露


// $user=$pdo->query($sql)->fetch();
// 根據條件從資料庫撈出一筆
// $user=$pdo->query($sql)->fetchColumn();

// 改使用pdo函式 $pdo->query($sql)->“fetchColumn($n)“算出索引值

$res=$User->count(['acc'=>$acc,'pw'=>$pw]);

// print_r($user);
// 若正確 會回傳Array([count(*)]=>1 [0]=>1) 因為陣列會給出欄位及索引兩個東西 所以使用fetchColumn($n)“指定索引值
// 確認傳回的資訊是甚麼 返回該筆資料中指定欄位的資料，$n為欄位的索引值(0,1,2…)

// echo $sql;
// exit();
// 以上是檢查機制 看自己sql寫了甚麼 會回傳sql指令的結果 然後再把sql指令帶回myadmin去查詢什麼問題
// exit();是強制php執行到這邊後面不再執行

// if($user['acc']==$acc && $user['pw']==$pw){
// 如果資料庫的`acc`與post接收的$acc 與資料庫的`pw`與post接收的$pw一致
// if($user==1){
if($res){
	// 要註記
	$_SESSION['user']=$acc;
	// 就把會員資料記在session
	header("location:../index.php");
	// 並登入成功者轉至index網頁
}else{
	header("location:../login_form.php?error=帳號密碼錯誤");
	// 否則則轉址至login_form.php並顯示帳號密碼錯誤訊息
}

?>