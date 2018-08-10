<?php
/**
 * Demonstration  of loading WordPress from an external PHP file.
 * 
 */
define('WP_USE_THEMES', false);

// https://wordpress.stackexchange.com/questions/47049/what-is-the-correct-way-to-use-wordpress-functions-outside-wordpress-files
//require ('./wp-load.php');

require ('./wp-blog-header.php');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<link rel="stylesheet" href="<?php echo get_template_directory(); ?>/style.css" >
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta<meta  http-equivhttp-equiv=="X-UA-Compatible""X-UA-Compati  content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="container">
		<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom " id='site_header'>
			<div class="my-0 mr-md-auto font-weight-normal"> 
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ){
						echo '<img src="'. esc_url( $logo[0] ) .'">';
					}
					else {
						echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
					}
					?>
					<?php
						add_theme_support( 'custom-logo' );

					?>
				</a>
			</div>

			<nav class="my-2 my-md-0 mr-md-3 phone ">
				<?php dynamic_sidebar('phone_number' ); ?> 

			</nav>
		</div>
	</div>
	<div class="main_banner">
		
		<div class='other_color'></div>
		<div class="container">	
			

			<header class="clearfix navbar navbar-default">
			<div class="container-fluid">
				
				
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
			
			</div>

			<div class="main_menu col-lg-12" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav float-left">
					<?php
					wp_nav_menu( array('menu' => 'primary', 'items_wrap' => '<ul class="main_menu_items">%3$s</ul>' ));
					?>
				</ul>
				
				<div class='col-md-2 float-right search_form'>
			
					<?php dynamic_sidebar('sidebar' ); ?> 
			</div>
		</div>

		
	</header>