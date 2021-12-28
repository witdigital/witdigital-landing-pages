<?php

/**
 * Filename: acf_blocks.php
 */

$witcom_breakpoint_md = '1024px';


if( file_exists(plugin_dir_path(__FILE__) . 'wlp-hero-block/register_block.php') ) {
	include plugin_dir_path(__FILE__) . 'wlp-hero-block/register_block.php';
}