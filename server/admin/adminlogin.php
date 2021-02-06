
<?php 
include "../../config/dbconfig.php"; 
session_start();
 
$errors = array(); 

// connect to the database
$db = mysqli_connect($servername, $username, $password, $database); 

// LOGIN USER
if (isset($_POST['login_admin'])) {

    $admin_email = mysqli_real_escape_string($db, $_POST['admin_email']);
    $admin_password = mysqli_real_escape_string($db, $_POST['admin_password']);
  
    if (empty($admin_email)) {
        array_push($errors, "Admin Email is required");
    }
    if (empty($admin_password)) {
        array_push($errors, "Admin Password is required");
    }

 
  
    if (count($errors) == 0) {
        $admin_password = md5($admin_password);
        $query = "SELECT * FROM admintable WHERE email='$admin_email' AND password='$admin_password'";
         
        $results = mysqli_query($db, $query);
        if(mysqli_num_rows($results)!=1)
        {
            array_push($errors, "Warning!!!!  Wrong email/password combination Or You are Not Admin"); 
        }
        else
        {
            while($row = mysqli_fetch_array($results, MYSQLI_ASSOC)){ 

                $_SESSION['admin_email']=$admin_email;
                header('location: admin.php'); 

            }
            
        }
 
    }
  }
  ?>

 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Food-Filler: Working for the needy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../assets/css/login.css">
</head>

<body>
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
        <a href="landing.php"><img src="../../assets/img/logo1.png" style="height: 100px; width: 200px"></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
          <li ><a href="landing.php">Home</a></li> 
                <li ><a href="about-us.html">About</a></li>
                <li><a href="donate.php">Donate leftovers from event</a></li>
                <li><a href="ngoregister.php">Register Organisation</a></li>
                <li class="active" ><a href="profile.php">Your Profile</a></li>
                <li class="drop-down"><a href="">Testimonials</a>
                  <ul>
                    <li><a href="leaderboard.php">Our Leaderboard</a></li>
                    <li><a href="testimonial.php">Listen from Users</a></li>
                    <li><a href="thankyou.php">Thank you</a></li>
                  </ul>
                </li>
                <li ><a href="contact.php">Contact US</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  

  
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="100">
      <h1>ADMIN LOGIN</h1>
      <h2>ONLY ADMIN ALLOWED</h2>
      <a href="#log" class="btn-get-started scrollto">Login</a>
    </div>
  </section><!-- End Hero -->
  

<!-- login form -->
<section id="log" >
    <div class="container" >
    <div class="row">
        <div class="col-lg-12" style="justify-content: center;">
<div class="login-container" > 
       <form method="post" action="adminlogin.php">
           <h1>LOGIN</h1>
           <?php include('errors.php'); ?>
           <div>
               <label>Email</label>
               <input type="text" name="admin_email" placeholder="abc@gmail.com" value="">
           </div>
           <div>
               <label>Password</label>
               <input type="password" name="admin_password" placeholder="Enter your password here" value="">
           </div>
           <input type="submit" name="login_admin" value="LOGIN">
           <!-- <a href="register.php" style="font-size:16px;"><div>Not a member,SignUP Here</a> 
           <a href="#" style="font-size:16px;"><div>Forgot Username?</a>  -->
            
       </form>
       </div>
       </div>
</div>
</div>
</section>

<!-- login form end -->




<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Food-Filler</h3>
          <p>
            95/45, NG road Highway <br>
            Raipur, RPR 194402<br>
            India <br><br>
            <strong>Phone:</strong> + 91 992299223<br>
            <strong>Email:</strong> foodfiller@example.com<br>
          </p>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Leaderboard</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">See Profile</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Donate to US</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Have a suggestion for us? Please write to us</h4>
          <p>You can also write to us your story or your experience with us</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Your email">
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>