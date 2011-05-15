$(document).ready( function () {
	
	$.getJSON( CWM.base_url + '/header.json', function ( data ) {
		
		$('#banner').css('background', 'url("' + CWM.cdn_url + '/' + data.img + '") no-repeat');
		$('#banner').css('width', data.width + 'px');
		$('#banner').css('height', data.height + 'px');
		
		$('#banner .flickr_link').attr('href', data.flickr);
		
	} );
	
	$('#search input').focus( function ( ) {
		$(this).addClass('focus');
		$(this).val('');
	} );
	
	$('#search input').blur( function ( ) {
		$(this).removeClass('focus');
		
		if ( $(this).val() == '' ) {
			$(this).val('Search');
		}
		
	} );
	
} );