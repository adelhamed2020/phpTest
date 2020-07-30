<?php
include './database/database_configuration.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script>
            function GetPassword() {
                var username = document.getElementById("username").value;
                if (username != "") {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (xhttp.readyState == 4 && xhttp.status == 200) {
                            var password = xhttp.responseText;
                            if (password != "") {
                                document.getElementById("password").value = password;
                            } else {
                                alert("Username not found");
                            }
                        }
                    };
                    xhttp.open("POST", "./AJAX_GetPasswordByUsername.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("username=" + username);
                } else {
                    alert("Please Enter Username");
                }

            }
        </script>
    </head>
    <body>
        <div class="row">
            <div class="col-sm-12">
                <center>
                    <h2 style="margin-top: 50px"> Get Password By Username</h2>
                    <div class="taple-content-form">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input autocomplete="off" required="" class="form-control" id="username"  type="text"  placeholder="Enter Username" >
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                 <input autocomplete="off" readonly="" class="form-control" id="password"   type="text"  placeholder="Password" >
                            </div>
                            <button  style="width: 100%" class="btn btn-primary " onclick="GetPassword()">Get Password</button>

                        </div>

                    </div>
                </center>

            </div>
        </div>

    </body>
</html>



