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


var test=0
var flag=true
function openNav(argument,longueur) {
	
	if (test==0){
		document.getElementById(argument).style.height=longueur;
		test=1;
	}
	else{
		document.getElementById(argument).style.height="0px";
		test=0;
	}
}
