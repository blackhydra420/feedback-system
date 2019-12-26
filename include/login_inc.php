<?php
session_start();

if(isset($_POST["login"])){
    $uid = strtoupper($_POST["username"]);
    $upass = $_POST["password"];

    include_once "dbc_connection.php";

    $sql = "SELECT * FROM student_data WHERE roll_no='$uid'";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck == 1) {
        if ($row = mysqli_fetch_assoc($result)) {
            if ($upass == $row["password"]) {
                $_SESSION["u_login"] = $row["roll_no"];
                $_SESSION["branch"] = $row["branch"];
                $_SESSION["sem"] = $row["sem"];
                header("Location: ../feedback.php");
                exit();
            } else {
                header("Location: ../index.php?wrongpassword");
                exit();
            }
        }
    } else {
        header("Location: ../index.php?usernamenotexist");
        exit();
    }
} else {
    header("Location: ../index.php");
    exit();
}