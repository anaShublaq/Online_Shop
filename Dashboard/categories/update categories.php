<?php

session_start();

$serverName = "127.0.0.1";
$userName = "root";
$password = "";
$databaseName = "online_shop";

$conn = mysqli_connect($serverName, $userName, $password, $databaseName);

if (!isset($_SESSION['login'])) {
    if ((!isset($_COOKIE['User_Name']) && !isset($_COOKIE['Password']))) {
        header('location: ../login.php');
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Update Categories</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/animate.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <style>
    p span {
        color: green;
        font-size: 20px;
        font-weight: 700;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .navbar-right li .search {
        margin-top: 8%;
        margin-left: -12%;
        border-radius: 20px;
        border: 1px solid green;
        padding: 3%;
        color: gray;
        font-size: 15px;
        width: 90%;
    }

    .submit-search {
        background: none;
        border: 0;
        display: inline-block;
        font-size: 20px;
    }
    </style>

</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-4.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <span class="simple-text">
                        Update Categories
                    </span>
                </div>

                <ul class="nav">
                    <li>
                        <a href="../user.php">
                            <i class="pe-7s-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="view categories.php">
                            <i class="pe-7s-note2"></i>
                            <p>View Categories</p>
                        </a>
                    </li>
                    <li>
                        <a href="add categories.php">
                            <i class="pe-7s-plus"></i>
                            <p>Add Categories</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="update categories.php">
                            <i class="pe-7s-refresh"></i>
                            <p>Update Categories</p>
                        </a>
                    </li>
                    <li>
                        <a href="delete categories.php">
                            <i class="pe-7s-trash"></i>
                            <p>Delete Categories</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="../logout.php">
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
                        <a class="navbar-brand" href="../user.php">User Account</a>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Update category</h4>
                                </div>
                                <div class="content">
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>category ID</label>
                                                    <input name="cate_id" type="text" class="form-control"
                                                        placeholder="id of category" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <button name="search_submit" type="submit"
                                            class="btn btn-info btn-fill pull-right">Search</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php

                        $foundId;


                        if (isset($_POST['search_submit'])) {

                            $id = $_POST['cate_id'];

                            $select_all_id = "SELECT cId FROM category";

                            $result = mysqli_query($conn, $select_all_id);
                            $isFound = 0;

                            while ($row = mysqli_fetch_array($result)) {
                                if ($row['cId'] == $id) {
                                    $sql_insert = "INSERT INTO saveid(saveId) VALUES ('$id')";
                                    mysqli_query($conn, $sql_insert);
                                    $isFound++;
                                }
                            }
                            if ($isFound > 0) {

                                echo "<div class='col-md-8 update'>
                                            <div class='card'>
                                                <div class='header'>
                                                    <h4 class='title'>Update Information</h4>
                                                </div>
                                            <div class='content'>
                                            <form action='" . $_SERVER['PHP_SELF'] . "' method='POST'>
                                                    <div class='row'>
                                                        <div class='col-md-3'>
                                                            <div class='form-group'>
                                                                <label>new category ID</label>
                                                                <input name='category_ID' type='text' class='form-control' placeholder='Here is new id' value='' >
                                                            </div>
                                                        </div>
                                                        <div class='col-md-4'>
                                                            <div class='form-group'>
                                                                <label for='exampleInputEmail1'>new category Name</label>
                                                                <input name='category_Name' type='text' class='form-control' value='' placeholder='Here is new name' >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-12'>
                                                            <div class='form-group'>
                                                                <label>new category Description</label>
                                                                <textarea name='category_Description' rows='5' class='form-control' placeholder='Here is new description..' value='' ></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                    <button name='Update_category' type='submit' class='btn btn-info btn-fill pull-right'>Update category</button>
                                                    <div class='clearfix'></div>
                                                </form>
                                            </div>  
                                        </div>
                                    </div>";
                            } else {
                                echo "<script type='text/javascript'>
                                                alert('ID is not found...');
                                            </script>";
                            }
                        }
                        if (isset($_POST['Update_category'])) {

                            $newId = $_POST['category_ID'];

                            $select_all_id = "SELECT cId FROM category";

                            $result = mysqli_query($conn, $select_all_id);
                            $isFound = 0;

                            while ($row = mysqli_fetch_array($result)) {
                                if ($row['cId'] == $newId) {
                                    $isFound++;
                                }
                            }


                            if ($isFound == 0) {
                                $select_id = "SELECT * FROM saveid";
                                $result_select_id = mysqli_query($conn, $select_id);
                                $row_select_id = mysqli_fetch_array($result_select_id);

                                $newName = $_POST['category_Name'];
                                $newDescription = $_POST['category_Description'];

                                $update_category = "UPDATE category SET cId='$newId', cName='$newName', cDescription='$newDescription' WHERE cId=" . $row_select_id['saveId'];

                                $result = mysqli_query($conn, $update_category);

                                if ($result) {
                                    echo "<script type='text/javascript'>
                                                    alert('The Category has been updated...');
                                                </script>";
                                    $delete_id = "DELETE saveId From saveid";
                                    mysqli_query($conn, $delete_id);
                                }
                            } else {
                                echo "<script type='text/javascript'>
                                                alert('The ID entered already exists...');
                                            </script>";
                            }
                        }

                        ?>

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

<script src="../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/chartist.min.js"></script>
<script src="../assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<script src="../assets/js/demo.js"></script>


</html>