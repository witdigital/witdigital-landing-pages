<?php

/*
 * Template Name: Wit Landing Page
 * Description: Wit Landing Page Template
 */


/* ==========================================================================
   Super basic template to get you started :)
   ========================================================================== */


get_header(); ?>

<div class="wit-landing-page container mx-auto p-4"> <!-- Start of .wit-landing-page -->

	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content() ?>
	<?php endwhile;  ?>


    <section class="section-name mx-auto p-4 m-3.5">
       This an example of a section.
    </section>

</div> <!-- End of .wit-landing-page -->


<?php get_footer(); ?>
