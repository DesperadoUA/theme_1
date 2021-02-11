<?php
$data = [];
$data['hide'] = carbon_get_theme_option( 'top_win_hide' );
if(!$data['hide']) {
    $data['title'] =  carbon_get_theme_option( 'top_win_title' );
    if(empty($data['title'])) $data['title'] = 'ТОП 5 ВЫИГРЫШЕЙ';

    $data['link'] = carbon_get_theme_option( 'top_win_link' );
    if(empty($data['link'])) $data['link'] = GLOBAL_REF;

    $data['button_text'] = carbon_get_theme_option('top_win_button_text');
    if(empty($data['button_text'])) $data['button_text'] = 'Перейти';

    $data['top_players'] = carbon_get_theme_option('top_players');
    if(empty($data['top_players'])) {
        $data['top_players'] = [
            [
                'top_player_name' => 'Player1',
                'top_player_win' => '5.000 ₽'
            ],
            [
                'top_player_name' => 'Player2',
                'top_player_win' => '4.500 ₽'
            ],
            [
                'top_player_name' => 'Player3',
                'top_player_win' => '5.500 ₽'
            ],
            [
                'top_player_name' => 'Player4',
                'top_player_win' => '1.500 ₽'
            ],
            [
                'top_player_name' => 'Player5',
                'top_player_win' => '1.500 ₽'
            ]

        ];
    }

    if(!empty($data['top_players'])) include 'view.php';
}
