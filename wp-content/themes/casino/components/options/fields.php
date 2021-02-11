<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Основные настройки' ) )
        ->add_fields(array(
            Field::make('text', 'text_footer', 'Текст в футере'),
            Field::make('text', 'global_ref', 'Глобальная реферальная ссылка'),
            Field::make('checkbox', 'show_category_menu', 'Показ меню категорий на мобильном'),
            Field::make('text', 'number_posts', 'Количество выводимых постов на главной странице'),
            Field::make('color', 'body_color', 'Цвет заднего фона (#0c0731)'),
            Field::make('color', 'header_menu_color', 'Цвет заднего фона меню в хедере (#1c3576)'),
            Field::make('color', 'color_text_main', 'Цвет текста на главной странице'),
            Field::make('color', 'color_heading_main', 'Цвет заголовков'),
            Field::make('image', 'main_bg', 'Картинка для заднего фона основного контента (45x50)')
            ->set_value_type( 'url' ),
            Field::make('color', 'color_nav_menu', 'Цвет текста меню шорткода [nav_menu]'),
            Field::make('textarea', 'head_script', 'Скрипты в head (Не отображается в AMP)'),
            Field::make('checkbox', 'head_script_top', 'Скрипты в head отображать вверху тега </head>'),
        ));
}