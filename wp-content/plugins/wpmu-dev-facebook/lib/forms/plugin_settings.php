<div class="wrap">
	<h2><?php _e('Ultimate Facebook settings', 'wdfb');?></h2>

<?php if (WP_NETWORK_ADMIN) { ?>
	<form action="settings.php" method="post">
<?php } else { ?>
	<form action="admin.php" method="post">
<?php } ?>

	<?php settings_fields('wdfb'); ?>
<div id="wdtg_accordion">
	<?php do_settings_sections('wdfb_options_page'); ?>
</div>
	<p class="submit">
		<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
	</p>
	</form>
</div>

<script type="text/javascript">
(function($) {
$(function () {

$('#wdtg_accordion :checkbox').each(function () {
	var $me = $(this);
	var val = ($me.is(':checked')) ? $me.val() : 0;
	$me
		.after(
			'<input type="hidden" class="wdfb_checkbox_helper" name="' + $me.attr('name') + '" value="' + val + '" />'
		)
		.click(function() {
			var val = ($me.is(':checked')) ? $me.val() : 0;
			$('input.wdfb_checkbox_helper[name="' + $me.attr('name') + '"]').val(val);
		})
	;
});


$('#wdtg_accordion h3').each(function () {
	$(this).html('<a href="#">' + $(this).text() + '</a>');
});

$('#wdtg_accordion').accordion({
	"fillSpace": true,
	"clearStyle": true
});

// Disable all other steps if we don't have enough credentials
if (!$('#api_key').val() || !$('#app_key').val() || !$('#secret_key').val()) {
	$("#wdtg_accordion").accordion({
		'change': function () {
		$("#wdtg_accordion").accordion("activate", 0);
		}
	});
	$('#api_key').parents('table').find('input.wdfb_next_step').hide();
}

$('.wdfb_next_step').click(function () {
	var active = $("#wdtg_accordion").accordion("option", "active");
	if (active < $('#wdtg_accordion h3').length) {
		$("#wdtg_accordion").accordion("activate", active+1);
	}
	return false;
});

$('.wdfb_skip_to_step_1').click(function () {
	$("#wdtg_accordion").accordion("activate", 1);
	return false;
});

$('.wdfb_grant_perms').click(function () {
	var perms = $(this).attr('wdfb:perms');
	FB.ui({
		"method": "permissions.request",
		"perms": perms
	}, function () {window.location.href = window.location.href;} );
	return false;
});

$('.wdfb_import_comments_now').click(function () {
	var $me = $(this);
	var oldHtml = $me.html();
	$me.html('<img src="' + _wdfb_root_url + '/img/waiting.gif">');
	$.post(ajaxurl, {"action": "wdfb_import_comments"}, function (data) {
		$me.html(oldHtml);
	});
	return false;
});

$('#wdfb_connect_add_mapping').click(function () {
	var $clone = $('.wdfb_connect_wp_registration:last').clone();

	var oldName = $clone.find('input:text').attr('name');
	if (!oldName) return false;

	var oldId = parseInt(oldName.replace(/[^0-9]/g, ''));
	if (!oldId) return false;

	var newId = oldId+1;
	var newNameWp = oldName.replace(/\[\d+\]/, '[' + newId + ']');
	var newNameFb = newNameWp.replace(/\[wp\]/, '[fb]');

	$clone
		.find('input:text')
			.attr('name', newNameWp)
			.val('')
			.end()
		.find('select')
			.attr('name', newNameFb)
			.val('')
			.find('option:first').attr('selected', true)
	;
	$('#wdfb_connect_wp_registration_container').append($clone);
	return false;
});

});
})(jQuery);
</script>