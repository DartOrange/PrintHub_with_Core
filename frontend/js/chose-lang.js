$(function(){
	$('#lang').change(function(){
		window.location = '/?lang=' + $(this).val(); 
	})
})
