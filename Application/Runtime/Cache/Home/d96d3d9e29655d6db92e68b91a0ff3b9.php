<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内容页</title>
<link href="<?php echo WEB_NAME; ?>/Public/webcss/global.css" rel="stylesheet" type="text/css" />
<link href="<?php echo WEB_NAME; ?>/Public/webcss/zhuanqu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo WEB_NAME; ?>/Public/js/vote.js"></script>
<script type="text/javascript" src="<?php echo WEB_NAME; ?>/Public/js/jquery-1.3.2.min.js"></SCRIPT>
<script type="text/javascript" src="<?php echo WEB_NAME; ?>/Public/js/comment.js"></script>


</head>
<body>
<!--顶部 -->
<div class="box_d">
     <div class="top_d">
         <span class="top_d_left"><a href=""  target="_blank">手游天下首页</a></span>
         <span class="top_d_right"><a href=""  target="_blank">安卓</a><a href=""  target="_blank">苹果</a><a href=""  target="_blank">WP</a><a href=""  target="_blank">html5</a><a href="" target="_blank">社区</a><a href=""  target="_blank">手机版</a></span>
     </div>
</div>
<!--LOGO -->
<div class="box_top">
  <!--<div class="t_logo"><img src="images/logo.jpg" /></div>-->
  
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
     <a href="" >首页</a>
     <a href="" >应用</a>
     <a href="" >排行榜</a>
     <a href="" >APP专题</a>
     <a href="" class="menu1">资讯</a>
     <a href="" target="_blank">社区</a>
</div><div class="box_weizhi">
     <span style="color:#999;">您当前位置</span><span>新闻内容页</span>
</div>
<!--介绍 -->
<div class="down_cent">
    <!--排行榜 -->
<div class="wy_top2">
          <div class="wy_top_tit"><span>应用排行榜</span></div>
          <ul>

 <li class="wy_top_one">
                 <div class="wy_top_bot1">1</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/5" title="" target="_blank"> <img src="" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/5" title="" target="_blank">asdsdf</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">w</p>
              </li> <li class="wy_top_one">
                 <div class="wy_top_bot1">2</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/8" title="" target="_blank"> <img src="" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/8" title="" target="_blank">adf</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">asdf</p>
              </li> <li class="wy_top_one">
                 <div class="wy_top_bot1">3</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/9" title="" target="_blank"> <img src="/appcms/image/20150722/20150722151352aa.png" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/9" title="" target="_blank">adfc</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">sdf</p>
              </li> <li class="wy_top_one">
                 <div class="wy_top_bot1">4</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/10" title="" target="_blank"> <img src="/very_cms/appimage/20150727/20150727112758aa.png" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/10" title="" target="_blank">测试</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">爱的色放</p>
              </li> <li class="wy_top_one">
                 <div class="wy_top_bot1">5</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/11" title="" target="_blank"> <img src="/very_cms/appimage/20150727/20150727152729aa.png" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/11" title="" target="_blank">测试应用</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">你好</p>
              </li> <li class="wy_top_one">
                 <div class="wy_top_bot1">6</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/12" title="" target="_blank"> <img src="/very_cms/appimage/20150729/20150729172717aa.png" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/12" title="" target="_blank">dsdf </a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">adsf</p>
              </li> <li class="wy_top_one">
                 <div class="wy_top_bot1">7</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/13" title="" target="_blank"> <img src="/very_cms/appimage/20150730/20150730152841aa.png" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/13" title="" target="_blank">rf</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">sdaf</p>
              </li> <li class="wy_top_one">
                 <div class="wy_top_bot1">8</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/14" title="" target="_blank"> <img src="/very_cms/appimage/20150730/20150730163831aa.png" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/14" title="" target="_blank">网络呀</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">阿斯蒂芬</p>
              </li>
		          </ul>
     </div>
     <!--左边内容 -->
     <div class="news_c" style="border-top:2px solid #81b103;">
          <h1>测试</h1>
          <div class="h1div"><span>来源:阿斯蒂芬</span><span>作者:阿斯蒂芬</span><span>时间:2015-07-27 11:30:01</span></div>

		          <div class="news_cent">
               <p class="MsoNormal" align="left" style="margin-bottom: 11.25pt; line-height: 22.5pt; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><samp><span style="font-size:12.0pt;font-family:微软雅黑;mso-bidi-font-family:宋体;color:#333333;
mso-font-kerning:0pt">
                asdf
          </div>


     </div>
     <!--表情匡 -->


     <!--评论列表 -->
     <div class="pinlun_list">
		<div class="game_comment">
			<h4>新闻评论</h4><h3><a href=""  rel="nofollow" target="_blank">155安卓玩家QQ群：207878733</a></h3>
			<ul id="comment_lst">				<li><img src="images/ajax_loading.gif"  alt="load" /></li>

			</ul>
			<div class="page"></div>
		</div>
		<div id="comment"><img src="images/ajax_loading.gif"  alt="load" /></div>
		<input type="hidden" name="logined_user" value="" />
		<input type="hidden" name="aid" value="67690" />
     </div>

     <div style="width:500px; float:left; height:20px;"></div>
</div>
<!--底部 star-->
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
<script type="text/javascript" src="js/search.js" ></script>
<!--底部 end-->
</body>
</html>