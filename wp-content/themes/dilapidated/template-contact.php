<?php
/*
Template Name: Contact
*/
?>
<?php get_header();
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<div class="post-extended">

	<h2>Contact</h2>

	<div id="contact">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<?php the_content(); ?>
				
			<div id="message"></div>
								
			<form method="post" action="<?php bloginfo('stylesheet_directory'); ?>/includes/contact.php" name="contactform" id="contactform">
		
			<p><input name="name" type="text" id="name" size="30" value="" />
			<label for="name">Name <span class="required">*</span></label></p>
		
			<p><input name="email" type="text" id="email" size="30" value="" />
			<label for="email">Email <span class="required">*</span></label></p>
		
			<p><select name="subject" id="subject">
			  <option value="">Subject</option>
			   <option value="">--------------</option>
			  <option value="Support">Support</option>
			  <option value="a News">News</option>
			  <option value="a Bug fix">Report a bug</option>
			</select></p>
		
			<p><textarea name="comment_box" cols="40" rows="5"  id="comment_box" style="width: 350px;" onfocus="if(this.value==this.defaultValue) this.value='';"></textarea></p>
							
			<p><strong>Are you human?</strong> <span class="required">*</span> </p>
					
			<label for=verify accesskey=V>3 + 1 =</label>
			<input name="verify" type="text" id="verify" size="4" value="" style="width: 30px;" /><br /><br />
		
			<input type="submit" class="submit" id="submit" value="Submit" />
		
			</form>
		
		<?php endwhile; endif; ?>
	
	</div>

</div>

<div class="clear"></div>

<div class="comments">
	<?php comments_template(); ?>
</div>

<?php get_footer(); ?>