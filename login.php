<?php
SESSION_start();

$acc=$_POST['acc'];
$pw=$_POST['pw'];

$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

// $sql="select * from users where `acc`=`$acc` && `$pw`";
$sql="select count(*) from users where `acc`=`$acc` && `$pw`";
// $user=$pdo->query($sql)->fetch();
$user=$pdo->query($sql)->fetchColumn();
// print_r($user);
// 確認傳回的資訊是甚麼 返回該筆資料中指定欄位的資料，$n為欄位的索引值(0,1,2…)
echo $sql;
exit();
// 以上是檢查機制 看自己sql寫了甚麼
// exit();是強制php執行到這邊

// if($user['acc']==$acc && $user['pw']==$pw){
// if($user==1){
if($user){
	$_SESSION['user']=$acc;
	header("location:index.php");
}else{
	header('location:login_form.php?error=帳號密碼錯誤');
}

?>