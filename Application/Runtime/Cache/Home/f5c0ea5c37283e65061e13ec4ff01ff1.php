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
<script type="text/javascript" src="<?php echo WEB_NAME; ?>/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="<?php echo WEB_NAME; ?>/Public/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript">
    window.UEDITOR_HOME_URL = "<?php echo WEB_NAME; ?>/Public/ueditor/";    //UEDITOR_HOME_URL、config、all这三个顺序不能改变(绝对路径)
    window.onload=function(){
        window.UEDITOR_CONFIG.initialFrameHeight=300;//编辑器的高度
        window.UEDITOR_CONFIG.initialFrameWidth=700;//编辑器的高度
        UE.getEditor('summary');//里面的contents是我的textarea的id值

    }

</script>
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
    <li><a href="<?php echo WEB_NAME; ?>/index.php/Adv/index/">类型管理</a></li>
    <li></li>
    <li></li>
    <li><a href="<?php echo WEB_NAME; ?>/index.php/MakeHtml/index/">生成页面</a></li>
    <li><a href="<?php echo WEB_NAME; ?>/index.php/Index/index/" target="_blank">前台首页</a></li>
</ul>


            </div>
        </div>
    </div>
    <div id="right">
        <?php echo ($error); ?>
        <form enctype="multipart/form-data" method="post" action="<?php echo WEB_NAME; ?>/index.php/AppAdmins/editnews">
            <input type="hidden" name="nids" value="<?php echo ($list["id"]); ?>">
            <table>
                 <tr>
                     <td>标题</td>
                     <td><input type="text" name="title" value="<?php echo ($list["title"]); ?>" style="width:500px;"></td>
                 </tr>
                <tr>
                    <td>作者</td>
                    <td><input type="text" name="author" value="<?php echo ($list["author"]); ?>"></td>
                </tr>
                <tr>
                    <td>来源</td>
                    <td><input type="text" name="come" value="<?php echo ($list["come"]); ?>"></td>
                </tr>
                <tr>
                    <td>资讯类型</td>
                    <td>
                    <select name='newtype'>
                        <option value=''>选择类型</option>
                        <option value='新游评测' <?php if($list['newtype']=='新游评测'){ ?>  selected="selected"  <?php  } ?> >新游评测</option>
                        <option value='游戏新闻' <?php if($list['newtype']=='游戏新闻'){ ?>  selected="selected"  <?php  } ?> >游戏新闻</option>
                        <option value='福利新闻' <?php if($list['newtype']=='福利新闻'){ ?>  selected="selected"  <?php  } ?> >福利新闻</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>是否头条</td>
                    <td>
                        <select name='pagetag'>
                            <option value=''>选择</option>
                            <option  value='首页头条' <?php if($list['pagetag']=='首页头条'){ ?>  selected="selected"  <?php  } ?> >首页头条</option>
                            <option  value='二级页头条' <?php if($list['pagetag']=='二级页头条'){ ?>  selected="selected"  <?php  } ?> >二级页头条</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>图片</td>
                    <td>
                        <img src="<?php echo ($list["newimage"]); ?>" width="100px" height="100px">
                        <input type="hidden" name="newimages" value="<?php echo ($list["newimage"]); ?>">
                        <input type="file" name="newimage"/>
                    </td>
                </tr>
                <tr>
                    <td>所属系统</td>
                    <td>
                        <select name='newsystem'>
                            <option  value='Android' <?php if($list['newsystem']=='Android'){ ?>  selected="selected"  <?php  } ?> >Android</option>
                            <option  value='IOS' <?php if($list['newsystem']=='IOS'){ ?>  selected="selected"  <?php  } ?> >IOS</option>
                            <option  value='WP' <?php if($list['newsystem']=='WP'){ ?>  selected="selected"  <?php  } ?> >WP</option>
                            <option  value='HTMP5' <?php if($list['newsystem']=='HTMP5'){ ?>  selected="selected"  <?php  } ?> >HTMP5</option>
                        </select>
                    </td>
                </tr>

                 <tr>
                    <td>内容</td>
                    <td>
                         <textarea rows="3" cols="20" name='content' id="summary">
                            <?php echo ($list["content"]); ?>
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