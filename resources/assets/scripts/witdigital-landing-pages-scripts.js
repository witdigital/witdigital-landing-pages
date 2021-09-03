jQuery(document).ready(function($){
    $('.accordionTitle').click(function() {
        console.log('this is clicked');
		$( this ).parent().toggleClass('active');
	});
});
