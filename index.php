<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/cdf493be5b.js"></script>
    <link rel="stylesheet" href="assets/css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
</head>

<style>
    body {
        font-family: 'Open Sans', 
                     'Lucida Sans', 
                     'Lucida Sans Regular', 
                     'Lucida Grande', 
                     'Lucida Sans Unicode', 
                      Geneva, 
                      Verdana, 
                      sans-serif !important;
    }

    .login-bg {
        height: 100vh;
        background-color: #1fc8db;
        background-image: url('assets/images/john.jpg');
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
</style>

<body>
    <?php
    //    include_once 'include/navbar.php';
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 login-bg">
                
            </div>
            <div class="col-md-6">
                <form method="POST" action="include/login_inc.php" class="w-75" style="margin-top: 20%!important; margin: auto auto;">
                    <h1 class="text-center mb-5 font-weight-bold"> Feedback login </h1>
                    <div class="form-group">
                        <label for="username">Enrollment Number</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="0302XXXXX001">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="**********">
                    </div>
                    <div class="text-center">
                        <button type="submit" name="login" class="btn btn-dark px-5 rounded-pill">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    // include_once 'include/footer.php';
    ?>
</body>

</html>