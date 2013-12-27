(function ($) {
$(function () {
	
$(".wdfb_date_threshold").live('focus', function () {
	$(this).datepicker({
		dateFormat: 'yy-mm-dd'
	});
});
	
});
})(jQuery);