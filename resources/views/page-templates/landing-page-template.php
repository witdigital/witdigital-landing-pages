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

<!-- Must wrap div in element 'main' to pull in typography-main.scss from theme -->    
<main class="main">

    <div class="container max-w-full py-4 mx-auto wit-landing-page"> <!-- Start of .wit-landing-page -->

    <?php include_once('service-page-modules/hero.php') ?>
    <?php include_once('service-page-modules/intro.php') ?>
    <?php include_once('service-page-modules/about.php') ?>
    <?php include_once('service-page-modules/cta.php') ?>
    <?php include_once('service-page-modules/guarantees.php') ?>

    <?php include_once('service-page-modules/content.php') ?>


    <?php include('service-page-modules/testimonials.php') ?>      


    

    </div> <!-- End of .wit-landing-page -->

</main>


<?php get_footer(); ?>
