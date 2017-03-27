<?php
$doc_title = "O2J";
$doc_version = "1";
/*

 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $doc_title; ?></title>

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    </head>
    <body class="bg-primary" style="overflow-x: hidden;">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <img class="logo-img" src="http://placehold.it/200x64" alt="Logo">

                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">MS Office</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">PDF</a>
                                </li>
                                <li class="nav-item pull-right">
                                    <a class="nav-link disabled" href="#">PDF</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <form >
                                <div class="form-group">
                                    <a href="#" onclick="$('#file-label').click()"><img src="img/cloud-hash.svg" style="height:80px;"></a>
                                </div>
                                <div class="form-group">
                                    <label id="file-label" class="custom-file">
                                        <input type="file" id="file" class="custom-file-input" accept=".pdf, .doc, .docx ,application/msword, .xls, .xlsx, application/vnd.ms-excel, .ppt , .pptx, application/vnd.ms-powerpoint">
                                        <span class="custom-file-control"></span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
                            </form>
                        </div>
                    </div>

                    <p class="text-center">
                        Copyright ©
                        <span id="year" class="mr5"> 2017</span>
                        <span>Selly LLC</span>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>