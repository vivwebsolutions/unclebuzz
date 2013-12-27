<?php
get_header();
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<div class="post page-<?php the_title(); ?>">

	<h4>Opps, it looks like this page does not exist anymore. If you are lost try using the search box below.</h4>

	<br/><br/>
	
	<h3>Search The Site</h3>
	<?php get_search_form(); ?>

</div>

<?php get_footer(); ?>