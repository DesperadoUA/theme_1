<?php
add_shortcode( 'ref_button', 'ref_button_shortcode');
function ref_button_shortcode($atts){
    $data = [];
    if(!isset($atts['link'])) $data['link'] = DEFAULT_REF;
    else $data['link'] = $atts['link'];

    if(!isset($atts['text'])) $data['text'] = 'Перейти';
    else $data['text'] = $atts['text'];

    return '<a href="'.$data['link'].'" class="ref_button">'.$data['text'].'</a>';
}