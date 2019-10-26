<?php 
    // session_start();
    // if(!isset($_SESSION["a_login"])){
    //     header("Location: admin_login.php");
    //     exit();
    // }
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
    <div class="search_bar">
        <form class="form-inline">
            <div class="form-group mb-2">
                <label for="staticEmail2" class="sr-only">Email</label>
                <select name="branch" id="branch" class="form-control width_box">
                        <option value="CSE">CSE</option>
                        <option value="ME">ME</option>
                        <option value="EE">EE</option>
                        <option value="CE">CE</option>
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Password</label>
                <select name="sem" id="sem" class="form-control width_box">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Password</label>
                <input type="date" name="date" id="date" class="form-control width_box" style="width:180px !important;">
            </div>
            <button type="submit" name="search" class="btn btn-primary mb-2">Search</button>
        </form>
    </div>

    <div style="margin-top:20px;">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Teacher name</th>
                <th scope="col">Subject name</th>
                <th scope="col">Subject knowledge</th>
                <th scope="col">Clarity in explaination</th>
                <th scope="col">Comminication skill & voice quality</th>
                <th scope="col">Satisfactory answers to students querries given or  not</th>
                <th scope="col">Quality of notes, dictations and solutions to numericals/question</th>
                <th scope="col">Important question discused and guidance given</th>
                <th scope="col">Punctuality in the theory class</th>
                <th scope="col">Punctuality and Lab / Practicals (if applicable)</th>
                <th scope="col">Needful explaination given in the lab or not</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>