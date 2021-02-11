<?php
$DEFAULT_TEXT_1 = 'Регистрация';
$DEFAULT_TEXT_2 = 'Скачать';
$DEFAULT_LINK_1 = DEFAULT_REF;
$DEFAULT_LINK_2 = '/download/';

$sticky_show = carbon_get_theme_option( 'sticky_buttons_show' );
if($sticky_show) {
    $sticky_buttons_text_1 = carbon_get_theme_option( 'sticky_buttons_text_1' );
    if(empty($sticky_buttons_text_1)) $sticky_buttons_text_1 = $DEFAULT_TEXT_1;
    $sticky_buttons_link_1 = carbon_get_theme_option( 'sticky_buttons_link_1' );
    if(empty($sticky_buttons_link_1)) $sticky_buttons_link_1 = $DEFAULT_LINK_1;
    $sticky_buttons_hide_1 = carbon_get_theme_option( 'sticky_buttons_hide_1' );

    $sticky_buttons_text_2 = carbon_get_theme_option( 'sticky_buttons_text_2' );
    if(empty($sticky_buttons_text_2)) $sticky_buttons_text_2 = $DEFAULT_TEXT_2;
    $sticky_buttons_link_2 = carbon_get_theme_option( 'sticky_buttons_link_2' );
    if(empty($sticky_buttons_link_2)) $sticky_buttons_link_2 = $DEFAULT_LINK_2;
    $sticky_buttons_hide_2 = carbon_get_theme_option( 'sticky_buttons_hide_2' );

    include 'view.php';
}