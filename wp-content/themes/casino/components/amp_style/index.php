<?php
$header_menu_color = carbon_get_theme_option( 'header_menu_color' );
$main_bg = carbon_get_theme_option( 'main_bg' );
$body_color = carbon_get_theme_option( 'body_color' );

$button_register_color = carbon_get_theme_option( 'button_register_color' );
$button_register_color_text = carbon_get_theme_option( 'button_register_color_text' );

$button_enter_color = carbon_get_theme_option( 'button_enter_color' );
$button_enter_color_text = carbon_get_theme_option( 'button_enter_color_text' );

$jackpot_bg = carbon_get_theme_option( 'jackpot_bg' );
$users_bg = carbon_get_theme_option( 'users_bg' );

$button_register_after_banner_color = carbon_get_theme_option( 'button_register_after_banner_color' );
$button_register_after_banner_color_text = carbon_get_theme_option( 'button_register_after_banner_color_text' );

$widget_1_color_button = carbon_get_theme_option( 'widget_1_color_button' );
$widget_1_color_button_text = carbon_get_theme_option( 'widget_1_color_button_text' );

$widget_2_color_button = carbon_get_theme_option( 'widget_2_color_button' );
$widget_2_color_button_text = carbon_get_theme_option( 'widget_2_color_button_text' );

$top_win_color_button = carbon_get_theme_option('top_win_color_button');
$top_win_color_button_text = carbon_get_theme_option('top_win_color_button_text');

$color_text_main = carbon_get_theme_option( 'color_text_main' );

$ref_button_color = carbon_get_theme_option( 'ref_button_color' );
$ref_button_color_text = carbon_get_theme_option( 'ref_button_color_text' );
$ref_button_width = carbon_get_theme_option( 'ref_button_width' );

$color_nav_menu = carbon_get_theme_option( 'color_nav_menu' );

$sticky_buttons_color_1 = carbon_get_theme_option( 'sticky_buttons_color_1' );
$sticky_buttons_color_text_1 = carbon_get_theme_option( 'sticky_buttons_color_text_1' );
$sticky_buttons_color_2 = carbon_get_theme_option( 'sticky_buttons_color_2' );
$sticky_buttons_color_text_2 = carbon_get_theme_option( 'sticky_buttons_color_text_2' );

$sticky_buttons_bg = carbon_get_theme_option( 'sticky_buttons_bg' );
$sticky_buttons_close_bg = carbon_get_theme_option( 'sticky_buttons_close_bg' );
$color_heading_main = carbon_get_theme_option( 'color_heading_main' );

$reviews_info_background = carbon_get_theme_option( 'reviews_info_background' );
$reviews_background = carbon_get_theme_option( 'reviews_background' );
$reviews_answer_background = carbon_get_theme_option( 'reviews_answer_background' );
$reviews_text_color = carbon_get_theme_option( 'reviews_text_color' );
$reviews_input_text_color = carbon_get_theme_option( 'reviews_input_text_color' );
$reviews_input_color = carbon_get_theme_option( 'reviews_input_color' );
$reviews_button_color = carbon_get_theme_option( 'reviews_button_color' );
$reviews_button_text = carbon_get_theme_option( 'reviews_button_text' );
$color_heading_game_card = carbon_get_theme_option( 'color_heading_game_card' );
$users_color_text_before = carbon_get_theme_option( 'users_color_text_before' );
$users_color_text = carbon_get_theme_option( 'users_color_text' );
?>
<style amp-boilerplate>
    body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
        -moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
        -ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
        animation:-amp-start 8s steps(1,end) 0s 1 normal both}
    @-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    @-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    @-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    @-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    @keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
</style>
<noscript>
    <style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style>
</noscript>
<style amp-custom>
        <?php
           include THEME_ROOT.'/css/main.css';
           include THEME_ROOT.'/webpack_dist/bundle.css';
           include THEME_ROOT.'/components/header_menu/amp_style.css';
         ?>
    <?php
        if(!empty($header_menu_color)) {
            echo "
                .header:after {
                    background-color:{$header_menu_color};
                }
            ";
        }
        if(!empty($main_bg)) {
            echo "
                .main-wrapper {
                    background:#1a1e26 url({$main_bg}) repeat 50% 0;
                }
            ";
        }
        if(!empty($body_color)) {
          echo "
            body {
              background: {$body_color};
            }
          ";
        }
        if(!empty($button_register_color)) {
          echo "
            .btn-reg {
              color: {$button_register_color};
            }
          ";
        }
        if(!empty($button_register_color_text)) {
          echo "
            .btn-reg span {
              color: {$button_register_color_text};
            }
          ";
        }
        if(!empty($button_enter_color)) {
          echo "
            .btn_header_enter {
              color: {$button_enter_color};
            }
          ";
        }
        if(!empty($button_enter_color_text)) {
          echo "
            .btn_header_enter span {
              color: {$button_enter_color_text};
            }
          ";
        }
        if(!empty($jackpot_bg)) {
          echo "
            .jackpot__value {
             background: {$jackpot_bg}
            }
          ";
        }
        if(!empty($users_bg)) {
          echo "
            .winner__block {
             background: {$users_bg}
            }
          ";
        }
        if(!empty($button_register_after_banner_color)) {
          echo "
            .btn_register_after_slider {
             color: {$button_register_after_banner_color}
            }
          ";
        }
        if(!empty($button_register_after_banner_color_text)) {
          echo "
            .btn_register_after_slider span {
             color: {$button_register_after_banner_color_text }
            }
          ";
        }
        if(!empty($widget_1_color_button)) {
          echo "
            .widget_1 {
             color: {$widget_1_color_button}
            }
          ";
        }
        if(!empty($widget_1_color_button_text)) {
          echo "
            .widget_1 span {
             color: {$widget_1_color_button_text}
            }
          ";
        }
        if(!empty($widget_2_color_button)) {
          echo "
            .widget_2 {
             color: {$widget_2_color_button}
            }
          ";
        }
        if(!empty($widget_2_color_button_text)) {
          echo "
            .widget_2 span {
             color: {$widget_2_color_button_text}
            }
          ";
        }
        if(!empty($top_win_color_button)) {
          echo "
            .top_win {
             color: {$top_win_color_button};
            }
          ";
        }
        if(!empty($top_win_color_button_text)) {
          echo "
            .top_win span {
             color: {$top_win_color_button_text};
            }
          ";
        }
        if(!empty($color_text_main)) {
            echo "
              .main-content {
               color: {$color_text_main};
              }
              .intro {
               color: {$color_text_main};
              }
            ";
        }
        if(!empty($ref_button_color)) {
          echo "
           main .ref_button {
             background: {$ref_button_color};
            }";
        }
        if(!empty($ref_button_color_text)) {
          echo "
           main .ref_button {
             color: {$ref_button_color_text};
            }";
        }
        if(!empty($ref_button_width)) {
          echo "
            main .ref_button {
             width: {$ref_button_width}%;
            }";
        }
        if(!empty($color_nav_menu)) {
          echo "
           .nav_menu a {
             color: {$color_nav_menu};
            }";
        }
        if(!empty($sticky_buttons_color_1)) {
            echo "
             .sticky_buttons_container .sticky_buttons_first {
                background: {$sticky_buttons_color_1};
            }";
        }
        if(!empty($sticky_buttons_color_text_1)) {
            echo "
             .sticky_buttons_container .sticky_buttons_first {
                color: {$sticky_buttons_color_text_1};
            }";
        }
        if(!empty($sticky_buttons_color_2)) {
            echo "
             .sticky_buttons_container .sticky_buttons_second {
                background: {$sticky_buttons_color_2};
            }";
        }
        if(!empty($sticky_buttons_color_text_2)) {
            echo "
             .sticky_buttons_container .sticky_buttons_second {
                color: {$sticky_buttons_color_text_2};
            }";
        }
        if(!empty($sticky_buttons_bg)) {
          echo "
             .sticky_buttons {
                background: {$sticky_buttons_bg};
            }";
        }
        if(!empty($sticky_buttons_close_bg)) {
          echo "
             .close {
                background: {$sticky_buttons_close_bg};
            }";
        }
        if(!empty($color_heading_main)) {
          echo "
            .main-content h1, .main-content h2, .main-content h3, .main-content h4 {
                color: {$color_heading_main};
            }";
        }
        if(!empty($reviews_info_background)) {
          echo "
            .comments_row_info {
                background: {$reviews_info_background};
            }";
        }
        if(!empty($reviews_background)) {
          echo "
            .comments_row_2 {
                background: {$reviews_background};
            }";
        }
        if(!empty($reviews_answer_background)) {
          echo "
            .comments_row_answer .comments_row_desc {
                background: {$reviews_answer_background};
            }";
        }
        if(!empty($reviews_text_color)) {
          echo "
            .main-content .review_2 {
                color: {$reviews_text_color};
            }";
        }
        if(!empty($reviews_input_text_color)) {
          echo "
            .comment_form_input_wrapper .input_name, .comment_form_input_wrapper .input_email, .comment_form_comment .textarea_comment {
                color: {$reviews_input_text_color};
            }";
        }
        if(!empty($reviews_input_color)) {
          echo "
            .comment_form_input_wrapper .input_name, .comment_form_input_wrapper .input_email, .comment_form_comment .textarea_comment {
                background: {$reviews_input_color};
            }";
        }
        if(!empty($reviews_button_color)) {
          echo "
            .submit_ajax_comment {
                background: {$reviews_button_color};
            }";
        }
        if(!empty($reviews_button_text)) {
          echo "
            .submit_ajax_comment {
                color: {$reviews_button_text};
            }";
        }
        if(!empty($color_heading_game_card)) {
          echo "
            .games-item__ttl {
                color: {$color_heading_game_card};
            }";
        }
        if(!empty($users_color_text_before)) {
          echo "
            .winner__ttl {
                color: {$users_color_text_before};
            }";
        }
        if(!empty($users_color_text)) {
          echo "
            .winner__name {
                color: {$users_color_text};
            }";
        }
        ?>
</style>