<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="<?php bloginfo(charset); ?>">
      <meta name="description" content="The best in cats">
      <meta name="keywords" content="Cats, code, lolz">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?> </title>
    <link rel="stylesheet" href="<?php bloginfo(template_directory); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo(template_directory); ?>/css/main.css">
  </head>
  <body>
  
   <?php define( 'WP_USE_THEMES', false ); get_header(); ?>

    <div id="container">
      <div id="main">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="post">
          <h2><a href="#">Purred Programming</a></h2>
          <img src="<?php bloginfo(template_directory); ?>/images/cats1.png" alt="NYC Startups">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a consectetur purus. Pellentesque at leo erat, id pellentesque sapien. Cras id purus sem. Nulla lacinia consequat nulla, vitae porttitor urna venenatis id. Nam iaculis risus ac mauris vestibulum malesuada. Nulla dolor mi, cursus sed ornare vel, feugiat sed nibh. Suspendisse vitae pulvinar ligula. In eu dui erat. Etiam sit amet malesuada turpis. Duis dapibus feugiat euismod. Suspendisse vitae consequat nunc. Vivamus aliquet vulputate varius.</p>
          
          <span class="post-meta">Posted by <a href="#">Chris Castig</a> on August 2nd</span>

      </div><!-- .post --> 

      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p> <?php endif; ?>


      </div> <!-- #main -->
     <?php get_footer(); ?>

    </div><!-- #container --> 
  </body>
</html>