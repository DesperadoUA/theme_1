<?php
$data = [];
global $post;
$data['main_page_link'] = '/';
if(IS_AMP) $data['main_page_link'] = '/amp/';
$data['title'] = get_the_title($post->ID);
include 'view.php';