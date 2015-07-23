types()
function types(){
	$("#abc").click(function(){
		$("#types-sel").show();
		$("#types-sel > dt > a" ).live('click', function(){
			var tex =$(this).html();
			$("#abc").html(tex);
			$("#types-sel").hide();
		});
	});
}
$(function(){
$(".menu-tab>a").each(function(index){
		$(this).click(function(){
			$(".menu-tab>a").removeClass("on");
			$(this).addClass("on");
			$(".iphone-box").hide();
			$(".imenu-con").eq(index).show();
		});
	});
});

function tab(id1, div2){
	$("#"+id1).each(function(index){
		$(this).click(function(){
			$(this).parent().parent().find("a").removeClass("on");
			$(this).addClass("on");
			$("#"+div2).hide();
			$("#"+div2).eq(index).show();
		});
	});
}

(function() {
var $backToTopTxt = "返回顶部", $backToTopEle = $('<div class="backToTop"></div>').appendTo($("body"))
        .text($backToTopTxt).attr("title", $backToTopTxt).click(function() {
            $("html, body").animate({ scrollTop: 0 }, 120);
    }), $backToTopFun = function() {
var st = $(document).scrollTop(), winh = $(window).height();
        (st > 0)? $backToTopEle.show(): $backToTopEle.hide();
//IE6下的定位
if (!window.XMLHttpRequest) {
            $backToTopEle.css("top", st + winh - 166);
        }
    };
    $(window).bind("scroll", $backToTopFun);
    $(function() { $backToTopFun(); });
})();
