<?php

/*
 * Template Name: Wit Landing Page
 * Description: Wit Landing Page Template
 */


/* ==========================================================================
   Super basic template to get you started :)
   ========================================================================== */


get_header(); ?>

<!-- can be commented out,renders the editor content -->
<!-- <?php while ( have_posts() ) : the_post(); ?> 
    <?php the_content() ?>
	<?php endwhile;  ?> -->

<div class="wit-landing-page container max-w-full mx-auto py-4"> <!-- Start of .wit-landing-page -->

<?php include_once('service-page-modules/hero.php') ?>
<?php include_once('service-page-modules/intro.php') ?>
<?php include_once('service-page-modules/about.php') ?>
<?php include_once('service-page-modules/cta.php') ?>
<?php include_once('service-page-modules/guarantees.php') ?>
<?php include_once('service-page-modules/content.php') ?>
<?php include_once('service-page-modules/testimonials.php') ?>
   

</div> <!-- End of .wit-landing-page -->


<?php get_footer(); ?>
