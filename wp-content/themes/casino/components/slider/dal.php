<?php
if(!wp_is_mobile()){
    $sliders = carbon_get_theme_option( 'sliders' );
    include 'view.php';
}