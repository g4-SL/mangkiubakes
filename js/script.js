var $j = jQuery.noConflict();
var checkSidePosition;

$j(document).ready(function(){

	//make the nav sticky
	var stickyHeader = $j('#branding').offset().top + $j('#branding').height() + parseInt($j('#secondary').css('padding-top'), 10);
	
	function checkSidePosition(){
		if( $j(window).scrollTop() > stickyHeader ) {
			$j('#secondary').css({position: 'fixed', top: '0px', width: '220px', height: $j(window).height()-parseInt($j('#secondary').css('padding-top'), 10)});
		} else {
			$j('#secondary').css({position: 'static', top: '0px'});
		}
	}

	checkSidePosition();

	$j(window).scroll(function(){
		// make sure nav sidebar sticks to page at all time
		checkSidePosition();
	});

	$j('#side-nav ul li ul').css({left: $j('#side-nav').width() - 10});
	$j('.sidefoot').css({paddingTop: $j(window).height() - $j('#search').height() - $j('.sidefoot ul li').height() - $j('#side-nav').height() - $j("#secondary #logo").height() - 27});

	//mobile menu
	$j("#nav").addClass("js");
	$j("#nav").addClass("js").before('<div class="menu-container"><div id="menu">☰</div></div>');
	$j("#nav").css({top: $j(".mobile-menu").height() + parseInt($j('.mobile-menu').css('padding-top'), 10)});
	$j("#menu").click(function(){
		$j("#nav").slideToggle(400);
	});	
	$j(".sub-menu").parent().click(function(){
		$j("#nav ul ul").slideToggle(400);
	});
});