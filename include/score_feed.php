<?php
session_start();

if(isset($_POST["score_submit"])){
    //support variable
    $date = date("Y-m-d");
    
    //teacher variables
    $t1 = $_POST["t1"];
    $t2 = $_POST["t2"];
    $t3 = $_POST["t3"];
    $t4 = $_POST["t4"];
    $t5 = $_POST["t5"];

    //subject variables
    $s1 = $_POST["s1"];
    $s2 = $_POST["s2"];
    $s3 = $_POST["s3"];
    $s4 = $_POST["s4"];
    $s5 = $_POST["s5"];

    //sk variables
    $sk1 = $_POST["sk1"];
    $sk2 = $_POST["sk2"];
    $sk3 = $_POST["sk3"];
    $sk4 = $_POST["sk4"];
    $sk5 = $_POST["sk5"];

    //cie variables
    $cie1 = $_POST["cie1"];
    $cie2 = $_POST["cie2"];
    $cie3 = $_POST["cie3"];
    $cie4 = $_POST["cie4"];
    $cie5 = $_POST["cie5"];

    //csvq variables
    $csvq1 = $_POST["csvq1"];
    $csvq2 = $_POST["csvq2"];
    $csvq3 = $_POST["csvq3"];
    $csvq4 = $_POST["csvq4"];
    $csvq5 = $_POST["csvq5"];

    //sasq variables
    $sasq1 = $_POST["sasq1"];
    $sasq2 = $_POST["sasq2"];
    $sasq3 = $_POST["sasq3"];
    $sasq4 = $_POST["sasq4"];
    $sasq5 = $_POST["sasq5"];

    //qnds variables
    $qnds1 = $_POST["qnds1"];
    $qnds2 = $_POST["qnds2"];
    $qnds3 = $_POST["qnds3"];
    $qnds4 = $_POST["qnds4"];
    $qnds5 = $_POST["qnds5"];

    //iqdg variables
    $iqdg1 = $_POST["iqdg1"];
    $iqdg2 = $_POST["iqdg2"];
    $iqdg3 = $_POST["iqdg3"];
    $iqdg4 = $_POST["iqdg4"];
    $iqdg5 = $_POST["iqdg5"];

    //ptc variables
    $ptc1 = $_POST["ptc1"];
    $ptc2 = $_POST["ptc2"];
    $ptc3 = $_POST["ptc2"];
    $ptc4 = $_POST["ptc4"];
    $ptc5 = $_POST["ptc5"];

    //pl variables
    $pl1 = $_POST["pl1"];
    $pl2 = $_POST["pl2"];
    $pl3 = $_POST["pl3"];
    $pl4 = $_POST["pl4"];
    $pl5 = $_POST["pl5"];

    //negl variables
    $negl1 = $_POST["negl1"];
    $negl2 = $_POST["negl2"];
    $negl3 = $_POST["negl3"];
    $negl4 = $_POST["negl4"];
    $negl5 = $_POST["negl5"];

    //including database connection variable
    include "dbc_connection.php";

    //first query
    $sql = "INSERT INTO score (branch, sem, tname, sname, subject_knowledge, clarity_in_explanation, comm_skill, satis_fact_ans, quality_notes, imp_question, punc_class, punc_lab, need_explain, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sissiiiiiiiiis", $_SESSION["branch"], $_SESSION["sem"], $t1, $s1, $sk1, $cie1, $csvq1, $sasq1, $qnds1, $iqdg1, $ptc1, $pl1, $negl1, $date);
    mysqli_stmt_execute($stmt);

    //second query
    $sql = "INSERT INTO score (branch, sem, tname, sname, subject_knowledge, clarity_in_explanation, comm_skill, satis_fact_ans, quality_notes, imp_question, punc_class, punc_lab, need_explain, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sissiiiiiiiiis", $_SESSION["branch"], $_SESSION["sem"], $t2, $s2, $sk2, $cie2, $csvq2, $sasq2, $qnds2, $iqdg2, $ptc2, $pl2, $negl2, $date);
    mysqli_stmt_execute($stmt);

    //third query
    $sql = "INSERT INTO score (branch, sem, tname, sname, subject_knowledge, clarity_in_explanation, comm_skill, satis_fact_ans, quality_notes, imp_question, punc_class, punc_lab, need_explain, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sissiiiiiiiiis", $_SESSION["branch"], $_SESSION["sem"], $t3, $s3, $sk3, $cie3, $csvq3, $sasq3, $qnds3, $iqdg3, $ptc3, $pl3, $negl3, $date);
    mysqli_stmt_execute($stmt);

    //fourth query
    $sql = "INSERT INTO score (branch, sem, tname, sname, subject_knowledge, clarity_in_explanation, comm_skill, satis_fact_ans, quality_notes, imp_question, punc_class, punc_lab, need_explain, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sissiiiiiiiiis", $_SESSION["branch"], $_SESSION["sem"], $t4, $s4, $sk4, $cie4, $csvq4, $sasq4, $qnds4, $iqdg4, $ptc4, $pl4, $negl4, $date);
    mysqli_stmt_execute($stmt);

    //fifth query
    $sql = "INSERT INTO score (branch, sem, tname, sname, subject_knowledge, clarity_in_explanation, comm_skill, satis_fact_ans, quality_notes, imp_question, punc_class, punc_lab, need_explain, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sissiiiiiiiiis", $_SESSION["branch"], $_SESSION["sem"], $t5, $s5, $sk5, $cie5, $csvq5, $sasq5, $qnds5, $iqdg5, $ptc5, $pl5, $negl5, $date);
    mysqli_stmt_execute($stmt);

    header("Location: ../submitted.php?successfull");
} else {
    header("Location: ../index.php?failed");
    exit();
}