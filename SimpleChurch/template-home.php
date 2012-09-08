<?php
/**
 * Template Name: Home Page
 *
 * The template for rendering pages without sidebars.
 *
 * @package Standard
 * @since 3.0
 */
?>
<?php get_header(); ?>

<div id="wrapper">
	<div class="container">
		<div class="row">
			<div id="main" class="span12 clearfix" role="main">
				<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow( "home" ); } ?>


			</div><!-- /#main -->

		</div><!--/row -->
	</div><!-- /container -->
</div> <!-- /#wrapper -->
<?php get_footer(); ?>