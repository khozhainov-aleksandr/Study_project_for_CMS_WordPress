<?php

add_action('wp_enqueue_scripts', 'childhood_scripts');

// Функция которая подключает css стили.
function childhood_scripts() {
	// wp_enqueue_style - встроенная в WP функция для правильного подключения стилей.
	// Первый аргумент - название файла для стилей что бы в дальнейшем отличать его от других.
	// Второй аргумент - get_stylesheet_uri() - указывает на то что это главный файл со стилями.
	wp_enqueue_style('childhood-style', get_stylesheet_uri());

	// Подключение отдельных CSS файлов.
	// Тот же самый результат что и выше только этот с определенно выбранным файлом.
	// NOTE: wp_enqueue_style('childhood-style', get_template_directory_uri() . '/assets/styles/main.min.css');
}







?>