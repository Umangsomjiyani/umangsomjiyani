<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="../cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <style>
    #menu-main-menues li {
      display: inline-block;
      padding: 8px;
    }

    .current-menu-item > a {
        color: #f39b00 !important;
        background: 0 0;
    }
    .info_section {
        background-color: #0f1521;
        /* color: #ffffff; */
    }
    .info_section .info_logo h2 {
        text-transform: uppercase;
        font-weight: bold;
    }    
    .info_section .info_logo {
        width: 80%;
        margin: 0 auto 45px auto;
        padding-bottom: 10px;
        text-align: center;
        border-bottom: 1px solid #ffffff;
    }  
    .layout_padding2 {
        padding: 45px 0;
        color: white;
    }
    .info_section h2 {
        color: white;
        font-size: 2rem;
    }
    .info_section h5 {
        color: white;
        font-size: 2rem;
    }
    .social_box {
        margin-top: 18px;
    }              
    .social_box > a {
      padding-left : 15px;
    }
    .infoCon{
      font-size: 16px;
      margin-top: 9px;
    }
    .brand_nm img {
      display: inline-block;
      max-width: 29%;
      height: auto;
    }

    .coll-img img {
      display: inline-block;
      max-width: 100%;
      height: 50rem;        
    }
  </style>
  <body>
  <div class="ie-panel"><a href="../../external.html?link=http://windows.microsoft.com/en-US/internet-explorer/"><img src="<?php echo get_template_directory_uri()?>/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
  <!-- Page Loader-->
  <div class="preloader" id="preloader">
    <div class="page-loader-logo">
      <div class="brand">
        <div class="brand__name"><img src="http://localhost/ManglamTimber/wp-content/uploads/2023/02/logo_Manglam.jpeg" alt="" width="190" height="50"/>
        </div>
      </div>
    </div>
    <div class="page-loader-body">
      <div id="loadingProgressG">
        <div class="loadingProgressG" id="loadingProgressG_1"></div>
      </div>
    </div>
  </div>
  <!-- Page-->
  <div class="page">
    <header class="page-header section">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-device-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-fullwidth" data-xxl-device-layout="rd-navbar-fullwidth" data-xxl-layout="rd-navbar-fullwidth" data-stick-up-clone="false" data-md-stick-up-offset="150px" data-lg-stick-up-offset="60px" data-md-stick-up="true" data-lg-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="index-2.html">
                    <div class="brand__name brand_nm"><img src="http://localhost/ManglamTimber/wp-content/uploads/2023/02/logo_Manglam.jpeg" alt="" width="190" height="50"/>
                    </div></a></div>
              </div>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-main-item"><a class="button button-xs button-lighter" href="contacts.html">Get a quote</a></div>
                <!-- RD Navbar Nav-->
                <!-- <ul class="rd-navbar-nav"> -->
                  <?php 
                      wp_nav_menu( 
                          array( 
                              'theme_location' => 'my-custom-menu',
                              'menu_class' => 'rd-navbar-nav'
                          ) 
                      ); 
                  ?>
                  <!-- <li class="active"><a href="index-2.html">Home</a>
                  </li>
                  <li><a href="about-us.html">About Us</a>
                  </li>
                  <li><a href="contacts.html">Contacts</a>
                  </li> -->
                <!-- </ul> -->
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>  
<?php wp_head(); ?>