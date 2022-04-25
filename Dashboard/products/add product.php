<?php

session_start();

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

    <title>Add product</title>

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
                        Add products
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
                        <a href="view product.php">
                            <i class="pe-7s-note2"></i>
                            <p>View product</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="add product.php">
                            <i class="pe-7s-plus"></i>
                            <p>Add product</p>
                        </a>
                    </li>
                    <li>
                        <a href="update product.php">
                            <i class="pe-7s-refresh"></i>
                            <p>Update product</p>
                        </a>
                    </li>
                    <li>
                        <a href="delete product.php">
                            <i class="pe-7s-trash"></i>
                            <p>Delete product</p>
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
                                    <h4 class="title">Add product</h4>
                                </div>
                                <div class="content">
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>product ID</label>
                                                    <input name="id" type="text" class="form-control"
                                                        placeholder="enter id" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">product Name</label>
                                                    <input name="name" type="text" class="form-control"
                                                        placeholder="enter name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">product Type</label>
                                                    <input name="type" type="text" class="form-control"
                                                        placeholder="enter type">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">product price</label>
                                                    <input name="price" type="text" class="form-control"
                                                        placeholder="enter price">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">product discount</label>
                                                    <input name="discount" type="text" class="form-control"
                                                        placeholder="enter discount">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">product image</label>
                                                    <input name="image" type="text" class="form-control"
                                                        placeholder="enter image">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">category id</label>
                                                    <input name="category_id" type="text" class="form-control"
                                                        placeholder="enter category id">
                                                </div>
                                            </div>

                                        </div>

                                        <button name="submit" type="submit" class="btn btn-info btn-fill pull-right">Add
                                            product</button>
                                        <div class="clearfix"></div>
                                    </form>
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

<script src="../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/chartist.min.js"></script>
<script src="../assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<script src="../assets/js/demo.js"></script>


</html>

<?php

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $image = $_POST['image'];
    $category_id = $_POST['category_id'];


    $serverName = "127.0.0.1";
    $userName = "root";
    $password = "";
    $databaseName = "online_shop";

    $conn = mysqli_connect($serverName, $userName, $password, $databaseName);

    $select_all_id = "SELECT id FROM products";

    $result = mysqli_query($conn, $select_all_id);
    $isFound = 0;

    while ($row = mysqli_fetch_array($result)) {
        if ($row['id'] == $id) {
            $isFound++;
        }
    }

    if ($isFound > 0) {
        echo "<script type='text/javascript'>
                    alert('The ID entered already exists ...');
                </script>";
    } else {
        $sql_insert = "INSERT INTO products (id,name,type,price,discount,image,categoryId) VALUES ($id,'$name','$type',$price,$discount,'$image',$category_id)";

        if (mysqli_query($conn, $sql_insert)) {
            echo "<script type='text/javascript'>
                            alert('Add product Is Done...');
                        </script>";
        } else {
            echo "<script type='text/javascript'>
                            alert('Add product Is Fail...');
                        </script>";
        }
    }
}




?>