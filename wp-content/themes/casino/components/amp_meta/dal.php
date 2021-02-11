<?php
$data = [];
if($post->ID == ID_FRONT or is_single()) {
    $data['title'] = get_post_meta($post->ID, '_aioseop_title', true);
    $data['description'] = get_post_meta($post->ID, '_aioseop_description', true);
}
include 'view.php';