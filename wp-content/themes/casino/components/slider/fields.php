<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'Slider');
function Slider()
{
    Container::make('theme_options', __('Slider'))
        ->set_page_parent('crb_carbon_fields_container.php')
        ->add_fields(array(
            Field::make( 'complex', 'sliders' )
                ->add_fields( array(
                    Field::make( 'text', 'slider_link', 'Ссылка на слайд'),
                    Field::make( 'image', 'slider_img', 'Ссылка на слайд')
                        ->set_value_type( 'url' ),
                    Field::make( 'text', 'slider_text_1', 'Белый текст'),
                    Field::make( 'text', 'slider_text_2', 'Желтый текст'),
                    Field::make( 'text', 'slider_button_text', 'Текст на кнопке'),
                    Field::make( 'color', 'slider_button_color', 'Цвет кнопки'),
                ))
        ));
}