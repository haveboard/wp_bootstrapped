var $j = jQuery.noConflict();
$j(function(){


						

$j(document).ready(function(){

   // Will be true if bootstrap is enabled, false otherwise
	/*
  
	$j(".fillheight" ).each(function( index ) {
 		//console.log( index + ": " + $j( this ).text() );
		var thisheight = $j( this ).parent().parent(".full").height();
		console.log( index + ": " + thisheight );
		$j( this ).css({"height":thisheight+"px"});
	});
  
	$j(".fillheightb" ).each(function( index ) {
 		//console.log( index + ": " + $j( this ).text() );
		var thisheight = $j( this ).parent().parent(".full").height();
		var thisheightabove = $j( this ).prev().height();
		console.log( index + ": " + thisheight + " - " + thisheightabove );
		$j( this ).css({"height":thisheight-thisheightabove-4+"px"});
	});
	$j("#category_nav_mason li:not(:last-child),#category_nav_halkin li:not(:last-child),#category_nav li:not(:last-child),#photographer_nav li:not(:last-child)").append(" | ");
	
	$j('.overflow_row').each(function(){
		console.log($j(this).children(".thumb").size());
		$j(this).css({"width":($j(this).children(".thumb").size())*65+"px"});
	});
	$j("#thumbs_all .overflow_row").each(function(){
		console.log($j(this).attr("ID"));
		
		var s = $j(this).attr("ID");
		console.log(s.indexOf("halkin-") != -1);
		if(s.indexOf("halkin-") != -1 == true){
		
		}
	});
	*/
	/*
	var hash = window.location.hash.substr(1);
	
	
	var href = $j('.portfolio-grid .port-thumb, .thumb,#category_nav li, #photographer_nav li').each(function(){
		var href = $j(this).attr('rel');
		$j(this).attr('href',"#"+href)
		if(hash==href){
			var toLoad = hash+' #content article';
			$j('#content').load(toLoad);
		}									
	});

	*/
	
	/*
	$j('#menu-item-35.current_page_item').click(function(e){	
		$j('.portfolio-grid .port-thumb, .thumb').removeClass('active');
	
		var toLoad = '/portfolio/ #port_wrap';
		$j('#content *').animate({
			opacity:0
		  }, 100, function() {
				$j('#content').hide('slow',loadContent);				
				$j('#load').remove();
				$j('#primary').append('<span id="load">LOADING...</span>');
				$j('#load').fadeIn('fast');
		  });
		  
		function loadContent() {
			$j('#content').load(toLoad,'',showNewContent())
		}
		function showNewContent() {
			$j('#content').show('normal',hideLoader());
		}
		function hideLoader() {
			$j('#load').fadeOut('slow');
		}
		window.location.hash = '';
		return false;
	});
*/	
	/*
	$j('.portfolio-grid .port-thumb, .thumb').click(function(){	
		$j('.portfolio-grid .port-thumb, .thumb').removeClass('active');
		$j(this).addClass('active');	  
			var classname = $j(this).attr('href');
		//	alert(classname);
		$j('.portfolio-grid .port-thumb, .thumb'+classname).addClass('active');
		
		var toLoad = $j(this).attr('rel')+' #content article';
		$j('#content *').animate({
			opacity: 0
		  }, 100, function() {
				$j('#content').hide('slow',loadContent);				
				$j('#load').remove();
				$j('#primary').append('<span id="load">LOADING...</span>');
				$j('#load').fadeIn('slow');
		  });
		function loadContent() {
			$j('#content').load(toLoad,'',showNewContent())
		}
		function showNewContent() {
			$j('#content').show('normal',hideLoader());
		}
		function hideLoader() {
			$j('#load').fadeOut('normal');
		}
		window.location.hash = $j(this).attr('rel');
		return false;
	
	});
*/
	
		
	/*
	$j('#photographer_nav li a').click(function(){	
		$j('#photographer_nav li a').removeClass('active');
		$j(this).addClass('active');	  
			var classname = $j(this).attr('href');
		//	alert(classname);
		
		var toLoad = $j(this).attr('href')+' #content #content_inner';
		$j('#content *').animate({
			opacity: 0
		  }, 100, function() {
				$j('#content').hide('slow',loadContent);				
				$j('#load').remove();
				$j('#primary').append('<span id="load">LOADING...</span>');
				$j('#load').fadeIn('slow');
		  });
		function loadContent() {
			$j('#content').load(toLoad,'',showNewContent())
		}
		function showNewContent() {
			$j('#content').show('normal',hideLoader());
		}
		function hideLoader() {
			$j('#load').fadeOut('normal');
		}
		window.location.hash = $j(this).attr('href');
		return false;
	
	});
	*/
});

});