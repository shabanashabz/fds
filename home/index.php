<?php
include "db.php";
if (!isset($_SESSION['id'])) {
    header("location:../login.php");
}
$getid = $_SESSION['id'];
$decoded = base64_decode($getid);
$decoded_encoding = 'iso-2022-jp';
$id = iconv($decoded_encoding, 'UTF-8', $decoded);
?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Growth Strategy, ​Beauty Nails Manicure &amp;amp; Pedicure, ​We Create Digital">
    <meta name="description" content="">
    <title>organisation</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.14.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <script src="https://kit.fontawesome.com/a781033fbc.js" crossorigin="anonymous"></script>

    <style>
       .navbar .menu-items{
            box-shadow: rgba(255, 255, 255, 0.5);
            width: 200px;
        }
    </style>
    
   
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home 1">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="https://website2520127.nicepage.io/Home-1.html?version=c8c1815d-f25b-4d5b-8184-96ca2c2323ae" data-home-page-title="Home 1" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-a529"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <header>
          <nav>
            <div class="navbar">
              <div class="container nav-container">
                  <input class="checkbox" type="checkbox" name="" id="" />
                  <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                  </div>
                <div class="logo">
      
                </div>
                <div class="menu-items">
                  <div class="button"><li>
                    <a href="organisation.php"><i class="fa-solid fa-user"></i>  Profile</a></li>
                  <li><a href="order.php"><i class="fa-solid fa-bookmark"></i>  Events</a></li>
                  <li><a href="about.php"><i class="fa-solid fa-user-group"></i>  About Us</a></li>
                  <li><a href="help.php"><i class="fa-solid fa-circle-question"></i>  Help</a></li>
                  <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>   Logout</a></li>
                </div>
                </div>
              </div>
            </div>
          </nav>
        </header>
    <section class="u-clearfix u-grey-10 u-section-1" id="carousel_9141">
      <img class="u-expanded-width u-image u-image-1" src="images/gffg-min.jpg" data-image-width="1769" data-image-height="1080">
      <div class="u-palette-2-base u-shape u-shape-rectangle u-shape-1" data-animation-name="fadeIn" data-animation-duration="1750" data-animation-direction="Up" data-animation-delay="250"></div>
      <div class="u-align-left u-container-style u-group u-palette-5-dark-3 u-group-1" data-animation-name="fadeIn" data-animation-duration="1500" data-animation-direction="Left" data-animation-delay="250">
        <div class="u-container-layout u-valign-middle u-container-layout-1">
          <h5 class="u-text u-text-1"> about Consulting agency</h5>
          <h1 class="u-custom-font u-font-montserrat u-text u-text-2"> Growth Strategy</h1>
          <p class="u-text u-text-body-alt-color u-text-3">Image by <a href="https://www.freepik.com/photos/business" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank">Freepik</a>
          </p>
        </div>
      </div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
              <h4 class="u-text u-text-default u-text-4" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="500">Our Mission</h4>
              <div class="u-border-2 u-border-palette-2-base u-line u-line-horizontal u-line-1" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="750"></div>
              <p class="u-text u-text-grey-50 u-text-5" data-animation-name="zoomIn" data-animation-duration="1250" data-animation-direction="" data-animation-delay="500"> Justo nec ultrices dui sapien eget mi. Velit egestas dui id ornare arcu odio ut sem nulla. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed.</p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
              <h4 class="u-text u-text-default u-text-6" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="500">Our Values</h4>
              <div class="u-border-2 u-border-palette-2-base u-line u-line-horizontal u-line-2" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="750"></div>
              <p class="u-text u-text-grey-50 u-text-7" data-animation-name="zoomIn" data-animation-duration="1250" data-animation-direction="" data-animation-delay="500"> Justo nec ultrices dui sapien eget mi. Velit egestas dui id ornare arcu odio ut sem nulla. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed.</p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
              <h4 class="u-text u-text-default u-text-8" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="500">Consulting</h4>
              <div class="u-border-2 u-border-palette-2-base u-line u-line-horizontal u-line-3" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="750"></div>
              <p class="u-text u-text-grey-50 u-text-9" data-animation-name="zoomIn" data-animation-duration="1250" data-animation-direction="" data-animation-delay="500"> Justo nec ultrices dui sapien eget mi. Velit egestas dui id ornare arcu odio ut sem nulla. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed.</p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-4">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
              <h4 class="u-text u-text-default u-text-10" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="500">Business Goals</h4>
              <div class="u-border-2 u-border-palette-2-base u-line u-line-horizontal u-line-4" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="750"></div>
              <p class="u-text u-text-grey-50 u-text-11" data-animation-name="zoomIn" data-animation-duration="1250" data-animation-direction="" data-animation-delay="500"> Justo nec ultrices dui sapien eget mi. Velit egestas dui id ornare arcu odio ut sem nulla. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-2-base u-section-2" id="sec-6ce3">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-align-left u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1500">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-text u-text-default u-text-1"> What I Do. </h2>
            <p class="u-text u-text-2">Paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit ex. Suspendisse rhoncus laoreet purus <a href="https://nicepage.online" class="u-border-1 u-border-active-palette-2-light-2 u-border-hover-palette-2-light-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1">quis elementum</a>. Phasellus sed efficitur dolor, et ultricies sapien.<br>Images from <a href="https://www.freepik.com" class="u-active-none u-border-1 u-border-active-palette-2-light-2 u-border-hover-palette-2-light-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-2" target="_blank">Freepik</a>
            </p>
            <a href="https://nicepage.app" class="u-active-palette-2-base u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-2-base u-radius-50 u-text-active-white u-text-hover-white u-white u-btn-3" data-animation-name="customAnimationIn" data-animation-duration="1250">read more</a>
          </div>
        </div>
        <div class="u-expanded-width-md u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <div class="u-image u-image-circle u-image-1" alt="" data-image-width="1000" data-image-height="1000" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
                <p class="u-text u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1500">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <div class="u-image u-image-circle u-image-2" alt="" data-image-width="1200" data-image-height="943" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
                <p class="u-text u-text-4" data-animation-name="customAnimationIn" data-animation-duration="1500">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <div class="u-image u-image-circle u-image-3" alt="" data-image-width="1000" data-image-height="1000" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
                <p class="u-text u-text-5" data-animation-name="customAnimationIn" data-animation-duration="1500">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="carousel_b93c">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-palette-2-base u-shape u-shape-rectangle u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500"></div>
        <img src="images/aa49e5bbcb321c65e1d4ba4d4afa599b.png" alt="" class="u-image u-image-default u-image-1" data-image-width="817" data-image-height="799" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
        <img src="images/xxxx.jpg" alt="" class="u-image u-image-default u-image-2" data-image-width="1252" data-image-height="900" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
        <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1500">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h3 class="u-text u-text-1"> Always innovating</h3>
            <p class="u-text u-text-2"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.<br>
              <br>Image from <a href="https://www.freepik.com/" class="u-active-none u-border-1 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank">Freepik</a>
            </p>
            <a href="https://nicepage.app" class="u-active-palette-2-base u-black u-border-none u-btn u-btn-round u-button-style u-hover-palette-2-base u-radius-50 u-text-active-black u-text-hover-black u-btn-2" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">read more</a>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-6" id="carousel_bd06">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500"> Our values are there to remind us of who we are, and what we want to be. </h2>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-border-10 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-1" data-animation-name="customAnimationIn" data-animation-duration="1250"><img src="images/70227.png" alt=""></span>
                <p class="u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500"> Comfort produce husband boy her had hearing. Law others theirs passed but wishes. You day real less till dear read. Considered use dispatched melancholy sympathize discretion led.&nbsp;</p>
              </div>
            </div>
            <div class="u-align-left u-border-10 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-2" data-animation-name="customAnimationIn" data-animation-duration="1250"><img src="images/70227.png" alt=""></span>
                <p class="u-text u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1500"> Comfort produce husband boy her had hearing. Law others theirs passed but wishes. You day real less till dear read. Considered use dispatched melancholy sympathize discretion led.&nbsp;</p>
              </div>
            </div>
            <div class="u-align-left u-border-10 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-3" data-animation-name="customAnimationIn" data-animation-duration="1250"><img src="images/70227.png" alt=""></span>
                <p class="u-text u-text-4" data-animation-name="customAnimationIn" data-animation-duration="1500"> Comfort produce husband boy her had hearing. Law others theirs passed but wishes. You day real less till dear read. Considered use dispatched melancholy sympathize discretion led.&nbsp;</p>
              </div>
            </div>
            <div class="u-align-left u-border-10 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-4" data-animation-name="customAnimationIn" data-animation-duration="1250"><img src="images/70227.png" alt=""></span>
                <p class="u-text u-text-5" data-animation-name="customAnimationIn" data-animation-duration="1500"> Comfort produce husband boy her had hearing. Law others theirs passed but wishes. You day real less till dear read. Considered use dispatched melancholy sympathize discretion led.&nbsp;</p>
              </div>
            </div>
            <div class="u-align-left u-border-10 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-5"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-5" data-animation-name="customAnimationIn" data-animation-duration="1250"><img src="images/70227.png" alt=""></span>
                <p class="u-text u-text-6" data-animation-name="customAnimationIn" data-animation-duration="1500"> Comfort produce husband boy her had hearing. Law others theirs passed but wishes. You day real less till dear read. Considered use dispatched melancholy sympathize discretion led.&nbsp;</p>
              </div>
            </div>
            <div class="u-align-left u-border-10 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-6"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-6" data-animation-name="customAnimationIn" data-animation-duration="1250"><img src="images/70227.png" alt=""></span>
                <p class="u-text u-text-7" data-animation-name="customAnimationIn" data-animation-duration="1500"> Comfort produce husband boy her had hearing. Law others theirs passed but wishes. You day real less till dear read. Considered use dispatched melancholy sympathize discretion led.&nbsp;</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-7" id="carousel_4714">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-sheet-1">
        <div class="u-grey-5 u-shape u-shape-rectangle u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="1250"></div>
        <div class="u-palette-2-base u-shape u-shape-rectangle u-shape-2" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500"></div>
        <div class="u-align-left u-container-style u-expanded-width-xs u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <img src="images/aa49e5bbcb321c65e1d4ba4d4afa599b.png" alt="" class="u-image u-image-default u-image-1" data-image-width="817" data-image-height="799" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
            <img src="images/vbvb.jpg" alt="" class="u-image u-image-default u-image-2" data-image-width="1000" data-image-height="1000" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
          </div>
        </div>
        <div class="u-container-style u-group u-shape-rectangle u-group-2">
          <div class="u-container-layout u-valign-middle u-container-layout-2">
            <h3 class="u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500"> Management Technology</h3>
            <p class="u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.<br>
              <br>Image from <a href="https://www.freepik.com" class="u-border-1 u-border-active-palette-2-base u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-none u-radius-0 u-text-active-palette-2-base u-text-body-color u-text-hover-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank">Freepik</a>
            </p>
            <a href="https://nicepage.app" class="u-active-grey-60 u-black u-border-none u-btn u-btn-round u-button-style u-hover-grey-60 u-radius-50 u-text-active-white u-text-hover-white u-btn-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-direction="" data-animation-delay="500">read more</a>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-image u-shading u-section-8" id="carousel_c706" data-image-width="720" data-image-height="1080">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-black u-container-style u-layout-cell u-opacity u-opacity-60 u-right-cell u-size-29 u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h6 class="u-text u-text-default u-text-palette-2-base u-text-1">call us</h6>
                  <p class="u-text u-text-2">1 (234) 567-891<br>1 (234) 987-654
                  </p>
                  <h6 class="u-text u-text-default u-text-palette-2-base u-text-3">location</h6>
                  <p class="u-text u-text-4">121 Rock Sreet, 21 Avenue,<br>New York, NY 92103-9000
                  </p>
                  <h6 class="u-text u-text-default u-text-palette-2-base u-text-5">Our top services</h6>
                  <p class="u-text u-text-6"> Your future<br>Consulting<br> Market Intelligence<br>
                  </p>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-shape-rectangle u-size-31 u-white u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <h6 class="u-text u-text-default u-text-palette-2-base u-text-7">Contact Us</h6>
                  <div class="u-expanded-width u-form u-form-1">
                    <form action="#" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 0;" source="email" name="form">
                      
                      
                      <div class="u-form-group u-form-name">
                        <label for="name-daf4" class="u-label">Name</label>
                        <input type="text" placeholder="Enter your Name" id="name-daf4" name="name" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-input u-input-rectangle u-white" required="">
                      </div>
                      <div class="u-form-email u-form-group">
                        <label for="email-daf4" class="u-label">Email</label>
                        <input type="email" placeholder="Enter a valid email address" id="email-daf4" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-input u-input-rectangle u-white" required="">
                      </div>
                      <div class="u-form-group u-form-message">
                        <label for="message-daf4" class="u-label">Message</label>
                        <textarea placeholder="" rows="4" cols="50" id="message-daf4" name="message" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-input u-input-rectangle u-white" required=""></textarea>
                      </div>
                      <div class="u-form-agree u-form-group u-form-group-4">
                        <input type="checkbox" id="agree-f183" name="agree" class="u-agree-checkbox" required="">
                        <label for="agree-f183" class="u-label">I accept the <a href="#">Terms of Service</a>
                        </label>
                      </div>
                      <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-active-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-black u-palette-2-base u-radius-50 u-text-active-white u-text-hover-white u-btn-1">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                      <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-60cf"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the Text Element.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Offline Website Builder</span>
      </a>. 
    </section>
  
</body></html>