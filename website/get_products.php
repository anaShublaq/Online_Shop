<?php

   if ($_SERVER['REQUEST_METHOD'] == "POST") {
     if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $serverName = "127.0.0.1";
        $userName = "root";
        $password = "";
        $databaseName = "online_shop";

        $conn = mysqli_connect($serverName,$userName,$password,$databaseName);


        $sql_select = "SELECT * FROM products where categoryId =" . $id ;   
        $result = mysqli_query($conn,$sql_select);

        while($row = mysqli_fetch_array($result)){  
        echo '<div class="col-lg-4 col-md-6">
            <div class="single-product">
            <div class="product-img">
                <img
                class="card-img"
                src='.$row['image'].'
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
                <span class="name">'.$row['name'].'</span>
                <h4 class="type">'.$row['type'].'</h4>';
                if($row['discount'] > 0){
                echo '<div class="mt-3">
                        <span class="mr-4">$'. ($row['price'] - ($row['price'] * $row['discount'] /100)) .'</span>
                        <del>$'. $row['price'] .'</del>
                        </div>';
                }else{
                echo '<div class="mt-3">
                        <span class="mr-4">$'. $row['price'] .'</span>
                        </div>';
                }
            echo '</div>
            </div>
        </div>';  
        }
                      

     }
   }