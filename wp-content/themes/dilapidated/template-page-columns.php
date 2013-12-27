<?php
/*
Template Name: Two Columns
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post-extended">
	
	<h2><?php the_title(); ?></h2>
	
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

</div>

<div class="clear"></div>

<div class="comments">
	<?php comments_template(); ?>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>