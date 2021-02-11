<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'ref_button');
function ref_button()
{
    Container::make('theme_options', __('Button Shortcode'))
        ->set_page_parent('crb_carbon_fields_container.php')
        ->add_fields(array(
            Field::make('color', 'ref_button_color', 'Цвет кнопки')
                ->set_help_text( 'Название шорткода [ref_button link="/link.html/" text="Text"]' ),
            Field::make('color', 'ref_button_color_text', 'Цвет текста кнопки'),
            Field::make('text', 'ref_button_width', 'Ширина кнопки'),
        ));
}