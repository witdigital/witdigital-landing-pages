<?php

/**
 * Filename: acf_blocks.php
 */



/* ===  Include each block  ==== */
if( file_exists(plugin_dir_path(__FILE__) . 'wit-acf-starter-block/register_block.php') ) {
	include plugin_dir_path(__FILE__) . 'wit-acf-starter-block/register_block.php';
}
