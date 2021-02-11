<?php

$data = [];
$data['hide'] = carbon_get_theme_option( 'widget_1_hide' );
if(!$data['hide']) {
    $data['src'] = carbon_get_theme_option( 'widget_1_bg' );
    if(empty($data['src'])) $data['src'] = get_template_directory_uri() . '/images/default-widget.png';

    $data['title'] = carbon_get_theme_option( 'widget_1_title' );
    if(empty($data['title'])) $data['title'] = 'Игра на раздевание';

    $data['text_button'] = carbon_get_theme_option( 'widget_1_text_button' );
    if(empty($data['text_button'])) $data['text_button'] = 'Начать игру';

    $data['link_button'] = carbon_get_theme_option( 'widget_1_link_button' );
    if(empty($data['link_button'])) $data['link_button'] = GLOBAL_REF;

    if(!empty($data['src'])) {
        if(IS_AMP) include 'amp_view.php';
        else include 'view.php';
    }
}

