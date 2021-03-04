<?php
require_once ("database.php");

$id = $_GET['id'];

//$sql = "SELECT content FROM blogpost WHERE id=$id";

$sql = "SELECT * FROM blogpost";
$result = $conn->query($sql, PDO::FETCH_ASSOC);




foreach ($result as $row) {
        if ($row['id'] == $id){
          echo $row['content'];
          break;
          }

        }


//$conn->exec($sql);


