<?php

include_once "./include/connect.php";

// $_GET['id']
// 因為傳送是用明碼,所以不建議使用
// $_POST['id']
// 用POST(隱碼)來傳送會員id 只是不要讓資訊太明顯 僅編碼過(若有心人其實還是可以用方法看到)

$sql="update `users` set `acc`='{$_POST['acc']}',
                          `pw`='{$_POST['pw']}',
						  `name`='{$_POST['name']}',
						  `email`='{$_POST['email']}',
						  `address`='{$_POST['address']}'
	 where `id`='{$_POST['id']}'";

	//  請注意 這邊的sql語法是"編輯update"!!! 不是新增 是編輯更新!! 新增是insert 請不要犯傻

if($pdo->exec($sql)>0){
	// 因為執行了sql如果更新成功會回傳1 沒有資料變動是0 所以用>0來判斷
	$_SESSION['msg']="更新成功";
}else{
	$_SESSION['msg']="資料無異動";
}

header("location:member.php");
// 會員編輯更新資料後回到會員中心

?>