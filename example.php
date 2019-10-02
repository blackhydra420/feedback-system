<?php
include_once "include/dbc_connection.php";

$tablename = "cse6";
$fname = "Prince";
$lname = "kushwaha";

$sql = "INSERT INTO cse6 (first, last) VALUES(?, ?)";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "ss", $fname, $lname);
mysqli_stmt_execute($stmt);