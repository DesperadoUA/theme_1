<?php
$data = [];
global $post;
$post_id = $post->ID;
$data['content'] =  carbon_get_post_meta( $post_id, 'content_2' );
$data['content'] = do_shortcode($data['content']);
$data['content'] = parseAmpContent($data['content']);
if(!empty($data['content'])) include 'view.php';