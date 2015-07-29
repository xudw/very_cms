<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>苹果专区应用</title>
    <meta name="description" content="提供iphone|ipad 免费应用下载，包括限时免费，越狱软件等下载"/>
    <link href="<?php echo WEB_NAME; ?>/Public/webcss/common.css" rel="stylesheet" type="text/css"/>
    <script language="javascript" src="<?php echo WEB_NAME; ?>/Public/js/jquery-1.4.min.js"></script>
    <link href="<?php echo WEB_NAME; ?>/Public/webcss/other.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<!--顶部 -->
<div class="box_d">
    <div class="top_d">
        <span class="top_d_left"><a href="" target="_blank">手游天下首页</a></span>
        <span class="top_d_right"><a href="" target="_blank">安卓</a><a href="" target="_blank">苹果</a><a href=""
                                                                                                       target="_blank">WP</a><a
                href="" target="_blank">html5</a><a href="" target="_blank">社区</a><a href=""
                                                                                     target="_blank">手机版</a></span>
    </div>
</div>
<!--LOGO -->
<div class="box_top">
    <!--<div class="t_logo"><img src="images/logo.jpg"  /></div>-->

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
    <a href="">首页</a>
    <a href="" class="menu1">应用</a>
    <a href="">排行榜</a>
    <a href="">APP专题</a>
    <a href="">资讯</a>
    <a href="" target="_blank">社区</a>
</div>
<!--筛选开始 -->
<div class="box_shaixuan">
    <div class="shaixuan">
        <ul>
            <li><span>类型</span>

                <a href="" title="" class="sx_li">全部</a>
                <?php if(is_array($typelist)): foreach($typelist as $key=>$tl): ?><a href="<?php echo WEB_NAME; ?>/index.php/Index/yingyong/pid/<?php echo ($tl["type_id"]); ?>"  title="" class=""><?php echo ($tl["type_name"]); ?></a><?php endforeach; endif; ?>
            </li>

            <!--<li><span>适用</span>-->
            <!--<a href="" title="" class="sx_li">通用</a>-->
            <!--<a href="" title="" >iphone</a>-->
            <!--<a href="" title="" >ipad</a>-->
            <!--</li>-->
            <!--<li><span>Game Center</span>：-->
            <!--<a href="" title="" class="sx_li">全部</a>-->
            <!--<a href="" title="" >支持</a>-->
            <!--</li>          -->
            <!--<li><span>语言</span>-->
            <!--<a href="" title="" class="sx_li">全部</a>-->
            <!--<a href="" title="" >中文</a>-->
            <!--<a href="" title="" >英文</a>-->
            <!--<a href="" title="" >其它</a>-->
            <!--</li>-->
        </ul>
    </div>
</div>
<!--筛选结束 -->

<!--中间大版块开始 -->
<div class="box_on_cent">
    <!--右边 -->
    <div style="width:250px;float:right;">
        <div class="c2_phb">
            <div class="t_tit"><p class="t_left">游戏排行</p></div>
            <?php if(is_array($game)): foreach($game as $key=>$g): ?><ul>
                <li class="phb_top_one">
                    <div class="phb_top_bot1">1</div>
                    <img src="<?php echo ($g["appimage"]); ?>"/>

                    <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/<?php echo ($g["id"]); ?>" class="hei333" target="_blank"><?php echo ($g["appname"]); ?></a></div>
                    <p class="phb_top_zi2"></p>
                </li>
            </ul><?php endforeach; endif; ?>

        </div>

        <!--<div class="c2_phb">-->
            <!--<div class="t_tit"><p class="t_left">游戏标签</p></div>-->
            <!--<ul>-->
                <!--<li class="phb_top_two">-->
                    <!--<div class="phb_top_bot1">1</div>-->
                    <!--<a href="" target="_blank">视频</a></li>-->
                <!--<li class="phb_top_two">-->
                    <!--<div class="phb_top_bot1">2</div>-->
                    <!--<a href="" target="_blank">图片分享</a></li>-->
                <!--<li class="phb_top_two">-->
                    <!--<div class="phb_top_bot1">3</div>-->
                    <!--<a href="" target="_blank">吃货美食</a></li>-->
                <!--<li class="phb_top_two">-->
                    <!--<div class="phb_top_bot1">4</div>-->
                    <!--<a href="" target="_blank">美女</a></li>-->
                <!--<li class="phb_top_two">-->
                    <!--<div class="phb_top_bot1">5</div>-->
                    <!--<a href="" target="_blank">备份工具</a></li>-->
                <!--<li class="phb_top_two">-->
                    <!--<div class="phb_top_bot1">6</div>-->
                    <!--<a href="" target="_blank">旅行</a></li>-->
                <!--<li class="phb_top_two">-->
                    <!--<div class="phb_top_bot1">7</div>-->
                    <!--<a href="" target="_blank">浏览器</a></li>-->
                <!--<li class="phb_top_two">-->
                    <!--<div class="phb_top_bot1">8</div>-->
                    <!--<a href="" target="_blank">教育</a></li>-->
                <!--<li class="phb_top_two">-->
                    <!--<div class="phb_top_bot1">9</div>-->
                    <!--<a href="" target="_blank">减肥瘦身</a></li>-->
                <!--<li class="phb_top_two">-->
                    <!--<div class="phb_top_bot1">10</div>-->
                    <!--<a href="" target="_blank">隐私保护</a></li>-->
            <!--</ul>-->
        <!--</div>-->
    </div>
    <!--游戏列表-->
    <div class="box_game_list">
        <div class="t_tit" style="width:735px;">
            <ul class="t_left_ul">
                <!--<li><a href="" title="" class="t_tit_li">全部</a></li>-->
                <!--<li><a href="" title="">免费</a></li>-->
                <!--<li><a href="" title="">降价</a></li>-->
                <!--<li><a href="" title="">限免</a></li>-->
                <!--<li><a href="" title="">付费</a></li>-->

            </ul>
            </ul>
            </ul>
        </div>
        <div class="game_list_cent">
            <?php if(is_array($data)): foreach($data as $key=>$da): ?><dl>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/<?php echo ($da["id"]); ?>" target="_blank"><img src="<?php echo ($da["appimage"]); ?>"/></a>
                <dt><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/<?php echo ($da["id"]); ?>" target="_blank" class="hei333"><?php echo ($da["appname"]); ?></a></dt>
                <dd><?php echo ($da["appshowname"]); ?></dd>
                <p><?php echo ($da["time"]); ?></p>

                <!--<div class="star1"></div>-->
                <!--<div class="game_biao game_bg1">免费</div>-->
            </dl><?php endforeach; endif; ?>
        </div>
        <div class="page"><?php echo ($page); ?></div>

    </div>


</div>
<!--中间大版块结束 -->
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