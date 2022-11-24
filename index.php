<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/boostarp_min.js"></script>
    <!-- Jqery -->
    <script src="js/jquery_min.js"></script>
    <script src="js/app.js"></script>
</head>


<?php
include_once "conn.php";
include_once "code.php";
?>

<body>



    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <!-- Sign up form -->
                <div class="signup-content ">
                    <div class="signup-form">
                        <h2 class="form-title text-align">Sign up</h2>
                        <form action="index.php" method="post" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                                <p id="g">
                                <p>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>

                            <div class="form-group form-button">
                                <div class="d-grid">
                                    <a href="#" onclick="submit()" class="btn btn-primary p-2">Register</a>
                                    <a href="#" onclick="login()" class="btn btn-success p-2">Login</a>
                                    <a href="#" onclick="update()" class="btn btn-secondary p-2">Update</a>
                                    <a href="#" onclick="delete_()" class="btn btn-danger p-2">Delete</a>

                                    <input type="submit" name="submit" id="signup" class="btn btn-primary p-2"
                                        value="Register" />
                                    <input type="submit" name="login" id="signin" class="btn btn-success p-2"
                                        value="login" />
                                    <input type="submit" name="update" id="update" class="btn btn-secondary p-2"
                                        value="Update" />
                                    <input type="submit" name="delete" id="delete" class="btn btn-danger p-2"
                                        value="Delete" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <?php
                include_once "get-data.php";
                ?>
            </div>

        </div>
    </div>




</body>

</html>