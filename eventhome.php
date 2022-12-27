<?php
include "db.php";
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
$getid = $_SESSION['id'];
$decoded = base64_decode($getid);
$decoded_encoding = 'iso-2022-jp';
$id = iconv($decoded_encoding, 'UTF-8', $decoded);
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Growth Strategy, Beauty Nails Manicure &amp;amp; Pedicure, We Create Digital">
    <meta name="description" content="">
    <title>Fds/Eventmanagement</title>
    <link rel="stylesheet" href="./static/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="./static/css/Home-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="./static/js/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./static/js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.14.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="./static/css/navbar.css">
    <link rel="stylesheet" href="./static/css/footer.css">
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
     <!-- ****logo***** -->
      <img src="./static/images/fds.png" class="u-logo-image u-logo-image-1">
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
              <div class="logo"></div>
              <div class="menu-items">
              <div class="button">
                <li><a href="eventmanagement.php"><i class="fa-solid fa-user"></i>  Profile</a></li>
                <li><a href="events.php"><i class="fa-solid fa-bookmark"></i>  Events</a></li>
                <li><a href="bookedorder.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> orders</a></li>
                <li><a href="#sec-6ce3"><i class="fa-solid fa-user-group"></i>  About Us</a></li>
                <li><a href="#carousel_c706"><i class="fa-solid fa-circle-question"></i>  Help</a></li>
                <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>   Logout</a></li>
              </div>
          </div>
        </div>
      </nav>
    </header>
    <section class="u-clearfix u-grey-10 u-section-1" id="carousel_9141">
        <!-- ***main****
      <img class="u-expanded-width u-image u-image-1" src="./static/images/gffg-min.jpg" data-image-width="1769" data-image-height="1080"> -->
      <img class="u-expanded-width u-image u-image-1" src="./static/images/org.jpg" data-image-width="1769" data-image-height="1080">
      <div class="u-palette-2-base u-shape u-shape-rectangle u-shape-1" data-animation-name="fadeIn" data-animation-duration="1750" data-animation-direction="Up" data-animation-delay="250"></div>
      <div class="u-align-left u-container-style u-group u-palette-5-dark-3 u-group-1" data-animation-name="fadeIn" data-animation-duration="1500" data-animation-direction="Left" data-animation-delay="250">
        <div class="u-container-layout u-valign-middle u-container-layout-1">
          <h5 class="u-text u-text-1"> About Food Donation System</h5>
          <h1 class="u-custom-font u-font-montserrat u-text u-text-2"> Growth Strategy</h1>
          <p class="u-text u-text-body-alt-color u-text-3"><a href="https://www.freepik.com/photos/business" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank">-BEGINNING TO END HUNGER-</a>
          </p>
        </div>
      </div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
              <h4 class="u-text u-text-default u-text-4" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="500">Our Vission</h4>
              <div class="u-border-2 u-border-palette-2-base u-line u-line-horizontal u-line-1" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="750"></div>
              <p class="u-text u-text-grey-50 u-text-5" data-animation-name="zoomIn" data-animation-duration="1250" data-animation-direction="" data-animation-delay="500"> Cutting food waste is a delicious way of saving money, helping to feed the world, and protecting the planet.No one in the world shall be deprived of life because of hunger.<br>  "When they had all had enough to eat, Jesus said to his disciples, Gather the pieces that are left over. Let nothing be wasted." John 6:12 (NIV)</p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
              <h4 class="u-text u-text-default u-text-6" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="500">Our Values</h4>
              <div class="u-border-2 u-border-palette-2-base u-line u-line-horizontal u-line-2" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="750"></div>
              <p class="u-text u-text-grey-50 u-text-7" data-animation-name="zoomIn" data-animation-duration="1250" data-animation-direction="" data-animation-delay="500"> By donating food, we're feeding people, not landfills, supporting local communities, and saving all the resources that went into producing that food from going to waste.Expand our network by linking available sources of surplus food to those in need through existing charitable organizations. </p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
              <h4 class="u-text u-text-default u-text-8" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="500">Our Mission</h4>
              <div class="u-border-2 u-border-palette-2-base u-line u-line-horizontal u-line-3" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="750"></div>
              <p class="u-text u-text-grey-50 u-text-9" data-animation-name="zoomIn" data-animation-duration="1250" data-animation-direction="" data-animation-delay="500"> Food Donation Project System is a mission to end hunger and no wasting of food to make a hungry-free world.According to the latest survey, 1.3 billion tons of food is thrown as waste every year.  Additionally, one-third of the food consumed is stated as leftovers.  The focus of this project is to reduce the amount of food wasted and being used to the needy people.</p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-4">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
              <h4 class="u-text u-text-default u-text-10" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="500">Business Goals</h4>
              <div class="u-border-2 u-border-palette-2-base u-line u-line-horizontal u-line-4" data-animation-name="fadeIn" data-animation-duration="1250" data-animation-direction="Right" data-animation-delay="750"></div>
              <p class="u-text u-text-grey-50 u-text-11" data-animation-name="zoomIn" data-animation-duration="1250" data-animation-direction="" data-animation-delay="500"> Food Donation Connection provides an alternative to discarding surplus wholesome food by linking food service donors with surplus food to local hunger relief agencies. We do this by creating and maintaining an efficient communication and reporting network that links available sources of food to those in need through these existing charitable organizations.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-2-base u-section-2" id="sec-6ce3">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-align-left u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1500">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2  style="padding: 25px;" class="u-text u-text-default u-text-1"> What I Do. </h2>
            <p style="padding: 25px;" class="u-text u-text-2"> <a href="https://nicepage.online" class="u-border-1 u-border-active-palette-2-light-2 u-border-hover-palette-2-light-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1"></a>.Food Donation System is an organisation which aims to redistribute excess food from weddings, parties, events to those who are hungry. <a href="https://www.freepik.com" class="u-active-none u-border-1 u-border-active-palette-2-light-2 u-border-hover-palette-2-light-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-2" target="_blank"></a>
            </p>
            <p style="padding: 25px;">
            <a href="about.php" class="u-active-palette-2-base u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-2-base u-radius-50 u-text-active-white u-text-hover-white u-white u-btn-3" data-animation-name="customAnimationIn" data-animation-duration="1250">read more</a>
            </p>
          </div>
        </div>
        <div class="u-expanded-width-md u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <div class="u-image u-image-circle u-image-1" alt="" data-image-width="1000" data-image-height="1000" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
                <p class="u-text u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1500">   THERE IS NO SINCERE LOVE THAN THE LOVE OF FOOD. </p><br><H3>-GEORGE BERNARD </H3>
          
                  <div class="icon" >
                    <a href=""  style="color:black;font-size: 3em;text-align:centre;"><i class="fa-solid fa-bowl-rice "></i></a>
                  </div>
              </div>
              </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <div class="u-image u-image-circle u-image-2" alt="" data-image-width="1200" data-image-height="943" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
                <p class="u-text u-text-4" data-animation-name="customAnimationIn" data-animation-duration="1500">  NEVER EAT MORE THAN YOU CAN LIFE.....</p><br><h3>-MISS PIGGY</h3>
          
                <div class="icon" >
                    <a href=""  style="color:black;font-size: 3em;text-align:centre;"><i class="fa-solid fa-wheat-awn-circle-exclamation"></i></a>
                  </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <div class="u-image u-image-circle u-image-3" alt="" data-image-width="1000" data-image-height="1000" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
                <p class="u-text u-text-5" data-animation-name="customAnimationIn" data-animation-duration="1500">    <p>YOU DON'T NEED A SILVER FORK TO EAT GOOD FOOD...</p><br><h3>-PAUL PRUDHOMME</h3>
          
                <div class="icon" >
                    <a href=""  style="color:black;font-size: 3em;text-align:centre;"><i class="fa-solid fa-carrot"></i></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="carousel_b93c">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-palette-2-base u-shape u-shape-rectangle u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500"></div>
        <!-- ****varavara***** -->
        <img src="./static/images/aa49e5bbcb321c65e1d4ba4d4afa599b.png" alt="" class="u-image u-image-default u-image-1" data-image-width="817" data-image-height="799" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
        <!-- ****varavar mukal 1***** -->
        <img src="./static/images/1black.jpg" alt="" class="u-image u-image-default u-image-2" data-image-width="1252" data-image-height="900" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
        <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1500">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h3 class="u-text u-text-1"> FDS </h3>
            <p class="u-text u-text-2">We aim to bring benefits across the spectrum of society and help provide access to food to those who don’t have adequate means to access it. The event management users will register the events in our application. Later they update the details of leftover food. The registered organization can order the food. The system will automatically select the organization from the booked organization and they can collect the food.<br>
              <br><a href="https://www.freepik.com/" class="u-active-none u-border-1 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank"></a>
            </p>
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
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-1" data-animation-name="customAnimationIn" data-animation-duration="1250"><img src="./static/images/70227.png" alt=""></span>
                <p class="u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500">This system also helps orphanages or organizations to get food by simply registering their information on the website after that they can collect food after receiving the notification from the site when the event has ended.&nbsp;</p>
              </div>
            </div>
            <div class="u-align-left u-border-10 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-2" data-animation-name="customAnimationIn" data-animation-duration="1250"><img src="./static/images/70227.png" alt=""></span>
                <p class="u-text u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1500">The users have separate interface according to the type of users. The event are updated by event management and organization can order the food in a FCFS system..&nbsp;</p>
              </div>
            </div>
            <div class="u-align-left u-border-10 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-3" data-animation-name="customAnimationIn" data-animation-duration="1250"><img src="./static/images/70227.png" alt=""></span>
                <p class="u-text u-text-4" data-animation-name="customAnimationIn" data-animation-duration="1500"> Food Donation System is a web-based application that helps agencies or even management to provide food for orphanages or other organizations in an area..&nbsp;</p>
              </div>
            </div>
            <div class="u-align-left u-border-10 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-4" data-animation-name="customAnimationIn" data-animation-duration="1250"><img src="./static/images/70227.png" alt=""></span>
                <p class="u-text u-text-5" data-animation-name="customAnimationIn" data-animation-duration="1500"> The users have separate interface according to the type of users. The event are updated by event management and organization can order the food in a FCFS system..&nbsp;</p>
              </div>
            </div>
            <div class="u-align-left u-border-10 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-5"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-5" data-animation-name="customAnimationIn" data-animation-duration="1250"><img src="./static/images/70227.png" alt=""></span>
                <p class="u-text u-text-6" data-animation-name="customAnimationIn" data-animation-duration="1500">This system encourages people to do better and look after our companions. This system not only feed the needy people but reduce the food wastage&nbsp;</p>
              </div>
            </div>
            <div class="u-align-left u-border-10 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-2-base u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-6"><span class="u-file-icon u-icon u-text-palette-2-base u-icon-6" data-animation-name="customAnimationIn" data-animation-duration="1250"><img src="./static/images/70227.png" alt=""></span>
                <p class="u-text u-text-7" data-animation-name="customAnimationIn" data-animation-duration="1500">This system also helps orphanages or organizations to get food by simply registering their information on the website after that they can collect food after receiving the notification from the site when the event has ended.&nbsp;</p>
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
            <!-- ****varavara 2***** -->
          <img src="./static/images/aa49e5bbcb321c65e1d4ba4d4afa599b.png" alt="" class="u-image u-image-default u-image-1" data-image-width="817" data-image-height="799" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
            <!-- ****vara mukal 2***** -->
          <img src="./static/images/vbvb.jpg" alt="" class="u-image u-image-default u-image-2" data-image-width="1000" data-image-height="1000" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
          </div>
        </div>
        <div class="u-container-style u-group u-shape-rectangle u-group-2">
          <div class="u-container-layout u-valign-middle u-container-layout-2">
            <h3 class="u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500"> OUR SYSTEM</h3>
            <p class="u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500">We aim to bring benefits across the spectrum of society and help provide access to food to those who don’t have adequate means to access it. The event management users will register the events in our application. Later they update the details of leftover food. The registered organization can order the food. The system will automatically select the organization from the booked organization and they can collect the food<br>
              <!-- <br><a href="https://www.freepik.com" class="u-border-1 u-border-active-palette-2-base u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-none u-radius-0 u-text-active-palette-2-base u-text-body-color u-text-hover-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank">Freepik</a> -->
            </p>
            <!-- <a href="https://nicepage.app" class="u-active-grey-60 u-black u-border-none u-btn u-btn-round u-button-style u-hover-grey-60 u-radius-50 u-text-active-white u-text-hover-white u-btn-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-direction="" data-animation-delay="500">read more</a> -->
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
                  <p class="u-text u-text-2"><a href="tel:7559058938">7559058938</a><br><a href="tel:9188460963">9188460963</a>
                  </p>
                  <h6 class="u-text u-text-default u-text-palette-2-base u-text-3">location</h6>
                  <p class="u-text u-text-4">Idukki<br>Painavu<br>Pincode-685603
                  </p>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.9939942822907!2d76.93781331458061!3d9.850869992953491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b07ba40109a481f%3A0x68b6eed84716c7ce!2sGovernment%20Engineering%20College%20Idukki!5e0!3m2!1sen!2sin!4v1659094628991!5m2!1sen!2sin" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                  <!-- <h6 class="u-text u-text-default u-text-palette-2-base u-text-5">Our top services</h6> -->
                  <p class="u-text u-text-6"> <a href="www.fds.com">www.fds.com</a><br><a href="mailto: fds@gmail.com">fds@gmail.com</a><br>
                  </p>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-shape-rectangle u-size-31 u-white u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <h6 class="u-text u-text-default u-text-palette-2-base u-text-7">Feedback</h6>
                  <div class="u-expanded-width u-form u-form-1">
                    <!-- <form action="#" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 0;" source="email" name="form"> -->


                               <p><a href="https://forms.gle/4C5o4hfkh7199cHq5">click here for your valuable feedback </a></p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>

      <div class="rounded-social-buttons">
                        <a class="social-button facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a class="social-button youtube" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="social-button instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>

      </footer>
    <section class="u-backlink u-clearfix u-grey-80">
      Copyright © 2022 FDS.
    </section>


</body></html>
