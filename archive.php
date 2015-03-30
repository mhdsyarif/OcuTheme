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
		<?php if(have_posts()): while (have_posts()): the_post();?>

         <div class="media">
			<a class="pull-left" href="<?php the_permalink();?>">
				<img class="media-object" src="<?php echo $themeurl;?>/img/profil.jpg" alt="<?php the_title();?>">
			</a>
			<div class="media-body">
				<a href="<?php the_permalink();?>">
					<h4 class="media-heading"><?php the_title();?></h4>	
				</a>
					<h6><?php the_time('m-d-y')?> Written by: 
					<?php the_author_posts_link(); ?></h6>
					<p><?php the_excerpt();?></p>
			</div>
		  </div>

		<?php
			endwhile;
			else:
			echo '<p>Belum ade artikel</p>';
			endif;
		?>
		
	</div>
	<?php get_sidebar();?>
	</div>
	</div>
<?php get_footer();?>