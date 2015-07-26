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
        <?php echo ($error); ?>
        <form enctype="multipart/form-data" method="post" action="<?php echo WEB_NAME; ?>/index.php/AppAdmins/newIndex">
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
                    <td>咨询类型</td>
                    <td>
                    <select name='newtype'>
                        <option value=''>选择类型</option>
                        <option value='新游评测' <?php if($newtype=='新游评测'){ ?>  selected="selected"  <?php  } ?> >新游评测</option>
                        <option value='游戏新闻' <?php if($newtype=='游戏新闻'){ ?>  selected="selected"  <?php  } ?> >游戏新闻</option>
                        <option value='福利新闻' <?php if($newtype=='福利新闻'){ ?>  selected="selected"  <?php  } ?> >福利新闻</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>图片</td>
                    <td>
                        <input type="file" name="newimage" />
                    </td>
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