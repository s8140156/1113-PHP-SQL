<?php session_start();?>
<!-- 確認哪些網頁需要session介入 然後再一開頭就宣告執行 -->
<!-- session_start()函數用來啟動或恢復使用者的資訊，
因為網頁可能需要使用session來保持使用者的登入狀態。 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <h1>哭哭購物城</h1>
        <header class="nav">
            <div class="nav-item col-4"></div>
            <div class="nav-item col-4">
                <ul class='d-flex justify-content-evenly'>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="nav-item col-4">
                <?php
				if(isset($_SESSION['user'])){
					// 判斷session是否有取得user的訊息資料
					echo "歡迎光臨" . $_SESSION['user'];
					echo "<a href='logout.php' class='btn btn-info mx-2'>登出</a>";
					echo "<a href='member.php' class='btn btn-info mx-2'>會員中心</a>";
				}else{
				?>
                <a href="reg.php" class="btn btn-primary mx-2">註冊</a>
                <a href="login_form.php" class="btn btn-success mx-2">登入</a>
                
                <?php
				}
				?>
				<!-- 根據使用者的登入狀態來顯示不同的選項。
				如果使用者已登入，則顯示歡迎訊息和相關的操作按鈕；
				如果使用者未登入，則提供註冊和登入的選項。 -->
				<!-- 然後注意在html何時要插入php程式及拆分斷點(恢復html寫法) -->
            </div>
        </header>
    </div>
</body>
</html>