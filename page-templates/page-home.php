<?php
/**
 * Template Name: Home Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tinashe
 */

get_header(); ?>
		    <div class="container">

      <div class="row" style="margin-top:10px">
        
  <div class="col-md-4 col-sm-6 visible-xl visible-lg visible-md visible-xs">
    <div class="bg">
    <h4>30 Dendy Young Ave.<br>Belvedere
Harare,<br>Zimbabwe <br><br>+263 773 267 391</h4>
<p style="font-size:20px">info@youngchefsacademy.co.zw</p>
<p><i class="fa fa-facebook fa-2x" aria-hidden="true"></i>  <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></p><br>

   <button type="button" class="btn btn-warning btn-lg btn-block">REGISTER FOR A CLASS</button>
<button type="button" class="btn btn-success btn-lg btn-block">OUR SPECIAL OFFERS</button>
<button type="button" class="btn btn-primary btn-lg btn-block">SIGN UP NEWSLETTER</button>

  </div>
  </div>
  <div class="col-md-8 col-sm-12"><?php echo do_shortcode('[tx_slider style="default" category="banner" delay="8000" parallax="yes" items="4" transition="fade" title="hide" desc="hide" link="show" align="left" height="674" textbg="shadow"]'); ?></div>
</div>

    </div><!-- /.container -->
    <section class="services-bg">
    <div class="container">
<h2 class="home" style="text-align:center"><span>OUR SERVICES</span></h2>
      <div class="row">
  <div class="col-md-4 col-sm-4 col-xs-4">
    <div class="circle1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/circle1.png" alt="circle1" class="img-responsive img-circle"/>
      <div class="text_over_image"><p>WEEKLY CLASSES</p></div>
      </div>
      <p style="text-align:center;font-weight:bold"><a href="/classes">LEARN MORE > </a></p>
      </div>
  <div class="col-md-4 col-sm-4 col-xs-4">
    <div class="circle2">
    <img src="<?php echo get_template_directory_uri(); ?>/images/circle2.png" alt="circle1" class="img-responsive img-circle"/>
    <div class="text_over_image"><p>BIRTHDAY PARTIES</p></div>
    </div>
    <p style="text-align:center;font-weight:bold">LEARN MORE > </p>
    </div>
  <div class="col-md-4 col-sm-4 col-xs-4">
    <div class="circle3">
    <img src="<?php echo get_template_directory_uri(); ?>/images/circle3.png" alt="circle1" class="img-responsive img-circle"/>
    <div class="text_over_image"><p>CLASS SCHEDULE</p></div>
    </div>
    <p style="text-align:center;font-weight:bold">LEARN MORE > </p>
    </div>
  </div>
<div class="row">
  <div class="col-md-4 col-sm-4 col-xs-4">
    <div class="circle4">
    <img src="<?php echo get_template_directory_uri(); ?>/images/circle4.png" alt="circle1" class="img-responsive img-circle"/>
    <div class="text_over_image"><p>SPECIAL EVENTS</p></div>
    </div>
    <p style="text-align:center;font-weight:bold">LEARN MORE > </p>
    </div>
  <div class="col-md-4 col-sm-4 col-xs-4">
    <div class="circle5">
    <img src="<?php echo get_template_directory_uri(); ?>/images/circle5.png" alt="circle1" class="img-responsive img-circle"/>
    <div class="text_over_image"><p>DAY  TRIPS</p></div>
    </div>
    <p style="text-align:center;font-weight:bold">LEARN MORE > </p>
    </div>
  <div class="col-md-4 col-sm-4 col-xs-4">
    <div class="circle6">
  <img src="<?php echo get_template_directory_uri(); ?>/images/circle6.png" alt="circle1" class="img-responsive img-circle"/>
  <div class="text_over_image"><p>MEMBERSHIP</p></div>
  </div>
  <p style="text-align:center;font-weight:bold">LEARN MORE > </p>
  </div>
</div>

    </div><!-- /.container -->
    </section>

<section class="newsletter-bg">
    <div class="container">

      <div class="row" style="text-align:center">
  <div class="col-md-6 col-sm-6 col-xs-6">
    <p>Young Chefs Academy Zimbabwe is a franchise of Young Chefs Academy Established in April 2003, <br>Young Chefs Academy offers cooking classes to children in a safe environment that encourages discovery and creativity. While learning food preparation skills is the main ingredient at YCA, each class adds a heap of kitchen safety, a scoop of etiquette, a handful of table setting, a pinch of menu planning, and laughter to taste.</p>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-6">
    <p>Summer Camp Registration Now Open! </p>
    <p>Early Bird registration discount now through May 15th</p>
    <p>Jr Chef Camp: Tues-Thurs, 9a-Noon</p>
    <p>Teen Camps in July: Tues-Thurs 1-4</p>
  </div>
  
</div>

    </div><!-- /.container -->
    </section>

<?php
get_footer();
