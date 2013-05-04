<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js legacy-ie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Chome Frame it if you got it -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- for more esoteric mobile browsers -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">

		<!-- site title -->
		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<!-- action for inserting site icons, favicons or other custom meta -->
		<?php do_action( 'v_site_meta' ); ?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!-- code functions -->
		<?php wp_head(); ?>
		<!-- /code functions -->

	</head>
	<body <?php body_class(); ?>>
		<div class="hfeed site-wrapper">
			<header class="site-header" role="banner">
				<div class="site-header-wrap clearfix">
					<h1 class="site-title">
						<a href="<?php home_url( '/' ); ?>" title="<?php bloginfo( 'name' ); ?>">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<nav class="nav-main" role="navigation">
					</nav>
				</div>
			</header>

			<div class="site-main">
				<?php //get_header(); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php endwhile; ?>
				<?php endif; ?>
				<?php //get_footer(); ?>

			</div><!-- /.site-main -->

			<footer class="site-footer" role="contentinfo">
				<div class="site-footer-wrap clearfix">
					<div class="source-org copyright">
						&copy; <?php echo date('Y'); ?> <span class="org fn"><?php bloginfo( 'name' ); ?></span>.
					</div>
				</div>
			</footer>
		</div>
	</body>

	<!-- code functions -->
	<?php wp_footer(); ?>
	<!-- /code functions -->

</html>
