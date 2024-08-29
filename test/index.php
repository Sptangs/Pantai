<?php
session_start();
include "config/classDB.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pantai Papuma</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href='https://fonts.googleapis.com/css?family=Lakki Reddy' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Convergence&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap">
  <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/checkoutstyle.css">
    <link href='https://fonts.googleapis.com/css?family=Lakki Reddy' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Convergence&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap">

</head>

<body>
  <nav>
    <div class="">
      <img src="img/Logo Header.png" alt="logo">
    </div>
    <ul>
      <li><a href="#Home">Home</a> </li>
      <li><a href="#Services">Service</a></li>
      <li><a href="#News">News</a></li>
      <li><a href="#Pricelist">Pricelist</a></li>
      <li><a href="#Gallery">Gallery</a></li>
    </ul>
    <div class="extras">
      <div class="language-dropdown">
        <button class="dropdown-btn" onclick="toggleDropdown()">
          <img src="img/indonesia.png" alt="Indonesia Flag" class="flag-img" id="current-flag">
          <span class="separator">|</span>
          <span id="current-language">ID</span>
        </button>
        <div class="dropdown-content">
          <a href="#" data-lang="en" onclick="changeLanguage('en')">
            <img src="img/inggris.jpeg" alt="Eng" class="flag-img"> ENG
          </a>
          <a href="#" data-lang="id" onclick="changeLanguage('id')">
            <img src="img/indonesia.png" alt="Indonesian" class="flag-img"> ID
          </a>
        </div>
      </div>
      <div class="extras">
      <?php if (!empty($_SESSION['username'])): ?>
        <li class="btn-logout"><a href="logout.php">Logout</a></li>
      <?php else: ?>
        <li class="btn-login"><a href="login.php">Login</a></li>
      <?php endif; ?>
    </div>
  </nav>

  
  <?php
  $hal = isset($_GET['hal']) ? $_GET['hal'] : "dash";
  if ($hal) {
    include $hal . ".php";
  }
  ?>
  ////
  <div class="footer">
    <img src="img/image 5 (1).png" alt="" class="bg">
    <main class="grid6">
      <div class="content1">
        <img src="img/logoputih.png" alt="logo" class="logo">
        <p>Temukan keindahan alam yang tak tertandingi di Jember, Jawa Timur. Dengan pasir putih yang lembut, air laut yang jernih, dan formasi batu karang yang megah, Pantai Papuma adalah surga tersembunyi yang siap untuk Anda jelajahi.</p>
      </div>
      <div class="content2">
        <h2>Quick Link</h2>
        <p>Home</p>
        <p>Services</p>
        <p>News</p>
        <p>Pricelist</p>
        <p>Gallery</p>
      </div>
      <div class="content3">
        <h2>Hubungi Kami</h2>
        <main class="grid7">
          <img src="img/humbleicons_location.png" alt="" class="lokasi">
          <p> Pantai Papuma, Jember.</p>
          <img src="img/ri_phone-fill.png" alt="" class="contact">
          <p> 0857432457894</p>
          <img src="img/quill_mail.png" alt="" class="email">
          <p> example@gmail.com.</p>
        </main>
      </div>
      <div class="content4">
        <h2>Payment Partner</h2>
        <img src="img/bni.png" alt="">
        <img src="img/gopay.png" alt="" style="margin-left: 5px;">
        <img src="img/bri.png" alt="" style="margin-left: 5px;">
        <img src="img/dana.png" alt="" style="margin-left: 5px;">
      </div>
    </main>
    <hr>

    <p class="copyright">Copyright © 2024 Pantai Watu Ulo. All rights reserved</p>
    <div class="sosmed">
      <img src="img/whatsapp.png" alt="">
      <img src="img/facebook.png" alt="" style="margin-left: 8px;">
      <img src="img/instagram.png" alt="" style="margin-left: 8px;">
    </div>
  </div>

  <script>
    let slideIndex = 0;
    showSlides(slideIndex);

    function moveSlide(n) {
      showSlides(slideIndex += n);
    }

    function showSlides(n) {
      let slides = document.querySelectorAll(".carousel-item");
      if (n >= slides.length) {
        slideIndex = 0
      }
      if (n < 0) {
        slideIndex = slides.length - 1
      }

      slides.forEach((slide, index) => {
        slide.style.display = "none";
        slide.classList.remove("active");
      });

      slides[slideIndex].style.display = "block";
      slides[slideIndex].classList.add("active");
    }
  </script>
</body>

</html>