<?php
/**
 * The header template file.
 * @package OcuTheme
 * @since OcuTheme 1.0
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title>
		 <?php wp_title( '|', true, 'right' ); ?> 
	</title>
	<?php 
	wp_head();
	global $themeurl;?>
</head>
<body <?php body_class();?>>
<!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Ocu Theme</a>
        </div>
		
        <div class="navbar-collapse collapse">
		 <?php
			$defaults = array(
					'theme_location'	=>	'header_nav',
					'menu'				=>	'',
					'container'			=>	'',
					'container_class'	=>	'',
					'container_id'		=>	'',
					'menu_class'		=>	'',
					'menu_id'			=>	'',
					'echo'				=>	'true',
					'fallback_cb'		=>	'wp_page_menu',
					'before'			=>	'',
					'after'				=>	'',
					'link_before'		=>	'',
					'link_after'		=>	'',
					'items_wrap'		=>	'<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
					'depth'				=>	2,
					'walker'			=>	new wp_bootstrap_navwalker()
			);
			
			wp_nav_menu( $defaults );
			
			?>
		  
          <!--<ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top</a></li>
          </ul>-->
        </div><!--/.nav-collapse -->
      </div>
    </div>