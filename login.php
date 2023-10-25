<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sign Up - BlackHorse</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

<h1 class="logo me-auto"><a href="index.html">BlackHorse</a></h1>
<!-- Uncomment below if you prefer to use an image logo -->
<!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

<nav id="navbar" class="navbar order-last order-lg-0">
  <ul>
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="aboutus.php">About us</a></li>
    <li><a href="courses.php">Courses</a></li>
    <li><a href="trainers.php">Trainers</a></li>
    <li><a href="events.php">Events</a></li>
    <li><a href="pricing.php">Pricing</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="signup.php">Sign up</a></li>

    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a href="#">Drop Down 1</a></li>
        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
          <ul>
            <li><a href="#">Deep Drop Down 1</a></li>
            <li><a href="#">Deep Drop Down 2</a></li>
            <li><a href="#">Deep Drop Down 3</a></li>
            <li><a href="#">Deep Drop Down 4</a></li>
            <li><a href="#">Deep Drop Down 5</a></li>
          </ul>
        </li>
        <li><a href="#">Drop Down 2</a></li>
        <li><a href="#">Drop Down 3</a></li>
        <li><a href="#">Drop Down 4</a></li>
      </ul>
    </li>
    <li><a href="contactus.php">Contact</a></li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

<a href="courses.php" class="get-started-btn">Get Started</a>

</div>
  
  </header>
  <br>
  <br>
  <br>
    <!--sign up form-->
    <section id="signup" class="signup">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
          <form action="process_login.php" method="POST">
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <br>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <br>
        <button type="submit" class="btn-get-started">Log In</button>
    </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>BlackHorse</h3>
        <p>
        Al Manteqah as Sadesah<br>
              ,Nasr City,cairo<br>
              Egypt<br><br>
              <strong>Phone:</strong> +0201550093415<br>
              <strong>Email:</strong> Black.horse.courses.academy@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
        <li><i class="bx bx-chevron-right"></i> <a href="#">Basic English Course (A1)</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Elementary English Course (A2)</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Intermediate English Course (B1)</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Upper-Intermediate English Course (B2)</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Advanced English Course (C1)</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Proficiency English Course (C2)</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Business English Course</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Exam Preparation (IELTS, TOEFL)</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
      <h4>Join us</h4>
            <p>Are you ready to embark on a transformative learning experience? Our state-of-the-art Learning Management System (LMS) is your gateway to mastering the English language. Whether you're a beginner looking to build a strong foundation or an advanced learner aiming to refine your skills, we have something for everyone.</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>BlackHorse</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
      Designed by <a href="https://bootstrapmade.com/">Bootstrap</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const signupForm = document.getElementById("signup-form");

    signupForm.addEventListener("submit", function (e) {
      const password = signupForm.querySelector("#password").value;
      const confirmPassword = signupForm.querySelector("#confirm-password").value;

      if (password !== confirmPassword) {
        alert("Passwords do not match. Please try again.");
        e.preventDefault();
      }

      if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        e.preventDefault();
      }
    });
  });
</script>

  <!-- Rest of the HTML code -->
  

</body>

</html>