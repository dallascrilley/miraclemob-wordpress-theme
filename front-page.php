<!-- Load the header -->
<?php get_header(); ?>
<!-- Done loading header -->


<!-- Body content starts here -->
<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">Welcome!</h1>
    <h2 class="headline headline--medium">We think you&rsquo;ll like our organization.</h2>
    <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>miracles</strong> we have posted?</h3>
    <a href="#" class="btn btn--large btn--blue">View Our Miracles</a>
  </div>
</div>

<div class="full-width-split group">
  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

      <div class="event-summary">
        <a class="event-summary__date t-center" href="#">
          <span class="event-summary__month">Nov</span>
          <span class="event-summary__day">18</span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="#">Event Placeholder</a></h5>
          <p>Aliquam erat volutpat. Fusce placerat vitae urna ut tempor. Donec ultrices rutrum. <a href="#" class="nu gray">Learn more</a></p>
        </div>
      </div>
      <div class="event-summary">
        <a class="event-summary__date t-center" href="#">
          <span class="event-summary__month">Nov</span>
          <span class="event-summary__day">17</span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="#">Monthly Meetup</a></h5>
          <p>Live music, pizza, good times. <a href="#" class="nu gray">Learn more</a></p>
        </div>
      </div>

      <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>

    </div>
  </div>
  <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">From Our Blog</h2>

      <div class="event-summary">
        <a class="event-summary__date event-summary__date--beige t-center" href="#">
          <span class="event-summary__month">Nov</span>
          <span class="event-summary__day">16</span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="#">We Were Voted Most Inspiring</a></h5>
          <p>We were voted #1 most inspiring this year!. <a href="#" class="nu gray">Read more</a></p>
        </div>
      </div>
      <div class="event-summary">
        <a class="event-summary__date event-summary__date--beige t-center" href="#">
          <span class="event-summary__month">Nov</span>
          <span class="event-summary__day">15</span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="#">Our Miracles in the news</a></h5>
          <p>Two of our miracles have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
        </div>
      </div>

      <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
    </div>
  </div>
</div>

<div class="hero-slider">
<div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bus.jpg')?>);">
  <div class="hero-slider__interior container">
    <div class="hero-slider__overlay">
      <h2 class="headline headline--medium t-center">Slider 1</h2>
      <p class="t-center">Slider 1 Content Here</p>
      <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
    </div>
  </div>
</div>
<div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/apples.jpg')?>);">
  <div class="hero-slider__interior container">
    <div class="hero-slider__overlay">
      <h2 class="headline headline--medium t-center">Slider 2</h2>
      <p class="t-center">Slider 2 Content Here</p>
      <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
    </div>
  </div>
</div>
<div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bread.jpg')?>);">
  <div class="hero-slider__interior container">
    <div class="hero-slider__overlay">
      <h2 class="headline headline--medium t-center">Slider 3</h2>
      <p class="t-center">Slider 3 Content Here.</p>
      <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
    </div>
  </div>
</div>
</div>
<!-- Body content ends here -->


<!-- Load the footer  -->
<?php get_footer(); ?>
<!-- Done loading footer  -->
