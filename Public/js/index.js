var locationWrapper={put:function(hash){
	window.location.hash=encodeURIComponent(hash);
	},get:function(){
	var hash=window.location.hash.replace(/^#/,"");
	return jQuery.browser.fx?hash:decodeURIComponent(hash);
	}
};

// JavaScript Document
var xmlHttp=null;
var common={
	$:function(id){
		return (typeof id=='object')?id:document.getElementById(id);
	},
	//È¥×óÓÒ¿Õ¸ñ
	trim:function(str){
		return str.replace(/^\s*/,'').replace(/\s*$/,'');
	}
}
function initAjax(){
	   	if(window.XMLHttpRequest){ 
		    //Mozilla ä¯ÀÀÆ÷
			xmlHttp=new XMLHttpRequest();
			
		}else if(window.ActiveXObject){
			//IEä¯ÀÀÆ÷
			try{
			    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
			}catch(e){
				try{
					xmlHttp=new ActiveXObject('Micsoft.XMLHTTP');
				}catch(e){
					alert('ÄãµÄä¯ÀÀÆ÷²»Ö§³Öajax!');
				}
			}
			
		}
}
	function delayload(option){
		var src=option.src?option.src:"",id=option.id?option.id:[];
		var imgs=[];
		for(var i=0;i<id.length;i++){
			var idbox=document.getElementById(id[i]),_imgs;

			if(idbox&&(_imgs=idbox.getElementsByTagName("img"))){
				for(var t=0;t<_imgs.length;t++){
					imgs.push(_imgs[t]);
				}
			}
		}
		var getLeft=function(El){
			var left=0;
			do{left+=El.offsetLeft;
			}while(El&&El.offsetParent&&(El=El.offsetParent).nodeName!="BODY");return left;
		};
		for(var i=0;i<imgs.length;i++){
			if(imgs[i].src==""){
				imgs[i].src=src;
			}
		}
		var getTop=function(El){
			var top=0;
			do{top+=El.offsetTop;}while(El&&El.offsetParent&&(El=El.offsetParent).nodeName!="BODY");
			return top;
		};
		var isIE=!!navigator.userAgent.match(/MSIE\b\s*([0-9]\.[0-9]);/img);
		isIE&&(isIE=RegExp.$1);
		var isGoo=!!navigator.userAgent.match(/AppleWebKit\b/img);
		var box=isIE?document.documentElement:document;
		var onscroll=box.onscroll=function(){
			var top=isGoo?document.body.scrollTop:document.documentElement.scrollTop,left=isGoo?document.body.scrollLeft:document.documentElement.scrollLeft,width=document.documentElement.clientWidth,height=document.documentElement.clientHeight;
			for(var i=0;i<imgs.length;i++){
				var _top=getTop(imgs[i]),_left=getLeft(imgs[i]);
				if(_top>=top&&_left>=left&&_top<=top+height&&_left<=left+width){
					var _src=imgs[i].getAttribute("lazy_src");
					if(_src&&_src!=""&&imgs[i].src!==_src){
						if(imgs[i].parentNode.style.display!="none"){
							imgs[i].src=_src;
						}
					}
				}
			}
		};
		onscroll();
	}

function tab_ajax(id1,div,hash){
	var g_action = "http://ios.155.cn/index?act=ajax";
	var path="";

	$("#"+id1).find("a").removeClass("on");
	$("#"+hash).addClass("on");

	initAjax();
	if(xmlHttp==null){
		alert('ÄãµÄä¯ÀÀÆ÷²»Ö§³Öajax!');
		return;
	}
	var date=new Date();
	var url="http://ios.155.cn/index.php?act=ajax&type="+hash+"&time="+date.getTime();
	if(hash=='softnew'){
		path="soft";
	}else if(hash=='softnd'){
		path="soft";
	}else{
		path="game";
	}

	xmlHttp.open('GET',url,true);
	xmlHttp.onreadystatechange=function(){
		if(xmlHttp.readyState==4&&xmlHttp.status==200){
			//var arr=eval('(' + xmlHttp.responseText + ')');
			//var json = xmlHttp.responseText;
			 common.$(div).innerHTML="<span><img src=\"ajax_loading.gif\"/*tpa=http://ios.155.cn/file/default/img/ajax_loading.gif*/></span>";
			var json=eval('(' + xmlHttp.responseText + ')');
			if(json.result==0){
				var results=json.info;
				var szHtml="";
				var img_arr=[];

				szHtml+="<ul class=\"clearfix\">";
				for(var i=0;i<results.length;i++){
					var item=results[i];
					szHtml+="<li class=\"fl\"><a href=\"/"+path+"/"+item.id+".html\" title=\"\"><img alt="+item.name+" lazy_src="+item.pic+"  width=\"74\" height=\"74\" /></a><a href=\"/"+path+"/"+item.id+".html\" title=\"\">"+item.name+"</a></li>";
				}
				szHtml+="</ul>";
			}
			 common.$(div).innerHTML=szHtml;
			 delayload({id:[div],src:"155.jpg"/*tpa=http://ios.155.cn/155.jpg*/});
		}
	};
	xmlHttp.send(null);

}



//tab("gameAll .b-box-t ul li a","http://ios.155.cn/file/default/js/gameAll .tab");
//tab("applianceAll .b-box-t ul li a","http://ios.155.cn/file/default/js/gameAll .tab");
tab("gameTop .c-box-t ul li a","gameTop .list-b");
tab("applianceTop .c-box-t ul li a","applianceTop .list-b");
tab("recommendTop .c-box-t ul li a","recommendTop .list-b");
tab("hotTop .c-box-t ul li a","hotTop .list-b");
