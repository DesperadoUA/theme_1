<?php
$data = [];

$data['button_register_after_banner_text'] = carbon_get_theme_option( 'button_register_after_banner_text' );
if(empty($data['button_register_after_banner_text'])) $data['button_register_after_banner_text'] = 'Регистрация';
$data['button_register_after_banner_link'] = carbon_get_theme_option( 'button_register_after_banner_link' );
$data['button_register_after_banner_mobile'] = carbon_get_theme_option( 'button_register_after_banner_mobile' );

if(wp_is_mobile()){
    if($data['button_register_after_banner_mobile']) include 'view.php';
} else {
    include 'view.php';
}
