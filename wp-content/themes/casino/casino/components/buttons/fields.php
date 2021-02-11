<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'buttons' );
function buttons() {
    Container::make( 'theme_options', __( 'Buttons' ) )
        ->set_page_parent('crb_carbon_fields_container.php')
        ->add_fields(array(
            Field::make( 'separator', 'crb_separator_1', __( 'Кнопка регистрации в хедере' ) ),
            Field::make('text', 'button_register_header', 'Текст кнопки регистрации в хедере'),
            Field::make('color', 'button_register_color', 'Цвет кнопки регистрации в хедере'),
            Field::make('color', 'button_register_color_text', 'Цвет текста кнопки регистрации в хедере'),
            Field::make('text', 'button_register_link', 'Ссылка кнопки регистрации в хедере'),

            Field::make( 'separator', 'crb_separator_2', __( 'Кнопка входа в хедере' ) ),
            Field::make('text', 'button_enter_header', 'Текст кнопки входа в хедере'),
            Field::make('color', 'button_enter_color', 'Цвет кнопки входа в хедере'),
            Field::make('color', 'button_enter_color_text', 'Цвет текста кнопки входа в хедере'),
            Field::make('text', 'button_enter_link', 'Ссылка кнопки входа в хедере'),

            Field::make( 'separator', 'crb_separator_3', __( 'Кнопка регистрации под баннером' ) ),
            Field::make('text', 'button_register_after_banner_text', 'Текст кнопки регистрации после баннера'),
            Field::make('color', 'button_register_after_banner_color', 'Цвет кнопки регистрации после баннера'),
            Field::make('color', 'button_register_after_banner_color_text', 'Цвет текста кнопки регистрации после баннера'),
            Field::make('text', 'button_register_after_banner_link', 'Ссылка кнопки регистрации после баннера'),
            Field::make('checkbox', 'button_register_after_banner_mobile', 'Отображение на мобильном кнопки регистрации после баннера'),

            Field::make( 'separator', 'crb_separator_4', __( 'Кнопки регистрации соц сетей' ) ),
            Field::make('text', 'button_social_link', 'Ссылка на соц сетях'),
            Field::make('checkbox', 'button_social_vk', 'Не отображать VK'),
            Field::make('checkbox', 'button_social_mailru', 'Не отображать Mail.ru'),
            Field::make('checkbox', 'button_social_ok', 'Не отображать Ok'),
            Field::make('checkbox', 'button_social_yandex', 'Не отображать Yandex'),
            Field::make('checkbox', 'button_social_fb', 'Не отображать Fb'),
            Field::make('checkbox', 'button_social_twitter', 'Не отображать Twitter'),

        ));
}