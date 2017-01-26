<?php
/*
	my header
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<div id="banner-image"> </div>

<nav> 
	<?php dynamic_sidebar('Main menu'); ?>
		<?php
			$args1 = array(
				'theme_colation' => 'main-menu',
				'fallback_cb' => false
			);

			wp_nav_menu($args1);
		?>
</nav>


	