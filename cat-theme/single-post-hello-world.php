<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p> Single PAGE SPECIFIC TO HELLO WORLD </p>
      <p><?php the_content();?></p>
    <span class="post-meta">Posted by <a href="#"><?php the_author(' ');?></a> <?php the_time('l, F jS, Y')?></span>

  </div><!-- .post --> 

  <?php endwhile; else: ?>
    <p>
      <?php _e('Sorry, no posts matched your criteria.'); ?>
    </p>
  <?php endif; ?>

 <?php comments_template(); ?> 

<?php get_footer(); ?>

