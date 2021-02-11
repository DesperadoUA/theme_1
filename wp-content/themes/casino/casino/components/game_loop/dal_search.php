<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = [
    'post_type'      => ['game', 'news'],
    's'              => get_search_query(),
    'posts_per_page' => 16,
    'paged'          => $paged
];
$wp_query = new WP_Query($args);

foreach ($wp_query->posts as $item){
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
} else {
    include 'not_found.php';
}