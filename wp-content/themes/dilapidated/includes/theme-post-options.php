<?php // Post & Page Custom Options (WPShout.com)

add_action( 'admin_menu', 'hybrid_create_meta_box' );
add_action( 'save_post', 'hybrid_save_meta_data' );

function hybrid_create_meta_box() {
	global $theme_name;

	add_meta_box( 'post-meta-boxes', __('Additional Options'), 'post_meta_boxes', 'post', 'normal', 'high' );
	add_meta_box( 'page-meta-boxes', __('Additional Options'), 'page_meta_boxes', 'page', 'normal', 'high' );
}

function hybrid_post_meta_boxes() {

	$meta_boxes = array(

	'ghostpool_general_options' => array( 'name' => 'ghostpool_general_options', 'title' => __('General Options', 'hybrid'), 'desc' => '', 'type' => 'title_header' ),
	
		'post_template' => array( 'name' => 'post_template', 'title' => __('Post Template', 'hybrid'), 'desc' => '', 'options' => array('Default', 'Full Width', 'Two Columns'), 'type' => 'select'),		
		
		'main_slider' => array( 'name' => 'main_slider', 'title' => __('Display In Slider', 'hybrid'), 'desc' => 'Checking this displays this post in the slider. <em>Note: Make sure you have the slider Individual Selection option selected in Dilapidated Options > Slider Settings to use this feature.</em>', 'type' => 'checkbox' ),

	'ghostpool_image_options' => array( 'name' => 'ghostpool_image_options', 'title' => __('Image Options', 'hybrid'), 'desc' => 'It is recommended you upload a single image using the "Set featured image" option to the right, which will be used for this post in all areas of the site, resized and cropped. Alternatively specify your own images below, these will not be cropped.<p></p>', 'type' => 'title_header' ),
		
		'ghostpool_thumbnail' => array( 'name' => 'ghostpool_thumbnail', 'title' => __('Thumbnail URL', 'hybrid'), 'desc' => 'The image is displayed in post excerpts.', 'type' => 'text' ),
		
		'ghostpool_slider_image' => array( 'name' => 'ghostpool_slider_image', 'title' => __('Slider Image URL', 'hybrid'), 'desc' => 'The image is displayed in the slider.', 'type' => 'text' ),
		
	);

	return apply_filters( 'hybrid_post_meta_boxes', $meta_boxes );
}

function hybrid_page_meta_boxes() {

	$meta_boxes = array(

	'ghostpool_general_options' => array( 'name' => 'ghostpool_general_options', 'title' => __('General Options', 'hybrid'), 'desc' => '', 'type' => 'title_header' ),
	
		'main_slider' => array( 'name' => 'main_slider', 'title' => __('Display In Slider', 'hybrid'), 'desc' => 'Checking this displays this post in the slider. <em>Note: Make sure you have the slider Individual Selection option selected in Dilapidated Options > Slider Settings to use this feature.</em>', 'type' => 'checkbox' ),
		
		'blog_cats' => array( 'name' => 'blog_cats', 'title' => __('Blog Categories', 'hybrid'), 'desc' => 'If you are using the Blog template you can enter the IDs of the categories you want to display from here (e.g. 25,56,7,10), leave blank to display all categories.', 'type' => 'text' ),

	'ghostpool_image_options' => array( 'name' => 'ghostpool_image_options', 'title' => __('Image Options', 'hybrid'), 'desc' => 'It is recommended you upload a single image using the "Set featured image" option to the right, which will be used for this post in all areas of the site, resized and cropped. Alternatively specify your own images below, these will not be cropped.<p></p>', 'type' => 'title_header' ),
		
		'ghostpool_thumbnail' => array( 'name' => 'ghostpool_thumbnail', 'title' => __('Thumbnail URL', 'hybrid'), 'desc' => 'The image is displayed in page excerpts.', 'type' => 'text' ),
		
		'ghostpool_slider_image' => array( 'name' => 'ghostpool_slider_image', 'title' => __('Slider Image URL', 'hybrid'), 'desc' => 'The image is displayed in the slider.', 'type' => 'text' ),
		
	);

	return apply_filters( 'hybrid_page_meta_boxes', $meta_boxes );
}

function post_meta_boxes() {
	global $post;
	$meta_boxes = hybrid_post_meta_boxes(); ?>

	<?php echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/includes/admin/meta.css" type="text/css" media="screen" />'; ?>
	
	<div id="meta_boxes" class="inside">
	<?php foreach ( $meta_boxes as $meta ) :
		$value = get_post_meta( $post->ID, $meta['name'], true );
		if ( $meta['type'] == 'text' )
			get_meta_text_input( $meta, $value );
		elseif ( $meta['type'] == 'textarea' )
			get_meta_textarea( $meta, $value );
		elseif ( $meta['type'] == 'select' )
			get_meta_select( $meta, $value );
		elseif ( $meta['type'] == 'checkbox' )
			get_meta_checkbox( $meta, $value );				
		elseif ( $meta['type'] == 'title_header' )
			get_meta_title_header( $meta, $value );		
	endforeach; ?>
	</div>
	
<?php
}

function page_meta_boxes() {
	global $post;
	$meta_boxes = hybrid_page_meta_boxes(); ?>

	<?php echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/includes/admin/meta.css" type="text/css" media="screen" />'; ?>
	
	<div id="meta_boxes" class="inside">
	<?php foreach ( $meta_boxes as $meta ) :
		$value = stripslashes( get_post_meta( $post->ID, $meta['name'], true ) );
		if ( $meta['type'] == 'text' )
			get_meta_text_input( $meta, $value );
		elseif ( $meta['type'] == 'textarea' )
			get_meta_textarea( $meta, $value );
		elseif ( $meta['type'] == 'select' )
			get_meta_select( $meta, $value );
		elseif ( $meta['type'] == 'checkbox' )
			get_meta_checkbox( $meta, $value );			
		elseif ( $meta['type'] == 'title_header' )
			get_meta_title_header( $meta, $value );
	endforeach; ?>
	</div>
	
<?php
}

function get_meta_title_header( $args = array(), $value = false ) {

	extract( $args ); ?>

		<h3><?php echo $title; ?></h3>
		<div class="meta_desc" style="font-weight: bold;"><?php echo $desc; ?></div>
		<div class="divider"></div>
		<input type="hidden" name="<?php echo $name; ?>_noncename" id="<?php echo $name; ?>_noncename" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />	
	<?php
}

function get_meta_text_input( $args = array(), $value = false ) {

	extract( $args ); ?>

	<div class="meta_box">
		<strong><?php echo $title; ?></strong>
		<br/><input type="text" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value="<?php echo wp_specialchars( $value, 1 ); ?>" size="30" tabindex="30" style="width: 97%;" />
		<div class="meta_desc"><?php echo $desc; ?></div>
		<input type="hidden" name="<?php echo $name; ?>_noncename" id="<?php echo $name; ?>_noncename" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</div>
	<div class="divider"></div>
	
	<?php
}

function get_meta_select( $args = array(), $value = false ) {

	extract( $args ); ?>

	<div class="meta_box">
		<strong><?php echo $title; ?></strong>
		<select name="<?php echo $name; ?>" id="<?php echo $name; ?>">
		<?php foreach ( $options as $option ) : ?>
			<option <?php if ( htmlentities( $value, ENT_QUOTES ) == $option ) echo ' selected="selected"'; ?>>
				<?php echo $option; ?>
			</option>
		<?php endforeach; ?>
		</select>
		<div class="meta_desc"><?php echo $desc; ?></div>
		<input type="hidden" name="<?php echo $name; ?>_noncename" id="<?php echo $name; ?>_noncename" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</div>
	<div class="divider"></div>
		
	<?php
}

function get_meta_textarea( $args = array(), $value = false ) {

	extract( $args ); ?>

	<div class="meta_box">	
		<strong><?php echo $title; ?></strong>
		<br/><textarea name="<?php echo $name; ?>" id="<?php echo $name; ?>" cols="60" rows="4" tabindex="30" style="width: 97%;"><?php echo wp_specialchars( $value, 1 ); ?></textarea>
		<div class="meta_desc"><?php echo $desc; ?></div>
		<input type="hidden" name="<?php echo $name; ?>_noncename" id="<?php echo $name; ?>_noncename" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</div>
	<div class="divider"></div>

	<?php
}

function get_meta_checkbox( $args = array(), $value = false ) {

	extract( $args ); ?>

		<div class="meta_box">
			<strong><?php echo $title; ?></strong>
			<?php if( wp_specialchars($value, 1 ) ){ $checked = "checked=\"checked\""; } else { if ( $std === "true" ){ $checked = "checked=\"checked\""; } else { $checked = ""; } } ?>
			<input type="checkbox" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value="false" <?php echo $checked; ?> />
			<div class="meta_desc"><?php echo $desc; ?></div>
			<input type="hidden" name="<?php echo $name; ?>_noncename" id="<?php echo $name; ?>_noncename" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" /></p>			
		</div>
		<div class="divider"></div>
		
	<?php 
}

function hybrid_save_meta_data( $post_id ) {
	global $post;

	if ( 'page' == $_POST['post_type'] )
		$meta_boxes = array_merge( hybrid_page_meta_boxes() );
	else
		$meta_boxes = array_merge( hybrid_post_meta_boxes() );

	foreach ( $meta_boxes as $meta_box ) :

		if ( !wp_verify_nonce( $_POST[$meta_box['name'] . '_noncename'], plugin_basename( __FILE__ ) ) )
			return $post_id;

		if ( 'page' == $_POST['post_type'] && !current_user_can( 'edit_page', $post_id ) )
			return $post_id;

		elseif ( 'post' == $_POST['post_type'] && !current_user_can( 'edit_post', $post_id ) )
			return $post_id;

		$data = stripslashes( $_POST[$meta_box['name']] );

		if ( get_post_meta( $post_id, $meta_box['name'] ) == '' )
			add_post_meta( $post_id, $meta_box['name'], $data, true );

		elseif ( $data != get_post_meta( $post_id, $meta_box['name'], true ) )
			update_post_meta( $post_id, $meta_box['name'], $data );

		elseif ( $data == '' )
			delete_post_meta( $post_id, $meta_box['name'], get_post_meta( $post_id, $meta_box['name'], true ) );

	endforeach;
}
?>