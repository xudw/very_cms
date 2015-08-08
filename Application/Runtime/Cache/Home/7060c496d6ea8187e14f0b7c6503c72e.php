<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>应用页</title>
    <meta name="description" content=""/>
    <link href="<?php echo WEB_NAME; ?>/Public/webcss/common.css" rel="stylesheet" type="text/css"/>
    <script language="javascript" src="<?php echo WEB_NAME; ?>/Public/jquery-1.9.1.min.js"></script>

    <link href="<?php echo WEB_NAME; ?>/Public/webcss/comment.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo WEB_NAME; ?>/Public/webcss/down.css" rel="stylesheet" type="text/css"/>
    <script language="javascript" src="<?php echo WEB_NAME; ?>/Public/js/public.js"></script>
    <script language="javascript" src="<?php echo WEB_NAME; ?>/Public/js/phone-r4.js"></script>
    <style>
    .a-upload {
    margin: 0 auto;
    font-size: 14px;
    font-weight: bold;
    padding: 4px 10px;
    height: 30px;
    line-height: 20px;
    position: relative;
    cursor: pointer;
    color: #888;
    background: #fafafa;
    border: 1px solid #ddd;
    border-radius: 4px;
    overflow: hidden;
    display: inline-block;
    *display: inline;
    *zoom: 1
}

.a-upload  input {
    position: absolute;
    font-size: 100px;
    left: 0;
    top: 0;
    opacity: 0;
    filter: alpha(opacity=0);
    cursor: pointer
}

.a-upload:hover {
    color: #444;
    background: #eee;
    border-color: #ccc;
    text-decoration: none
}
    </style>

</head>
<body>
<!--顶部 -->
<div class="box_d">
    <div class="top_d">
        <span class="top_d_left"><a href="" target="_blank">手游天下首页</a></span>
         <span class="top_d_right">
         <a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/android"  target="_blank">安卓</a>
<a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/ios"  target="_blank">苹果</a>
<a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/wp"  target="_blank">WP</a>
<a href="<?php echo WEB_NAME; ?>/index.php/Index/appshow/type/html"  target="_blank">html5</a>
<!--<a href=""  target="_blank">社区</a>-->
<!--<a href=""  target="_blank">手机版</a></span>-->
         </span>
    </div>
</div>
<!--LOGO -->
<div class="box_top">
    <!--<div class="t_logo"><img src="images/logo.jpg" /></div>-->

    <div class="shezhi_ok"></div>
    <div class="t_search">
        
<form name="soso"  method="post" action="<?php echo WEB_NAME; ?>/index.php/SomeAction/search" class="left" >
    <label>
        <input type="text" name="search" id="search_txt" class="t_sousuo"/>
        <input name="button" type="submit" id="search_btn"  class="t_bot"  value=""/>
    </label>
</form>
        <!--<form name="soso" method="get" action="http://ios.155.cn/search.php" class="left">-->
            <!--<label>-->
                <!--<input type="text" name="kw" id="search_txt" class="t_sousuo"/>-->
                <!--<input name="button" type="submit" id="search_btn" class="t_bot" onclick="soso.submit()" value=""/>-->
            <!--</label>-->
        <!--</form>-->
    </div>
    <script type="text/javascript">
        // void function () {
        //     var def_val = '请输入查找信息';
        //     var kw = document.getElementById('search_txt');
        //     kw.value = def_val;
        //     kw.onclick = function () {
        //         this.value = this.value == def_val ? '' : this.value;
        //     }
        //     kw.onblur = function () {
        //         this.value = this.value || def_val;
        //         this.parentNode.style.cssText = ''
        //     }
        //     kw.focus = function () {if(this.value == def_val) this.value = '';
        //         this.parentNode.style.cssText = '';
        //     }
        //     kw.onmouseover = function () {
        //         this.focus()
        //     };
        //     kw.focus();
        //     var sb = document.getElementById('search_btn');
        //     sb.onclick = function () {
        //         if (kw.value == '' || kw.value == def_val) {
        //             alert('请输入查找信息');
        //             return false;
        //         }
        //     }
        // }();
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
<!--第一大版块开始 -->
<div class="box_center">
    <!--右边 -->
    <div class="ios_d_r">
          <div class="genxing">
              <div class="gx_tit">版本更新</div>
              <p>							苹果苹果</p>
          </div>
       
		            <!--排行榜 -->
          <div class="c2_phb" style=" margin-top:15px;">
            <div class="qie_tit"><p class="qie_left">排行榜</p></div>
            <ul>
             <li class="phb_top_one">
                    <div class="phb_top_bot1">1</div>
                    <img src="/very_cms/appimage/20150731/20150731211032aa.jpg"  />
                    <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/20" target="_blank" class="hei333">一个测试应用</a></div>
                    <p class="phb_top_zi2">生活</p>
                </li> <li class="phb_top_one">
                    <div class="phb_top_bot1">2</div>
                    <img src="/very_cms/appimage/20150731/20150731211242aa.jpg"  />
                    <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/21" target="_blank" class="hei333">第二个测试应用</a></div>
                    <p class="phb_top_zi2">音乐</p>
                </li> <li class="phb_top_one">
                    <div class="phb_top_bot1">3</div>
                    <img src="/very_cms/appimage/20150731/20150731211420aa.jpg"  />
                    <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/22" target="_blank" class="hei333">苹果</a></div>
                    <p class="phb_top_zi2">呀</p>
                </li> <li class="phb_top_one">
                    <div class="phb_top_bot1">4</div>
                    <img src="/very_cms/appimage/20150731/20150731212337aa.jpg"  />
                    <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/23" target="_blank" class="hei333">标签游戏</a></div>
                    <p class="phb_top_zi2">没有</p>
                </li> <li class="phb_top_one">
                    <div class="phb_top_bot1">5</div>
                    <img src="/very_cms/appimage/20150731/20150731212418aa.jpg"  />
                    <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/24" target="_blank" class="hei333">标签新闻1</a></div>
                    <p class="phb_top_zi2">阿萨德发</p>
                </li> <li class="phb_top_one">
                    <div class="phb_top_bot1">6</div>
                    <img src="/very_cms/appimage/20150808/20150808103312aa.jpg"  />
                    <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/25" target="_blank" class="hei333">这个是html</a></div>
                    <p class="phb_top_zi2">这个吗</p>
                </li>
			            </ul>
          </div>


     </div>
     <!--游戏 -->
     <div class="cent1_left">
         <div class="c1_img"><img src="/very_cms/appimage/20150731/20150731211420aa.jpg" /></div>
         <h1>苹果<span>2.0</span></h1>
         <div class="star_5"></div>
         <div class="c1_biaoqian"><span style="background-color:#cb1818;">单机</span><span>中文</span><span>否</span></div>
         <div class="c1_biaoqian2"><span>上线: 2015-07-31 21:14:20</span></div>
         <div class="c1_bot"><a href="#k_down" class="down"></a><a href="" class="down1" target="_blank"></a></div>
     </div>
     <!--简介 -->
     <div class="left_jianjie">
          <div class="qie_tit">
             <p class="qie_left">应用简介</p>
         </div>
         <div class="jianjie_cent">
              <p>产品主要功能<br />

            <p>苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果苹果<img style="width: 377px; height: 276px;" alt="aa.jpg" src="/very_cms/ueditorimage/image/20150731/1438348439100332.jpg" title="1438348439100332.jpg" height="276" width="377"/></p>
        <br /></p>
         </div>
     </div>

          <div class="left_jianjie">
          <div class="qie_tit">
             <p class="qie_left">客户端下载</p>

         </div>
         <div id="k_down">
               <ul>
				<li><input style="margin-top:20px;" class="a-upload" title="22" tag="http://www.baidu.com"  id="down"  value="点击这里进行下载"></li>

		               </ul>
          </div>
     </div>

    <!--相关下载 -->
    <!--<div class="left_jianjie">-->
    <!--<div class="qie_tit">-->
    <!--<p class="qie_left">相关下载</p>-->
    <!--</div>-->
    <!--<div class="game_list">-->
    <!--<ul>-->
    <!--<li><a href="" title="" alt="手机 QQ 2012" width="65" height="65" /></a><p><a href=""  target="_blank">手机 QQ 2012</a></p></li>-->
    <!--<li><a href="9.html" tppabs="http://ios.155.cn/soft/9.html" target="_blank"><img src="images/155_cn_1361354519430.jpg" title="" alt="微信" width="65" height="65" /></a><p><a href="9.html"  target="_blank">微信</a></p></li>-->
    <!--<li><a href="" target="_blank"><img src="images/155_cn_7271355473975.jpg" title="" alt="Facebook" width="65" height="65" /></a><p><a href="" target="_blank">Facebook</a></p></li>-->
    <!--<li><a href="" target="_blank"><img src="images/155_cn_7961355297288.jpg" title="" alt="陌陌" width="65" height="65" /></a><p><a href=""  target="_blank">陌陌</a></p></li>-->
    <!--<li><a href="" target="_blank"><img src="images/155_cn_9601355219768.jpg" title="" alt="Twitter" width="65" height="65" /></a><p><a href=""  target="_blank">Twitter</a></p></li>-->
    <!--<li><a href="" target="_blank"><img src="images/155_cn_6441355134891.jpg"  title="" alt="腾讯微博" width="65" height="65" /></a><p><a href=""  target="_blank">腾讯微博</a></p></li>-->
    <!---->
    <!--</ul>-->
    <!--</div>-->
    <!--</div>-->

    <!--推荐专题 -->
    <!--<div class="left_jianjie">-->
    <!--<div class="qie_tit">-->
    <!--<p class="qie_left">推荐专题</p>-->
    <!--</div>-->
    <!--<div class="zhuanti_list">-->
    <!--<ul>-->
    <!--<li><a href="" title="" alt="" width="180" height="100" /><img src="images/155_cn_7601353480037.jpg"  title="" alt="" width="180" height="100" /></a><p><a href="" target="_blank">游戏不兼容请Hold住 iPhone5游戏合辑</a></p></li>-->
    <!--<li><a href="" title="" width="180" height="100" /><img src="images/155_cn_7601353480037.jpg"  title="" alt="" width="180" height="100" /></a><p><a href="" target="_blank">11月iOS游戏五星评级推荐</a></p></li>-->
    <!--<li><a href="" target="_blank"><img src="images/155_cn_7601353480037.jpg"  title="" alt="" width="180" height="100" /></a><p><a href="" target="_blank">让健康专家帮你找回身体能量</a></p></li>-->
    <!---->
    <!--</ul>-->
    <!--</div>-->
    <!--</div>-->
    <!--此处放评论版块 -->
    <div class="comm">
        <div class="game_comment" style="margin-bottom: 20px;">
            <h4>评论区域(注:您的评论审核后才可显示)</h4>
            <br/>
            <ul id="comment_lst">
                <li>
                <div style="font-size: 12px;border-bottom: 1px solid gray;margin-bottom: 5px;">
                   <div></div><div style="float:right">2015-07-31 21:15:03</div>
                    <div style="clear:both;">真好呀		</div>
                </div>
                </li>
            </ul>
            <!--<div class="page"></div>-->
        </div>
        <!--<div id="comment"><img src="images/ajax_loading.gif" alt="load"/></div>-->
        <!--<input type="hidden" name="logined_user" value=""/>-->
        <!--<input type="hidden" name="sid" value="9"/>-->
        <form method="post" action="<?php echo WEB_NAME; ?>/index.php/SomeAction/comment">
            <input type="hidden" value="22" name="pid">
            <input type="hidden" value="app" name="who">
            <input type="hidden" value="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/22" name="pageurl">
            <textarea rows="5" cols="85" name='comment' autofocus>
			</textarea>
            <br/>
            <input type="submit" value="评论" name="subcom">
            </td>
        </form>

    </div>
    <!--此处放评论版块 -->

</div>
<!--第一大版块结束 -->

<!--版权开始 -->
<div class="box_foot">
    <div class="foot_zi">
        <p class="foot_menu">
            <a target="_blank" href="">手机游戏</a> |<a target="_blank" href="">安卓游戏</a> |
            <a target="_blank" href="">安卓软件</a> |
            <a target="_blank" href="">关于手游天下</a> | <a target="_blank" href="" rel="nofollow">联系我们</a> | <a
                target="_blank" href="" rel="nofollow">版权申明</a> | <a target="_blank" href="" rel="nofollow">帮助中心</a> |
            <a target="_blank" href="" rel="nofollow">客户服务</a> | <a target="_blank" href="">网站地图</a>

        <p class="foot_copyright">
            Copyright 2006-2010 155.cn All Rights Reserved 粤ICP备<a target="_blank" href=""
                                                                   rel="nofollow">08023770</a>号<br/>增值电信业务经营许可证
            粤B2-20080119
        </p>
    </div>

</div>
<!--版权结束 -->
</body>
</html>
<script>

$("#down").click(function(){

    var id = $(this).attr('title');
    var jump = $(this).attr('tag');
    var webname = "<?php echo WEB_NAME; ?>";
    jQuery.ajax({
            type: 'POST',
            url: webname + '/index.php/SomeAction/updown',
            data: 'id=' + id,
            dataType: 'json'
            ,
            success: function(data) {
               window.location.href = jump;
            }
        });
   
    
});


</script>