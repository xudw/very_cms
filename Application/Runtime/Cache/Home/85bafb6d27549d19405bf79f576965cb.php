<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ר�����а�</title>
<meta name="description" content="" />
<link href="<?php echo WEB_NAME; ?>/Public/webcss/common.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="<?php echo WEB_NAME; ?>/Public/js/jquery-1.4.min.js"></script>
 <link href="<?php echo WEB_NAME; ?>/Public/webcss/other.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!--���� -->
<div class="box_d">
     <div class="top_d">
         <span class="top_d_left"><a href=""  target="_blank">����������ҳ</a></span>
         <span class="top_d_right"><a href=""  target="_blank">��׿</a><a href=""  target="_blank">ƻ��</a>
         <a href=""  target="_blank">WP</a>
         <a href=""  target="_blank">html5</a><a href=""   target="_blank">�ֻ���</a></span>
     </div>
</div>
<!--LOGO -->
<div class="box_top">
  <!-- <div class="t_logo"><img src="images/logo.jpg" tppabs="http://ios.155.cn/file/default/img/logo.jpg" /></div> -->
  
  <div class="shezhi_ok"></div>
  <div class="t_search">
  <form name="soso"  method="get" action="http://ios.155.cn/search.php" class="left" >
  <label>
   <input type="text" name="kw" id="search_txt" class="t_sousuo"/>
   <input name="button" type="submit" id="search_btn"  class="t_bot" onclick="soso.submit()" value=""/>
  </label>
  </form>
  </div>
<script type="text/javascript">
	void function(){
		var def_val = '�����������Ϣ';
		var kw = document.getElementById('search_txt');
		kw.value = def_val;
		kw.onclick = function(){
			this.value = this.value == def_val ? '' : this.value;
		}
		kw.onblur = function(){
			this.value = this.value || def_val;
			this.parentNode.style.cssText = ''
		}
		kw.focus = function(){/*if(this.value == def_val) this.value = '';*/
			this.parentNode.style.cssText = '';
		}
		kw.onmouseover = function(){
			this.focus()
		};
		kw.focus();
		var sb = document.getElementById('search_btn');
		sb.onclick = function(){
			if (kw.value == '' || kw.value == def_val) {
				alert('�����������Ϣ');
				return false;
			}
		}
	}();
</script>
</div>
<!--MENU -->
<div class="box_menu">
     <a href="" >��ҳ</a>    
     <a href="" >Ӧ��</a>
     <a href="" class="menu1">���а�</a>
     <a href="" >APPר��</a>
     <a href="" >��Ѷ</a>
     <a href="" target="_blank">����</a>
</div>


<!--�м��鿪ʼ -->
<div class="box_rank">
     {paihang}
</div>	  
<!--��Ȩ��ʼ -->
<div class="box_foot">
     <div class="foot_zi">
          <p class="foot_menu">
            <a target="_blank" href="">�ֻ���Ϸ</a> |<a target="_blank" href="">��׿��Ϸ</a> |
			<a target="_blank"  href="" >��׿����</a> |
			<a target="_blank"  href="">������������</a> | <a target="_blank"  href="" rel="nofollow" >��ϵ����</a> | <a target="_blank"  href="" rel="nofollow" >��Ȩ����</a> | <a target="_blank"  href="" rel="nofollow">��������</a> | <a target="_blank" href="" rel="nofollow" >�ͻ�����</a> | <a target="_blank" href="">��վ��ͼ</a>
     <p class="foot_copyright">
             Copyright 2006-2010 155.cn  All Rights Reserved ��ICP��<a target="_blank" href="" rel="nofollow">08023770</a>��<br />��ֵ����ҵ��Ӫ����֤ ��B2-20080119
          </p>
     </div>
    
</div>
<!--��Ȩ���� -->
</body>
</html><script type="text/javascript">
	void function(){
	$("#t_tit li").each(function(index){
		$(this).click(function(){
			$(this).siblings().removeClass("t_tit_li").end().addClass("t_tit_li");
			$(".showNow").removeClass("showNow");
			$(".jietus").eq(index).addClass("showNow");
		});
	});
	}();
</script>