<?php require_once "config.php"; ?>
<?php require_once "header.php"; ?>
<?php
if(!isset($_SESSION['job_id'])) {
    header("Location: login.php");
    die();
}
?>

<h1>Profile of <?=$_SESSION['username'];?></h1>


<div class ="container">
    <div class="float-right">
<form method="post" action="add_logo.php" enctype="multipart/form-data">
    <input type="file" name="logo">
    <input type="submit" value="Add Logo">
</form>

<form method ="post" action="add_phone.php">
    <textarea name="phone"> </textarea>
    <input type="submit" value="Add Phone">
</form>
        <h2>Add a new job: </h2>
        <form method="post" action="add_job.php">
            <p> Name: </p>
            <textarea name="job"></textarea> <br><br>
            <p> Description:</p>
            <textarea name="description"></textarea> <br> <br>
            <p> Category:</p>
            <textarea name="category"></textarea>
            <input type="submit" value="Add">
        </form>
    </div>

</div>
    <?php
    $result = $conn->query("SELECT * FROM users WHERE id={$_SESSION['job_id']}");
    $row = $result->fetch(PDO::FETCH_ASSOC);

    echo "<div>
         Contact us: {$row['phone']}
     </div>"

    ?>

<?php

echo "<div>
         <img src ='images/{$_SESSION['job_id']}/{$row['logo']}' alt='' width = '200px'/>  <br>
     </div>"

?>

<h2>Jobs</h2>

<?php

$stat = $conn->query("SELECT * FROM jobs WHERE users_id={$_SESSION['job_id']}");

while($ro = $stat->fetch(PDO::FETCH_ASSOC)) {
    echo "<div>
            <p>{$ro['title']}</p>
            <form method='post' action='delete_job.php'>
                <input type='text' name='id' value='{$ro['id']}' hidden>
                <input type='submit' value='Delete'>
            </form>
          </div>";
}

?>

<?php require_once "footer.php"; ?>
