<?php
/**
 * The header template file.
 * @package OcuTheme
 * @since OcuTheme 1.0
*/
?>
<?php get_header();
global	$themeurl;
?>
<div class="container">
	<div class="row">
	<div class="col-lg-8">
		<p><h1 class="page-title"><?php _e( 'Not Found', 'ocutheme' ); ?></h1> </p>
	</div>
	<?php get_sidebar();?>
	</div>
	</div>
<?php get_footer();?>