<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Настройки темы', 'crb' ) )
    ->add_tab('Общие настройки', array(
            Field::make( 'text', 'phone', 'Телефон' )->set_width(100),
            Field::make( 'text', 'adress_ur', 'Юридический адрес' )->set_width(100),
            Field::make( 'text', 'adress', 'Фактический адрес' )->set_width(100),
            Field::make( 'text', 'inn', 'ИНН' )->set_width(100),
            Field::make( 'text', 'kpp', 'КПП' )->set_width(100),
            Field::make( 'text', 'oktmo', 'ОКТМО' )->set_width(100),
            Field::make( 'text', 'ogrn', 'ОГРН' )->set_width(100),
            Field::make( 'text', 'r-sch', 'р/сч' )->set_width(100),
            Field::make( 'text', 'k-sch', 'к/сч' )->set_width(100),
            Field::make( 'text', 'bik', 'БИК' )->set_width(100),
            Field::make( 'text', 'director', 'Директор' )->set_width(100),
            Field::make( 'text', 'okved', 'ОКВЭД' )->set_width(100),
            Field::make( 'text', 'okopf', 'ОКОПФ' )->set_width(100),
            Field::make( 'text', 'okpo', 'ОКПО' )->set_width(100),
            Field::make( 'text', 'email', 'Адрес эл.почты' )->set_width(100)
           
        ))->add_tab('Общие настройки', array(
            Field::make( 'rich_text', 'about-us', 'О нас' )->set_width(100),
            Field::make( 'rich_text', 'general-provisions', 'Общие положения' )->set_width(100)
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