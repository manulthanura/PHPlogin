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

  <title>My Profile</title>
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
  <link href="assets/css/profile.css" rel="stylesheet">

  <!-- =======================================================

  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <h1 class="logo me-auto me-lg-0"><a href="home.html">VegiMart</a></h1>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="store.php">Store</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li class="dropdown"><a href="#"><span>My VegiMart</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">My Account</a></li>
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
  </header><br><br>
  <!-- End Header -->
  <main id="main">
<!--==================================
=            User Profile            =
===================================-->
<section class="dashboard section">
  <!-- Container Start -->
  <div class="container">
    <!-- Row Start -->
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
        <div class="sidebar">
          <!-- User Widget -->
          <div class="widget user-dashboard-profile">
            <!-- User Image -->
            <div class="profile-thumb">
              <img src="assets/img/apple-touch-icon.png" alt="" class="rounded-circle">
            </div>
            <!-- User Name -->
            <h5 class="text-center"><?php echo $_SESSION['username']; ?></h5>
            <p>Joined November 06, 2021</p>
          </div><br>
          <!-- Dashboard Links -->
          <div class="widget user-dashboard-menu">
            <ul>
              <li class="active"><a href="dashboard-my-ads.html"><i class="bi-user"></i> My Ads</a></li>
              <li><a href="#"><i class="bi-cog"></i> Logout</a></li>
              <li><a href="" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Delete
                  Account</a></li>
            </ul>
          </div>

          <!-- delete-account modal -->
          						  <!-- delete account popup modal start-->
                <!-- Modal -->
                <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                        <img src="images/account/Account1.png" class="img-fluid mb-2" alt="">
                        <h6 class="py-2">Are you sure you want to delete your account?</h6>
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                        <textarea name="message" id="" cols="40" rows="4" class="w-100 rounded"></textarea>
                      </div>
                      <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-lg-between justify-content-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- delete account popup modal end-->
          <!-- delete-account modal -->

        </div>
      </div>
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
        <!-- Recently Favorited -->
        <div class="widget dashboard-container my-adslist">
          <h3 class="widget-header">My Ads</h3>
          <table class="table table-responsive product-dashboard-table">
            <thead>
              <tr>
                <th>Image</th>
                <th>Product Title</th>
                <th class="text-center">Category</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $username = $_SESSION['username'];
                $sql = "SELECT id FROM users WHERE username = '{$username}'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                // after done send user to the item-postad page
                    header("Location: ./index.php");
                } else{
                    if ($result->num_rows > 0) {
                      $row = mysqli_fetch_assoc($result);
                    }//;
                }
                $result = mysqli_query($conn, "SELECT * FROM postad WHERE user_id = {$row['id']}");
                                    while($user_data = mysqli_fetch_array($result)) {
                echo "                   
                <tr>                   
                <td class='product-thumb'>
                  <img width='80px' height='auto' src='uploads/".$user_data['ad_image']."' alt='image description'></td>
                <td class='product-details'>
                  <h3 class='title'>".$user_data['ad_title']."</h3>
                  <span class='add-id'><strong>Ad ID : </strong>".$user_data['id']."</span>
                  <span><strong>Posted on: </strong><time>".$user_data['ad_pd']."</time> </span>
                  <span class='status active'><strong>Status</strong>Active</span>
                  <span class='location'><strong>Location</strong>".$user_data['ad_district']."</span>
                </td>
                <td class='product-category'><span class='categories'>".$user_data['ad_category']."</span></td>
                <td class='action' data-title='Action'>
                  <div class=''>
                    <ul class='list-inline justify-content-center'>
                      <li class='list-inline-item'>
                        <a data-toggle='tooltip' data-placement='top' title='view' class='view' href='store.php'>
                          <i class='bx bx-check-circle'></i>
                        </a>
                      </li>
                      <li class='list-inline-item'>
                        <a class='edit' data-toggle='tooltip' data-placement='top' title='Edit' href='profile-edit-postad.php?id=$user_data[id]'>
                          <i class='bx bx-pencil'></i>
                        </a>
                      </li>
                      <li class='list-inline-item'>
                        <a class='delete' data-toggle='tooltip' data-placement='top' title='Delete' href='profile-edit-postad.php?id=$user_data[id]'>
                          <i class='bx bx-trash'></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>";}?>
            </tbody>
          </table>

        </div>

        <!-- pagination >
        <div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
        <-- pagination -->

      </div>
    </div>
    <!-- Row End -->
  </div>
  <!-- Container End -->
</section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; VegiMart 2021</p></div>
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