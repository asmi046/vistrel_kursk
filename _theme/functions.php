<?php

include "carbon.php";

define("COMPANY_NAME", "");
define("MAIL_RESEND", "");

add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 300);
add_post_type_support('page', 'excerpt');

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 
add_action('wp_enqueue_scripts', 'my_assets');
function my_assets()
{

	// Подключение стилей 

	$style_version = "1.0.1";
	$scrypt_version = "1.0.1";

	wp_enqueue_style("null-css", get_template_directory_uri() . "/css/null.css", array(), $style_version, 'all'); 
	wp_enqueue_style("fonts-css", get_template_directory_uri() . "/css/fonts.css", array(), $style_version, 'all'); 
	wp_enqueue_style("verstka-css", get_template_directory_uri() . "/css/style.css", array(), $style_version, 'all'); 
	wp_enqueue_style("main-css", get_template_directory_uri() . "/css/main.css", array(), $style_version, 'all');
	wp_enqueue_style("page-about", get_template_directory_uri() . "/css/page-about.css", array(), $style_version, 'all');  
	wp_enqueue_style("page-text-style", get_template_directory_uri() . "/css/text-styles.css", array(), $style_version, 'all');  
	wp_enqueue_style("main-style", get_stylesheet_uri(), array(), $style_version, 'all');

	// Подключение скриптов

	wp_enqueue_script('axios-js', get_template_directory_uri() . '/js/axios.min.js', array(), $all_version, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), $scrypt_version, true);
	wp_enqueue_script('vendor', get_template_directory_uri() . '/js/vendors.min.js', array(), $scrypt_version, true);
	wp_enqueue_script('app', get_template_directory_uri() . '/js/app.min.js', array(), $scrypt_version, true);


	wp_localize_script('main', 'allAjax', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce'   => wp_create_nonce('NEHERTUTLAZIT')
	));
}


//-----Блок описания вывода меню

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'main_menu' => 'Главное меню',
		'mobile_menu' => 'Мобильное меню',
		'footer_menu' => 'Подвал меню',
	] );
} ); 

// Заготовка для вызова ajax
// Универсальный отправщик
add_action('wp_ajax_newsendr', 'newsendr');
add_action('wp_ajax_nopriv_newsendr', 'newsendr');

function newsendr()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {
       
		// wp_die("!!!!!!!!!!!-------");

		$send_adr = carbon_get_theme_option('email_send');
	
		

		$subj = "Сообщение с сайта";
		$content = "<h2>Новое сообщение с сайта</h2>";
		$content_tg = "<b>Новое сообщение с сайта</b>\n\r";

		foreach ($_REQUEST as $key => $value)
		{
				$content .= $key.": <strong>".$value."</strong><br/>";
				$content_tg .= $key.": ".$value."\n\r";	
		}

	
		$headers = array(
			'From: Сайт Выстрел Курск <noreply@vistrel46.ru>',
			'content-type: text/html',
		);

		add_filter('wp_mail_content_type', function () {return "text/html";} );
		
		if (wp_mail($send_adr, $subj, $content, $headers))
		{
			wp_die(true);
		} else {
			wp_die("NO ОК", '', 403 );
		}
		

	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}

