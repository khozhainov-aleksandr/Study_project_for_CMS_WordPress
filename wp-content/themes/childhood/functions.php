<?php

// MARK: Справочник по функциям https://wp-kama.ru/

// Хук на который цепляется функция создается (инициализируется) с помощью функции do_action().
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_styles() {
	// SECTION: Подключение CSS !

	// wp_enqueue_style - встроенная в WP функция для правильного подключения стилей.
	// Первый аргумент - название файла для стилей что бы в дальнейшем отличать его от других.
	// Второй аргумент - get_stylesheet_uri() - указывает на то что это главный файл со стилями.
	wp_enqueue_style('childhood-style', get_stylesheet_uri());

	// Подключение отдельных CSS файлов.
	// Тот же самый результат что и выше только этот с определенно выбранным файлом.
	// NOTE: wp_enqueue_style('childhood-style', get_template_directory_uri() . '/assets/styles/main.min.css');

	// Подключение стилей с CDN сервера.
	// NOTE: wp_enqueue_style('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
}

function childhood_scripts() {
	// SECTION: Подключение JavaScript !

	// Если в array() прописать array('jquery') то этот скрипт загрузиться только тогда, когда загрузиться jQuery.
	wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
}

// SECTION: ДОбавление логотипа в админ панель
add_theme_support( 'custom-logo' );
?>