<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'sticky_buttons' );
function sticky_buttons() {
    Container::make( 'theme_options', __( 'Sticky Buttons' ) )
        ->set_page_parent('crb_carbon_fields_container.php')
        ->add_fields(array(
            Field::make( 'separator', 'sticky_buttons_separator_1', __( 'Настроцки первой кнопки' ) ),
            Field::make('text', 'sticky_buttons_text_1', 'Текст кнопки'),
            Field::make('text', 'sticky_buttons_link_1', 'Ссылка кнопки'),
            Field::make('color', 'sticky_buttons_color_1', 'Цвет заднего фона кнопки'),
            Field::make('color', 'sticky_buttons_color_text_1', 'Цвет текста кнопки'),
            Field::make('checkbox', 'sticky_buttons_hide_1', 'Скрыть кнопку'),
            Field::make( 'separator', 'sticky_buttons_separator_2', __( 'Настроцки второй кнопки' ) ),
            Field::make('text', 'sticky_buttons_text_2', 'Текст кнопки'),
            Field::make('text', 'sticky_buttons_link_2', 'Ссылка кнопки'),
            Field::make('color', 'sticky_buttons_color_2', 'Цвет заднего фона кнопки'),
            Field::make('color', 'sticky_buttons_color_text_2', 'Цвет текста кнопки'),
            Field::make('checkbox', 'sticky_buttons_hide_2', 'Скрыть кнопку'),
            Field::make( 'separator', 'sticky_buttons_separator_3', __( 'Настроцки заднего фона секции' ) ),
            Field::make('color', 'sticky_buttons_bg', 'Цвет заднего фона секции'),
            Field::make('color', 'sticky_buttons_close_bg', 'Цвет заднего фона нопки закрытия'),
            Field::make('checkbox', 'sticky_buttons_show', 'Показать кнопки'),
        ));
}