$(function(){
	$(".iphone-btn").each(function(index){
		$(this).click(function(){
			$(".iphone-btn").removeClass("on");
			$(this).addClass("on");
			$(".iphone-box").hide();
			$(".iphone-box").eq(index).show();
		});
	});
	$("#tab p").each(function(index){
		$(this).click(function(){
			$(this).siblings().removeClass("qie_left").end().addClass("qie_left");
			$(".showNow").removeClass("showNow");
			$('.jietu').eq(index).addClass("showNow");
		});
	});
	var imgwidth = $(".jietTu>img:first").width();
	var imgLength = $(".jietTu>img").length;
	$('.jietTu').width((imgwidth+10)*imgLength+'px');
});