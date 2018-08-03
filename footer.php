<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>

				<footer class="footer" role="contentinfo">

					<div class="inner-footer grid-x grid-padding-y grid-margin-x">

						<div class="hide-for-small-only medium-1 medium-offset-2 cell">
							<nav role="navigation">
	    						<?php wp_nav_menu( array(
                    'menu' => 'Footer Left',
                    'container' => 'nav',
                    'menu_class' => 'footer-menu'
                )); ?>
	    					</nav>
	    				</div>

              <div class="hide-for-small-only medium-1 cell">
                <nav role="navigation">
                    <?php wp_nav_menu( array(
                      'menu' => 'Footer Right',
                      'container' => 'nav',
                      'menu_class' => 'footer-menu'
                  )); ?>
                  </nav>
                </div>

            <div class="small-4 medium-2 large-2 medium-offset-1 cell text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NALGAP_Only_W-NALGAP.png" alt="NALGAP Logo" />
            </div>
						<div class="small-7 medium-2 large-2 small-offset-1 cell">
              <ul id="social-links">
                <li>
                  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="Facebook Logo" /></a>
                </li>
                <li>
                  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="Twitter Logo" /></a>
                </li>
                <li>
                  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/google.svg" alt="Google+ Logo" /></a>
                </li>
                <li>
                  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="LinkedIn Logo" /></a>
                </li>
              </ul>
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> NALGAP, INC.</p>
						</div>

					</div> <!-- end #inner-footer -->

				</footer> <!-- end .footer -->

			</div>  <!-- end .off-canvas-content -->

		</div> <!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->
