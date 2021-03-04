<?php
require_once("database.php");

$sql = "SELECT * FROM blogpost";
$result = $conn->query($sql, PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog Post Titles</title>
</head>
<body>
    <h1>Blog Post Titles </h1>

    <ol>
    <?php
        foreach ($result as $row) {
          echo "<li>"  .
                " <a href='blogpost.php?id=" . $row['id'] . "'>" .$row['title']."</a>"."<br></br>";

        }
        ?>
    </ol>


</body>
</html>
