<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
	
        <title><?php echo (appkey($appname)); ?></title>
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
    <li><a href="<?php echo WEB_NAME; ?>/index.php/Home/AppAdmins/index/">后台首页</a></li>
    <li><a href="<?php echo WEB_NAME; ?>/index.php/Home/AppAdmins/newShow/">资讯管理</a></li>
    <li><a href="<?php echo WEB_NAME; ?>/index.php/Home/Adv/index/">广告管理</a></li>
</ul>


            </div>
        </div>
    </div>
    <div id="right">
        <?php echo ($error); ?>
        <form method="post" action="<?php echo WEB_NAME; ?>/index.php/Home/AppAdmins/newIndex">
            <table>
                 <tr>
                     <td>标题</td>
                     <td><input type="text" name="title" value="<?php echo ($title); ?>"></td>
                 </tr>
                <tr>
                    <td>作者</td>
                    <td><input type="text" name="author" value="<?php echo ($author); ?>"></td>
                </tr>
                <tr>
                    <td>来源</td>
                    <td><input type="text" name="come" value="<?php echo ($come); ?>"></td>
                </tr>
                <tr>
                    <td>内容</td>
                    <td>
                        <textarea name="content" row="5" col="10">
                            <?php echo ($content); ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="subnew" value="提交"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<div id="footer">
    
</div>
</body>
</html>