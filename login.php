<?php

    require("includes/config.php");


?>

<html>

    <head>
    
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="assets/css/login.css">
        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
            crossorigin="anonymous"></script>
    </head>

    <body>

        <script>
            $(document).ready(function () {
                $('#login-proceed-Container').show();
                $('#login-Container').hide();
                $('#register-Container').hide();
            });

            function showLoginForm(){
                $('#login-proceed-Container').hide();
                $('#login-Container').show();
                $('#register-Container').hide();
            }

            function showRegisterForm(){
                $('#login-proceed-Container').hide();
                $('#login-Container').hide();
                $('#register-Container').show();
            }

        </script>


        <div id="bodyContainer">

            <video autoplay muted loop id="backdrop">
                <source src="assets/images/Forest_15_2_Videvo.mov" type="video/mp4">
            </video>
        
            <div id="login-proceed-Container">

                <form action="login.php" method="post" id="guest-login-form">
                    <button type="submit" name="guest" class="loginbutton">Proceed as Guest</button>
                    <br/>
                    <button type="button" name="loginForm" class="loginbutton" onclick="showLoginForm();">Login</button>
                </form>

            </div>

            <div id="login-Container">

                <form action="login.php" method="post" id="login-form">
                    <p>
                        <label>Username</label>
                        <br/>
                        <input type="text" name="firstName" class="loginfield">
                    </p>
                    <p>
                        <label>Password</label>
                        <br/>
                        <input type="password" name="firstName" class="loginfield">
                    </p>
                    <p>
                        <button type="submit" name="login" class="loginbutton">Login</button>
                        <br/>
                        <button type="button" name="registerForm" class="form-footer-text" onclick="showRegisterForm();">Need an Account? Register Here!</button>
                    </p>
                </form>

            </div>

            <div id="register-Container">

                <form action="login.php" method="post" id="login-form">
                    <p>
                        <label>Username</label>
                        <br/>
                        <input type="text" name="firstName" class="loginfield">
                    </p>
                    <p>
                        <label>First Name</label>
                        <br/>
                        <input type="text" name="firstName" class="loginfield">
                    </p>
                    <p>
                        <label>Last Name</label>
                        <br/>
                        <input type="text" name="firstName" class="loginfield">
                    </p>
                    <p>
                        <label>Email</label>
                        <br/>
                        <input type="email" name="firstName" class="loginfield">
                    </p>
                    <p>
                        <label>Password</label>
                        <br/>
                        <input type="password" name="firstName" class="loginfield">
                    </p>
                    <p>
                        <button type="submit" name="login" class="loginbutton">Register</button>
                        <br/>
                        <button type="button" name="loginForm" class="form-footer-text" onclick="showLoginForm();">Already have an Account? Login Here!</button>
                    </p>
                </form>

            </div>

        </div>



    </body>


</html>


