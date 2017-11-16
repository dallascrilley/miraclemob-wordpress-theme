<!-- Load the header -->
<?php get_header(); ?>
<!-- Done loading header -->


<!-- Body content starts here -->
<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">Welcome to Miracle Mob!</h1>
    <h2 class="headline headline--medium">Become a part of someone's miracle.</h2>
    <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>candidates</strong> we have posted?</h3>
    <a href="#" class="btn btn--large btn--blue">View Miracle Candidates</a>
  </div>
</div>
<div class="full-width-split group">
  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Upcoming Miracles</h2>

      <?php
      $today = date('Ymd');

        $homepageEvents = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => 'event',
          'meta_key' => 'event_date',
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
          'meta_query' => array(
          array(
            'key' => 'event_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'numeric'
          )
          )
        ));

        while($homepageEvents->have_posts()) {
          $homepageEvents->the_post(); ?>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month"><?php
              $eventDate = new DateTime(get_field('event_date'));
              echo $eventDate -> format('M')
              ?></span>
              <span class="event-summary__day"><?php echo $eventDate -> format('d')?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p><?php if (has_excerpt()) {
                  echo get_the_excerpt();
                } else {
                  echo wp_trim_words(get_the_content(), 18);
                  } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
            </div>
          </div>
        <?php }
      ?>

      <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event'); ?>" class="btn btn--blue">View All Events</a></p>

    </div>
  </div>
  <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">From Our Blog</h2>
      <?php
        $homepagePosts = new WP_Query(array(
          'posts_per_page' => 2
        ));

        while ($homepagePosts->have_posts()) {
          $homepagePosts->the_post(); ?>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
              <span class="event-summary__month"><?php the_time('M'); ?></span>
              <span class="event-summary__day"><?php the_time('d'); ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
            </div>
          </div>
        <?php } wp_reset_postdata();
      ?>
    </div>

      <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts</a></p>
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
