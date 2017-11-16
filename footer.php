<!-- Footer is four columns (1, 2, 3, 4 from left to right) -->

<!-- Call the footer function -->

<?php wp_footer(); ?>


<!-- Start footer div -->
<footer class="site-footer">

  <div class="site-footer__inner container container--narrow">

    <div class="group">


      <!-- Start footer column 1 (logo and phone number) -->
      <div class="site-footer__col-one">
        <h1 class="logo-text logo-text--alt-color"><a href="#"><strong>Miracle</strong> Mob</a></h1>
        <p><a class="site-footer__link" href="#">(555) 555-5555</a></p>
      </div>
      <!-- End footer column 1 (logo and phone number) -->


      <!-- Start footer column 2 (main nav links) -->
      <div class="site-footer__col-two-three-group">
        <div class="site-footer__col-two">
          <h3 class="headline headline--small">Explore</h3>
          <nav class="nav-list">
            <ul>
              <li><a href="<?php echo site_url('/about-us');?>">About Us</a></li>
              <li><a href="#">Miracles</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
        <!-- End footer column 2 (main nav links) -->


        <!-- Start footer column 3 (secondary nav links) -->
        <div class="site-footer__col-three">
          <h3 class="headline headline--small">Learn</h3>
          <nav class="nav-list">
            <ul>
              <li><a href="#">Legal</a></li>
              <li><a href="<?php echo site_url('/privacy-policy');?>">Privacy</a></li>
            </ul>
          </nav>
        </div>
        <!-- End footer column 3 (secondary nav links) -->

      </div>
      <!-- End footer nav links -->


      <!-- Start footer column 4 (social media icons) -->
      <div class="site-footer__col-four">
        <h3 class="headline headline--small">Connect With Us</h3>
        <nav>
          <ul class="min-list social-icons-list group">
            <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            <li><a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- End footer column 4 (social media icons) -->

  </div>
</footer>

<!-- End footer div -- >

</body>
</html>
