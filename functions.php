<?php
add_action( 'wp_enqueue_scripts', 'my_scripts');

function my_scripts(){
	wp_enqueue_style( 'style', get_template_directory_uri() );
	wp_enqueue_style( 'Rubik', "https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
	wp_enqueue_style( 'Roboto', "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");
	wp_enqueue_style( 'Poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
	wp_enqueue_style( 'head', get_template_directory_uri() . "/assets/css/head.css", "style");
	
	wp_enqueue_script( 'burger', get_template_directory_uri() . "/assets/js/burger.js", array(), 1, true);
}
register_nav_menus(array(
	'header'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
));
?>