<?php

require 'dbcon.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Single Product :: Ruby - Jewelry Store e-Commerce Bootstrap 4 Template</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" />

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!--=== Font-Awesome CSS ===-->
    <link href="assets/css/vendor/font-awesome.css" rel="stylesheet">
    <!--=== Plugins CSS ===-->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>




    <!--== Page Title Area Start ==-->
    <div id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">

                </div>
            </div>
        </div>
    </div>
    <!--== Page Title Area End ==-->

    <!--== Page Content Wrapper Start ==-->
    <div id="page-content-wrapper" class="p-9">
        <div class="ruby-container">
            <div class="row">
                <!-- Single Product Page Content Start -->
                <div class="col-lg-12">
                    <div class="single-product-page-content">
                        <div class="row">
                            <!-- Product Thumbnail Start -->
                            <div class="col-lg-5">
                                <div class="product-thumbnail-wrap">
                                    <div class="product-thumb-carousel owl-carousel">
                                        <div class="single-thumb-item">
                                            <a href="single-product.html"><img class="img-fluid" src="assets/img/single-pro-thumb.jpg" alt="Product" /></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Product Thumbnail End -->

                            <!-- Product Details Start -->
                            <div class="col-lg-7 mt-5 mt-lg-0">
                                <div class="product-details">
                                    <h2><a href="single-product.html">Crown Summit Backpack</a></h2>



                                    <span class="price">$52.00</span>

                                    <div class="product-info-stock-sku">
                                        <span class="product-stock-status">In Stock</span>
                                        <span class="product-sku-status ml-5"><strong>SKU</strong> MH03</span>
                                    </div>

                                    <p class="products-desc">Ideal for cold-weathered training worked lorem ipsum outdoors,
                                        the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out
                                        the wind as ribbed cuffs and bottom band seal in body heat Lorem ipsum dolor sit
                                        amet, consectetur adipisicing elit. Enim, reprehenderit.</p>


                                    <div class="product-quantity d-flex align-items-center">
                                        <div class="quantity-field">
                                            <label for="qty">Qty</label>
                                            <input type="number" id="qty" min="1" max="100" value="1" />
                                        </div>

                                        <a href="single-product.html" class="btn btn-add-to-cart">Add to Cart</a>
                                    </div>

                                    h
                                </div>
                            </div>
                            <!-- Product Details End -->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Product Full Description Start -->
                                <div class="product-full-info-reviews">
                                    <!-- Single Product tab Menu -->
                                    <nav class="nav" id="nav-tab">
                                        <a class="active" id="description-tab" data-toggle="tab" href="#description">Description</a>
                                        <a id="reviews-tab" data-toggle="tab" href="#reviews">Reviews</a>
                                    </nav>
                                    <!-- Single Product tab Menu -->

                                    <!-- Single Product tab Content -->
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="description">
                                            <p>Stay comfortable and stay in the race no matter what the weather's up to. The
                                                Bruno Compete Hoodie's water-repellent exterior shields you from the
                                                elements, while advanced fabric technology inside wicks moisture to keep you
                                                dry.Stay comfortable and stay in the race no matter what the weather's up
                                                to. The Bruno Compete Hoodie's water-repellent exterior shields you from the
                                                elements, while advanced fabric technology inside wicks moisture to keep you
                                                dry.Stay comfortable and stay in the race no matter what the weather's up
                                                to. The Bruno Compete Hoodie's water-repellent exterior shields you from the
                                                elements, while advanced fabric technology inside wicks moisture to keep you
                                                dry.</p>

                                            <ul>
                                                <li>Adipisicing elitEnim, laborum.</li>
                                                <li>Lorem ipsum dolor sit</li>
                                                <li>Dolorem molestiae quod voluptatem! Sint.</li>
                                                <li>Iure obcaecati odio pariatur quae saepe!</li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane fade" id="reviews">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <div class="product-ratting-wrap">
                                                        <div class="ratting-form-wrapper fix">
                                                            <h3>Add your Comments</h3>
                                                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                                                <div class="ratting-form row">
                                                                    <div class="col-12 mb-4">
                                                                        <h5>Rating:</h5>

                                                                    </div>
                                                                    <div class="col-md-6 col-12 mb-4">
                                                                        <label for="name">Name:</label>
                                                                        <input name="name" id="name" placeholder="Name" type="text">
                                                                    </div>
                                                                    <div class="col-md-6 col-12 mb-4">
                                                                        <label for="email">Email:</label>
                                                                        <input name="email" id="email" placeholder="Email" type="text">
                                                                    </div>
                                                                    <div class="col-12 mb-4">
                                                                        <label for="your-review">Your Review:</label>
                                                                        <textarea name="review" id="your-review" placeholder="Write a review"></textarea>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <!-- <button type="submit" name="save" class="btn btn-primary">Save </button> -->
                                                                        <input name="save" value="add review" type="submit">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="ratting-list">

                                                            <?php

                                                            $sql = "SELECT id_c, name_c, email_c ,comment FROM comment";
                                                            $result = $conn->query($sql);

                                                            if ($result->num_rows > 0) {
                                                                // output data of each row
                                                                while ($row = $result->fetch_assoc()) {
                                                                    // echo "id: " . $row["id_c"] . " - Name: " . $row["name_c"] . " " . $row["comment"] . "<br>";

                                                            ?>

                                                        </div>
                                                        <div class="rattings-wrapper">
                                                            <div class="sin-rattings">
                                                                <div class="ratting-author">
                                                                    <h3><?php
                                                                        echo $row["name_c"]; ?></h3>

                                                                </div>
                                                                <p><?php echo $row["comment"]; ?></p>
                                                            </div>
                                                        </div>


                                                <?php             }
                                                            } else {
                                                                echo "0 results";
                                                            }
                                                            $conn->close();

                                                ?>








                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product tab Content -->
                                </div>
                                <!-- Product Full Description End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product Page Content End -->
            </div>
        </div>
    </div>
    <!--== Page Content Wrapper End ==-->





    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/vendor/jquery-migrate-1.4.1.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--=== Plugins Min Js ===-->
    <script src="assets/js/plugins.js"></script>

    <!--=== Active Js ===-->
    <script src="assets/js/active.js"></script>
</body>

</html>