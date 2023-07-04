<?php 
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
    <section
      class="grid-gallery"
      id="grid"
    >
    <?php
$posts = get_field('photo');
if( $posts ): ?>
    <?php foreach( $posts as $post ): 
        ?>
      <div class="grid-gallery__images">
        <img
          class="colored"
          src="<?php the_field('photo-item'); ?>"
          alt="photo-card"
        /> 
      </div>
    <?php endforeach; ?>
<?php endif; ?>
    </section>
    <div class="btn-inner">
      <div class="container">
        <a href="<?php echo get_permalink(196); ?>"> <button class="btn">Portfolio</button></a>
      </div>
    </div>
    <?php get_footer(); ?>
