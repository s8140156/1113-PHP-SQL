<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <h1 class="text-center">會員登入</h1>
    <div class="container">
        <form action="login.php" method="post">
            <?php
				if(isset($_GET['error'])){
					echo "<span style='color:red'>";
					echo $_GET['error'];
					echo "</span>";
				}
			?>
            <div class="row">
                <div class="mb-3 col-4 m-auto">
                    <label for="" class="form-label">帳號:</label>
                    <input type="text" class="form-control" name="acc" id="acc">
                </div>
                <div class="mb-3 col-4 m-auto">
                    <label for="" class="form-label">密碼:</label>
                    <input type="password" class="form-control" name="pw" id="pw">
                </div>
                <div class="mb-3 col-4 m-auto">
                    <input type="submit" value="送出" class="btn btn-primary mx-2">
                    <input type="reset" value="重置" class="btn btn- mx-2">
                </div>
            </div>
        </form>
    </div>
</body>

</html>