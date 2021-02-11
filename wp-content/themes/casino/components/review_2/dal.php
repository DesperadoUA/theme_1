<?php
$data = [];
$data_children = [];
$settings = [];
$settings['post_type'] = '';

    global $post;
    $settings['post_id'] = $post->ID;
    $data['title'] = get_the_title($post->ID);
    $args = array(
        'number'  => 10,
        'orderby' => 'comment_date',
        'order'   => 'DESC',
        'status'  => 'approve',
        'post_id' => $post->ID,
        'type'    => ''
    );
    $comments = get_comments($args);
    foreach ($comments as $comment) {
        if($comment->comment_parent === '0') {
            $data['id'][] = $comment->comment_ID;
            $data['comment_author'][] = $comment->comment_author;
            $data['comment_content'][] = $comment->comment_content;
            $data['comment_date'][] = $comment->comment_date;
        }
    }
    $args = array(
        'number'  => 10,
        'orderby' => 'comment_date',
        'order'   => 'ASC',
        'status'  => 'approve',
        'post_id' => $post->ID,
        'type'    => ''
    );
    $comments_asc = get_comments($args);
    foreach ($comments_asc as $comment) {
        if($comment->comment_parent !== '0') {
            $data_children['id'][] = $comment->comment_ID;
            $data_children['id_parent'][] = $comment->comment_parent;
            $data_children['comment_author'][] = $comment->comment_author;
            $data_children['comment_content'][] = $comment->comment_content;
            $data_children['comment_date'][] = $comment->comment_date;
        }
    }
    if(array_key_exists('comment_date', $data)){
        for($i=0; $i<count($data['comment_date']); $i++){
            $data['comment_date'][$i] = substr($data['comment_date'][$i], 0,10);
        }
    }
    if(array_key_exists('comment_date', $data_children)){
        for($i=0; $i<count($data_children['comment_date']); $i++){
            $data_children['comment_date'][$i] = substr($data_children['comment_date'][$i], 0,10);
        }
    }

if(IS_AMP) {
    if(array_key_exists('comment_date', $data)) include 'view.php';
} else {
    if(array_key_exists('comment_date', $data)) include 'view.php';
}
