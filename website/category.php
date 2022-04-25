<?php

$serverName = "127.0.0.1";
$userName = "root";
$password = "";
$databaseName = "online_shop";

$conn = mysqli_connect($serverName, $userName, $password, $databaseName);

$create_table = "create table products(
      id int,
      name varchar(50),
      type varchar(50),
      price int,
      discount int,
      image varchar(250),
      categoryId int
    )";
mysqli_query($conn, $create_table);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/fevicon.png" type="image/png" />
    <title>Browse Categories</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="vendors/linericon/style.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />

    <style>
    .type {
        float: right;
    }

    .latest_product_inner,
    .col-lg-3 {
        margin-top: -5%;
    }

    .links {
        cursor: pointer;
    }

    .search {
        display: flex;
        justify-content: center;
    }

    .search input:not(.submitSearch) {
        height: 30px;
        outline: none;
        border: 0;
        border-bottom: 2px solid green;
        width: 60%;
    }

    .search input:focus {
        width: 75%;
        border-radius: 20px;
        border: 2px solid green;
    }

    .submitSearch {
        position: absolute;
        height: 30px;
        width: 30px;
        border-radius: 100%;
        font-size: 5px;
        text-align: center;
        background-color: green;
        border: 0;
        cursor: pointer;
        top: 25px;
        right: -1px;
    }

    .noItems {
        font-size: 40px;
        margin-bottom: 20%;
    }
    </style>

</head>

<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="top_menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="float-left">
                        <p>PHONE: +01 234 56 789</p>
                        <p>EMAIL: anas2020sh@gmail.com.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light w-100">
                <a class="navbar-brand logo_h" href="index.php">
                    <h1><span>Online</span> Shop</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                    <div class="row w-100 mr-0">
                        <div class="col-lg-7 pr-0">
                            <ul class="nav navbar-nav center_nav pull-right">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item submenu dropdown active">
                                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Shop</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="category.php">Shop Category</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-5 pr-0 ">
                            <ul class="nav navbar-nav navbar-right right_nav pull-right search">
                                <li class="nav-item">
                                    <form action="category.php" method="POST">
                                        Search : <input type="text" name="keyword" placeholder="Enter name product">
                                        <button class="submitSearch" type="submit" name="search"></button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<!--================Header Menu Area =================-->

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>Shop Category</h2>
                    <p>You will find all products you need...</p>
                </div>
                <div class="page_link">
                    <a href="index.php">Home</a>
                    <a href="category.php">Shop Category</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Category Product Area =================-->
<section class="cat_product_area section_gap">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">

                <div class="latest_product_inner">
                    <div class="row" id="products">

                        <?php

            $sql_select = "SELECT * FROM products";

            if (isset($_POST['search'])) {
              $keyword = $_POST['keyword'];
              $sql_select .= " WHERE name like '%$keyword%' OR type like '%$keyword%'";
            }

            $result = mysqli_query($conn, $sql_select);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_array($result)) {
                echo '<div class="col-lg-4 col-md-6">
                              <div class="single-product">
                                <div class="product-img">
                                  <img
                                    class="card-img"
                                    src=' . $row['image'] . '
                                    alt=""
                                  />
                                  <div class="p_icon">
                                    <a href="">
                                      <i class="ti-shopping-cart"></i>
                                    </a>
                                  </div>
                                </div>
                                <div class="product-btm">
                                  <a href="#" class="d-block">
                                  </a>
                                  <span class="name">' . $row['name'] . '</span>
                                    <h4 class="type">' . $row['type'] . '</h4>';
                if ($row['discount'] > 0) {
                  echo '<div class="mt-3">
                                            <span class="mr-4">$' . ($row['price'] - ($row['price'] * $row['discount'] / 100)) . '</span>
                                            <del>$' . $row['price'] . '</del>
                                          </div>';
                } else {
                  echo '<div class="mt-3">
                                            <span class="mr-4">$' . $row['price'] . '</span>
                                          </div>';
                }
                echo '</div>
                              </div>
                            </div>';
              }
            } else {
              echo '<spqn class="noItems">No items found</span>';
            }

            ?>

                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Browse Categories</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li>
                                    <a href="">All</a>
                                </li>

                                <?php

                $select_all_name = "SELECT * FROM category";
                $result = mysqli_query($conn, $select_all_name);
                while ($row = mysqli_fetch_array($result)) {
                  echo '<li class="links">
                                <a onclick="showProducts(' . $row['cId'] . ')">' . $row['cName'] . '</a>
                              </li>';
                }

                ?>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Category Product Area =================-->

<!--================ start footer Area  =================-->
<footer class="footer-area section_gap" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Shop</h4>
                <ul>
                    <li><a href="category.php">Shop Category</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 single-footer-widget">
            </div>
        </div>
        <div class="footer-bottom row align-items-center">
            <p class="footer-text m-0 col-lg-8 col-md-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                    aria-hidden="true"></i> by <a href="#footer">Anas Shublaq</a>
            </p>
            <div class="col-lg-4 col-md-12 footer-social">
                <a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://www.twitter.com" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="https://dribbble.com" target="_blank" class="dribbble"><i class="fa fa-dribbble"></i></a>
                <a href="https://www.behance.net" target="_blank" class="behance"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="../Dashboard/assets/js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope-min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="vendors/jquery-ui/jquery-ui.js"></script>
<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="vendors/counter-up/jquery.counterup.js"></script>
<script src="js/theme.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
function showProducts(id) {
    $.ajax({
        url: 'get_products.php',
        data: {
            'id': id,
        },
        method: 'POST',
        success: function(data) {
            $('#products').html(data);
        },
        error: function(data) {
            alert('error');
        }
    });
}
</script>
</body>

</html>