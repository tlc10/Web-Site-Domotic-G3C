$(document).ready(function(){
	$(".bar-btn .close").hide();

	$(".bar-btn .menu").click(function(){
		$(this).hide();
		$(".bar-btn .close").show();
		$(".mobile .liste").addClass("active");
	});

	$(".bar-btn .close").click(function(){
		$(this).hide();
		$(".bar-btn .menu").show();
		$(".mobile .liste").removeClass("active");
	});

});
