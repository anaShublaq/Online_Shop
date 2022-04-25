<?php

session_start();

$serverName = "127.0.0.1";
$userName = "root";
$password = "";
$databaseName = "online_shop";

$conn = mysqli_connect($serverName, $userName, $password, $databaseName);


if (!isset($_SESSION['login'])) {
    if ((!isset($_COOKIE['User_Name']) && !isset($_COOKIE['Password']))) {
        header('location: login.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin Account</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <style>
    .start {
        background: linear-gradient(rgb(255, 255, 255), rgb(218, 210, 210), rgb(219, 217, 253));
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }

    .install ul {
        list-style: none;
    }

    .install .point-1,
    .install .point-2,
    .install .point-3,
    .install .point-4,
    .install .point-5 {
        position: absolute;
        top: 50%;
        background: linear-gradient(90deg, rgb(151, 18, 185), rgb(77, 33, 199), rgb(28, 66, 189));
        width: 4%;
        height: 8%;
        border-radius: 100%;
    }

    .install .point-1 {
        left: 40%;
        transform: translate(-38%, -50%);
        animation: install 1.2s .1s infinite;
    }

    .install .point-2 {
        left: 45%;
        transform: translate(-44%, -50%);
        animation: install 1.2s .2s infinite;
    }

    .install .point-3 {
        left: 50%;
        transform: translate(-50%, -50%);
        animation: install 1.2s .3s infinite;
    }

    .install .point-4 {
        left: 55%;
        transform: translate(-56%, -50%);
        animation: install 1.2s .4s infinite;
    }

    .install .point-5 {
        left: 60%;
        transform: translate(-62%, -50%);
        animation: install 1.2s .5s infinite;
    }

    @keyframes install {
        from {
            width: 0;
            height: 0;
            opacity: .1;
        }

        to {
            width: 4%;
            height: 8%;
            opacity: 1;
        }
    }

    p span {
        color: green;
        font-size: 20px;
        font-weight: 700;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    </style>

</head>

<body onload="reload()">

    <div id="start" class="start">
        <div class="install">
            <ul>
                <li class="point-1"></li>
                <li class="point-2"></li>
                <li class="point-3"></li>
                <li class="point-4"></li>
                <li class="point-5"></li>
            </ul>
        </div>
    </div>

    <div id="reload" class="wrapper" hidden>
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-4.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <span class="simple-text">
                        Anas Shublaq
                    </span>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="user.php">
                            <i class="pe-7s-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="categories/view categories.php">
                            <i class="pe-7s-note2"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li>
                        <a href="products/view product.php">
                            <i class="pe-7s-news-paper"></i>
                            <p>Products</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="logout.php">
                            <i class="pe-7s-door-lock"></i>
                            <p>Log out</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="user.php">User Account</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">

                        </ul>
                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="image">
                                    <img src="assets/img/sidebar-4.jpg" alt="..." />
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <img class="avatar border-gray" src="assets/img/faces/face-0.jpg" alt="..." />

                                        <h4 class="title">Anas Shublaq<br />
                                            <small>Web Developer</small>
                                        </h4>
                                    </div>
                                    <p class="description text-center"> "This is my control panel, Iam can add products
                                        or delete or update for each category"
                                    </p>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <p>Keep In Contact</p>
                                    <button class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                    <button class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                    <button class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <p class="copyright pull-right">
                            Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made by <i class="fa fa-heart-o"
                                aria-hidden="true"></i><span> Anas Shublaq</span> </p>
                        </p>
                    </nav>
                </div>
            </footer>

        </div>
    </div>

</body>

<script>
function reload() {
    var sta = document.getElementById('start');
    var rel = document.getElementById('reload');
    var isHidden = rel.hidden;
    if (isHidden) {
        setTimeout(() => {
            rel.removeAttribute("hidden");
            sta.setAttribute("hidden", true);
        }, 1500);
    }
}
</script>

<script type="text/javascript">
$(document).ready(function() {

    demo.initChartist();

    $.notify({
        icon: 'pe-7s-gift',
        title: 'Wellcome back ^_^ <br>',
        message: "Hi  ( <?php echo $_POST['user-name'] ?> ) <br> Welcome to your<b> Control Panel</b>"

    }, {
        type: 'info',
        timer: 4000,
    });

});
</script>

<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/chartist.min.js"></script>
<script src="assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<script src="assets/js/demo.js"></script>

</html>