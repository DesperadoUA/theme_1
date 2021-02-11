<?php
$LIMIT = carbon_get_theme_option( 'number_posts' );
if(empty($LIMIT)) $LIMIT = 12;

$data = [];
$posts = get_posts( array(
    'numberposts' => $LIMIT,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'post_type'   => 'game',
) );
foreach ($posts as $item){
    $data[] = [
        'id' => $item->ID,
        'src' => get_the_post_thumbnail_url($item->ID, 'medium'),
        'post_title' => $item->post_title,
        'permalink' => get_permalink($item->ID),
        'ref' => GLOBAL_REF
    ];
}
if(!empty($data)) {
  if(IS_AMP) include 'amp_view.php';
  else include 'view.php';
}