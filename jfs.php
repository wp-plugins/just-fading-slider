<?php
/*
Plugin Name: JustFade
Plugin URI: http://www.zoranmaric.com/plg/jfs.zip
Description: Just another simple fading slider... If you just want to slide some photos, this is perfect plugin for you...
Version: 1.0.0
Author: Zoran Maric
Author URI: http://www.zoranmaric.com
License: GPL2 or later
*/?>
<?php
function jfs_stil() 
{
	wp_enqueue_style( 'jfs_stil', plugins_url( '/css/style.css', __FILE__ ) );
}
add_action('wp_enqueue_scripts', 'jfs_stil');
?>
<?php
function jfs_admin() {
  
  /* Register Style */
  wp_enqueue_style( 'jfs_admin', plugins_url( '/css/jfs_admin.css', __FILE__ ) );
 
  /* Enqueue Style */
  wp_enqueue_style( 'jfs_admin' );
  
}
add_action( 'admin_print_styles', 'jfs_admin', 20 );
?>
<?php
	// Plugin settings menu
	add_action('admin_menu', 'jfs_create_menu');
function jfs_create_menu() {
	//create new top-level menu
	add_menu_page('JFS Plugin Settings', 'JustFading', 'administrator', __FILE__, 'jfs_settings_page', 'dashicons-images-alt');
	//call register settings function
	add_action( 'admin_init', 'register_jfssettings' );
}
function register_jfssettings() {
	//register settings
	register_setting("sekcija", "jfs_image_1");
	register_setting("sekcija", "jfs_image_2");
	register_setting("sekcija", "jfs_image_3");
	register_setting("sekcija", "jfs_image_4");
	register_setting("sekcija", "jfs_image_5");
	register_setting("sekcija", "jfs_image_6");
	register_setting("sekcija", "jfs_image_7");
	register_setting("sekcija", "jfs_image_8");
	register_setting("sekcija", "jfs_image_9");
	register_setting("sekcija", "jfs_image_10");
}
function jfs_settings_page() {
	?>
	 <div class="wrap1jsf">
		        <h1><span class="dashicons dashicons-images-alt"></span> Just Fading Slider</h1> 
		<div class="wrap3jsf"> <h3>If you want just to slide some photos, this is the perfect plugin for you...  It can't get more simple than this... Just upload photos, save changes, find a convenient place on your page, post or theme, paste shortcode and let them slide. Or in this case - fade... </h3> 
			<h3>The slider is responsive, but all photos should be the same size (width and height). If they are not, they will have the same size and aspect ratio as photo No. 1. </h3>
			<h3>You can add up to 10 photos, but you don't have to add them all.  </h3>
			<h3>When you upload photos, copy and paste <code>[jfslider]</code> somewhere in your post or page... </h3> 
			<h3> To add slider to your template use this code <code>echo do_shortcode("[jfslider]");</code></h3>
			<h3>This plugin is my wordpress adaptation of <a target="_blank" href="http://www.jssor.com/demos/simple-fade-slideshow.html"> Jssor - Simple Fade Slideshow.</a></h3>
			<h3>I hope that you will find it useful... <p align="right"><a target="_blank" href="http://www.zoranmaric.com"> Zoran Maric</a></p></h3></div>
		 
		 </div>
	        <div class="wrap1jsf">
        <form method="post" action="options.php">
            <?php
                settings_fields("sekcija");
                do_settings_sections("opcije");      
                submit_button(); 
            ?>          
        </form>
		  
        </div>
		<?php
	}	
function jfs_img1()
{
    ?>
	<div class="wrap2jsf">
	<input type="text" id="jfs_image_1" name="jfs_image_1" value="<?php echo get_option('jfs_image_1'); ?>" />
	<input id="_btn" class="upload_image_button" type="button" value="Add photo" />
	   </div>
  <?php
}
 function jfs_img2()
{
    ?>
		<div class="wrap2jsf">
	<input type="text" id="jfs_image_2" name="jfs_image_2" value="<?php echo get_option('jfs_image_2'); ?>" />
	<input id="_btn" class="upload_image_button" type="button" value="Add photo" />
	</div>
  <?php
}
 function jfs_img3()
{
   ?>
   	<div class="wrap2jsf">
	<input type="text" id="jfs_image_3" name="jfs_image_3" value="<?php echo get_option('jfs_image_3'); ?>" />
	<input id="_btn" class="upload_image_button" type="button" value="Add photo" />
</div>
<?php
}
 function jfs_img4()
{
   ?>
   	<div class="wrap2jsf">
	<input type="text" id="jfs_image_4" name="jfs_image_4" value="<?php echo get_option('jfs_image_4'); ?>"/>
	<input id="_btn" class="upload_image_button" type="button" value="Add photo" />
</div>
<?php
}
 function jfs_img5()
{
   ?>
   	<div class="wrap2jsf">
	<input type="text" id="jfs_image_5" name="jfs_image_5" value="<?php echo get_option('jfs_image_5'); ?>"/>
	<input id="_btn" class="upload_image_button" type="button" value="Add photo" />
	</div>
<?php
}
 function jfs_img6()
{
   ?>
   	<div class="wrap2jsf">
	<input type="text" id="jfs_image_6" name="jfs_image_6" value="<?php echo get_option('jfs_image_6'); ?>" />
	<input id="_btn" class="upload_image_button" type="button" value="Add photo" />
	</div>
<?php
}
 function jfs_img7()
{
   ?>
   	<div class="wrap2jsf">
	<input type="text" id="jfs_image_7" name="jfs_image_7" value="<?php echo get_option('jfs_image_7'); ?>" />
	<input id="_btn" class="upload_image_button" type="button" value="Add photo" />
	</div>
<?php
}
 function jfs_img8()
{
   ?>
   	<div class="wrap2jsf">
	<input type="text" id="jfs_image_8" name="jfs_image_8" value="<?php echo get_option('jfs_image_8'); ?>"/>
	<input id="_btn" class="upload_image_button" type="button" value="Add photo" />
	</div>
<?php
}
 function jfs_img9()
{
   ?>
   	<div class="wrap2jsf">
	<input type="text" id="jfs_image_9" name="jfs_image_9" value="<?php echo get_option('jfs_image_9'); ?>" />
	<input id="_btn" class="upload_image_button" type="button" value="Add photo" />
	</div>
<?php
}
 function jfs_img10()
{
   ?>
   	<div class="wrap2jsf">
	<input type="text" id="jfs_image_10" name="jfs_image_10" value="<?php echo get_option('jfs_image_10'); ?>" />
	<input id="_btn" class="upload_image_button" type="button" value="Add photo" />
	</div>
<?php
}
function jfs_panel()
{
    add_settings_section("sekcija", null, null, "opcije");
    add_settings_field("jfs_image_1", "Photo No. 1", "jfs_img1", "opcije", "sekcija");
	add_settings_field("jfs_image_2", "Photo No. 2", "jfs_img2", "opcije", "sekcija");
 	add_settings_field("jfs_image_3", "Photo No. 3", "jfs_img3", "opcije", "sekcija");
 	add_settings_field("jfs_image_4", "Photo No. 4", "jfs_img4", "opcije", "sekcija");
	add_settings_field("jfs_image_5", "Photo No. 5", "jfs_img5", "opcije", "sekcija");
	add_settings_field("jfs_image_6", "Photo No. 6", "jfs_img6", "opcije", "sekcija");
	add_settings_field("jfs_image_7", "Photo No. 7", "jfs_img7", "opcije", "sekcija");
 	add_settings_field("jfs_image_8", "Photo No. 8", "jfs_img8", "opcije", "sekcija");
 	add_settings_field("jfs_image_9", "Photo No. 9", "jfs_img9", "opcije", "sekcija");
	add_settings_field("jfs_image_10", "Photo No. 10", "jfs_img10", "opcije", "sekcija");
}
add_action("admin_init", "jfs_panel");
?>
<?php
//Enqueue scripts
if (!is_admin()) add_action("wp_enqueue_scripts", "zmjfs_jquery_enqueue", 11);
function zmjfs_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js');
   wp_enqueue_script('jquery');
}
function jfs_scripts_with_jquery()
{
    // Register the script like this for a plugin:
		wp_register_script( 'custom-script', plugins_url( '/js/jssor.js', __FILE__ ), array( 'jquery' ) );
		wp_register_script( 'custom-scripta', plugins_url( '/js/jssor.slider.js', __FILE__ ), array( 'jquery' ) );
		wp_register_script( 'custom-scriptj', plugins_url( '/js/jfs.js', __FILE__ ), array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
		wp_enqueue_script( 'custom-script' );
		wp_enqueue_script( 'custom-scripta' );
		wp_enqueue_script( 'custom-scriptj' );
}
	add_action( 'wp_enqueue_scripts', 'jfs_scripts_with_jquery' );
function zmjfs_admin_scripts() {
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		wp_register_script('my-upload', plugins_url( '/js/custom-uploader.js', __FILE__ ), array('jquery','media-upload','thickbox'));
		wp_enqueue_script('my-upload');
}
function zmjfs_admin_styles() {
wp_enqueue_style('thickbox');
}
add_action('admin_print_scripts', 'zmjfs_admin_scripts');
add_action('admin_print_styles', 'zmjfs_admin_styles');
?>
<?php 
	function jfslider_shortcode(){
?>
    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
	   <!--  Aspect ratio fix. It uses aspect ratio of the first image for all others--> 
	<?php 
	$visina= get_option('jfs_image_1'); 
    list($width, $height) = getimagesize($visina);
		?>
     <div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: <?php echo $width; ?>px; overflow: hidden; height: <?php echo  $height; ?>px;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url('<?php echo plugins_url('/images/loading.gif', __FILE__)?>') no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: <?php echo $width; ?>px; overflow: hidden; height: <?php echo  $height; ?>px ;"> 
			<?php if (get_option('jfs_image_1')): ?><div><img u="image" src="<?php echo get_option('jfs_image_1'); ?>" /></div><?php endif;?>
			<?php if (get_option('jfs_image_2')): ?><div><img u="image" src="<?php echo get_option('jfs_image_2'); ?>"/></div><?php endif;?>
			<?php if (get_option('jfs_image_3')): ?><div><img u="image" src="<?php echo get_option('jfs_image_3'); ?>" /></div><?php endif;?>
			<?php if (get_option('jfs_image_4')): ?><div><img u="image" src="<?php echo get_option('jfs_image_4'); ?>" /></div><?php endif;?>
			<?php if (get_option('jfs_image_5')): ?><div><img u="image" src="<?php echo get_option('jfs_image_5'); ?>" /></div><?php endif;?>
			 <?php if (get_option('jfs_image_6')): ?><div><img u="image" src="<?php echo get_option('jfs_image_6'); ?>" /></div><?php endif;?>
			<?php if (get_option('jfs_image_7')): ?><div><img u="image" src="<?php echo get_option('jfs_image_7'); ?>" /></div><?php endif;?>
			<?php if (get_option('jfs_image_8')): ?><div><img u="image" src="<?php echo get_option('jfs_image_8'); ?>" /></div><?php endif;?>
			<?php if (get_option('jfs_image_9')): ?><div><img u="image" src="<?php echo get_option('jfs_image_9'); ?>" /></div><?php endif;?>
			<?php if (get_option('jfs_image_10')): ?> <div><img u="image" src="<?php echo get_option('jfs_image_10'); ?>" /></div><?php endif;?>
        </div>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora12l" style="top: 50%; left: 0px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora12r" style="top: 50%; right: 0px;">
        </span>
    </div>
<?php
}
add_shortcode('jfslider', 'jfslider_shortcode');  