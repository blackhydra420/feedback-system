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
    <div class="container main-body shadow-lg feedback-form">
        <form action="selectbranch.php" method="post">
        <div class="row border align-items-center" style="padding:10px 0;">
                <div class="col-4 font-weight-bold">Teacher name</div>
                <div class="col text-center font-weight-bold">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option value="CPG">CPG</option>
                        <option value="PT">PT</option>
                        <option value="PS">PS</option>
                        <option value="DPS">DPS</option>
                        <option value="NS">NS</option>
                        </select>
                    </div>
                </div>
                <div class="col text-center font-weight-bold">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option value="CPG">CPG</option>
                        <option value="PT">PT</option>
                        <option value="PS">PS</option>
                        <option value="DPS">DPS</option>
                        <option value="NS">NS</option>
                        </select>
                    </div>
                </div>
                <div class="col text-center font-weight-bold">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option value="CPG">CPG</option>
                        <option value="PT">PT</option>
                        <option value="PS">PS</option>
                        <option value="DPS">DPS</option>
                        <option value="NS">NS</option>
                        </select>
                    </div>
                </div>
                <div class="col text-center font-weight-bold">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option value="CPG">CPG</option>
                        <option value="PT">PT</option>
                        <option value="PS">PS</option>
                        <option value="DPS">DPS</option>
                        <option value="NS">NS</option>
                        </select>
                    </div>
                </div>
                <div class="col text-center font-weight-bold">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option value="CPG">CPG</option>
                        <option value="PT">PT</option>
                        <option value="PS">PS</option>
                        <option value="DPS">DPS</option>
                        <option value="NS">NS</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row border align-items-center" style="padding:10px 0;">
                <div class="col-4 font-weight-bold">Subject</div>
                <div class="col text-center font-weight-bold">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option value="WE">WE</option>
                        <option value="CD">CD</option>
                        <option value="ES">ES</option>
                        <option value="DS">DS</option>
                        <option value="HCI">HCI</option>
                        </select>
                    </div>
                </div>
                <div class="col text-center font-weight-bold">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option value="WE">WE</option>
                        <option value="CD">CD</option>
                        <option value="ES">ES</option>
                        <option value="DS">DS</option>
                        <option value="HCI">HCI</option>
                        </select>
                    </div>
                </div>
                <div class="col text-center font-weight-bold">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option value="WE">WE</option>
                        <option value="CD">CD</option>
                        <option value="ES">ES</option>
                        <option value="DS">DS</option>
                        <option value="HCI">HCI</option>
                        </select>
                    </div>
                </div>
                <div class="col text-center font-weight-bold">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option value="WE">WE</option>
                        <option value="CD">CD</option>
                        <option value="ES">ES</option>
                        <option value="DS">DS</option>
                        <option value="HCI">HCI</option>
                        </select>
                    </div>
                </div>
                <div class="col text-center font-weight-bold">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option value="WE">WE</option>
                        <option value="CD">CD</option>
                        <option value="ES">ES</option>
                        <option value="DS">DS</option>
                        <option value="HCI">HCI</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row border align-items-center" style="padding:10px 0;">
                <div class="col-4 font-weight-bold">Subject Knowledge</div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
            </div>
            <div class="row border align-items-center" style="padding:10px 0;">
                <div class="col-4 font-weight-bold">Clarity in Explaination</div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
            </div>
            <div class="row border align-items-center" style="padding:10px 0;">
                <div class="col-4 font-weight-bold">Comminication skill & voice quality</div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
            </div>
            <div class="row border align-items-center" style="padding:10px 0;">
                <div class="col-4 font-weight-bold">Satisfactory answers to students querries given or  not</div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
            </div>
            <div class="row border align-items-center" style="padding:10px 0;">
                <div class="col-4 font-weight-bold">Quality of notes, dictations and solutions to numericals/question</div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
            </div>
            <div class="row border align-items-center" style="padding:10px 0;">
                <div class="col-4 font-weight-bold">Important question discused and guidance given</div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
            </div>
            <div class="row border align-items-center" style="padding:10px 0;">
                <div class="col-4 font-weight-bold">Punctuality in the theory class</div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
            </div>
            <div class="row border align-items-center" style="padding:10px 0;">
                <div class="col-4 font-weight-bold">Punctuality and Lab / Practicals (if applicable)</div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
            </div>
            <div class="row border align-items-center" style="padding:10px 0;">
                <div class="col-4 font-weight-bold">Needful explaination given in the lab or not</div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
                <div class="col d-flex justify-content-center"><input type="number" name="marks" min="1" max="10"></div>
            </div>
            <button type="submit" class="btn btn-primary form-control" style="margin-top:30px;">Submit</button>
        </form>
    </div>

    <?php
        include_once 'include/footer.php';
    ?>
</body>
</html>