<?php
$hide = carbon_get_theme_option( 'users_hide' );

if(!$hide) {
    $MIN_WIN = 2000;
    $MAX_WIN = 5000;
    $DEFAULT_NAME = 'Player***';
    $DEFAULT_IMAGE = carbon_get_theme_option( 'users_default_image' );
	if(empty($DEFAULT_IMAGE)) $DEFAULT_IMAGE = get_template_directory_uri().'/images/default.png';

    $data = [];
//---------- User src ---------//
    $posts = get_posts( array(
        'numberposts' => -1,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'include'     => array(),
        'exclude'     => array(),
        'post_type'   => 'game',
    ) );
	if(!empty($posts)) {
	$random_post = random_int(0, count($posts)-1);
    $data['src'] = get_the_post_thumbnail_url($posts[$random_post]->ID, 'medium');
    if(empty($data['src'])) $data['src'] = $DEFAULT_IMAGE;	
	} else {
		$data['src'] = $DEFAULT_IMAGE;
	}
    
//---------- End User src ---------//

//---------- Users win ---------//
    $min_win = carbon_get_theme_option( 'users_min' );
    $max_win = carbon_get_theme_option( 'users_max' );
    if(empty($min_win) or empty($max_win)) {
        $min_win = $MIN_WIN;
        $max_win = $MAX_WIN;
    }
    $data['win_value'] = random_int($min_win, $max_win);
//---------- End Users win ------------//

//-------- Users link --------//
    $data['link'] = carbon_get_theme_option( 'users_ref' );
    if(empty($data['link'])) $data['link'] = GLOBAL_REF;
//-------- End Users link --------//

//---------- User name ---------//
    $all_users = carbon_get_theme_option( 'users_online' );
    if(count($all_users) === 0) {
        $data['name'] = $DEFAULT_NAME;
    } else {
        $random_name = random_int(0, count($all_users)-1);
        $data['name'] = $all_users[$random_name]['users_online_name'];
    }
//---------- End User name ---------//

    if(IS_AMP) include 'amp_view.php';
    else include 'view.php';
}