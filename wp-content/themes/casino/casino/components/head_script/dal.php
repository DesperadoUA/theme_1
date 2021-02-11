<?php
$data = [];
$data['script'] = carbon_get_theme_option( 'head_script' );
$script_top = carbon_get_theme_option( 'head_script_top' );
if(!IS_AMP and !$script_top) include 'view.php';