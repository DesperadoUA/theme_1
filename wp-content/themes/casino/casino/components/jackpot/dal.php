<?php
$data = [];
$data['text'] = carbon_get_theme_option( 'jackpot_text' );
if(empty($data['text'])) $data['text'] = '1,800,999,64 ₽';
$data['link'] = carbon_get_theme_option( 'jackpot_link' );
if(empty($data['link'])) $data['link'] = GLOBAL_REF;
$data['text_before'] = carbon_get_theme_option( 'jackpot_text_before' );
if(empty($data['text_before'])) $data['text_before'] = 'Джекпот казино';

include 'view.php';