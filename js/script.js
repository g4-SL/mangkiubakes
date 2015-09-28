var $j = jQuery.noConflict();
$j(document).ready(function(){
	//make the nav sticky
	var stickyHeader = $j('#branding').offset().top+$j('#branding').height()+parseInt($j('#secondary').css('padding-top'));
	$j(window).scroll(function(){
		if( $j(window).scrollTop() > stickyHeader ) {
			$j('#secondary').css({position: 'fixed', top: '0px', width: '220px', height: $j(window).height()-parseInt($j('#secondary').css('padding-top'))});
		} else {
			$j('#secondary').css({position: 'static', top: '0px'});
		}
	});

	//mobile menu
	$j("#nav").addClass("js");
	$j("#nav").addClass("js").before('<div id="menu">☰</div>');
	$j("#menu").click(function(){
		$j("#nav").css({top: $j("#menu").offset().top + $j("#menu").height()});
		$j("#nav").toggle();
	});
});