<?php

session_start();

$serverName = "127.0.0.1";
$userName = "root";
$password = "";
$databaseName = "online_shop";

$conn = mysqli_connect($serverName, $userName, $password, $databaseName);

$delete_id = "DELETE saveId From saveid";
mysqli_query($conn, $delete_id);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Page</title>
    <style>
    body {
        background-color: #00b309;
        overflow: hidden;
    }

    h1 {
        font-family: sans-serif;
        color: white;
        font-size: 40px;
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 20%;
    }

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

    a {
        text-decoration: none;
        position: relative;
        outline: none;
        height: 30px;
        font-size: 18px;
        width: 10%;
        margin: 0 45%;
        background-color: white;
        border: 0;
        padding: 1%;
        border-radius: 20px;
        cursor: pointer;
        color: green;
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

    <div id="reload" hidden>

        <h1>Logout Is Done ... </h1>
        <a id="goLogin" href="login.php">Go to login</a>

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
        }, 2500);
    }
}
</script>

</html>

<?php


session_unset();
session_destroy();


?>