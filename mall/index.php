<?php
include_once "./include/connect.php";
// session_start();
// 若已加include_once 但session_start沒有關 通常會在畫面出現notice顯示重複執行
?>
<!-- 確認哪些網頁需要session介入 然後再一開頭就宣告執行 -->
<!-- session_start()函數用來啟動或恢復使用者的資訊，
因為網頁可能需要使用session來保持使用者的登入狀態。 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container min-vh-100">
        <?php include "./include/header.php"; ?>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;

        <?php include "./include/footer.php"; ?>
    </div>
</body>

</html>