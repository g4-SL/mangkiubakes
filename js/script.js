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
		checkSidePosition();
	});

	$j('#side-nav ul li ul').css({left: $j('#side-nav').width() - 10});
	$j('.sidefoot').css({paddingTop: $j(window).height() - $j('#search').height() - $j('.sidefoot ul li').height() - $j('#side-nav').height() - $j("#secondary #logo").height() - 27});

	//mobile menu
	$j("#nav").addClass("js");
	$j("#nav").addClass("js").before('<div id="menu">☰</div>');
	$j("#menu").click(function(){
		$j("#nav").css({top: $j("#menu").offset().top + $j("#menu").height()});
		$j("#nav").toggle();
	});
});