<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/fevicon.png" type="image/png" />
  <title>Online Shop</title>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <style>

.start{
            background-color: #0d0d1f;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .install ul{
            list-style: none;
        }

        .install .point-1, .install .point-2, .install .point-3, .install .point-4, .install .point-5{
            position: absolute;
            top: 50%;
            background:linear-gradient(90deg,#00f731,#06e319,#00a900);
            width: 4%;
            height: 8%;
            border-radius: 100%;
        }
        .install .point-1{
            left: 40%;
            transform: translate(-38%,-50%);
            animation:install 1.2s .1s infinite;
        }
        .install .point-2{
            left: 45%;
            transform: translate(-44%,-50%);
            animation:install 1.2s .2s infinite;
        }
        .install .point-3{
            left: 50%;
            transform: translate(-50%,-50%);
            animation:install 1.2s .3s infinite;
        }
        .install .point-4{
            left: 55%;
            transform: translate(-56%,-50%);
            animation:install 1.2s .4s infinite;
        }
        .install .point-5{
            left: 60%;
            transform: translate(-62%,-50%);
            animation:install 1.2s .5s infinite;
        }

        @keyframes install{
            from{width: 0;height: 0;opacity: .1;}
            to{width: 4%;height: 8%;opacity: 1;}
        }

  </style>
</head>

<body onload="reload()">
  <!--================Header Menu Area =================-->
    <div id="start" class="start" >
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
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                <div class="row w-100 mr-0">
                  <div class="col-lg-7 pr-0">
                    <ul class="nav navbar-nav center_nav pull-right">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                      </li>
                      <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                          aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item">
                            <a class="nav-link" href="category.php" target="_blank">Shop Category</a>
                          </li>
                        </ul>
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
      <section class="home_banner_area mb-40" id="home">
        <div class="banner_inner d-flex align-items-center">
          <div class="container">
            <div class="banner_content row">
              <div class="col-lg-12">
                <p class="sub text-uppercase">men Collection</p>
                <h3><span>Show</span> Your <br />Personal <span>Style</span></h3>
                <h4>Browse your favorite products and buy them...</h4>
                <a class="main_btn mt-40" href="category.php">View Categories</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================End Home Banner Area =================-->

      <!-- Start feature Area -->
      <section class="feature-area section_gap_bottom_custom">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="single-feature">
                <a href="#" class="title">
                  <i class="flaticon-money"></i>
                  <h3>Money back gurantee</h3>
                </a>
                <p>Shall open divide a one</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="single-feature">
                <a href="#" class="title">
                  <i class="flaticon-truck"></i>
                  <h3>Free Delivery</h3>
                </a>
                <p>Shall open divide a one</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="single-feature">
                <a href="#" class="title">
                  <i class="flaticon-support"></i>
                  <h3>Alway support</h3>
                </a>
                <p>Shall open divide a one</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="single-feature">
                <a href="#" class="title">
                  <i class="flaticon-blockchain"></i>
                  <h3>Secure payment</h3>
                </a>
                <p>Shall open divide a one</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End feature Area -->

      <!--================ Feature Product Area =================-->
      <section class="feature_product_area section_gap_bottom_custom" id="featured product">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="main_title">
                <h2><span>Featured product</span></h2>
                <p>Bring called seed first of third give itself now ment</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/feature-product/f-p-1.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Latest men’s sneaker</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/feature-product/f-p-2.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Red women purses</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/feature-product/f-p-3.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Men stylist Smart Watch</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================ End Feature Product Area =================-->

      <!--================ Offer Area =================-->
      <section class="offer_area" id="offer area">
        <div class="container">
          <div class="row justify-content-center">
            <div class="offset-lg-4 col-lg-6 text-center">
              <div class="offer_content">
                <h3 class="text-uppercase mb-40">all men’s collection</h3>
                <h2 class="text-uppercase">50% off</h2>
                <a href="category.php" class="main_btn mb-20 mt-5">Discover Now</a>
                <p>Limited Time Offer</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================ End Offer Area =================-->

      <!--================ New Product Area =================-->
      <section class="new_product_area section_gap_top section_gap_bottom_custom" id="new products">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="main_title">
                <h2><span>new products</span></h2>
                <p>Bring called seed first of third give itself now ment</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="new_product">
                <h5 class="text-uppercase">collection of 2019</h5>
                <h3 class="text-uppercase">Men’s summer t-shirt</h3>
                <div class="product-img">
                  <img class="img-fluid" src="img/product/new-product/new-product1.png" alt="" />
                </div>
                <h4>$120.70</h4>
                <a href="category.php" class="main_btn">Show all Products</a>
              </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="single-product">
                    <div class="product-img">
                      <img class="img-fluid w-100" src="img/product/new-product/n1.jpg" alt="" />
                      <div class="p_icon">
                        <a href="#">
                          <i class="ti-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
                    <div class="product-btm">
                      <a href="#" class="d-block">
                        <h4>Nike latest sneaker</h4>
                      </a>
                      <div class="mt-3">
                        <span class="mr-4">$25.00</span>
                        <del>$35.00</del>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6">
                  <div class="single-product">
                    <div class="product-img">
                      <img class="img-fluid w-100" src="img/product/new-product/n2.jpg" alt="" />
                      <div class="p_icon">
                        <a href="#">
                          <i class="ti-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
                    <div class="product-btm">
                      <a href="#" class="d-block">
                        <h4>Men’s denim jeans</h4>
                      </a>
                      <div class="mt-3">
                        <span class="mr-4">$25.00</span>
                        <del>$35.00</del>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6">
                  <div class="single-product">
                    <div class="product-img">
                      <img class="img-fluid w-100" src="img/product/new-product/n3.jpg" alt="" />
                      <div class="p_icon">
                        <a href="#">
                          <i class="ti-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
                    <div class="product-btm">
                      <a href="#" class="d-block">
                        <h4>quartz hand watch</h4>
                      </a>
                      <div class="mt-3">
                        <span class="mr-4">$25.00</span>
                        <del>$35.00</del>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6">
                  <div class="single-product">
                    <div class="product-img">
                      <img class="img-fluid w-100" src="img/product/new-product/n4.jpg" alt="" />
                      <div class="p_icon">
                        <a href="#">
                          <i class="ti-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
                    <div class="product-btm">
                      <a href="#" class="d-block">
                        <h4>adidas sport shoe</h4>
                      </a>
                      <div class="mt-3">
                        <span class="mr-4">$25.00</span>
                        <del>$35.00</del>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================ End New Product Area =================-->

      <!--================ Inspired Product Area =================-->
      <section class="inspired_product_area section_gap_bottom_custom" id="inspired products">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="main_title">
                <h2><span>Inspired products</span></h2>
                <p>Bring called seed first of third give itself now ment</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/inspired-product/i1.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Latest men’s sneaker</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/inspired-product/i2.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Latest men’s sneaker</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Latest men’s sneaker</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/inspired-product/i4.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Latest men’s sneaker</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/inspired-product/i5.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Latest men’s sneaker</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/inspired-product/i6.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Latest men’s sneaker</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/inspired-product/i7.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Latest men’s sneaker</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/inspired-product/i8.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Latest men’s sneaker</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================ End Inspired Product Area =================-->


      <!--================ start footer Area  =================-->
      <footer class="footer-area section_gap" id="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-6 single-footer-widget">
              <h4>Quick Links</h4>
              <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#featured product">Featured product</a></li>
                <li><a href="#offer area">Offers</a></li>
                <li><a href="#inspired products">Inspired products</a></li>
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
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#footer">Anas Shublaq</a> </p>
            <div class="col-lg-4 col-md-12 footer-social">
              <a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.twitter.com" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://dribbble.com" target="_blank" class="dribbble"><i class="fa fa-dribbble"></i></a>
              <a href="https://www.behance.net" target="_blank" class="behance"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
      </footer>
    </div>
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
  <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendors/counter-up/jquery.counterup.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/theme.js"></script>
  <script>
        function reload(){
            var sta = document.getElementById('start');
            var rel = document.getElementById('reload');
            var isHidden = rel.hidden;
            if(isHidden){
                setTimeout(() => {
                    rel.removeAttribute("hidden");
                    sta.setAttribute("hidden",true);
                }, 2000);
            }
        }
    </script>
</body>

</html>