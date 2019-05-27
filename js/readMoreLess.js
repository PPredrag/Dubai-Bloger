
$(document).ready(function(){
	$(".deoTeksta").hide();
		$(".readMore").click(function(){
		$(".deoTeksta").slideDown('slow');
		$(".readMore").hide();
		});
});

$(document).ready(function(){
	$(".readLess").click(function(){
		$(".deoTeksta").slideUp('fast');
		$(".readMore").show();
	});
});
