<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>會員註冊</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
</head>

<body>
	<div class="container">
	<?php include "./include/header.php"; ?>
		<h2>會員註冊</h2>
		<form action="./api/add_user.php" method="post">
			<div>
				<label for="">帳號:</label>
				<input type="text" name="acc" id="acc">
			</div>
			<div>
				<label for="">密碼:</label>
				<input type="password" name="pw" id="pw">
				<!-- 這邊需要type=password這樣顯示才會隱藏 -->
			</div>
			<div>
				<label for="">姓名:</label>
				<input type="text" name="name" id="name">
			</div>
			<div>
				<label for="">電子郵件:</label>
				<input type="text" name="email" id="email">
			</div>
			<div>
				<label for="">居住地:</label>
				<input type="text" name="address" id="address">
			</div>
			<div>
				<input type="submit" value="送出">
				<input type="reset" value="重置">
			</div>
		</form>
	<?php include "./include/footer.php"; ?>

	</div>
</body>

</html>