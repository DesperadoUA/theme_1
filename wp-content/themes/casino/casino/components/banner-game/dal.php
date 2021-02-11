<?php
$data = [];
global $post;
$data['src'] = carbon_get_post_meta( $post->ID, 'banner_game' );
if(!empty($data['src'])) {
    if(IS_AMP) include 'amp_view.php';
    else include 'view.php';
}