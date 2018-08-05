<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo(charset); ?>">
    <meta name="description" content="The best in cats">
    <meta name="keywords" content="Cats, code, lolz">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo(template_directory); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo(template_directory); ?>/css/main.css">
  </head>
    <body <?php body_class(); ?>>
  
      <div id="header">
          <h1>
            <a href="#">
              <?php bloginfo('name'); ?>
            </a>
          </h1> 
          <div class="navcontainer">
            <div class="inner-navcontainer">
              <nav class="clearfix">
                 <?php wp_nav_menu(); ?>
              </nav>
            </div>
          </div>
      </div><!-- #header --> 

      <div id="container">
        <div id="main">
