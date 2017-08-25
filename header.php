<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tinashe
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97335777-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
<header>
      <section class="top-bg">
    <div class="container">

      <div class="row">
        <div class="col-md-10"></div>
  <div class="col-md-2"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i>  <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></div>
  
</div>

    </div><!-- /.container -->
    </section>
    <div class="container">
        <a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/images/header.png" alt="header" class="img-responsive"/></a>
        <nav class="background">
          <?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'primary',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav nav-pills',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>
        </nav>
</div><!-- /.container -->
<section class="login-bg">
    <div class="container">

      <div class="row">
  <div class="col-md-9"></div>
  <div class="col-md-3">LOGIN/CREATE AN ACCOUNT</div>
  
</div>

    </div><!-- /.container -->
    </section>
</header>