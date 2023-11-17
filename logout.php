<?php

session_start();
unset($_SESSION['user']);

header("location:index.php");

// 在logout雖然有使用session_start(), 但未使用到資料庫(程式碼) 就不需再使用include_once

?>