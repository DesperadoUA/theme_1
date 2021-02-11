<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'jackpot' );
function jackpot() {
    Container::make( 'theme_options', __( 'Jackpot' ) )
        ->set_page_parent('crb_carbon_fields_container.php')
        ->add_fields(array(
            Field::make('text', 'jackpot_text', 'Текст джекпота'),
            Field::make('text', 'jackpot_link', 'Ссылка на блоке'),
            Field::make('text', 'jackpot_text_before', 'Текст перед блоком'),
            Field::make('color', 'jackpot_bg', 'Цвет заднего фона')
        ));
}