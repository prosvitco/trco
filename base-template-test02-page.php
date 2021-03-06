<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body id="header-top" <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning upgrade">
        <?php _e('You are using an <strong>outdated, unsupported and insecure</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <div class="container-fluid wrap">
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap" role="document">
      <?php include Wrapper\template_path(); ?>
    </div><!-- /.wrap -->    
    </div>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
    
  </body>
</html>
