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

  <title>About Us</title>
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
  </header><br>
  <!-- End Header -->
  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p>The technology is developing rapidly nowadays. As it develops it has begun to join with many of the systems that happened manually and physically. After the current COVID-19 hit all the fields stepped up into online and started to involve in technological improvements day by day for the past year. As this situation affected Sri Lanka, most of the systems went online though some remained in the old way. One of those is agriculture field. As agriculture is a physical activity we thought of taking the business side of the agriculture which is selling and buying vegetables and related between farmers and buyers online. So we decided to make a website that is easy to use by farmers and buyers while keeping the money transactions and like trustworthy and acceptable by the users.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Objectives of the project.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> To handle the exchange of vegetable stock throughout the country from an online platform</li>
              <li><i class="ri-check-double-line"></i> To give farmers, customers & buyers a user friendly platform to exchange vegetable stock with trust and faith</li>
              <li><i class="ri-check-double-line"></i> To open new paths for the Agricultural economy of Sri Lanka with the support of developing technology</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              VegiMart does not specialize in any specific vegetable category - here you can buy and sell items in more than 20 different vegetables categories. We also carefully review all ads that are being published, to make sure the quality is up to our standards. If you'd like to get in touch with us, go to
            </p>
            <a href="#faq" class="btn-learn-more">FAQs</a>
            <a href="contact.php" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>VegiMart is a website where you can buy and sell Locally grown vegetables in Sri Lanka. The best deals are often done with farmers who live in your own city or on your own street, so on VegiMart it's easy to buy and sell locally.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href=""> Trust and Safety</a></h4>
              <p>sample paragraph</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Member Reputation</a></h4>
              <p>sample paragraph</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">User Friendly Dashboard</a></h4>
              <p>sample paragraph</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
        <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="text-center title">
          <h3>What we have achieved so far</h3>
          <p>The number one vegetable stock management system in Sri Lanka.</p>
        </div>

        <div class="row counters position-relative">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
            <p>Farmers</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Post Ads</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section>
    <!-- End Counts Section -->
    <!-- ======= Faq Section ======= -->
    <section id="faq" class="faq">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                find your problem !
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">Signed up for an account? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Entered the  required detailes on the register page. After displaied the massage go login page and log in. If you are still having trouble accessing your account, please contact us.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">How do I post an ad? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Posting an ad on VegiMart is quick and easy! Simply click the green Post Ad button and follow the instructions.If you are not already logged in, you will need to log in as the first step of posting your ad.Your ad will go live once it has been reviewed (this usually takes less than 5 min during office hours).
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Why can't I log in to my account? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      If you are having trouble logging in to your account, please check that you have Entered the phone number and password on the log in page. 
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
        </div>

      </div>
    </section>
    <!-- End Faq Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>VegiMart</h3>
      <p>the largest Vegetables Stock marketplace in Sri Lanka</p>
      <div class="copyright">
        &copy; Copyright <strong><span>VegiMart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://linkedin.com/in/manul-thanura-15642b219">Team D</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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