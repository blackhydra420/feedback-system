<?php
session_start();

if(isset($_POST["branch_submit"])){

    $_SESSION["branch"] = $_POST["branch"];
    $_SESSION["sem"] = $_POST["sem"];

    header("Location: ../feedback.php");
    exit();
} else {
    header("Location: ../index.php");
    exit();
}