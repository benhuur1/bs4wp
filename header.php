<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Required meta tags -->
	<meta <?php bloginfo('charset') ?>>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"/>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="container-fluid">

		<div class="row my-5 align-items-center">

			<div class="col-md-6 col-sm-12">

				<?php 

				$custom_logo_id = get_theme_mod( 'custom_logo');
				$logo = wp_get_attachment_image_src( $custom_logo_id, 'medium');

				if(has_custom_logo() ) {
					echo '<img src="' . esc_url( $logo[0] ) . '" class="img-fluid"/>';
				} else{
					echo '<h1>' . get_bloginfo('name') .'</h1>';
					echo '<p class="lead">' . get_bloginfo( 'description' ) .'</p>';
				}

				?>

			</div>

			<div class="col-md-4 offset-md-2 col-sm-12">
				<!-- adiciona o formulário de buscas -->
				<?php dynamic_sidebar('busca'); ?>
			</div>

		</div>

		<div class="row">

			<div class="col mb-5">


				<nav class="navbar navbar-expand-lg navbar-dark bg-my-color-2 rounded" role="navigation">

					<!-- Brand and toggle get grouped for better mobile display -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<?php
					wp_nav_menu( array(
						'theme_location'    => 'principal',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
					?>

				</nav>

			</div>

		</div>