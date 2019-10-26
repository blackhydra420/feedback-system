<?php session_start(); ?>
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
            <div class="container main-body shadow-lg select-form" style="margin:23vh auto; border-radius: 6px;">
                
                <form method="POST" action="include/admin_login_inc.php" class="w-75" style="margin: 0 auto;">
                    <h1 class="text-center mb-5 font-weight-bold"> Admin login </h1>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <div class="text-center">
                        <button type="submit" name="login" class="btn btn-dark px-5 rounded-pill">Submit</button>
                    </div>
                </form>
                
            </div>

    <?php
        // include_once 'include/footer.php';
    ?>
</body>
</html>