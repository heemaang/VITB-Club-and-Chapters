<!DOCTYPE html>
<html>
<head>
  <title>Clubs and Chapters</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
<style>

</style>

<header>
<nav>
      <a  href="login"><img src = "bg.png" style="width:175px;height:75px;"></a>
  <div class="menu">    
    <a  href="index.html" style="color: white">Home </a>    
    <a href="#">gallery</a>
    <a href="https://www.youtube.com/watch?v=C-KbCMvt86A" target="_blank">about</a>
    <a  href="event3.html">Events</a>    
    <a href="logout2.php">Logout</a>
    <a  href="#" style="color: #00b894">Clubs and Chapters</a>
  </div>
</nav>

<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==true){



?>

<div class="wel">
  <p style="color:white;">Welcome - <?php echo $_SESSION['reg_no']?></p>
 </div> 
 <?php } ?>

  <main>
    <section>
      <h3>Welcome To VIT Bhopal Clubs and Chapters</h3>
      <h1>DO COME & VISIT OUR CAMPUSES<span class="change_content"> </span> <span style="margin-top: -10px;"> | </span> </h1>
      <a href="#" class="btnone">learn more</a>
    </section>
  </main>



</header>  








<section class="gallery" id="gallery">

    <h1 class="heading">our <span>Clubs</span></h1>
    <p style="size: 20px">Details of each clubs are given below click on the images.</p> 
        <p style="height: 20%, width: 20%">And we also provided the recruiment link in the clubs details.</p>

    <div class="box-container">

        <div class="box">
            <a href="android.php">
            <img src="images/c1.jpg" alt="">
            <h3 class="title">Android Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>
    </a>

        
         <a href="dsc.php">
        <div class="box">
            <img src="images/c2.png" alt="">
            <h3 class="title">Data Science Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>
    </a>

         <a href="drama.php">
        <div class="box">
            <img src="images/c3.jpg" alt="">
            <h3 class="title">Drama Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>
    </a>

         <a href="gdsc.php">
        <div class="box">
            <img src="images/c4.png" alt="">
            <h3 class="title">Google Developer Students Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>
        <a href="ai.php">

        <div class="box">
            <img src="images/c5.png" alt="">
            <h3 class="title">AI Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

       
</section>



<section class="footer" style="background-color:indigo;">

    <div class="box-container">

        <div class="box">
            <h3>branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Vellore </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Chennai </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Bhopal </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Andhra Pradesh </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> gallery </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 9387625252 </a>
            <a href="#"> <i class="fas fa-phone"></i> +91 7845367289 </a>
            <a href="#"> <i class="fas fa-envelope"></i> dsw@vitbhopal.ac.in </a>
            <a href="#"> <i class="fas fa-envelope"></i> adsw@vitbhopal.ac.in </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Bhopal, india - 400104 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> created by <span>VITB</span> | all rights reserved </div>
    <center><img src = "bg.png" style="width:150px;height:75px;"></center> 

</section>


</body>
</html>