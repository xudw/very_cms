<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
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
	
    <div id="right" >
	<?php echo ($error); ?>
	<form enctype="multipart/form-data" method="post" action="<?php echo WEB_NAME;?>/index.php/Home/AppAdmins/makeJob">  
        <table>
		<tr>
			<td>应用名</td>
			<td><input type='text' name='appname' value='<?php echo ($appname); ?>'></td>
		</tr>
		<tr>
			<td>应用类型</td>
			<td>
				<select name='apptype'>
					<option value=''>选择类型</option>
				<?php if(is_array($type_list)): foreach($type_list as $key=>$tlist): ?><option value='<?php echo ($tlist["type_id"]); ?>'  <?php if($apptype==$tlist['type_id']){ ?>  selected="selected"  <?php  } ?>><?php echo ($tlist["type_name"]); ?></option><?php endforeach; endif; ?>			
				</select>
			</td>
		</tr>
		<tr>
			<td>收费类型</td>
			<td>
				<select name='money'>
					<option value='否' <?php if($money=='否'){ ?>  selected="selected"  <?php  } ?> >否</option>
					<option value='是' <?php if($money=='是'){ ?>  selected="selected"  <?php  } ?> >是</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>应用别名</td>
			<td>
			<input type='text' name='appshowname' value='<?php echo ($appshowname); ?>'>
			</td>
		</tr>
		<tr>
			<td>版本</td>
			<td>
			<input type='text' name='appversion' value='<?php echo ($appversion); ?>'>
			</td>
		</tr>
		<tr>
			<td>语言</td>
			<td>
				<select name='applanguage'>
					<option value='中文' <?php if($applanguage=='中文'){ ?>  selected="selected"  <?php  } ?> >中文</option>
					<option value='英文' <?php if($applanguage=='英文'){ ?>  selected="selected"  <?php  } ?> >英文</option>
					<option value='其他' <?php if($applanguage=='其他'){ ?>  selected="selected"  <?php  } ?> >其他</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>系统</td>
			<td>
				<select name='appsystem'>
					<option  value='Android' <?php if($appsystem=='Android'){ ?>  selected="selected"  <?php  } ?> >Android</option>
					<option  value='IOS' <?php if($appsystem=='IOS'){ ?>  selected="selected"  <?php  } ?> >IOS</option>
					<option  value='WP' <?php if($appsystem=='WP'){ ?>  selected="selected"  <?php  } ?> >WP</option>
					<option  value='HTML5' <?php if($appsystem=='HTML5'){ ?>  selected="selected"  <?php  } ?> >HTML5</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>应用下载地址</td>
			<td>
				<input type='text' name='apphome' value='<?php echo ($apphome); ?>'>
			</td>
		</tr>
		<tr>
			<td>图标</td>
			<td>
				<input type="file" name="appimage" />
			</td>
		</tr>
		<tr>
			<td>应用来源</td>
			<td><input type='text' name='come' value='<?php echo ($come); ?>'></td>
		</tr>
		<tr>
			<td>应用简介</td>
			<td>
				<textarea rows="3" cols="20" name='summary'>
				<?php echo ($summary); ?>
				</textarea>
			</td>
		</tr>
		<tr>
			<td>更新说明</td>
			<td>
			<textarea rows="3" cols="20" name='upsummary'>
			<?php echo ($upsummary); ?>
				</textarea>
			</td>
		</tr>
		<tr><td colspan='2'><input type='submit' name="subapp" value="提交"></td></tr>
		</table>
		</form>
    </div>
</div>
<div id="footer">
    
</div>
    </body>
</html>