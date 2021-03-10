<?php
require_once ("database.php");

$id = $_GET['id'];

$sql = "SELECT * FROM blogpost WHERE id=$id";

$result = $conn->query($sql, PDO::FETCH_ASSOC);

$row = $result->fetch();

require_once "partial_header.php";

echo "<h2>".$row['title']. "</h2>";
echo $row['content'];





