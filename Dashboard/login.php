<?php

session_start();

$serverName = "127.0.0.1";
$userName = "root";
$password = "";
$databaseName = "online_shop";

$conn = mysqli_connect($serverName, $userName, $password, $databaseName);

if (isset($_COOKIE['User_Name'])) {
    header('location: user.php');
}

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['user-name']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));

    $sql = "SELECT * FROM users WHERE userName = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);

    if ($count > 0) {

        if (isset($_POST['remember_me'])) {

            $cookie_user_name = "User_Name";
            $cookie_password_name = "Password";

            setcookie($cookie_user_name, $row['userName'], time() + 3600);
            setcookie($cookie_password_name, $row['password'], time() + 3600);
        } else {
            setcookie('User_Name', "", time() - 3600);
            setcookie('Password', "", time() - 3600);
            $_SESSION['login'] = "true";
        }

        header('location: user.php');
    } else {
        echo "<script type='text/javascript'>
                    alert('Error in username or password');
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/login.js"></script>
    <title>Online Shop - login</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />

    <style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: rgb(231, 231, 231);
        overflow: hidden;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10%;
        margin-top: -30px;
    }

    .form {
        background-color: white;
        overflow: hidden;
        border-radius: 10px;
        width: 40%;
    }

    .form .content {
        padding: 8%;
    }

    .form .content input:not(:last-of-type),
    .password {
        width: 100%;
        padding: 3%;
        margin-bottom: 5%;
        border-radius: 10px;
        border: 1px solid rgb(180, 180, 180);
        font-size: 17px;
        outline: none;
    }

    .password-input {
        width: 100%;
        border-radius: 10px;
        border: 0;
        font-size: 17px;
        outline: none;
    }

    .checkbox {
        display: inline-block;
    }

    .form .content input:focus {
        border: 1px solid rgb(0, 190, 0);
        box-shadow: 2px 2px 10px rgb(224, 224, 224);
    }

    .submit {
        width: 100%;
        padding: 3%;
        margin-bottom: 5%;
        margin-top: 2%;
        border-radius: 10px;
        border: 1px solid rgb(180, 180, 180);
        font-size: 20px;
        background-color: rgb(2, 197, 2);
        color: white;
        cursor: pointer;
        outline: none;
    }

    .titels {
        margin-right: 20%;
        margin-bottom: 5%;
        font-family: sans-serif;
    }

    .titels h1 {
        font-size: 60px;
        color: black;
    }

    .titels h1 span {
        color: rgb(10, 204, 20);
    }

    .titels p {
        font-size: 30px;
        margin-top: 3%;
    }

    footer {
        position: static;
        background: linear-gradient(90deg, #ff1f06, #1f1a66, #1f1f66, #0d0d5e, #01015e);
        padding: 2.1%;
        width: 100%;
        font-family: sans-serif;
        overflow: hidden;
        margin-top: 4%;
    }

    footer .copy-right {
        color: white;
        text-align: center;
        float: left;
        justify-content: center;
    }

    footer .copy-right span {
        color: rgb(0, 194, 0);
        font-family: cursive;
        font-size: 20px;
    }

    .circle {
        position: absolute;
        background-color: rgb(8, 243, 0);
        border-radius: 50%;
    }

    .c-1 {
        padding: 2.5%;
        bottom: 22px;
        right: 50px;
    }

    .c-2 {
        padding: 2%;
        bottom: 5px;
        right: 180px;
    }

    .c-3 {
        padding: 1%;
        bottom: 5px;
        right: 130px;
    }

    .c-4 {
        padding: .5%;
        bottom: 10px;
        right: 370px;
    }

    .c-5 {
        padding: 1.2%;
        bottom: 40px;
        right: 240px;
    }

    .c-6 {
        padding: .8%;
        bottom: 20px;
        right: 275px;
    }

    .c-7 {
        padding: 2.5%;
        bottom: 15px;
        right: 300px;
    }
    </style>

</head>

<body>

    <div class="container">

        <section class="titels">
            <h1><span>Online</span> Shop</h1>
            <p>Show Your Personal Style</p>
        </section>

        <section class="form">
            <div class="content">
                <form action="login.php" method="POST">
                    <input type="text" name="user-name" id="" placeholder="User-name" value=""><br>
                    <input class="password-input" type="password" name="password" id="" placeholder="Password"><br>
                    <label>Remember me
                        <input class="checkbox" type="checkbox" name="remember_me">
                    </label><br>
                    <input class="submit" type="submit" name="login" value="login"><br>
                </form>
            </div>
        </section>

    </div>

    <footer>
        <section>
            <div class="copy-right">
                Copyright &copy;<script>
                document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made by <i class="fa fa-heart-o"
                    aria-hidden="true"></i><span> Anas Shublaq</span> </p>
            </div>
            <div class="circles">
                <div class="circle c-1"></div>
                <div class="circle c-2"></div>
                <div class="circle c-3"></div>
                <div class="circle c-4"></div>
                <div class="circle c-5"></div>
                <div class="circle c-6"></div>
                <div class="circle c-7"></div>
            </div>
        </section>
    </footer>


</body>

<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/chartist.min.js"></script>
<script src="assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<script src="assets/js/demo.js"></script>

</html>