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
    <div id="right">
        <a href="<?php echo WEB_NAME; ?>/index.php/AppAdmins/makeJob">添加应用</a>
        
        <div style="margin:10px 0 0 0;float:right">
            <form action="<?php echo WEB_NAME; ?>/index.php/AppAdmins/index" method="post">
            <input type="text" name="search" value="<?php echo ($search); ?>">
            <input type="submit" name="msearch" value="查询">
            </form>
            <?php echo ($error); ?>
        </div>
        <div class="cptable" style="clear:both;">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <th>
                    应用名
                </th>
                <th>
                    应用类型
                </th>
                <th>
                    系统
                </th>
                <th>
                    语言
                </th>
                <th>
                    收费方式
                </th>
                <th>
                    创建日期
                </th>
                <th>
                    操作
                </th>
            </tr>
            <?php if(is_array($app_list)): foreach($app_list as $key=>$list): ?><tr>
                    <td><?php echo ($list["appname"]); ?></td>
                    <td><?php echo ($list["apptype"]); ?></td>
                    <td><?php echo ($list["appsystem"]); ?></td>
                    <td><?php echo ($list["applanguage"]); ?></td>
                    <td><?php echo ($list["money"]); ?></td>
                    <td><?php echo ($list["time"]); ?></td>
                    <td>
                        <a onClick="return confirm('您确定要删除此内容？');"
                           href="<?php echo WEB_NAME; ?>/index.php/AppAdmins/delnews/table/app/nid/<?php echo $list['id']; ?>">删除</a>
                        <a href="<?php echo WEB_NAME; ?>/index.php/AppAdmins/editapp/nid/<?php echo $list['id']; ?>">修改</a>
                        <?php if($list['tag']=='1'){ ?>
                            <a href="<?php echo WEB_NAME; ?>/index.php/AppAdmins/maketag/nid/<?php echo $list['id']; ?>/type/2">取消标记</a>
                        <?php  }else{ ?>
                            <a href="<?php echo WEB_NAME; ?>/index.php/AppAdmins/maketag/nid/<?php echo $list['id']; ?>/type/1">标记</a>
                        <?php }　?>

                    </td>
                </tr><?php endforeach; endif; ?>
        </table>
    </div>
    </div>
</div>
<div id="footer">
    
</div>
</body>
</html>