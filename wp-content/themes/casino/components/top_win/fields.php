<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'top_win' );
function top_win() {
    Container::make( 'theme_options', __( 'Top Win' ) )
        ->set_page_parent('crb_carbon_fields_container.php')
        ->add_fields(array(
               Field::make('text', 'top_win_title', 'Заголовок'),
               Field::make('text', 'top_win_button_text', 'Текст на кнопке'),
               Field::make('text', 'top_win_link', 'Ссылка'),
               Field::make('color', 'top_win_color_button', 'Цвет кнопки'),
               Field::make('color', 'top_win_color_button_text', 'Цвет текста кнопки'),
               Field::make( 'complex', 'top_players' )
                ->add_fields( array(
                    Field::make( 'text', 'top_player_name', 'Имя игрока')
                        ->set_required(true)
                        ->set_width(50),
                    Field::make( 'text', 'top_player_win', 'Выигрыш')
                        ->set_required(true)
                        ->set_width(50)
                )),
               Field::make('checkbox', 'top_win_hide', 'Скрыть')
           ));
}