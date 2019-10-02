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
        include_once 'include/navbar.php';
    ?>
            <div class="container main-body shadow-lg select-form">
                
                    <form>
                        <div class="form-group">
                            <label for="branch">Branch</label>
                            <select name="branch" id="branch" class="form-control">
                                <option value="CSE">CSE</option>
                                <option value="ME">ME</option>
                                <option value="EE">EE</option>
                                <option value="CE">CE</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sem">Sem</label>
                            <select name="sem" id="sem" class="form-control">
                                <option value="I">1</option>
                                <option value="II">2</option>
                                <option value="III">3</option>
                                <option value="IV">4</option>
                                <option value="V">5</option>
                                <option value="VI">6</option>
                                <option value="VII">7</option>
                                <option value="VIII">8</option>
                            </select>
                            
                        </div>
                        <button type="submit" class="btn btn-primary form-control">Submit</button>
                    </form>
                
            </div>

    <?php
        include_once 'include/footer.php';
    ?>
</body>
</html>