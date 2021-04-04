<?php require_once "config.php"; ?>
<?php
unset($_SESSION['job_id']);
unset($_SESSION['job_username']);
header("Location: index.php");
die();