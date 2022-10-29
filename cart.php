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
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cart</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================

  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <h1 class="logo me-auto me-lg-0"><a href="#">VegiMart</a></h1>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="store.php">Store</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li class="dropdown"><a href="#"><span>My VegiMart</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="profile.php">My Account</a></li>
                  <li><a href="postad.php">Post AD</a></li>
                  <li><a href="cart.php">Cart</a></li>
                </ul>
                  </li>
                </ul>
              </li>
              
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          <a href="logout.php" class="get-started-btn scrollto">Log Out</a>
        </div>
      </div>

    </div>
  </header>
  <!-- End Header -->
        <header class="bg-white py-5"></header>
        <header class="bg-success py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shopping Cart</h1>
                </div>
            </div>
        </header><br>
  <!-- ======= Table ====== --->
                <main>
                    <div class="container-fluid px-5">
                        <ol class="breadcrumb mb-5">
                            <li class="breadcrumb-item"><a href="store.php">Store</a></li>
                            <li class="breadcrumb-item active">Cart</li>
                        </ol>
                        <div class="card mb-5">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Cart - Items
                            </div>
                            <div class="card-body">
                                <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">AD ID</th>
                                  <th scope="col">CATEGORY</th>
                                  <th scope="col">STOCK (kg)</th>
                                  <th scope="col">PRICE (Rs.)</th>
                                  <th scope="col">AMOUNT (Rs.)</th>
                                  <th scope="col">ACTION</th>
                                </tr>
                              </thead>
                              <tbody>
                                    <?php
                                        $username = $_SESSION['username'];
                                        $total = 0;
                                        $sql = "SELECT id FROM users WHERE username = '{$username}'";
                                        $result = mysqli_query($conn, $sql);
                                        if (!$result) {
                                            // after done send user to the item-postad page
                                            header("Location: ../index.php");
                                        } else{
                                            if ($result->num_rows > 0) {
                                                $row = mysqli_fetch_assoc($result);
                                            };
                                        }
                                        $sql = "SELECT ad_id,id FROM cart WHERE user_id = {$row['id']}";
                                        $result = mysqli_query($conn, $sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $sql = "SELECT id,ad_category,ad_stock,ad_price FROM postad WHERE id={$row['ad_id']}";
                                                $resultad = mysqli_query($conn, $sql);
                                                while ($rowad = mysqli_fetch_assoc($resultad)) {
                                                    $price = number_format((float)$rowad['ad_price'],2,'.',',');
                                                    $amount = (float)$rowad['ad_price']*(int)$rowad['ad_stock'];
                                                    $amount = number_format($amount,2,'.',',');
                                                    echo "<tr><td><i class='bi-cart-check-fill'></i></td>";
                                                    echo "<td>{$row['ad_id']}</td>";
                                                    echo "<td>{$rowad['ad_category']}</td>";
                                                    echo "<td>{$rowad['ad_stock']}</td>";
                                                    echo "<td>{$price}</td>";
                                                    echo "<td>{$amount}</td>";
                                                    echo "<td><a name='remove' href='includes/cart-action.php?remove=$row[id]'><i class='bi-cart-x'></i>&nbspRemove</td></tr>";
                                                    $total = $total + (float)$rowad['ad_price']*(int)$rowad['ad_stock'];
                                                }
                                            }
                                        }
                                    ?>
                              <tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </main>
  <!-- ===== End Table =====--->
  <!--==== Order section ====-->
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="assets/img/Done-rafiki.svg" alt="..." /></div>
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tr><h1>Checkout Details</h1></tr>
                            <tr>
                                <td><h3>Total Amount (Rs.)</h3></td>
                                <td><h3><?php echo number_format($total,2,'.',','); ?></h3></td>
                            </tr>
                        </table><br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                              <button class="btn btn-success" type="button">Continue to checkout</button>
                        </div>
                    </div>
                </div>
            </div>
  <!-- ===== End Order section =====--->
  <!-- ======= Footer ======= -->
  <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; VegiMart 2021</div>
                            <div>
                                <a href="store.php">Back to Store</a>
                                &middot;
                                <a href="../about-out.php">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>