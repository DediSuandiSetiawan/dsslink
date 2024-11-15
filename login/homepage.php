<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<title>Homepage</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">   
</head>

<body>
 <!-- Carousel Start -->
 <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="dss-main-Git/img/1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                            <div style="text-align:center; padding:5%;">
                                <h1 class="text-primary text-uppercase mb-3 animated slideInDown">Belajar Online Terbaik
                                </h1>
                                <h1 class="display-5 text-white animated slideInDown">DSS LINK CENTER
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2"> Belajar Dimana Saja, Bisa!!</p>
                                <a href="http://localhost/dsslink-main-Git/index.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Baca
                                    selengkapnya</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Gabung
                                    Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Carousel End -->
         
    <div style="text-align:center; padding:1%;">
      <p  style="font-size:50px; font-weight:bold;">
       Thanks <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       
       :)
      </p>
      <a href="logout.php">Logout</a>
    </div>

    <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
        <div style="text-align:center; padding:10px;">
        <p  style="font-size:10px; font-weight:bold;">
            <div class="col-lg-3 col-md-6">
                
                <h1 class="text-white mb-3">Quick Link</h1>
                <a class="btn btn-link" href="">About</a>
                <a class="btn btn-link" href="">Contact</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">FAQs & Help</a>
            </div>
            </div>               
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                  <div style="text-align:center; padding:1%;">
        <p  style="font-size:50px; font-weight:bold;">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">All Right Reserved.</a>
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">dss link center 2024</a>
                </div>
             </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>
