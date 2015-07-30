<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>专区页</title>
<meta name="description" content="" />
<link href="<?php echo WEB_NAME; ?>/Public/webcss/common.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="<?php echo WEB_NAME; ?>/Public/js/jquery-1.4.min.js"></script>
 <link href="<?php echo WEB_NAME; ?>/Public/webcss/android.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="<?php echo WEB_NAME; ?>/Public/js/jquery.SuperSlide.js"></script>
<script language="javascript" src="<?php echo WEB_NAME; ?>/Public/js/ld.js"></script>
<script language="javascript" src="<?php echo WEB_NAME; ?>/Public/js/index.js"></script>


</head>
<body>
<!--顶部 -->
<div class="box_d">
     <div class="top_d">
         <span class="top_d_left"><a href=""  target="_blank">手游天下首页</a></span>
         <span class="top_d_right">
             <a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/android"  target="_blank">安卓</a>
<a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/ios"  target="_blank">苹果</a>
<a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/wp"  target="_blank">WP</a>
<a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/html"  target="_blank">html5</a>
<!--<a href=""  target="_blank">社区</a>-->
<!--<a href=""  target="_blank">手机版</a></span>-->


     </div>
</div>
<!--LOGO -->
<div class="box_top">
  <!--<div class="t_logo"><img src="images/logo.jpg"  /></div>-->
  
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

</div><!--第一大版块开始 -->
<div class="and_cent1">
     <!--新闻-->
     <div class="c1_news">
          
          <div class="c1_news_t">
               
               <h1><a href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/2" title="">assd</a></h1>
                        <p>sdfdsf..</p>
          </div>
          <ul style="border-bottom:1px dashed #e9e9e9;">
          
			          </ul>
          <ul>
			              
			          </ul>
     </div>
     <!--广告-->
    <div class="c1_banner">
        <div class="container" id="idTransformView">
            <ul class="slider" id="idSlider">
                <li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/7" target="_blank" title=""><img src="/very_cms/advimage/20150728/20150728142736aa.png"  width="543" height="220" alt="大侠传"/></a></li><li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/9" target="_blank" title=""><img src="/very_cms/advimage/20150728/20150728144022aa.png"  width="543" height="220" alt="大侠传"/></a></li>


            </ul>
            <ul class="num" id="idNum">
                <li></li>
                <li></li>
                <li></li>

            </ul>
        </div>
    </div>
     <!--二维码-->
     <div class="c1_weixin">
         <div class="zhuanji_pic"><a href="" title=""><img src="/very_cms/advimage/20150728/20150728163048aa.png"  title="" alt="" width="235" height="110" /></a></div>
         <div class="zhuanji_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/13" title=""></a></div>

     </div>
     <!--推荐-->
     <div class="c1_game pic_list">
          <div class="t_tit" style="width:420px;">
              <p class="t_left">新游推荐</p><p class="t_right"><a href="#">more</a></p>
          </div>
          <ul>
              <li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/14" target="_blank">
                <img src="/very_cms/appimage/20150730/20150730163831aa.png"  title="" alt="" width="65" height="65"/></a><p><a href="" target="_blank">网络呀</a></p></li><li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/10" target="_blank">
                <img src="/very_cms/appimage/20150727/20150727112758aa.png"  title="" alt="" width="65" height="65"/></a><p><a href="" target="_blank">测试</a></p></li><li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/11" target="_blank">
                <img src="/very_cms/appimage/20150727/20150727152729aa.png"  title="" alt="" width="65" height="65"/></a><p><a href="" target="_blank">测试应用</a></p></li><li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/9" target="_blank">
                <img src="/appcms/image/20150722/20150722151352aa.png"  title="" alt="" width="65" height="65"/></a><p><a href="" target="_blank">adfc</a></p></li>

		          </ul>
     </div>
     <!--专题--><!--预告-->
<div class="c1_yugao">
    <div class="zhuanji_pic"><a href="" title=""><img src="/very_cms/advimage/20150728/20150728160948aa.png"  title="" alt="" width="235" height="110" /></a></div>
         <div class="zhuanji_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/10" title=""></a></div><div class="zhuanji_pic"><a href="" title=""><img src="/very_cms/advimage/20150728/20150728161405aa.png"  title="" alt="" width="235" height="110" /></a></div>
         <div class="zhuanji_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/11" title=""></a></div>
		          <!--<div class="zhuanji_pic"><a href="" title=""><img src="images/155_cn_9061354263032.jpg"  title="" alt="" width="235" height="110" /></a></div>-->
          <!--<div class="zhuanji_zi"><a href="" title="">最新iPhone5游戏合辑</a></div>-->
		           <!--<div class="zhuanji_pic"><a href="" title=""><img src="images/155_cn_8651354263032.jpg" alt="" width="235" height="110" /></a></div>-->
          <!--<div class="zhuanji_zi"><a href="" title="">11月iOS游戏五星评级推荐</a></div>-->
		 
     </div>
     <!--厂商-->
     
</div>
<!--第一大版块结束 -->

<!--第二大版块开始 -->
<div class="and_cent2">
    <!--游戏列表 -->
    <div class="t_tit">
         <p class="t_left">单机</p>
         <p class="phb_t">排行榜</p>
    </div>
    
    <ul class="c2_ul_tit" id="gameAll">
		<!-- <li><a href='javascript:tab_ajax("gameAll li","gamelist","gamenew");' title="" class="on" id="gamenew">最新</a></li>
		<li><a href='javascript:tab_ajax("gameAll li","gamelist","gamezh");' title="" id="gamezh">中文</a></li>
		<li><a href='javascript:tab_ajax("gameAll li","gamelist","gamexm")' title="" id="gamexm">限免</a></li> -->
    </ul>
    <div class="c2_game game_list" id="gamelist">
        <ul>
		<!-- <div class="zhu_genxin"> <div class="zhu_new">-->
		
		              <li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/14" title="" target="_blank">
                <img src="/very_cms/appimage/20150730/20150730163831aa.png" title="" target="_blank">网络呀</a></p><div ></div></li><li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/10" title="" target="_blank">
                <img src="/very_cms/appimage/20150727/20150727112758aa.png" title="" target="_blank">测试</a></p><div ></div></li><li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/11" title="" target="_blank">
                <img src="/very_cms/appimage/20150727/20150727152729aa.png" title="" target="_blank">测试应用</a></p><div ></div></li><li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/9" title="" target="_blank">
                <img src="/appcms/image/20150722/20150722151352aa.png" title="" target="_blank">adfc</a></p><div ></div></li><li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/8" title="" target="_blank">
                <img src="" title="" target="_blank">adf</a></p><div ></div></li>
		              
		
          </ul>
    </div>
    
    <!--排行榜 -->
    <div class="c2_phb">
        <ul>
                        <li class="phb_top_one">
                <div class="phb_top_bot1">1</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/8" title="" target="_blank"><img src="" /></a>
                <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/8" title="" target="_blank"  class="hei333">adf </a></div>
                <p class="phb_top_zi2"></p>
            </li>
            <li class="phb_top_two"><div class="phb_top_bot1">2</div><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/9">adfc </a><span> </span></li><li class="phb_top_two"><div class="phb_top_bot1">3</div><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/10">测试 </a><span> </span></li><li class="phb_top_two"><div class="phb_top_bot1">4</div><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/11">测试应用 </a><span> </span></li><li class="phb_top_two"><div class="phb_top_bot1">5</div><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/14">网络呀 </a><span> </span></li>
			            
			        </ul>
    </div>
    
    
</div>
<!--第二大版块结束 -->

<!--标签开始 --><!--标签结束 -->

<!--第三大版块开始 -->
<div class="and_cent3">
    <!--游戏列表 -->
    <div class="t_tit">
         <p class="t_left">应用</p>
         <p class="phb_t">排行榜</p>
    </div>
    <div class="c2_game game_list" id="softlist">  
<ul>
		               
<li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/12" title="" target="_blank">
                <img src="/very_cms/appimage/20150729/20150729172717aa.png"  title="" alt="" width="74" height="74" /></a>
                <p><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/12" title="" target="_blank">dsdf </a></p></li>
                   
		              
		          </ul>
    </div>
    
    <!--排行榜 -->
    <div class="c2_phb">
        <ul>
        <li class="phb_top_one">
                <div class="phb_top_bot1">1</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/12" title="" target="_blank"><img src="/very_cms/appimage/20150729/20150729172717aa.png" /></a>
                <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/12" title="" target="_blank"  class="hei333">dsdf  </a></div>
                <p class="phb_top_zi2"></p>
            </li>
           
			           
			        </ul>
        </ul>
    </div>
    
   
</div>
<!--第三大版块结束 -->


<!--链接版块开始 -->
<!-- <div class="link_cent">
     <div class="link_jiao"></div>
                <a target="_blank" href="">iPhone游戏</a>
                <a target="_blank" href="">三国演义</a>
                <a target="_blank" href="">iPhone游戏</a>
                <a target="_blank" href="">9553软件下载</a>
         
</div> -->
<!--链接版块结束 -->
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
</html>