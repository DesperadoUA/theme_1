<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'add_content_2' );
function add_content_2() {
    $arrPostTypes = ['post', 'page'];
    Container::make( 'post_meta', __( 'Контент 2' ) )
        ->show_on_post_type($arrPostTypes)
        ->add_tab( __('Контент 2'), array(
            Field::make( 'rich_text', 'content_2', 'Контент 2' ),
        ) );
}