<?php
    session_start();
    include('config.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        
        if (empty($name)) {
            array_push($errors, "Username is required");
        }
        if (empty($pass)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $pass = md5($pass);
            $query = "SELECT * FROM user WHERE name = '$name' AND pass = '$pass' ";
            $result = mysqli_query($conn, $query);
            
            if (mysqli_num_rows($result) == 1) {
                $_SESSION['name'] = $name;
                $_SESSION['success'] = "Your are now logged in";
                header("location: index.php");
            } else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }
    
?>