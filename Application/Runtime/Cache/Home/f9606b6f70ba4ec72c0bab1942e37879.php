<?php if (!defined('THINK_PATH')) exit();?><html>
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
    <li></li>
    <li></li>
    <li><a href="<?php echo WEB_NAME; ?>/index.php/MakeHtml/index/">生成页面</a></li>
    <li><a href="<?php echo WEB_NAME; ?>/index.php/Index/index/">前台首页</a></li>
</ul>


            </div>
        </div>
    </div>
    <div id="right">
        <a href="<?php echo WEB_NAME; ?>/index.php/AppAdmins/newIndex">添加资讯</a>
        <table>
            <tr>
                <th>
                    标题
                </th>
                <th>
                    内容
                </th>
                <th>
                    来源
                </th>
                <th>
                    作者
                </th>
                <th>
                    新闻类型
                </th>
                <th>
                    创建日期
                </th>
                <th>
                    操作
                </th>
            </tr>
            <?php if(is_array($new_list)): foreach($new_list as $key=>$list): ?><tr>
                    <td><?php  echo mb_substr($list['title'],0,10).'......'; ?></td>
                    <td><?php  echo mb_substr($list['content'],0,20).'......'; ?></td>
                    <td><?php echo ($list["come"]); ?></td>
                    <td><?php echo ($list["author"]); ?></td>
                    <td><?php echo ($list["newtype"]); ?></td>
                    <td><?php echo ($list["time"]); ?></td>
                    <td>
                        <a onClick="return confirm('您确定要删除此内容？');"
                           href="<?php echo WEB_NAME; ?>/index.php/AppAdmins/delnews/table/new/nid/<?php echo $list['id']; ?>">删除</a>
                        <a href="<?php echo WEB_NAME; ?>/index.php/AppAdmins/editnews/nid/<?php echo $list['id']; ?>">修改</a>
                    </td>
                </tr><?php endforeach; endif; ?>
        </table>

    </div>
</div>
<div id="footer">
    
</div>
</body>
</html>