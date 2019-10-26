<?php
session_start();

if(isset($_POST["login"])){
    $uid = $_POST["username"];
    $upass = $_POST["password"];

    include_once "dbc_connection.php";

    $sql = "SELECT * FROM admin_login WHERE username='$uid'";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck == 1) {
        if ($row = mysqli_fetch_assoc($result)) {
            if ($upass == $row["password"]) {
                $_SESSION["a_login"] = $row["username"];
                header("Location: ../selectbranch.php");
                exit();
            } else {
                header("Location: ../admin_login.php?wrongpassword");
                exit();
            }
        }
    } else {
        header("Location: ../admin_login.php?usernamenotexist");
        exit();
    }
} else {
    header("Location: ../admin_login.php");
    exit();
}