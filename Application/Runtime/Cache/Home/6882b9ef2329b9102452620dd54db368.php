<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>苹果专区排行榜</title>
<meta name="description" content="" />
<link href="<?php echo WEB_NAME; ?>/Public/webcss/common.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="<?php echo WEB_NAME; ?>/Public/js/jquery-1.4.min.js"></script>
 <link href="<?php echo WEB_NAME; ?>/Public/webcss/other.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!--顶部 -->
<div class="box_d">
     <div class="top_d">
         <span class="top_d_left"><a href=""  target="_blank">手游天下首页</a></span>
         <span class="top_d_right"> <a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/android"  target="_blank">安卓</a>
<a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/ios"  target="_blank">苹果</a>
<a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/wp"  target="_blank">WP</a>
<a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/html"  target="_blank">html5</a>
<!--<a href=""  target="_blank">社区</a>-->
<!--<a href=""  target="_blank">手机版</a></span>--></span>
     </div>
</div>
<!--LOGO -->
<div class="box_top">
  <!-- <div class="t_logo"><img src="images/logo.jpg" tppabs="http://ios.155.cn/file/default/img/logo.jpg" /></div> -->
  
  <div class="shezhi_ok"></div>
  <div class="t_search">
  <form name="soso"  method="get" action="http://ios.155.cn/search.php" class="left" >
  <label>
   <input type="text" name="kw" id="search_txt" class="t_sousuo"/>
   <input name="button" type="submit" id="search_btn"  class="t_bot" onclick="soso.submit()" value=""/>
  </label>
  </form>
  </div>
<script type="text/javascript">
	void function(){
		var def_val = '请输入查找信息';
		var kw = document.getElementById('search_txt');
		kw.value = def_val;
		kw.onclick = function(){
			this.value = this.value == def_val ? '' : this.value;
		}
		kw.onblur = function(){
			this.value = this.value || def_val;
			this.parentNode.style.cssText = ''
		}
		kw.focus = function(){/*if(this.value == def_val) this.value = '';*/
			this.parentNode.style.cssText = '';
		}
		kw.onmouseover = function(){
			this.focus()
		};
		kw.focus();
		var sb = document.getElementById('search_btn');
		sb.onclick = function(){
			if (kw.value == '' || kw.value == def_val) {
				alert('请输入查找信息');
				return false;
			}
		}
	}();
</script>
</div>
<!--MENU -->
<div class="box_menu">

    <a href="<?php echo WEB_PAHT.WEB_NAME; ?>" tppabs="" class="menu1">首页</a>
<a href="<?php echo WEB_PAHT.WEB_NAME; ?>/index.php/Index/yingyong" >应用</a>
<a href="<?php echo WEB_PAHT.WEB_NAME; ?>/index.php/Index/paihang" >排行榜</a>
<!--<a href="" >APP专题</a>-->
<a href="<?php echo WEB_PAHT.WEB_NAME; ?>/index.php/Index/zixun" >资讯</a>
<!--<a href="" target="_blank">社区</a>-->
</div>


<!--中间版块开始 -->
<div class="box_rank">
     
                              <div class="t_tit" id="t_tit">
                                  <ul class="t_left_ul">
                                      <li class="t_tit_li">游戏下载排行榜</li>
                                      <li><a href="<?php echo WEB_NAME; ?>/index.php/Index/paihang/type/androidn">网游下载排行榜</a></li>
                                  </ul>
                              </div>
                          <div class="jietus showNow">
                                      <dl>
                                 <div class="rank_nab">1</div>
                                 <a href="" target="_blank"><img src=""  /></a>
                                 <dt><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/8" target="_blank">adf</a></dt>
                                 <dd>下载:0 </dd>
                                 <dd>0000-00-00</dd>
                              </dl>
                                 </div>
                        
                          <div class="jietus showNow">
                                      <dl>
                                 <div class="rank_nab">2</div>
                                 <a href="" target="_blank"><img src="/appcms/image/20150722/20150722151352aa.png"  /></a>
                                 <dt><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/9" target="_blank">adfc</a></dt>
                                 <dd>下载:0 </dd>
                                 <dd>2015-07-22</dd>
                              </dl>
                                 </div>
                        
                          <div class="jietus showNow">
                                      <dl>
                                 <div class="rank_nab">3</div>
                                 <a href="" target="_blank"><img src="/very_cms/appimage/20150727/20150727112758aa.png"  /></a>
                                 <dt><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/10" target="_blank">测试</a></dt>
                                 <dd>下载:0 </dd>
                                 <dd>2015-07-27</dd>
                              </dl>
                                 </div>
                        
                          <div class="jietus showNow">
                                      <dl>
                                 <div class="rank_nab">4</div>
                                 <a href="" target="_blank"><img src="/very_cms/appimage/20150727/20150727152729aa.png"  /></a>
                                 <dt><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/11" target="_blank">测试应用</a></dt>
                                 <dd>下载:0 </dd>
                                 <dd>2015-07-27</dd>
                              </dl>
                                 </div>
                        
</div>	  
<!--版权开始 -->
<div class="box_foot">
     <div class="foot_zi">
          <p class="foot_menu">
            <a target="_blank" href="">手机游戏</a> |<a target="_blank" href="">安卓游戏</a> |
			<a target="_blank"  href="" >安卓软件</a> |
			<a target="_blank"  href="">关于手游天下</a> | <a target="_blank"  href="" rel="nofollow" >联系我们</a> | <a target="_blank"  href="" rel="nofollow" >版权申明</a> | <a target="_blank"  href="" rel="nofollow">帮助中心</a> | <a target="_blank" href="" rel="nofollow" >客户服务</a> | <a target="_blank" href="">网站地图</a>
     <p class="foot_copyright">
             Copyright 2006-2010 155.cn  All Rights Reserved 粤ICP备<a target="_blank" href="" rel="nofollow">08023770</a>号<br />增值电信业务经营许可证 粤B2-20080119
          </p>
     </div>
    
</div>
<!--版权结束 -->
</body>
</html><script type="text/javascript">
	void function(){
	$("#t_tit li").each(function(index){
		$(this).click(function(){
			$(this).siblings().removeClass("t_tit_li").end().addClass("t_tit_li");
			$(".showNow").removeClass("showNow");
			$(".jietus").eq(index).addClass("showNow");
		});
	});
	}();
</script>