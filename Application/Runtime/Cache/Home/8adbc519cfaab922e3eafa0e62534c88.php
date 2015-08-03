<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<meta name="description" content="游戏" />
<link  href="<?php echo WEB_NAME; ?>/Public/webcss/common_new.css" rel="stylesheet" type="text/css" />
<link  href="<?php echo WEB_NAME; ?>/Public/webcss/index_new.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript"  src="<?php echo WEB_NAME; ?>/Public/js/global_mi.js"></script>
<script language="javascript" type="text/javascript"  src="<?php echo WEB_NAME; ?>/Public/js/jquery-1.4.min.js"></script>
<script language="javascript" type="text/javascript"  src="<?php echo WEB_NAME; ?>/Public/js/header.js"></script>
<script language="javascript" type="text/javascript"  src="<?php echo WEB_NAME; ?>/Public/js/sjyx.js"></script>
 <script language="javascript"  type="text/javascript">
  $(function (){
      $(document).click(function(event){
		  clera_word();
	  });
	$('.sou_input').click(function(event){
		event.stopPropagation();
	})
  })
  </script>
</head>
<body>
<!--top -->
<div class="box_top">
     <div class="top_left">中国免费手机游戏第一门户网!</div>
     <div class="top_right">
          <div class="top_icon"></div>
          <div class="top_zi"><a href="#" class="weibo" target="_blank" rel="nofollow">新浪微博</a></div>
          <div class="top_icon2"></div>
          <div class="top_zi"><a href="#"  target="_blank" rel="nofollow">腾讯微博</a></div>
     </div>
</div>
<!--menu -->
<div class="box_menu">
<div class="box_menu2">
     <div class="logo"><a href="index.htm" tppabs="http://www.155.cn/">
         <!--<img src="<?php echo WEB_NAME; ?>/Public/images/ilogo.jpg" />-->
     </a></div>
     <div class="menu">
         <a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/android"target="_blank" class="menu_bg1">安卓</a>
         <a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/ios"  target="_blank" class="menu_bg2">苹果</a>
         <a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/wp"  target="_blank" class="menu_bg3">WP</a>
         <a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/html" target="_blank" class="menu_bg5">HTML5</a>
         <!--<a href="" target="_blank" class="menu_bg6">社区</a>-->
     </div>
</div>
</div>
<!--mulu -->
<div class="box_mulu">
     <ul>
         <li><span class="mulu_bg1">安卓</span>
		        <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/21"   target="_blank">第二个测试应用</a><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/20"   target="_blank">一个测试应用</a>
				</li>
         <li><span class="mulu_bg2">苹果</span>
		         <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/22"   target="_blank">苹果</a>
				</li>
         <li><span class="mulu_bg3">wp</span>
            
				</li>
         <li><span class="mulu_bg4">HTML5</span>
            
				</li>
     </ul>
</div>
<!--serach -->
<div class="box_sou">
     <div class="sou">
	  <form  action="<?php echo WEB_NAME; ?>/index.php/SomeAction/search" method="post" target="_blank" id="soso" name="soso">
       <input type="text" name="search" id="kw" value="" class="sou_input" />
       <input type="submit" name="button" id="search_btn" value="" class="sou_bot"  />
		<div class="so-word" id="so-word" style="display:none;"><img src="<?php echo WEB_NAME; ?>/Public/images/search-wp.png"  /></div>
	 </form>
     </div>
     <div class="sou_zi"><span>热门搜索</span>
         <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/20"   target="_blank">一个测试应用</a><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/21"   target="_blank">第二个测试应用</a><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/22"   target="_blank">苹果</a>
		</div>
</div>
<!--bamner -->
<div class="box_cent1">
     <div class="c1_banner">
		<script type="text/javascript">
				var counts=5;     //总条数
        img1=new Image();
            img1.src='/very_cms/advimage/20150731/20150731211933aa.jpg';
            img1.alt='第二个';
            url1=new Image();
            url1.src='<?php echo WEB_NAME; ?>/index.php/Index/product/pid/9';
            url1.title='第二个';img2=new Image();
            img2.src='/very_cms/advimage/20150731/20150731211905aa.jpg';
            img2.alt='广告1';
            url2=new Image();
            url2.src='<?php echo WEB_NAME; ?>/index.php/Index/product/pid/8';
            url2.title='广告1';

						</script>
	 <div class="flash">
			<script type="text/javascript"  src="<?php echo WEB_NAME; ?>/Public/js/index_flash.js"></script>
	 </div>
	 </div>
     <div class="c1_news">
          <div class="wy_news_tit">
             <h1><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/6" title="测试新闻" class="red">测试新闻</a></h1>
             <!-- <p><a href="" title=""  target='_blank'>[剑仙缘]</a><ahref="" title=""  target='_blank'>[诛神online-五岳争霸]</a><a href="" title=""  target='_blank'>[时空猎人]</a></p> -->
          </div>
          <ul>
		          <li></li>
		          </ul>
     </div>
</div>
<!--cent2 -->
<div class="box_cent2">
     <!--测试表 -->
     <div class="c2_ceshibiao">
          <div class="c2_c_t"><h2>新游测试表</h2></div>
          <ul class="c2_cs_ul">

				             <li>
                     <!-- <span class="c2li_s1">09-12</span> -->
                     
          <!--    <a href=""  target="_blank" class="c2li_s2">刀塔风暴</a>
             <a href=""  target="_blank" target="_blank" class="c2li_s3"></a> -->
             <span class="c2li_s4"></span>
             </li>

	   
          </ul>
     </div>
     <!--新游评测-->
     <div class="wy_pingce">
          <div class="hd_tit">
              <p class="tit_left">新游评测</p><p class="tit_right"><a href=""  target="_blank">more</a></p>
          </div>
           <ul style="border-bottom:1px dashed #efefef;">
              <div><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/24"><img src="/very_cms/appimage/20150731/20150731212418aa.jpg"  alt=""/>标签新闻1</a>
              </div>
                    
			          </ul>
           <ul>
              <div><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/23"><img src="/very_cms/appimage/20150731/20150731212337aa.jpg"  alt=""/>标签游戏</a>
              </div>
                    
			          </ul>
     </div>
     <!--二维码-->
     <!-- <div class="c1_weixin"> -->
     <div class="c1_gg"><a  href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/10" target="_blank"><img src="/very_cms/advimage/20150731/20150731212515aa.jpg" alt=""/></a></div>
     <!-- </div> -->
     <!--广告图-->
     <div class="c1_gg" style="margin-top:40px;"></div>
</div>

<div class="box_cent4">
     <!--测试表 -->
     <div class="c2_ceshibiao">
          <div class="c2_c_t">
            <h2>安卓排行榜</h2></div>
          <ul class="c2_phb">
            <li class="phb_top_one">
            <div class="phb_top_bot1">1</div>
               <img src="/very_cms/appimage/20150731/20150731211032aa.jpg"  />
              <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/20" class="hei333">一个测试应用</a></div>
                <p class="phb_top_zi2"><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/20">生活</a></p>
                
            </li>
             <li class="phb_top_two"><div class="phb_top_bot1">2</div><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/21">第二个测试应用</a><span>音乐</span></li> <li class="phb_top_two"><div class="phb_top_bot1">3</div><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/23">标签游戏</a><span>没有</span></li> <li class="phb_top_two"><div class="phb_top_bot1">4</div><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/24">标签新闻1</a><span>阿萨德发</span></li>

        </ul>
     </div>
     <!--新游评测-->
     <!--<div class="wy_pingce">-->
          <!--<div class="hd_tit">-->
              <!--<p class="tit_left">安卓专题</p><p class="tit_right"><a href="" target="_blank">more</a></p>-->
          <!--</div>-->

		          <!--<dl class="tj_dl">-->
			 <!--<img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_1151394513453.jpg"  alt=""/>-->
              <!--<dt><a target="_blank" href="">安卓虚幻3引擎游戏合辑</a></dt>-->
              <!--<dd>国内最全安卓虚幻3游戏主题合辑，没有之一</dd>-->
			   <!--<div class="wy_tuijian_bot3"><a target="_blank" href="">进入专题</a></div>-->
          <!--</dl>-->
		          <!--<dl class="tj_dl">-->
			 <!--<img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_5731394784636.jpg" alt=""/>-->
              <!--<dt><a target="_blank" href="">安卓Unity引擎游戏专辑</a></dt>-->
              <!--<dd>国内最全安卓Unity游戏主题合辑，没有之一</dd>-->
			   <!--<div class="wy_tuijian_bot3"><a target="_blank" href="">进入专题</a></div>-->
          <!--</dl>-->
		     <!--</div>-->
     <!--网游资讯-->
     <div class="wy_zixun">
          <div class="hd_tit">
          <p class="tit_left">安卓资讯</p><p class="tit_right"><a href="#">more</a></p>
          </div>
          <div class="hd_pic"></div>
          <ul class="hd_ul">
                      
		  	              
		  	          </ul>
     </div>
</div>

<!--游戏列表-->
<div class="box_cent5">
     <div class="hd_tit"><p class="tit_left">安卓游戏</p><p class="tit_right"><a href="">more</a></p></div>
     <ul class="game_list">
      <li><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/24"><img src="/very_cms/appimage/20150731/20150731212418aa.jpg"</a>
            <p><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/24">标签新闻1</a></p></li><li><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/23"><img src="/very_cms/appimage/20150731/20150731212337aa.jpg"</a>
            <p><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/23">标签游戏</a></p></li><li><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/21"><img src="/very_cms/appimage/20150731/20150731211242aa.jpg"</a>
            <p><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/21">第二个测试应用</a></p></li><li><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/20"><img src="/very_cms/appimage/20150731/20150731211032aa.jpg"</a>
            <p><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/20">一个测试应用</a></p></li>
           			
					<!--24	-->
			     </ul>
</div>
<!--底部 star-->
<div class="box_link">
    <div class="link_bt">友情链接</div>
    <p class="link_cent">
				<a target="_blank" href="">zol手机频道</a>
				<a target="_blank"  href="">去秀手机游戏</a>
				<a target="_blank"  href="">飞鹏网</a>
				<a target="_blank" href="">Windows7之家</a>
				<a target="_blank"  href="">91手机</a>
				<a target="_blank"  href="">爱游戏</a>
				<a target="_blank"  href="">安卓软件</a>
				<a target="_blank">小游戏大全</a>
				<a target="_blank" href="">zol手机频道</a>
				<a target="_blank"  href="">去秀手机游戏</a>
				<a target="_blank"  href="">飞鹏网</a>
				<a target="_blank" href="">Windows7之家</a>
				<a target="_blank"  href="">91手机</a>
				<a target="_blank"  href="">爱游戏</a>
				<a target="_blank"  href="">安卓软件</a>
				<a target="_blank">小游戏大全</a>
				<a target="_blank" href="">zol手机频道</a>
				<a target="_blank"  href="">去秀手机游戏</a>
				<a target="_blank"  href="">飞鹏网</a>
				<a target="_blank" href="">Windows7之家</a>
				<a target="_blank"  href="">91手机</a>
				<a target="_blank"  href="">爱游戏</a>
				<a target="_blank"  href="">安卓软件</a>
				<a target="_blank">小游戏大全</a>
				<a target="_blank" href="">zol手机频道</a>
				<a target="_blank"  href="">去秀手机游戏</a>
				<a target="_blank"  href="">飞鹏网</a>
				<a target="_blank" href="">Windows7之家</a>
				<a target="_blank"  href="">91手机</a>
				<a target="_blank"  href="">爱游戏</a>
				<a target="_blank"  href="">安卓软件</a>
				<a target="_blank">小游戏大全</a>
				
			</p>
</div>
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
<!--底部 end-->
</body>
</html>