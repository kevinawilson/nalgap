<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar grid-x" id="top-bar-menu">
	<div class="top-bar-left hide-for-small-only medium-3 medium-offset-1 cell">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/NALGAP_wSideText_Logo.png" alt="NALGAP: The Association of Gay, Bisexual, Lesbian, Transgender Addiction Professionals and Their Allies" />
	</div>
	<div class="top-bar-right cell show-for-medium medium-8">
		<?php joints_top_nav(); ?>
	</div>
	<div class="top-bar-right cell small-12 show-for-small-only">
		<ul class="float-right menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>
