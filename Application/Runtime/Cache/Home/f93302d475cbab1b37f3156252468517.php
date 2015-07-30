<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title> 专区资讯列表页</title>
    <meta name="description" content=" 提供软件评测苹果手机资讯"/>
    <link href="<?php echo WEB_NAME; ?>/Public/webcss/common.css" rel="stylesheet" type="text/css"/>
    <script language="javascript" src="<?php echo WEB_NAME; ?>/Public/js/jquery-1.4.min.js"></script>
    <link href="<?php echo WEB_NAME; ?>/Public/webcss/other.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<!--顶部 -->
<div class="box_d">
    <div class="top_d">
        <span class="top_d_left"><a href="" target="_blank">手游天下首页</a></span>
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
    <!--<div class="t_logo"><img src="images/logo.jpg" /></div>-->

    <div class="shezhi_ok"></div>
    <div class="t_search">
        <form name="soso" method="get" action="http://ios.155.cn/search.php" class="left">
            <label>
                <input type="text" name="kw" id="search_txt" class="t_sousuo"/>
                <input name="button" type="submit" id="search_btn" class="t_bot" onclick="soso.submit()" value=""/>
            </label>
        </form>
    </div>
    <script type="text/javascript">
        void function () {
            var def_val = '请输入查找信息';
            var kw = document.getElementById('search_txt');
            kw.value = def_val;
            kw.onclick = function () {
                this.value = this.value == def_val ? '' : this.value;
            }
            kw.onblur = function () {
                this.value = this.value || def_val;
                this.parentNode.style.cssText = ''
            }
            kw.focus = function () {/*if(this.value == def_val) this.value = '';*/
                this.parentNode.style.cssText = '';
            }
            kw.onmouseover = function () {
                this.focus()
            };
            kw.focus();
            var sb = document.getElementById('search_btn');
            sb.onclick = function () {
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

<!--中间大版块开始 -->
<div class="box_newlist_cent">
    <!--左边 -->
    <div class="on_cent_left new_list">
        <div class="t_tit">
            <p class="t_left">全部列表</p>
            <ul class="c2_ul_tit">
                <!--<li  ><a href="" title="" class="ora-btn"><span>苹果新闻</span></a></li>-->
                <!---->
                <!--<li  ><a href="" title="" class="ora-btn"><span>App速递</span></a></li>-->
                <!--<li  ><a href="" title="" class="ora-btn"><span>应用专题</span></a></li>-->
                <!--<li  ><a href="" title="" class="ora-btn"><span>游戏专题</span></a></li>-->
            </ul>
        </div>
    <dl>
            <img src="/very_cms/newimage/20150726/201507261021082.png"/>
            <dt><a href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/1"> 测试新闻测1试新闻测试新闻测试新闻</a></dt>
            <dd>sdf...
            </dd>
            <p><span>来源：sfd</span><span>2015-07-25 15:31:26</span></p>
             </dl><dl>
            <img src=""/>
            <dt><a href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/2"> 测试新闻测试新闻测试新闻测试新闻</a></dt>
            <dd>ew...
            </dd>
            <p><span>来源：ew</span><span>2015-07-24 17:38:59</span></p>
             </dl><dl>
            <img src=""/>
            <dt><a href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/3"> 测试新闻测试新闻测试新闻测试新闻</a></dt>
            <dd>...
            </dd>
            <p><span>来源：</span><span>0000-00-00 00:00:00</span></p>
             </dl>


    </div>
    <!--APP排行 -->
    <div class="c2_phb">
        <div class="t_tit"><p class="t_left">APP排行</p>

        </div>

        <ul>
            <li class="phb_top_one">
                <div class="phb_top_bot1">1</div>
                <img src="/very_cms/appimage/20150728/201507282139152.png"/>

                <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/13" class="hei333" target="_blank">应用测试</a></div>
                <p class="phb_top_zi2">这个</p>
            </li>
        </ul>



    </div>

</div>
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