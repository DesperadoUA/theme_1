<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'widget_1' );
function widget_1() {
    Container::make( 'theme_options', __( 'Widget_1' ) )
        ->set_page_parent('crb_carbon_fields_container.php')
        ->add_fields(array(
               Field::make('image', 'widget_1_bg', 'Баннер 211x360')->set_value_type( 'url' ),
               Field::make('text', 'widget_1_title', 'Заголовок'),
               Field::make('text', 'widget_1_text_button', 'Текст на кнопке'),
               Field::make('text', 'widget_1_link_button', 'Ссылка на кнопке'),
               Field::make('color', 'widget_1_color_button', 'Цвет кнопки'),
               Field::make('color', 'widget_1_color_button_text', 'Цвет текста кнопки'),
               Field::make('checkbox', 'widget_1_hide', 'Скрыть')
           ));
}