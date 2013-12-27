<?php

// Custom Content Widget

add_action( 'widgets_init', 'custom_content_widgets' );

function custom_content_widgets() {
	register_widget( 'Custom_Content' );
}

class Custom_Content extends WP_Widget {
	function Custom_Content() {

		$widget_ops = array( 'classname' => 'custom_content', 'description' => 'Display custom content such as Google ads, flash and javascript.' );
		$control_ops = array('width' => 300);

		$this->WP_Widget( 'custom_content-widget', 'GP Custom Content', $widget_ops, $control_ops);
	}

	function widget( $args, $instance ) {
		extract( $args );

		$title = apply_filters('widget_title', $instance['title'] );
		$content = $instance['content']; ?>
		
		<?php echo $before_widget; ?>
		<?php if ( $title ) echo $before_title . $title . $after_title; ?>
		<?php echo $content ?>
		
	<?php echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['content'] = ( $new_instance['content'] );
		return $instance;
	}

	function form( $instance ) {

		$defaults = array( 'title' => '');
		$defaults = array( 'content' => '');
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<br/><input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'content' ); ?>">Content:</label>
			<textarea style="width: 300px; height: 250px;" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>"><?php echo $instance['content']; ?></textarea>
		</p>

		<?php
	}

}



// Recent Comments Widget

add_action( 'widgets_init', 'recent_comments_widgets' );

function recent_comments_widgets() {
	register_widget( 'Recent_Comments' );
}
class Recent_Comments extends WP_Widget {
	function Recent_Comments() {

		$widget_ops = array( 'classname' => 'recent_comments', 'description' => 'Displays recent comments with avatars and comment excerpts.' );

		$this->WP_Widget( 'recent-comments', 'GP Recent Comments', $widget_ops);
	}

	function widget( $args, $instance ) {
		extract( $args );

		$title = apply_filters('widget_title', $instance['title'] );
		$number = $instance['number'];
	?>
<?php echo $before_widget; ?>
<?php if ( $title ) echo $before_title . $title . $after_title; ?>
<div id="recent-comments">
	<ul>
		<?php 
		global $wpdb;
		$request = "SELECT * FROM $wpdb->comments";
		$request .= " JOIN $wpdb->posts ON ID = comment_post_ID";
		$request .= " WHERE comment_approved = '1' AND post_status = 'publish' AND post_password =''";
		$request .= " ORDER BY comment_date DESC LIMIT $number";
		$comments = $wpdb->get_results($request);
		if ($comments) {
			foreach ($comments as $comment) {
				ob_start();
				?>	
				<li>
					<?php echo get_avatar($comment,$size='40'); ?>
					<div class="text"><a href="<?php echo get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID; ?>"><?php echo strip_tags(substr(apply_filters('get_comment_text', $comment->comment_content), 0, 35)); ?>...</a>
					<br/><?php echo($comment->comment_author) ?> on
					<?php echo posttitle(get_the_title($comment->comment_post_ID)) ?></div>
					<div class="clear"></div>
				</li>
				
				<?php
				ob_end_flush();
			}
		} else {
			echo '<li>'.__('No comments', 'banago').'</li>';
		}
	
	?>
	</ul>
</div>
<?php
	echo $after_widget;
	wp_reset_query(); 
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['number'] = strip_tags( $new_instance['number'] );

		return $instance;
	}

	function form( $instance ) {

		$defaults = array( 'title' => '');
		$defaults = array( 'number' => '5');
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<br/><input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'number' ); ?>">Number of Comments:</label>
			<input type="text" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" size="3" value="<?php echo $instance['number']; ?>" />
		</p>		
		
		<?php
	}

}

?>