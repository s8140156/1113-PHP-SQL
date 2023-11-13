<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>會員登入</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	<h1 class="text-center">登入</h1>
	<div d-flex>
		<div class="mb-3 col-4 m-auto"> 
				<label for="" class="form-label">帳號:</label>
				<input type="text" class="form-control" name="acc" id="acc">
			</div>
			<div class="mb-3 col-4 m-auto">
				<label for="" class="form-label">密碼:</label>
				<input type="password" class="form-control" name="pw" id="pw">
			</div>
			<div class="mb-3 col-4 m-auto">
				<input type="submit" value="submit">
				<input type="reset" value="clear">
			</div>
	</div>
</body>
</html>