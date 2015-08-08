<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
    <head>
	
        <title><?php echo WEB_ADMIN_TITLE; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="pragma" content="no-cache" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no"/>
		<script type="text/javascript" src="<?php echo WEB_NAME; ?>/Public/jquery-1.7.1.min.js"></script>        
        <link rel="stylesheet" type="text/css" href="<?php echo WEB_NAME; ?>/Public/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_NAME; ?>/Public/jquery.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo WEB_NAME; ?>/Public/jquery.custom/js/jquery-ui-1.8.11.custom.min.js" /></script>
<script src="<?php echo WEB_NAME; ?>/Public/jquery.custom/js/ui.datepicker-zh.js" /></script>
  
    </head>
    <body>
    <div id="main">
    <div id="left">
        <div id="menu_sty">
            <div id="munu_sty_s">
                <ul>
    <li><a href="<?php echo WEB_NAME; ?>/index.php/AppAdmins/index/">后台首页</a></li>
    <li><a href="<?php echo WEB_NAME; ?>/index.php/AppAdmins/newShow/">资讯管理</a></li>
    <li><a href="<?php echo WEB_NAME; ?>/index.php/Adv/index/">广告管理</a></li>
    <li><a href="<?php echo WEB_NAME; ?>/index.php/AppType/index/">类型管理</a></li>
    <li></li>
    <li></li>
    <li><a href="<?php echo WEB_NAME; ?>/index.php/MakeHtml/index/">生成页面</a></li>
    <li><a href="<?php echo WEB_NAME; ?>/index.php/Index/index/" target="_blank">前台首页</a></li>
</ul>


            </div>
        </div>
    </div>
	
    <div id="right" >
	<?php echo ($error); ?>
    <br/>
	<form  method="post" action="<?php echo WEB_NAME;?>/index.php/AppType/addtype">  
        <table>
		<tr>
			<td>类型名称</td>
			<td><input type='text' name='typename' value='<?php echo ($typename); ?>'></td>
		</tr>
				<tr><td colspan='2'></td></tr>
		<tr><td colspan='2'><input type='submit' name="subapp" value="提交"></td></tr>
		</table>
		</form>
    </div>
</div>
<div id="footer">
    
</div>
    </body>
</html>