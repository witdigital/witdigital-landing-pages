<?php

/**
 * Filename: block_scripts.php
 * Description: Inline Javascript for an instance of this block
 * Author: @ryanemitchell
 */

//todo implement php-uglifyjs @ryanemitchell

?>

<script id='<?php echo $blockID ?>-script'>

    document.addEventListener("DOMContentLoaded", function() {


        $('.accordionTitle').click(function() {
            $( this ).parent().toggleClass('active');
        } );


    });



</script>
