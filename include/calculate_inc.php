<?php
if(isset($_POST["search"])){

    $branch = $_POST["branch"];
    $sem = $_POST["sem"];
    $date = $_POST["date"];

    include_once "dbc_connection.php";

    $sql = 'SELECT tname,sname,AVG(subject_knowledge),AVG(clarity_in_explanation),AVG(comm_skill),AVG(satis_fact_ans),AVG(quality_notes),AVG(imp_question),AVG(punc_class),AVG(punc_lab),AVG(need_explain) FROM score WHERE branch="'.$branch.'" AND sem="'.$sem.'" GROUP BY tname';
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
    }

} else {
    header("Location: ../feedback_data.php");
    exit();
}

?>