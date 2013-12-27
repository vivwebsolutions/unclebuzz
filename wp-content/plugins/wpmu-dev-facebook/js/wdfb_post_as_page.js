(function ($) {
$(function () {
	
$("#post_as_page").click(function () {
	var toCheckedState = $("#wdfb_post_as_page").is(":checked") ? false : true;
	FB.ui({
		"method": "permissions.request",
		"perms": "offline_access"
	}, function (resp) { if ("offline_access" == resp.perms) $("#post_as_page").attr("checked", toCheckedState);} );
	return false;
});

});
})(jQuery);