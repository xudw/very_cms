// JavaScript Document
function settab_zzjs(name,num,n){
	 for(i=1;i<=n;i++){
	  var menu=document.getElementById(name+i);
	  var con=document.getElementById(name+"_"+"zzjs"+i);
	  menu.className=i==num?"on_zzjs":"";
		con.style.display=i==num?"block":"none";
	 }
}

function chagestat(id){
	var chageform = document.getElementById("soso");
	if(id == 4){
		chageform.action="http://android.155.cn/search.php";
	}else if(id == 7){
		chageform.action="http://ios.155.cn/search.php";
	}else if(id == 8){
		chageform.action="http://wp.155.cn/search.php";
	}else{
		chageform.action="http://www.155.cn/search/";
	}
}
function settab_right(name,num,n){
	 for(i=1;i<=n;i++){
	  var menu=document.getElementById(name+"_memu"+i);
	  var con=document.getElementById(name+i);
	  menu.className=i==num?"sider-word dhbg":"";
		con.style.display=i==num?"block":"none";
	 }
}

// JavaScript Document
var xmlHttp=null;
var common={
	$:function(id){
		return (typeof id=='object')?id:document.getElementById(id);
	},
	//去左右空格
	trim:function(str){
		return str.replace(/^\s*/,'').replace(/\s*$/,'');
	}
}

function initAjax(){
		if(window.XMLHttpRequest){ 
			//Mozilla 浏览器
			xmlHttp=new XMLHttpRequest();
			
		}else if(window.ActiveXObject){
			//IE浏览器
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
			}catch(e){
				try{
					xmlHttp=new ActiveXObject('Micsoft.XMLHTTP');
				}catch(e){
					alert('你的浏览器不支持ajax!');
				}
			}
			
		}
}

function show_word(){
	//$(".so-word").removeClass("yesHover");
	common.$('so-word').innerHTML="<span><img src=\"ajax_loading.gif\"/*tpa=http://www.155.cn/file/default/images/ajax_loading.gif*/></span>";
	$(".so-word").show();
	initAjax();
	if(xmlHttp==null){
		alert('你的浏览器不支持ajax!');
		return;
	}

	var kw = common.$('kw').value;
	var date=new Date();
	var url="http://www.155.cn/so.php?act=word&kw="+encodeURI(kw)+"&time="+date.getTime();
	if(kw.length < 1){
			szHtml+="<li>";
			szHtml+="<font color=red>没有相关信息..........</font>";
			szHtml+="</li>";
			common.$('so-word').innerHTML=szHtml;
	}else{
		xmlHttp.open('GET',url,true);
		xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState==4&&xmlHttp.status==200){
				
				var json=eval('(' + xmlHttp.responseText + ')');
				//json=xmlHttp.responseText;
				var szHtml="";
				szHtml+="<ul>";
				if(json.result==0){
					var results=json.info;
					for(var i=0;i<results.length;i++){
						var item=results[i];
						if(item.url != 1){
							szHtml+="<li>";
							szHtml+="<a href="+item.url+" target=\"_blank\">"+item.name+"</a><span>"+item.type+"</span><span class=\"icon"+item.net+"\"></span>";
							szHtml+="</li>";
						}
					}
					 common.$('so-word').innerHTML=szHtml;
					 //delayload({id:['show-r'],src:"155.jpg"/*tpa=http://so.155.cn/155.jpg*/});

				}else if(json.result==1){
					szHtml+="<li>";
					szHtml+="<font color=red>没有相关信息..........</font>";
					szHtml+="</li>";
					common.$('so-word').innerHTML=szHtml;
				}
				szHtml+="</ul>";
			}
		};
		xmlHttp.send(null);
	}
}

function clera_word(){
	$(".so-word").fadeOut();
}

function scrollTitle(changeSpeed,scrollSpeed){
	var con = document.getElementById("list_con");
	var list = document.getElementById("news_list");
	list.innerHTML += list.innerHTML;
	var items = list.getElementsByTagName("li");
	var timer_1 = setInterval(_scrollTitle,changeSpeed);
	var heightAll =0;
	for(var i=0;i<items.length;i++){
		heightAll += items[i].offsetHeight;
	}
	var heightHalf = parseInt(heightAll/2);
	con.onmouseover = function(){
		if(timer_1){
			clearInterval(timer_1);
			timer_1=null;
		}
	}
	con.onmouseout = function(){
		if(timer_1){
			clearInterval(timer_1);
			timer_1=null;
		}
		timer_1 = setInterval(_scrollTitle,changeSpeed);
	}
	function _scrollTitle(){
		var timer;
		var num = 30;
		timer = setInterval(scrollTop,scrollSpeed);
		function scrollTop(){
			if(con.scrollTop<heightHalf){
				con.scrollTop += 3;
				num -= 3;
			}else{
				con.scrollTop = 0;
			}
			if(num <= 0){
				clearInterval(timer);
			}
		}
	}
}
