<?php
$data = [];

$data['button_register_header'] = carbon_get_theme_option( 'button_register_header' );
if(empty($data['button_register_header'])) $data['button_register_header'] = 'Регистрация за 20 секунд';
$data['button_register_link'] = carbon_get_theme_option( 'button_register_link' );
if(empty($data['button_register_link'])) $data['button_register_link'] = GLOBAL_REF;

$data['button_enter_header'] = carbon_get_theme_option( 'button_enter_header' );
if(empty($data['button_enter_header'])) $data['button_enter_header'] = 'Войти';
$data['button_enter_link'] = carbon_get_theme_option( 'button_enter_link' );
if(empty($data['button_enter_link'])) $data['button_enter_link'] = GLOBAL_REF;


$data['social_link'] = carbon_get_theme_option( 'button_social_link' );
if(empty($data['social_link'])) $data['social_link'] = GLOBAL_REF;
$data['social'] = [
    'vk' => carbon_get_theme_option( 'button_social_vk' ),
    'mailru' => carbon_get_theme_option( 'button_social_mailru' ),
    'ok' => carbon_get_theme_option( 'button_social_ok' ),
    'yandex' => carbon_get_theme_option( 'button_social_yandex' ),
    'fb' => carbon_get_theme_option( 'button_social_fb' ),
    'twitter' => carbon_get_theme_option( 'button_social_twitter' )
];

include 'view.php';
