<!DOCTYPE html>
<html>
  <head>

    <?php wp_head();?>
    <meta charset="utf-8">
    <title></title>

  </head>
  
  <body>

    <!-- Start header div -->
    <header class="site-header">
    <div class="container">
      <h1 class="logo-text float-left"><a href="<?php echo site_url();?>"><strong>Miracle</strong> Mob</a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">


        <!-- Start nav links -->
        <nav class="main-navigation">
          <ul>
            <li><a href="<?php echo site_url('/about-us');?>">About Us</a></li>
            <li><a href="#">Miracles</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
        <!-- End nav links -->

        <!-- Start login / register buttons -->
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
        <!-- End login / register buttons -->

      </div>
    </div>
    </header>
    <!-- End header div -->
