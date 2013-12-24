<?php  
function ocutheme_widgets() { 
  
  add_custom_background();

    define( 'HEADER_IMAGE_WIDTH', 900 );  
    define( 'HEADER_IMAGE_HEIGHT',120 );  
    define( 'HEADER_TEXTCOLOR', '000000' );  
      
    add_custom_image_header( '', 'ocutheme_header_style' );  
      
    function ocutheme_header_style() {  
    echo ' 
    <style type="text/css"> 
    #headimg { 
      height:120px; 
      background:#cccccc; 
    } 
    #name {  
      font-family: Georgia, "Bitstream Charter", serif; 
      font-size:30px; 
    } 
    h1 a { 
      text-decoration:none; 
      } 
    #description {  
      font-family: Georgia, "Bitstream Charter", serif; 
      font-size:14px;
    } 
     
    </style>';  
    }

  register_nav_menus( array(  
    'primary' => __( 'Navigasi Utama', 'ocutheme' ),  
  ) ); 
 
  register_sidebar( array(  
    'name' => 'Sidebar Lebar',  
    'id' => 'sidebar-lebar',  
    'description' => 'Sidebar dengan lebar 300px terletak paling atas',  
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',  
    'after_widget' => '</li>',  
    'before_title' => '<h3 class="widget-title">',  
    'after_title' => '</h3>',  
  ) );  
    
  register_sidebar( array(  
    'name' => 'Sidebar Kiri',  
    'id' => 'sidebar-kiri',  
    'description' => 'Sidebar kiri dengan lebar 145px terletak di bawah sidebar lebar',  
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',  
    'after_widget' => '</li>',  
    'before_title' => '<h3 class="widget-title">',  
    'after_title' => '</h3>',  
  ) );  
  
  register_sidebar( array(  
    'name' => 'Sidebar Kanan',  
    'id' => 'sidebar-kanan',  
    'description' => 'Sidebar kanan dengan lebar 145px terletak di bawah sidebar lebar, di sebelah kanan sidebar kiri',  
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',  
    'after_widget' => '</li>',  
    'before_title' => '<h3 class="widget-title">',  
    'after_title' => '</h3>',  
  ) );

  register_sidebar( array(  
    'name' => 'Sidebar Bawah Kiri',  
    'id' => 'sidebar-bawah-kiri',  
    'description' => 'Sidebar bawah dengan lebar 145px terletak di bawah atas footer',  
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',  
    'after_widget' => '</li>',  
    'before_title' => '<h3 class="widget-title">',  
    'after_title' => '</h3>',  
  ) );   

   register_sidebar( array(  
    'name' => 'Sidebar Bawah Tengah',  
    'id' => 'sidebar-bawah-tengah',  
    'description' => 'Sidebar bawah dengan lebar 145px terletak di bawah atas footer',  
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',  
    'after_widget' => '</li>',  
    'before_title' => '<h3 class="widget-title">',  
    'after_title' => '</h3>',  
  ) );   
    
     register_sidebar( array(  
    'name' => 'Sidebar Bawah Kanan',  
    'id' => 'sidebar-bawah-kanan',  
    'description' => 'Sidebar bawah dengan lebar 145px terletak di bawah atas footer',  
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',  
    'after_widget' => '</li>',  
    'before_title' => '<h3 class="widget-title">',  
    'after_title' => '</h3>',  
  ) );  


}  
add_action( 'widgets_init', 'ocutheme_widgets' );  
?> 

