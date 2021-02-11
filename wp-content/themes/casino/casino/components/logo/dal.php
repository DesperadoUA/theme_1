<?php
$data = [];
$data['src'] = carbon_get_theme_option( 'logo' );
$data['alt'] = carbon_get_theme_option( 'logo_alt' );
$data['title'] = carbon_get_theme_option( 'logo_title' );
if(empty($data['alt'])) $data['alt'] = 'казино';
if(empty($data['title'])) $data['title'] = 'казино';
if(empty($data['src'])) $data['src'] =  get_template_directory_uri().'/images/logo.png';
if(!IS_AMP)include 'view.php';
else include 'view-amp.php';