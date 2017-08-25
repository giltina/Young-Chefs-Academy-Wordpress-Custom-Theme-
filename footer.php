<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tinashe
 */

?>

	</div><!-- #content -->

	<section class="footer-bg">
    <div class="container">
      <div class="row">
  <div class="col-md-2 col-sm-2 col-xs-2"><img src="<?php echo get_template_directory_uri(); ?>/images/ifa.png" alt="ifa" class="img-responsive"/><br><img src="<?php echo get_template_directory_uri(); ?>/images/small.png" alt="logo" class="img-responsive"/></div>
  <div class="col-md-4 col-sm-4 col-xs-4">
    <h4>CORPORATE MENU</h4>
    <ul>
      <li>HOME</li>
      <li>BLOG</li>
      <li>NEWS</li>
      <li>FAQ</li>
      <li>CONTACT</li>
    </ul>
  </div>
  
</div>
<div class="row">
  <div class="col-md-8 col-sm-8 col-xs-8"><br>&copy; 2017 Young Chefs Academy</div>
  <div class="col-md-4 col-sm-4 col-xs-4"><br>PRIVACY POLICY | TERMS & CONDITIONS</div>
</div>

    </div><!-- /.container -->
    </section>


<?php wp_footer(); ?>

</body>
</html>
