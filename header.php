<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
    <?php };
      remove_filter ('the_content', 'wpautop'); ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Bitter|Work+Sans" rel="stylesheet">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">

			<!-- Load off-canvas container. Feel free to remove if not using. -->
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

			<div class="off-canvas-content" data-off-canvas-content>

				<header class="header" role="banner">
          <div class="grid-x" id="button-bar">
            <div class="cell show-for-large large-5 large-offset-1 text-left">
              <p style="padding-top: 10px;">P.O. Box 123, Ocean Grove, NJ 07756</p>
            </div>
            <div class="cell small-12 large-5 text-right">
              <p>
                <a class="button" href="/about-us/">Become a Member</a>
                <a class="button" href="/about-us/">Donate Now</a>
              </p>
            </div>
          </div>
					 <!-- This navs will be applied to the topbar, above all content
						  To see additional nav styles, visit the /parts directory -->
					 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>

				</header> <!-- end .header -->
