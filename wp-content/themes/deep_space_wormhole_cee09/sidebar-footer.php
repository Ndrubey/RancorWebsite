<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage LeadCamp
 * @since LeadCamp 1.0
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'first-footer-widget-area'  )
		&& ! is_active_sidebar( 'second-footer-widget-area' )
		&& ! is_active_sidebar( 'third-footer-widget-area'  )
		&& ! is_active_sidebar( 'fourth-footer-widget-area' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

			<div id="footer-widget-area" role="complementary">

<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
				<div id="first" class="widget-area foot-widget-1">
					<ul class="xoxo">
						<?php art_sidebar('first-footer-widget-area' ); 
						?>
					</ul>
				</div><!-- #first .widget-area -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
				<div id="second" class="widget-area foot-widget-2">
					<ul class="xoxo">
						<?php art_sidebar('second-footer-widget-area' ); 
						?>
						
					</ul>
				</div><!-- #second .widget-area -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
				<div id="third" class="widget-area foot-widget-3">
					<ul class="xoxo">
						<?php art_sidebar('third-footer-widget-area' ); 
						?>
					</ul>
				</div><!-- #third .widget-area -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
				<div id="fourth" class="widget-area  foot-widget-4">
					<ul class="xoxo">
						<?php art_sidebar('fourth-footer-widget-area' ); 
						?>
					</ul>
				</div><!-- #fourth .widget-area -->
<?php endif; ?>

			</div><!-- #footer-widget-area -->
