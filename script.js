var $j = jQuery.noConflict();
$j(document).ready(function(){
	//make the nav sticky
	var stickyHeader = $j('#branding').offset().top+288;
	$j(window).scroll(function(){
		if( $j(window).scrollTop() > stickyHeader ) {
			$j('#secondary').css({position: 'fixed', top: '20px', width: '220px', height: '100%'});
		} else {
			$j('#secondary').css({position: 'static', top: '0px'});
		}
	});
});