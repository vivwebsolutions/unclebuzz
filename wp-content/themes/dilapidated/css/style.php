<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<style type="text/css">

a:hover, h1, h1 a, h2, h2 a, #collapsible-link li a:hover, #nav .current_page_item a, #nav .current-cat a, #nav .current-menu-item a, #nav .current_page_ancestor a, #nav .current-cat-ancestor a, #nav .current-menu-ancestor a {
color: <?php if($theme_header_colour) { ?><?php echo($theme_header_colour); ?><?php } else { ?><?php if($theme_skin == "Classic") { ?>#ffffff<?php } elseif($theme_skin == "Purple Haze") { ?>#a85cb3<?php } elseif($theme_skin == "Steel") { ?>#b1ab8f<?php } elseif($theme_skin == "Haemoglobin") { ?>#b40000<?php } elseif($theme_skin == "Regal Light") { ?>#eeeeee<?php } elseif($theme_skin == "Blue Grunge") { ?>#46608a<?php } elseif($theme_skin == "Grunge Green") { ?>#b0bb35<?php } ?><?php } ?>;
}

</style>