<?php 
    session_start();
    if(!isset($_SESSION["u_login"])){
        header("Location: index.php");
        exit();
    } else {
        session_unset();
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cdf493be5b.js"></script>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <?php
        // include_once 'include/navbar.php';
    ?>
    <div class="container" style="margin-top:34vh;">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-4">Feedback complete</h1>
                <p class="lead">Your score is submitted please close the browser or close this tab.</p>
            </div>
        </div>
    </div>

    <?php
        // include_once 'include/footer.php';
    ?>
</body>
</html>