<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Настройки темы', 'crb' ) )
    ->add_tab('Общие настройки', array(
            Field::make( 'text', 'company', 'Компания' )->set_width(100),
            Field::make( 'text', 'inn', 'ИНН' )->set_width(100),
            Field::make( 'text', 'ogrn', 'ОГРН' )->set_width(100),
            Field::make( 'text', 'email', 'e-mail' )->set_width(100),
            Field::make( 'text', 'adress', 'Адрес' )->set_width(100),
            Field::make( 'text', 'adress_ur', 'Адрес юридический' )->set_width(100),
            Field::make( 'text', 'worck_day', 'Дни работы' )->set_width(100),
            Field::make( 'text', 'worck_time', 'Время работы' )->set_width(100),
            Field::make( 'text', 'phone', 'Телефон для связи' )->set_width(100),
            Field::make( 'text', 'email_send', 'Почта для отправки' )->set_width(100),
            Field::make( 'text', 'tg_token', 'Токен Телеграм' )->set_width(100),
            Field::make( 'text', 'tg_chats', 'Чат Телеграмм' )->set_width(100),
        ) );

    Container::make( 'term_meta', __( 'Дополнительные поля для категорий', 'crb' ) )
    ->where( 'term_taxonomy', '=', 'category' ) // only show our new field for categories
    ->add_fields( array(
        Field::make('image', 'page_head_img', 'Фото в баннере страницы'),
    ) );

    



    Container::make('post_meta', 'contacts_fild', 'Для контактов')
    ->where('post_template', '=', 'page-contacts.php')
    ->add_fields(array(
        Field::make('complex', 'reviews_service_centers', 'Сервисные центры')
        ->add_fields(array(
            Field::make('text', 'adres', 'Адрес сервиса')
                ->set_width(50),
            Field::make('textarea', 'map', 'Фрейм карты')
                ->set_width(50),

        ))    
    ));

       
}


add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}