<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post-extended">

			<?php if($theme_prev_next_links == "1") {} else { ?>
				<div class="left"><?php previous_post_link('&laquo; %link') ?></div>
				<div class="right"><?php next_post_link('%link &raquo;') ?></div>
				<div class="clear"></div><br/>
			<?php } ?>
		
	<h2><?php the_title(); ?></h2>

	<div class="meta">
		Posted <?php if (function_exists('time_since')) {
		echo time_since(abs(strtotime($post->post_date_gmt . " GMT")), time()) . " ago";
		} else {
		the_time('d M Y');
		} ?> in <?php the_category(', '); ?> <?php edit_post_link('(Edit)'); ?>
	</div>
	
	<?php
	$content = apply_filters('the_content', $post->post_content);
	$columns = explode('<p>', $content);
	$i = 0;
	foreach ($columns as $column){
	$i++;
	$q = $i - 1;
	if ($i == 0) {
	echo $q.$column;
	}
	}
	$z = round($q/2);
	$i = 0;
	echo "<div class='col-left'>";
	foreach ($columns as $column){
	$i++;
	$q = $i - 1;
	if ($i != 1) {
	echo "<p>".$column;
	}
	if ($i == $z+1 ){
	echo "</div><div class='col-right'>";
	}
	}
	echo "</div>"
	?>

	<div class="clear"></div>
	
	<div id="details">
		<div class="left">
			<?php echo get_avatar( get_the_author_id(), 55 ); ?>
			<div class="info">
				Posted by <font class="author"><?php the_author_link(); ?></font>
				<br/><?php if (function_exists('the_author_meta')) { the_author_meta('description'); } else { the_author_description(); } ?>
			</div>
		</div>
		<div id="social-links">
			<a href="http://twitter.com/home?status=<?php echo $tweet_title ?> : <?php the_permalink(); ?>" title="Tweet this!"><img src="<?php bloginfo('template_directory'); ?>/images/social-twitter.gif" alt="Tweet this!" /></a>
			
			<a href="http://digg.com/submit?phase=2&amp;amp;url=<?php the_permalink(); ?>&amp;amp;title=<?php the_title(); ?>" title="Digg this!"><img src="<?php bloginfo('template_directory'); ?>/images/social-digg.gif" alt="Digg This!" /></a>
			
			<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;amp;t=<?php the_title(); ?>" title="Share on Facebook"><img src="<?php bloginfo('template_directory'); ?>/images/social-facebook.gif" alt="Share on Facebook" id="sharethis-last" /></a>
		</div>
	</div>
	
</div>

<div class="clear"></div>

<div class="comments">
	<?php comments_template(); ?>
</div>

<?php endwhile; endif; ?>