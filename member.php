<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
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
					echo "<a href='member.php' class='btn btn-success mx-2'>會員中心</a>";
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
    <div class="container">
        <h1>使用者資料</h1>
        <?php
				$dsn="mysql:host=localhost;charset=utf8;dbname=member";
				$pdo=new PDO($dsn,'root','');
				$sql="select * from users where `acc`='{$_SESSION['user']}'";
				$user=$pdo->query($sql)->fetch();
				// 要撈出已註冊的會員資料 這邊假設是acc是獨一性 不會重複 往後在寫時 需要獨一的值來辨識
				// 這邊已沒有表單過來 要從session撈資料


			?>
        <form action="./update.php" method="post">
            <div>
                <label for="">帳號:</label>
                <input type="text" name="acc" id="acc" value="<?=$user['acc'];?>">
                <!-- < ? =   ? > php短寫法 -->
            </div>
            <div>
                <label for="">密碼:</label>
                <input type="password" name="pw" id="pw" value="<?=$user['pw'];?>">
                <!-- 這邊需要type=password這樣顯示才會隱藏 -->
            </div>
            <div>
                <label for="">姓名:</label>
                <input type="text" name="name" id="name" value="<?=$user['name'];?>">
            </div>
            <div>
                <label for="">電子郵件:</label>
                <input type="text" name="email" id="email" value="<?=$user['email'];?>">
            </div>
            <div>
                <label for="">居住地:</label>
                <input type="text" name="address" id="address" value="<?=$user['address'];?>">
            </div>
            <div>
                <input type="submit" value="更新">
                <input type="reset" value="重置">
                <input type="button" value="消失">
            </div>

        </form>
    </div>

</body>

</html>