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
      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-12">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron list-group-item-info">
		  <?php
				if(get_header_image()){?>
					<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
				<?php }else{ ?>
					<h1><?php bloginfo('name')?></h1>
					<p><?php bloginfo('description')?></p>
				<?php }
			  ?>
          </div>
	    </div>
	  </div>
	   
		<?php if(have_posts()): while (have_posts()): the_post()?>
          <div class="media">
			<a class="pull-left" href="<?php the_permalink()?>">	
				<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail( 'thumbnail' ); // Thumbnail (default 150px x 150px max)
					} else{
				?>
						<img class="media-object" src="<?php echo $themeurl;?>/img/profil.jpg" alt="<?php the_title()?>">
					<?php 
					} 
					?>
			</a>
			<div class="media-body">
				<a href="<?php the_permalink()?>">
					<h4 class="media-heading breadcrumb list-group-item-info"><?php the_title()?></h4>
				</a>
					<h6 class="breadcrumb list-group-item-success"><div id="post-<?php the_ID(); ?>" <?php post_class( 'class-name' ); ?>><?php the_time('F jS, Y'); ?> Category: <?php the_category(',')?> Comments: <?php comments_popup_link('No Comments &raquo;'); ?> Written by: <?php the_author_posts_link()?>  </h6>
					<p><?php the_excerpt()?></p>
			</div>
		  </div>

		<?php
			endwhile;
			else:
			echo '<p>Belum ade artikel</p>';
			endif;
		?>
		<div align="center">
			<?php posts_nav_link()?>
        </div>
		
	</div>
	<?php get_sidebar()?>
	</div>
	</div>
<?php get_footer()?>