//LOADER
$('html').append('<body><div id="space-loader"></div><div id="loader"></div></body>');
$(document).ready(function(){
	$('#loader, #space-loader').hide();
	$('body').fadeIn(500);
});