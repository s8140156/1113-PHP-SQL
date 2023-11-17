<?php

include_once "./include/connect.php";

$sql="delete from `users` where `id`='{$_GET['id']}'";

$pdo->exec($sql);

unset($_SESSION['users']);

header("location:index.php");