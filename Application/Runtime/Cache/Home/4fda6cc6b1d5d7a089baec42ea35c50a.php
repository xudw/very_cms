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
      
<form name="soso"  method="post" action="<?php echo WEB_NAME; ?>/index.php/SomeAction/searchnew" class="left" >
    <label>
        <input type="text" name="search" id="search_txt" class="t_sousuo"/>
        <input name="button" type="submit" id="search_btn"  class="t_bot"  value=""/>
    </label>
</form>
  <!--<form name="soso"  method="get" action="http://ios.155.cn/search.php" class="left" >-->
  <!--<label>-->
   <!--<input type="text" name="kw" id="search_txt" class="t_sousuo"/>-->
   <!--<input name="button" type="submit" id="search_btn"  class="t_bot" onclick="soso.submit()" value=""/>-->
  <!--</label>-->
  <!--</form>-->
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
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/20" title="" target="_blank"> <img src="/very_cms/appimage/20150731/20150731211032aa.jpg" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/20" title="" target="_blank">一个测试应用</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">生活</p>
              </li> <li class="wy_top_one">
                 <div class="wy_top_bot1">2</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/21" title="" target="_blank"> <img src="/very_cms/appimage/20150731/20150731211242aa.jpg" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/21" title="" target="_blank">第二个测试应用</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">音乐</p>
              </li> <li class="wy_top_one">
                 <div class="wy_top_bot1">3</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/24" title="" target="_blank"> <img src="/very_cms/appimage/20150731/20150731212418aa.jpg" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/24" title="" target="_blank">标签新闻1</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">阿萨德发</p>
              </li> <li class="wy_top_one">
                 <div class="wy_top_bot1">4</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/22" title="" target="_blank"> <img src="/very_cms/appimage/20150731/20150731211420aa.jpg" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/22" title="" target="_blank">苹果</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">呀</p>
              </li> <li class="wy_top_one">
                 <div class="wy_top_bot1">5</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/23" title="" target="_blank"> <img src="/very_cms/appimage/20150731/20150731212337aa.jpg" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/23" title="" target="_blank">标签游戏</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">没有</p>
              </li> <li class="wy_top_one">
                 <div class="wy_top_bot1">6</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/25" title="" target="_blank"> <img src="/very_cms/appimage/20150808/20150808103312aa.jpg" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/25" title="" target="_blank">这个是html</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">这个吗</p>
              </li> <li class="wy_top_one">
                 <div class="wy_top_bot1">7</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/26" title="" target="_blank"> <img src="/very_cms/appimage/20150808/20150808135234aa.jpg" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/26" title="" target="_blank">地方</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">士大夫</p>
              </li>
		          </ul>
     </div>
     <!--左边内容 -->
     <div class="news_c" style="border-top:2px solid #81b103;">
          <h1>试新闻测试新闻123123</h1>
          <div class="h1div"><span>来源:好人</span><span>作者:好人</span><span>时间:2015-07-31 21:22:32</span></div>

		          <div class="news_cent">
               <p class="MsoNormal" align="left" style="margin-bottom: 11.25pt; line-height: 22.5pt; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><samp><span style="font-size:12.0pt;font-family:微软雅黑;mso-bidi-font-family:宋体;color:#333333;
mso-font-kerning:0pt">
                <p>这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻这是一个新闻<img alt="aa.jpg" src="/very_cms/ueditorimage/image/20150731/1438348948129151.jpg" title="1438348948129151.jpg"/></p>
          </div>


     </div>
     <!--表情匡 -->


     <!--评论列表 -->
     <div class="pinlun_list" >
         <div class="game_comment" style="margin-bottom: 20px;">
             <h4 style="width:300px;">评论区域(注:您的评论审核后才可显示)</h4>
             <br/>
             <ul id="comment_lst">
                 
             </ul>
         </div>
         <form method="post" action="<?php echo WEB_NAME; ?>/index.php/SomeAction/comment">
             <input type="hidden" value="6" name="pid">
            <input type="hidden" value="new" name="who">
            <input type="hidden" value="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/6" name="pageurl">
            <textarea rows="5" cols="85" name='comment' id="textarea" autofocus>
			</textarea>
             <br/>
             <input type="submit" value="评论" name="subcom">
             </td>
         </form>
     </div>

     <!--<div style="width:500px; float:left; height:20px;"></div>-->
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