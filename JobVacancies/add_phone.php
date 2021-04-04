<?php
require_once "config.php";

$id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);


$conn->exec("UPDATE users SET phone='$phone' WHERE id = {$_SESSION['job_id']}");

header("Location: profile.php");
die();


?>