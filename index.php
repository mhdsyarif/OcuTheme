<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title>
			<?php
			wp_title( '|', true, 'right' );
			bloginfo ( 'name' );
			?>
		</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-replay' );
		wp_head();
		?>
		<style type="text/css">  
		  #header {  
		    background : url(<?php header_image(); ?>);   
		  }  
		  .blogtitle a, .description {  
		    color: <?php header_textcolor(); ?>  
		  }  
		 </style>
	</head>
	<body>
		<div id="wrap">
			<div id="header">
				<h1 class="blogtitle"><?php bloginfo('name');?></h1>
				<p class="description"><?php bloginfo('description');?></p>
				<div id="menu">
					<ul>
						<li><a href="<?php bloginfo('url');?>">Home</a></li>
						<?php wp_list_pages('title_li='); ?>
					</ul>
					<!--<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>  -->
			</div>
		</div>
			<div id="maincontent">
				<div id="content">  
				   <?php if ( have_posts() ) : ?>  
				    <?php while ( have_posts() ) : the_post(); ?> <hr/>
				    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				    	<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title();?>"><?php the_title(); ?></a></h2>
				    	<div id="postmeta">Publish on <?php the_time ('F j, Y'); ?> at <?php the_time('g:i a'); ?> under <?php the_category(', '); ?> by <?php the_author(); ?> | <?php comments_popup_link('No Comments &raquo;', '1 Comments &raquo;', '% Comments $raquo;'); ?>
				    		<?php edit_post_link('Edit','','|'); ?></div>
				    	<p><?php the_content(); ?></p>
				    	</div>
				    	<?php Comments_template(); ?>
				    <?php endwhile;?>
				<?php endif;?>
			</div>
			<div id="sidebar">
				<?php if ( is_active_sidebar( 'sidebar-lebar' ) ) : ?>
					<div id="lebar">
						<ul>
							<?php dynamic_sidebar( 'sidebar-lebar' ); ?>
						</ul>
					</div>
				<?php endif;?>
					<div id="kiri">
						<ul>
							<?php if ( ! dynamic_sidebar( 'sidebar-kiri' )) : ?>
							<li id="search" class="widget-container widget_search">
								<?php get_search_form(); ?>
							</li>
							<li id="archives" class="widget-container">
								<h3 class="widget-title">Arsip</h3>
							<ul>
								<?php wp_get_archives( 'type=monthly' ); ?>
							</ul>
							</li>
							<!-- Kode-kode Default Untuk Sidebar Kiri -->
						<?php endif; ?>
						</ul>
					</div>
					<div id="kanan">
						<ul>
							<?php  if ( ! dynamic_sidebar ( 'sidebar-kanan' ) ) : ?>
							<li id="meta" class="widget-container">
								<h3 class="widget-title">Meta</h3>
								<ul>
									<?php wp_register(); ?>
									<li><?php wp_loginout(); ?></li>
									<?php wp_meta(); ?>
								</ul>
							</li>
							<!-- Kode-kode Default Untuk Sidebar Kanan -->
						<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div style="clear:both;"></div>
			<!-- <div id="bawahkiri">
				<ul>
				<?php  if ( ! dynamic_sidebar ( 'sidebar-bawah-kiri' ) ) : ?>
					<li id="meta" class="widget-container">
						<h3 class="widget-title">Meta</h3>
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<?php wp_meta(); ?>
						</ul>
					</li>
				<?php endif;?>
			</div>
			<div id="bawahtengah">
				<ul>
				<?php  if ( ! dynamic_sidebar ( 'sidebar-bawah-tengah' ) ) : ?>
					<li id="meta" class="widget-container">
						<h3 class="widget-title">Meta</h3>
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<?php wp_meta(); ?>
						</ul>
					</li>
				<?php endif;?>
			</div> -->
			<div id="footer">
				<p><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a>&copy 2013 Powered by : <a href="http://www.wordpress.org">WordPress</a><br/>
					<?php if (! is_home()) { wp_title(''); } ?></p>
			</div>
		</div>
	</body>
</html>
