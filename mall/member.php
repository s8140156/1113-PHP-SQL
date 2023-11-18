<?php
include_once "./include/connect.php";
// session_start();
?>
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
            if (isset($_SESSION['user'])) {
                // 判斷session是否有取得user的訊息資料
                echo "歡迎光臨" . $_SESSION['user'];
                echo "<a href='logout.php' class='btn btn-info mx-2'>登出</a>";
                echo "<a href='member.php' class='btn btn-success mx-2'>會員中心</a>";
            } else {
                echo $_SESSION['error']="沒有登入相關驗證，非法登入";
                // header('location:index.php');
                // unset($_SESSION['user']);
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

        if (isset($_SESSION['msg'])) {
            echo "<div class='alert alert-warning text-center col-6 m-auto'>";
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            echo "</div>";
        }
        // 這邊是承接當會員編輯後的表單 是否有session訊息 視會員的操作顯示對應的訊息在會員中心裡的會員資料表上
        // 並要注意這只是show個狀態訊息 所以不需要session一直記著 所以要接著解除unset這個session($_SESSION['msg'])

        // $dsn="mysql:host=localhost;charset=utf8;dbname=member";
        // $pdo=new PDO($dsn,'root','');
        $sql = "select * from users where `acc`='{$_SESSION['user']}'";
        $user = $pdo->query($sql)->fetch();
        // 要撈出已註冊的會員資料 這邊假設是acc是獨一性 不會重複 往後在寫時 需要獨一的值來辨識
        // 這邊已沒有表單過來 要從session撈資料
        ?>
        <!-- <pre> -->
        <!-- <?=print_r($user);?> -->
        <!-- </pre> -->
        <!-- 可以從$user去列印陣列來看裡面有什麼東西 其實資料庫撈出來的資料有含id -->
        <!-- 這邊是在確認update頁面要傳post什麼辨識來可以做編輯的判斷 -->


        <form action="./update.php" method="post">
            <!-- <form action="./update.php?id=<?=$user['id'];?>" method="post"> -->
            <!-- 另一種傳id方式是在要去的網頁加上id訊息 **請非常注意寫法 -->
            <!-- get/post傳值是在網頁後加? 及後面的欄位資訊(從php叫出變數) " "是從網頁前開始包到欄位訊息後結束 -->
            <div>
                <label for="">帳號:</label>
                <input type="text" name="acc" id="acc" value="<?= $user['acc']; ?>">
                <!-- < ? =   ? > php短寫法 -->
            </div>
            <div>
                <label for="">密碼:</label>
                <input type="password" name="pw" id="pw" value="<?= $user['pw']; ?>">
                <!-- 這邊需要type=password這樣顯示才會隱藏 -->
            </div>
            <div>
                <label for="">姓名:</label>
                <input type="text" name="name" id="name" value="<?= $user['name']; ?>">
            </div>
            <div>
                <label for="">電子郵件:</label>
                <input type="text" name="email" id="email" value="<?= $user['email']; ?>">
            </div>
            <div>
                <label for="">居住地:</label>
                <input type="text" name="address" id="address" value="<?= $user['address']; ?>">
            </div>
            <div>
                <input type="hidden" name="id" id="id" value="<?=$user['id'];?>">
                <!-- type=hidden 把id這個欄位隱藏起來不需給使用者看 但是要傳值 -->
                <input type="submit" value="更新">
                <!-- type=submit一定觸發form action到指定網頁update.php -->
                <input type="reset" value="重置">
                <!-- type=reset不是清空 是將內容重置或還原 -->
                <input type="button" value="消失" onclick="location.href='del_user.php?id=<?=$user['id'];?>'">
                <!-- @ input type=button 沒有功能只是button外型 -->
                <!-- 如果是使用tag <button></button>在form表單預設功能是submit -->
                <!-- 這邊語法使用js（onclick） (透過事件處理)-->
            </div>

        </form>
        <!-- <form action="del_user.php" method='post'>
            <input type="hidden" name="id" id="id" value="<?=$user['id'];?>">
            <input type="submit" value="消失">
        </form> -->
        <!-- 這邊是另一種刪除會員資料方式 由於上面的消失使用type=button沒有功用 所以必須改submit方式 
        但是表單不能再包表單 需獨立拉出重新建連結至del頁面 但會造成頁面格式醜 案件獨立在外沒有排版 -->

    </div>

</body>

</html>