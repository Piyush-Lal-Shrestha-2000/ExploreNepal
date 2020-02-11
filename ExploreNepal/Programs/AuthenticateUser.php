<?php
    session_start();
    include "ExplorePalDatabaseConnection.php";
    $_SESSION['LoggedIn'] = false;
    $_SESSION['IsAdmin'] = false;
    $_SESSION['user'] = "";
    $_SESSION['user_post'] = "";
    if(isset($_POST['loginSubmit'])){
        echo "HERE";
        $em = $_POST['LoginEmail'];
        $pw = $_POST['LoginPassword'];
        $sql = "SELECT * FROM users WHERE user_email = '$em'";   
        $res = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_array($res))
        {
            if(password_verify($pw, $row['user_password'])){
                $_SESSION['user'] = $row['user_full_name'];
                $_SESSION['LoggedIn'] = true;
                $_SESSION['user_post'] = $row['user_post'];
                if($row['user_post'] == 'Admin')
                    $_SESSION['IsAdmin'] = true;
            }
        }
    }   
    @$logout = $_GET['logout'];
    if($logout == 'yes' ){
        session_destroy();
    }
    header("Location: ../Programs/HomePage.php");
?>
