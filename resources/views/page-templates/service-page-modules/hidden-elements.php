<?php

// Get values from "Page Options - Hide Elements":

if( have_rows('witlandingpages_elements_to_hide') ):
    while( have_rows('witlandingpages_elements_to_hide') ):the_row();

    $test_var = (get_sub_field('witlandingpages_hidden_element')) ? get_sub_field('witlandingpages_hidden_element') : '' ; ?>

<script>

    jQuery(document).ready(function($){
    $("<?php echo $test_var ?>").hide();

    });

</script>



<?php endwhile;

endif;
