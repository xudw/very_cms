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
<link rel="stylesheet" type="text/css" href="<?php echo WEB_NAME; ?>/Public/jquery.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo WEB_NAME; ?>/Public/jquery.custom/js/jquery-ui-1.8.11.custom.min.js" /></script>
<script src="<?php echo WEB_NAME; ?>/Public/jquery.custom/js/ui.datepicker-zh.js" /></script>
<script>
$(document).ready(function() {
    $.datepicker.setDefaults($.datepicker.regional['zh-CN']);
    $('#stime').datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'yy-mm-dd',
        showButtonPanel: true,
    });
    $('#etime').datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'yy-mm-dd',
        showButtonPanel: true,
    });
});
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
        <form enctype="multipart/form-data" method="post" action="<?php echo WEB_NAME; ?>/index.php/Adv/editadv">
            <input type="hidden" name="id" value="<?php echo ($list["id"]); ?>">
            <table>
                <tr>
                    <td>广告名</td>
                    <td><input type='text' name='advname' value='<?php echo ($list["advname"]); ?>'></td>
                </tr>

                <tr>
                    <td>所属页面</td>
                    <td>
                        <select name='showpage'>
                            <option value='首页' <?php if($list['showpage']=='首页'){ ?>  selected="selected"  <?php  } ?>>首页</option>
                            <option value='首页幻灯' <?php if($list['showpage']=='首页幻灯'){ ?>  selected="selected"  <?php  } ?>>首页幻灯</option>
                            <option value='二级页' <?php if($list['showpage']=='二级页'){ ?>  selected="selected"  <?php  } ?>>二级页</option>
                            <option value='二级页幻灯' <?php if($list['showpage']=='二级页幻灯'){ ?>  selected="selected"  <?php  } ?>>二级页幻灯</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>广告图</td>
                    <td>
                        <img src="<?php echo ($list["advimage"]); ?>" width="100px" height="100px">
                        <input type="hidden" name="advimages" value="<?php echo ($list["advimage"]); ?>">
                        <input type="file" name="advimage"/>
                    </td>
                </tr>
                <tr>
                    <td>开始时间</td>
                    <td>
                        <input style='height:25px;' type='text' name='stime' id='stime' value='<?php echo ($list["stime"]); ?>'>
                    </td>
                </tr>
                <tr>
                    <td>结束时间</td>
                    <td>
                        <input style='height:25px;' type='text' name='etime' id='etime' value='<?php echo ($list["etime"]); ?>'>
                    </td>
                </tr>

                <tr>
                    <td colspan="2"><input type="submit" name="subapp" value="提交"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<div id="footer">
    
</div>
</body>
</html>