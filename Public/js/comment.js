/**
 * @copyright 深圳市摩掌信息技术有限公司 www.155.cn
 */
var comment=function(){
	var $this=this;//定义this指针,防止出错,私有属性
	$this.config= new Array();
	$this.config['user_name']='<span id="userbox" style="display:none">用户名:<input type="text" style="width:100px; height:15px;" size="8" name="user_name" id="user_name"/></span>';
	$this.config['password']='<span id="pwdbox" style="display:none">密码:<input type="password" size="8" style="width:100px; height:15px;" name="user_password" id="password"/></span>';
	$this.config['loginbutton']='<input type="button" value="登录" id="login_btn"/>';
	$this.config['textarea']='<textarea style="width:470px; height:100px; margin-left: 25px;overflow-y:auto" name="content" id="comment_content"></textarea><br>';
	$this.config['postbutton']='<input type="button" id="postbutton" value="发表评论" class="postbutton"/>';
	$this.config['hide_name']='<span id="labelhide" style="display:none"><input value=1 type="checkbox" name="hide_name" checked="checked" id="hide_name"/> <label for="hide_name">匿名</label></span>';
	$this.order=['textarea','user_name','password','hide_name','postbutton'];
	//创建评论框
	$this.C=function(id){
		$(id).empty();
		for(var i=0;i<$this.order.length;i++)
		{
			$(id).append($this.config[$this.order[i]]);
		}
		if($('input[name=logined_user]').val()!='')
		{
			$('#pwdbox').remove();
			$('#userbox').css({display:'inline',width:'100px'}).html($('input[name=logined_user]').val());//增加css()
			$('#labelhide').css({display:'inline',width:'100px'});
			$('input[name="hide_name"]').attr({checked:''});
		}
		
		//else
		//{	
		//	$(id).append('&nbsp;&nbsp;<a style="font-size:14px;" href="http://ios.155.cn/register.php?referer=/zone">注册</a>');
		//}
		$(id).append('&nbsp;&nbsp;<span id="error"></span>');
	}
	//检查输入
	$this.Check=function(){
		$('input[id=postbutton]').click(function(){
			if(''==$('#comment_content').val()){
				$('span#error').css({'color':'red','font-size':'14px'}).html('请填写评论！');
				return false;
			}
			else if('1'!=$('input[id=hide_name]:checked').val()){
				if(''==$('input[name=logined_user]').val()){
					if(''==$('input[id=user_name]').val() || ''==$('input[id=password]').val())
					{
						$('span#error').css({'color':'red','font-size':'14px'}).html('请填登陆信息！');
						return false;
					}
					else{
						$('span#error').empty();
						$this.postdata();
					}
			    }
				else{
					$('span#error').empty();
					$this.postdata();
				}
			}
			else{
				$('span#error').empty();
				$this.postdata();
			}
			
			return false;
		});
	}
	
	//发送数据
	//content,user_name，全要编码 encodeURIComponent
	$this.postdata=function(){
		var ishide=1;
		if($('input[id=hide_name]').attr('checked')==false){
			ishide=0;
		}
		
		$.post('/comment.php?act=save&sid='+$('input[name=sid]').val()+'&'+$this.xtype(),{gid:$('input[name=gid]').val(),aid:$('input[name=aid]').val(),net:$('input[name=net]').val(),touid:$('input[name=touid]').val(),pid:$('input[name=pid]').val(),content:encodeURIComponent($('#comment_content').val()),hide_name:ishide},
		       function(data){
			   var obj=eval('('+data+')');
		       if(!obj.status){$('span#error').css({'color':'red','font-size':'14px'}).html(obj.data);}
		       else{$('span#error').css({'color':'green','font-size':'14px'}).html('评论发表成功');
		       //清除已经发表的评论
				 $('#comment_content').val('');
		       //评论发表成功，向DOM中插入
		       var arr=obj.data;
		       $this.insert('#comment_lst',arr.user,arr.time_str,arr.comment,arr.ip,arr.yidd,arr.id,arr.blogid,0,0,0);
		       
		       }}
		);
	}
	
	//加载评论
	$this.L=function(i,l){
		//$this.loading('#comment_lst');影响其他的操作，暂时干掉
		$.getJSON('/comment.php?act=list&sid='+$('input[name=sid]').val()+'&'+$this.xtype(),{gid:$('input[name=gid]').val(),aid:$('input[name=aid]').val(),net:$('input[name=net]').val(),touid:$('input[name=touid]').val(),pid:$('input[name=pid]').val(),'cur_page':i,'list_total':l},function(json){
			if(json.status){
				$('#comment_lst').empty();
				var len=json.data.length;
				//楼层数
				var no=json.page.total-(json.page.cur_page-1)*json.page.list_total;
				for(var i=0;i<len;++i){
					var arr=json.data[i];
					$('#comment_lst').append(C_li(arr.user,arr.time_str,arr.comment,arr.ip,arr.yidd,arr.id,arr.blogid,no--,arr.good,arr.bad,arr.replyarr));
				}
				$('http://ios.155.cn/file/default/js/div.page').html(C_page(json.page.total,json.page.list_total,json.page.cur_page));
			}
			else{
				$('#comment_lst').html(json.data);
			}
		});
		
	}
	
	//创建评论列表<li></li>
	var C_li=function(user,howLong,comment,ip,yidd,commentID,XID,no,good,bad,replyarr){
		var str='<li>';
		str+='<div class="guestbook">';	

		str+='<div class="info"><span>'+no+'</span>#&nbsp;&nbsp;'+user+'&nbsp;&nbsp;'+howLong+'前<span>&nbsp;&nbsp;'+yidd+'&nbsp;&nbsp;'+ip+'</span></div>';
		str+='<div class="op">';
		str+='<a href="#nogo" onclick=";return reply_comment(this,'+commentID+')">回复</a>';
		str+='&nbsp;&nbsp;<a href="javascript:void(0);" class="pu" onclick="return prize_comment(this,1,'+commentID+','+XID+')">支持(<span>'+good+'</span>)</a>';
		str+='&nbsp;&nbsp;<a href="javascript:void(0);" class="pd" onclick="return prize_comment(this,0,'+commentID+','+XID+')">反对(<span>'+bad+'</span>)</a>';
		str+='&nbsp;&nbsp;<a href="javascript:void(0);" onclick="return report_comment('+commentID+','+XID+')">举报</a>';
		str+='</div>';	
		str+='</div>';	
		str+='<div class="ctn" id="comment_body_'+commentID+'">'+comment+'</div>';

		var arrlen=replyarr.length;
		if(arrlen>0){
			for(var i=0;i<arrlen;++i){
				var arr=replyarr[i];
				str+=$this.reply(arr.user,arr.time_str,arr.yidd,arr.ip,arr.comment);
			}
		}

		
		str+='</li>';
		return str;
	}
	
	//创建分页
	var C_page=function(total,list_total,cur_page){
		var str='';
		var len=10;
		var page_total=Math.floor(total/list_total);
		var page_num = Math.floor(total/len);
		if(total%list_total>0)page_total++;
		if(1==cur_page){
			str+='<span class="page_prev">上一页</span>';
		}
		else{
			str+='<a class="page_prev" href="javascript:void(0);" onclick="gotopage('+(cur_page-1)+');">上一页</a>';
		}
		str+='<span class="page_num">';
		if(cur_page - len > 0){
			str+= '<em>...</em>';
		}
		for(var i=cur_page-len;i<=cur_page+len;i++){

			if(i>0 && i<=page_num){
				if(i==cur_page){
					str+='<em>'+cur_page+'</em>';
				}
				else{str+='<a id="prevent" href="javascript:void(0);" onclick="gotopage('+i+');">'+i+'</a>';}
			}
		}
		if(cur_page + len < page_num){
			str+= '<em>...</em>';
		}
		str+='</span>';
		if(page_total==cur_page){
			str+='<span class="page_next">下一页</span>';
		}
		else{
			str+='<a class="page_next" href="javascript:void(0);" onclick="gotopage('+(cur_page+1)+');">下一页</a>';
		}
		return str;
	}
	
	//到达第N页
	$this.gopage=function(n){
		$this.L(n,10);
		return false;
	}
	
	//Loading效果
	$this.loading=function(id){
			$(id).ajaxStart(function(){$(this).html('<li><img src="ajax_loading.gif"/*tpa=http://ios.155.cn/file/default/img/ajax_loading.gif*/ /></li>');});
			//$(id).ajaxStop(function(){$(this).empty();});
	}
	
	//支持/反对评论
	$this.jugde=function(e,flag,commentID,XID,x){
		$.getJSON('/comment.php?act=prize&type='+flag+'&id='+commentID+'&xid='+XID+'&'+x,function(json){
			if(json.status){
				alert(json.data);
				$(e).children('span').html(parseInt($(e).children('span').html(),10)+1);
			}
			else{
				alert(json.data);
			}
		});
		return false;
	}
	
	//举报评论
	$this.report=function(commentID,XID,x){
		$.getJSON('/comment.php?act=report&id='+commentID+'&xid='+XID+'&'+x,function(json){
			if(json.status){
				alert(json.data);
			}
			else{
				alert(json.data);
			}
		});
		return false;
	}
	
	//当评论发表成功后，向DOM中插入一条评论
	//cssID评论容器 如<ul></ul>
	$this.insert=function(cssID,user,howLong,content,ip,fromarea,commentID,XID,good,bad){
		if($(cssID+' li').length>=10){
			//删除最后一条评论
			$(cssID+' li:last').remove();
		}
		if($(cssID+' li').length<1){
			var no=1;
		}
		else{
			//取得第一条评论的楼层数
			var no=parseInt($(cssID+' li:first').children('http://ios.155.cn/file/default/js/div.info').children('span').html(),10)+1;
		}
		//调用C_li创建评论,插入顶层
		$(cssID).prepend(C_li(user,howLong,content,ip,fromarea,commentID,XID,no,good,bad,0));
	}
	
	//向列表里添加评论回复
	$this.reply=function(user,howLong,fromarea,ip,content){
		var str='<div class="reply">';
		str+='<div class="info">'+user+'&nbsp;&nbsp;'+howLong+'前<span>&nbsp;&nbsp;'+fromarea+'&nbsp;&nbsp;'+ip+'</span></div>';
		str+='<div class="ctn">'+content+'</div>';
		str+='</div>';
		return str;
	}
	var temp=function(){
		var str='';
		str+='<form class="reply_frm" id="reply_frm" action="http://ios.155.cn/file/default/js/comment.php?act=save&is_reply=1" method="POST">';
		str+='<h5><span id="close_reply_span">关闭</span>回复<strong></strong></h5>';
		str+='<p style="width:380px;">';
		str+='<span id="hide2"><input type="checkbox" name="hide_name" id="hide_name2"/>';
		str+='<label for="hide_name2">匿名</label><br/></span>';
		str+='<input type="hidden" name="reply_id" value="" id="reply_id"/>';
		str+='<textarea cols="30" rows="8" class="txt" name="content" id="reply_content"></textarea>';
		str+='<input type="submit" id="butt" value="发表评论"/> <input type="button" value="关闭" id="close_reply_btn"/>';
		str+='<span id="warn_msg" class="warn_msg"></span>';
		str+='</p>';
		str+='</form>';
		return str;	
	}
	//弹出评论
	$this.reply_x=function(e,commentID){
		$('#hidform').css('display','block').html(temp());
		$('#comment_content').click(function(){$('#reply_frm').css({display:'none'});});
		$('#close_reply_span').click(function(){$('#reply_frm').css({display:'none'});});
		$('#close_reply_btn').click(function(){$('#reply_frm').css({display:'none'});});
		var p=$(e).position();
		$('#reply_frm').css({display:'block',left:(p.left-400),top:p.top});
		$('#reply_id').val(commentID);
		$('#reply_content').focus();
		if(''==$('input[name=logined_user]').val()){$('span#hide2').css('display','none');}
		else{$('hide_name2').css('display','block');}
		$('input[id=butt]').click(function(){$this.postreply();return false;});
	}
	
	//发表回复
	$this.postreply=function(){
		if(''==$('#reply_content').val()){$('#warn_msg').css({color:'red'}).html('请填写回复！');$('#reply_content').focus();return false;}
		else{
			var ishide=1;
			if($('input[id=hide_name2]').attr('checked')==false){
				ishide=0;
			}
			$.post('/comment.php?act=save&is_reply=1&sid='+$('input[name=sid]').val()+'&'+$this.xtype(),{gid:$('input[name=gid]').val(),aid:$('input[name=aid]').val(),net:$('input[name=net]').val(),touid:$('input[name=touid]').val(),'reply_id':$('#reply_id').val(),content:encodeURIComponent($('#reply_content').val()),hide_name:ishide},
		        function(data){
					   var obj=eval('('+data+')');
				       if(!obj.status){$('span#warn_msg').css({'color':'red','font-size':'14px'}).html(obj.data);}
				       else{$('span#warn_msg').css({'color':'green','font-size':'14px'}).html('回复发表成功');
					       //回复发表成功，向DOM中插入
					       var arr=obj.data;
					       var str=$this.reply(arr.user,arr.time_str,arr.yidd,arr.ip,arr.comment);
					       $('#comment_body_'+$('#reply_id').val()).parent().find('.op').before(str);
					       $('#reply_content').val('');
					       $('#reply_frm').css('display','none');
				       }
				}
			);
			return false;
		}
	}
	
	//返回字符串，判断当前评论类型
	$this.xtype=function(){
		var xstr='xtype=';
		if($('input[name=sid]').val()==undefined && $('input[name=pid]').val()==undefined && $('input[name=aid]').val()==undefined){
			xstr+='gid';
		}else if($('input[name=gid]').val()==undefined && $('input[name=sid]').val()==undefined && $('input[name=pid]').val()==undefined){
			xstr+='aid';
		}else{
			xstr+='sid';
		}
		return xstr;
	}
}
//创建实例
var com=new comment();
//到达第N页，调用类的方法
var gotopage=function(n){com.gopage(n);return false;}
//支持/反对，调用类的方法
var prize_comment=function(e,flag,commentid,articleid){com.jugde(e,flag,commentid,articleid,com.xtype());return false;}
//举报，调用类的方法
var report_comment=function(commentid,articleid){com.report(commentid,articleid,com.xtype());return false;}
//回复
var reply_comment=function(e,commentID){com.reply_x(e,commentID,com.xtype());return false;}
$(document).ready(function(){
//清除正在加载的图标
$('#comment_lst').empty();
//加载列表
com.L(1,10);
//同上
$('#comment').empty();
//加载评论框
com.C('#comment');
//检测输入状态
com.Check();
});