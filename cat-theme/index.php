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
  
   <?php get_header(); ?>

    <div id="container">
      <div id="main">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  
          <p><?php the_content();?></p>
          
          <span class="post-meta">Posted by <a href="#"><?php the_author(' ');?></a> <?php the_time('l, F jS, Y')?></span>

      </div><!-- .post --> 

      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p> <?php endif; ?>


      </div> <!-- #main -->
     <?php get_footer(); ?>

    </div><!-- #container --> 
  </body>
</html>