<html>
<head>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
<?php wp_head(); ?>
</head>

<body>

<header><h1>My Site</h1></header>
<nav><?php wp_nav_menu( 'main_nav' ); ?></nav>
<aside><?php dynamic_sidebar('my_sidebar'); ?></aside>