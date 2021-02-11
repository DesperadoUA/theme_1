<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'payments' );
function payments() {
    Container::make( 'theme_options', __( 'Payments' ) )
        ->set_page_parent('crb_carbon_fields_container.php')
        ->add_fields(array(
            Field::make( 'complex', 'payments' )
                ->add_fields( array(
                    Field::make( 'text', 'alt', 'Альт картинки')
                        ->set_required(true)
                        ->set_width(50),
                    Field::make( 'text', 'title', 'Тайтл картинки')
                        ->set_required(true)
                        ->set_width(50),
                    Field::make( 'text', 'width', 'Ширина картинки')
                        ->set_required(true)
                        ->set_width(50),
                    Field::make( 'text', 'height', 'Высота картинки')
                        ->set_required(true)
                        ->set_width(50),
                    Field::make( 'image', 'src', 'Картинка производителя')
                        ->set_required(true)
                        ->set_value_type( 'url' )
                )),
        ));
}