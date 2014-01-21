jQuery(function($) {
	//vertical_check();
	function vertical_check() {
		if($(window).width()<$(window).height())
			$('#vertical-alert').show();
		else
			$('#vertical-alert').hide();
	}
	$(window).resize(function() {
		vertical_check();
	})
})