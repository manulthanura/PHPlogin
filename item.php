<?php 

include 'includes/config.php';

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - VegiMart</title>
        <!-- Favicon-->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/item-styles.css" rel="stylesheet" />
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>
    <body>
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <h1 class="logo me-auto me-lg-0"><a href="home.php">VegiMart</a></h1>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a href="home.php">Home</a></li>  
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="logout.php">Log Out</a></li> 
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          <a href="store.php" class="get-started-btn scrollto">Store</a>
          <a href="postad.php" class="get-started-btn scrollto">Post AD</a>
          <a href="profile.php" class="get-started-btn scrollto">My Account</a>
        </div>
      </div>

    </div>
  </header><br><br><br><br>
        <!-- Navigation-->
                    
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <?php
                    $id = $_GET['id'];

                    // Fetech user data based on id
                    $result = mysqli_query($conn, "SELECT * FROM postad WHERE id=$id");

                    while($row= mysqli_fetch_array($result))
                    {
                            $id=$row['id'];
                            $ad_title = $row['ad_title'];
                            $ad_description = $row['ad_description'];
                            $ad_category = $row['ad_category'];
                            $ad_stock = $row['ad_stock'];
                            $ad_payment = $row['ad_payment'];
                            $ad_price = $row['ad_price'];
                            $ad_delivery = $row['ad_delivery'];
                            $ad_deliverycharge = $row['ad_deliverycharge'];
                            $ad_pd = $row['ad_pd'];
                            $ad_ed = $row['ad_ed'];
                            $ad_city = $row['ad_city'];
                            $ad_zipcode = $row['ad_zipcode'];
                            $ad_district = $row['ad_district'];
                            $user_id = $row['user_id'];
                            $ad_image = $row['ad_image'];
                    
                    }
                    ?>
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="uploads/<?php echo "$ad_image";?>" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">ADVERTISING ID - <?php echo "$id";?></div>
                        <h1 class="display-5 fw-bolder" ><?php echo "$ad_title";?></h1>
                        <h6><?php echo "$ad_description";?></h6>
                        <ul class="list-group">
                          <li class="list-group-item">Category : <?php echo "$ad_category";?></li>
                          <li class="list-group-item">Payment : <?php echo "$ad_payment";?></li>
                          <li class="list-group-item">Delivery : <?php echo "$ad_delivery";?></li>
                          <li class="list-group-item">Delivery Charge: <?php echo "$ad_deliverycharge";?></li>
                          <li class="list-group-item">Bid opened : <?php echo "$ad_pd";?></li>
                          <li class="list-group-item">Bid closed : <?php echo "$ad_ed";?></li>
                          <li class="list-group-item">Location : <?php echo "$ad_city";?> in <?php echo "$ad_district";?></li>
                        </ul><br>
                        <div class="fs-5 mb-5">
                            <span>Rs <?php echo"$ad_price";?></span> per 1 Kg (Total <?php echo"$ad_stock";?> Kg Exists)
                        </div>
                        <form action="includes/cart-action.php" method="post">
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" required style="max-width: 3rem" />
                            <input type="hidden" name="product_id" value="<?=$product['id']?>">
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>Add To Cart
                            </button>
                        </form>
                        </div><br>AD by <?php echo "$user_id";?>
                    </div>
                </div>
            </div>
        </section>
        
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; VegiMart 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/item-scripts.js"></script>
    </body>
</html>
