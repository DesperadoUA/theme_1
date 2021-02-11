<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'banner_game' );
function banner_game() {

    $arrPostTypes = ['game'];

    /*--------------------------Settings----------------------------------------*/

    /*--------------------------Add fields on posts----------------------------------------*/

    Container::make( 'post_meta', __( 'Превью игры' ) )
        ->show_on_post_type($arrPostTypes)
        ->add_tab( __('Превью игры'), array(
            Field::make( 'image', 'banner_game', '' )
                ->set_value_type( 'url' ),
            )
        );
}