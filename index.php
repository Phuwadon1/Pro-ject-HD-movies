<?php
    session_start();
    include('config.php');
    if (!isset($_SESSION['name'])) {
        header("location: login.php"); // redirect ไปยังหน้า index.php
        exit;
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['name']);
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hello wored</p>
    <?php if (isset($_SESSION['success'])) : ?>
        <div class = "success"> 
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <?php if (isset($_SESSION['name'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['name']; ?></strong></p>
        <p><a href="index.php?logout='1'" style="color: red;">logout</a></p>
    <?php endif ?>
</body>
</html>