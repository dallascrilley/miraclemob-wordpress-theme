<?php get_header();

 // Start the loop
  while(have_posts()) {
    the_post();
?>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

<?php

// End the loop
}

get_footer();

?>
