
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
				echo "<a href='./api/logout.php' class='btn btn-info mx-2'>登出</a>";
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