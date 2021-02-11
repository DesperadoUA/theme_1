<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'Reviews');
function Reviews()
{
    Container::make('theme_options', __('Reviews Settings'))
        ->set_page_parent('crb_carbon_fields_container.php')
        ->add_fields(array(
            Field::make( 'color', 'reviews_info_background', 'Задний цвет имени и даты'),
            Field::make( 'color', 'reviews_background', 'Задний фон всего отзыва'),
            Field::make( 'color', 'reviews_answer_background', 'Задний фон ответа'),
            Field::make( 'color', 'reviews_text_color', 'Цвет теста'),
            Field::make( 'color', 'reviews_input_color', 'Цвет инпутов'),
            Field::make( 'color', 'reviews_input_text_color', 'Цвет текста инпутов'),
            Field::make( 'color', 'reviews_button_color', 'Цвет кнопки'),
            Field::make( 'color', 'reviews_button_text', 'Цвет текста'),
        ));
}