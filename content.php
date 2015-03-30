<?php
/**
 * The header template file.
 * @package OcuTheme
 * @since OcuTheme 1.0
*/
?>
<?php wp_link_pages( array(
	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
	'after'       => '</div>',
	'link_before' => '<span>',
	'link_after'  => '</span>',
	) );
?>	