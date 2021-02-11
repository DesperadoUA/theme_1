<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'user');
function user()
{
    Container::make('theme_options', __('Users Component'))
        ->set_page_parent('crb_carbon_fields_container.php')
        ->add_fields(array(
            Field::make('text', 'users_ref', 'Ссылка на блок'),
            Field::make('image', 'users_default_image', 'Дефолтное изображение в блоке')
						->set_value_type( 'url' ),
            Field::make( 'complex', 'users_online' )
                ->add_fields( array(
                    Field::make( 'text', 'users_online_name', 'Имена игроков')
                        ->set_required(true)
                        ->set_width(100)
                )),
            Field::make('text', 'users_min', 'Минимальное значение выигрыша'),
            Field::make('text', 'users_max', 'Максимальное значение выигрыша'),
            Field::make('color', 'users_bg', 'Цвет заднего фона'),
            Field::make('checkbox', 'users_hide', 'Скрыть')
        ));
}