<?php get_header();

while(have_posts()) {
  the_post(); ?>
  <div class="center-posts"><p> <?php the_time( 'j F, y' ) ?>
  </p><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  
  </div>
<?php }

  get_footer();

?> 