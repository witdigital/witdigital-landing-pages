jQuery(document).ready(function($){
    $('.accordionTitle').click(function(e) {
		$( this ).parent().toggleClass('active');
	});
});
