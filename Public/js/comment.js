/**
 * @copyright ������Ħ����Ϣ�������޹�˾ www.155.cn
 */
var comment=function(){
	var $this=this;//����thisָ��,��ֹ����,˽������
	$this.config= new Array();
	$this.config['user_name']='<span id="userbox" style="display:none">�û���:<input type="text" style="width:100px; height:15px;" size="8" name="user_name" id="user_name"/></span>';
	$this.config['password']='<span id="pwdbox" style="display:none">����:<input type="password" size="8" style="width:100px; height:15px;" name="user_password" id="password"/></span>';
	$this.config['loginbutton']='<input type="button" value="��¼" id="login_btn"/>';
	$this.config['textarea']='<textarea style="width:470px; height:100px; margin-left: 25px;overflow-y:auto" name="content" id="comment_content"></textarea><br>';
	$this.config['postbutton']='<input type="button" id="postbutton" value="��������" class="postbutton"/>';
	$this.config['hide_name']='<span id="labelhide" style="display:none"><input value=1 type="checkbox" name="hide_name" checked="checked" id="hide_name"/> <label for="hide_name">����</label></span>';
	$this.order=['textarea','user_name','password','hide_name','postbutton'];
	//�������ۿ�
	$this.C=function(id){
		$(id).empty();
		for(var i=0;i<$this.order.length;i++)
		{
			$(id).append($this.config[$this.order[i]]);
		}
		if($('input[name=logined_user]').val()!='')
		{
			$('#pwdbox').remove();
			$('#userbox').css({display:'inline',width:'100px'}).html($('input[name=logined_user]').val());//����css()
			$('#labelhide').css({display:'inline',width:'100px'});
			$('input[name="hide_name"]').attr({checked:''});
		}
		
		//else
		//{	
		//	$(id).append('&nbsp;&nbsp;<a style="font-size:14px;" href="http://ios.155.cn/register.php?referer=/zone">ע��</a>');
		//}
		$(id).append('&nbsp;&nbsp;<span id="error"></span>');
	}
	//�������
	$this.Check=function(){
		$('input[id=postbutton]').click(function(){
			if(''==$('#comment_content').val()){
				$('span#error').css({'color':'red','font-size':'14px'}).html('����д���ۣ�');
				return false;
			}
			else if('1'!=$('input[id=hide_name]:checked').val()){
				if(''==$('input[name=logined_user]').val()){
					if(''==$('input[id=user_name]').val() || ''==$('input[id=password]').val())
					{
						$('span#error').css({'color':'red','font-size':'14px'}).html('�����½��Ϣ��');
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
	
	//��������
	//content,user_name��ȫҪ���� encodeURIComponent
	$this.postdata=function(){
		var ishide=1;
		if($('input[id=hide_name]').attr('checked')==false){
			ishide=0;
		}
		
		$.post('/comment.php?act=save&sid='+$('input[name=sid]').val()+'&'+$this.xtype(),{gid:$('input[name=gid]').val(),aid:$('input[name=aid]').val(),net:$('input[name=net]').val(),touid:$('input[name=touid]').val(),pid:$('input[name=pid]').val(),content:encodeURIComponent($('#comment_content').val()),hide_name:ishide},
		       function(data){
			   var obj=eval('('+data+')');
		       if(!obj.status){$('span#error').css({'color':'red','font-size':'14px'}).html(obj.data);}
		       else{$('span#error').css({'color':'green','font-size':'14px'}).html('���۷���ɹ�');
		       //����Ѿ����������
				 $('#comment_content').val('');
		       //���۷���ɹ�����DOM�в���
		       var arr=obj.data;
		       $this.insert('#comment_lst',arr.user,arr.time_str,arr.comment,arr.ip,arr.yidd,arr.id,arr.blogid,0,0,0);
		       
		       }}
		);
	}
	
	//��������
	$this.L=function(i,l){
		//$this.loading('#comment_lst');Ӱ�������Ĳ�������ʱ�ɵ�
		$.getJSON('/comment.php?act=list&sid='+$('input[name=sid]').val()+'&'+$this.xtype(),{gid:$('input[name=gid]').val(),aid:$('input[name=aid]').val(),net:$('input[name=net]').val(),touid:$('input[name=touid]').val(),pid:$('input[name=pid]').val(),'cur_page':i,'list_total':l},function(json){
			if(json.status){
				$('#comment_lst').empty();
				var len=json.data.length;
				//¥����
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
	
	//���������б�<li></li>
	var C_li=function(user,howLong,comment,ip,yidd,commentID,XID,no,good,bad,replyarr){
		var str='<li>';
		str+='<div class="guestbook">';	

		str+='<div class="info"><span>'+no+'</span>#&nbsp;&nbsp;'+user+'&nbsp;&nbsp;'+howLong+'ǰ<span>&nbsp;&nbsp;'+yidd+'&nbsp;&nbsp;'+ip+'</span></div>';
		str+='<div class="op">';
		str+='<a href="#nogo" onclick=";return reply_comment(this,'+commentID+')">�ظ�</a>';
		str+='&nbsp;&nbsp;<a href="javascript:void(0);" class="pu" onclick="return prize_comment(this,1,'+commentID+','+XID+')">֧��(<span>'+good+'</span>)</a>';
		str+='&nbsp;&nbsp;<a href="javascript:void(0);" class="pd" onclick="return prize_comment(this,0,'+commentID+','+XID+')">����(<span>'+bad+'</span>)</a>';
		str+='&nbsp;&nbsp;<a href="javascript:void(0);" onclick="return report_comment('+commentID+','+XID+')">�ٱ�</a>';
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
	
	//������ҳ
	var C_page=function(total,list_total,cur_page){
		var str='';
		var len=10;
		var page_total=Math.floor(total/list_total);
		var page_num = Math.floor(total/len);
		if(total%list_total>0)page_total++;
		if(1==cur_page){
			str+='<span class="page_prev">��һҳ</span>';
		}
		else{
			str+='<a class="page_prev" href="javascript:void(0);" onclick="gotopage('+(cur_page-1)+');">��һҳ</a>';
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
			str+='<span class="page_next">��һҳ</span>';
		}
		else{
			str+='<a class="page_next" href="javascript:void(0);" onclick="gotopage('+(cur_page+1)+');">��һҳ</a>';
		}
		return str;
	}
	
	//�����Nҳ
	$this.gopage=function(n){
		$this.L(n,10);
		return false;
	}
	
	//LoadingЧ��
	$this.loading=function(id){
			$(id).ajaxStart(function(){$(this).html('<li><img src="ajax_loading.gif"/*tpa=http://ios.155.cn/file/default/img/ajax_loading.gif*/ /></li>');});
			//$(id).ajaxStop(function(){$(this).empty();});
	}
	
	//֧��/��������
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
	
	//�ٱ�����
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
	
	//�����۷���ɹ�����DOM�в���һ������
	//cssID�������� ��<ul></ul>
	$this.insert=function(cssID,user,howLong,content,ip,fromarea,commentID,XID,good,bad){
		if($(cssID+' li').length>=10){
			//ɾ�����һ������
			$(cssID+' li:last').remove();
		}
		if($(cssID+' li').length<1){
			var no=1;
		}
		else{
			//ȡ�õ�һ�����۵�¥����
			var no=parseInt($(cssID+' li:first').children('http://ios.155.cn/file/default/js/div.info').children('span').html(),10)+1;
		}
		//����C_li��������,���붥��
		$(cssID).prepend(C_li(user,howLong,content,ip,fromarea,commentID,XID,no,good,bad,0));
	}
	
	//���б���������ۻظ�
	$this.reply=function(user,howLong,fromarea,ip,content){
		var str='<div class="reply">';
		str+='<div class="info">'+user+'&nbsp;&nbsp;'+howLong+'ǰ<span>&nbsp;&nbsp;'+fromarea+'&nbsp;&nbsp;'+ip+'</span></div>';
		str+='<div class="ctn">'+content+'</div>';
		str+='</div>';
		return str;
	}
	var temp=function(){
		var str='';
		str+='<form class="reply_frm" id="reply_frm" action="http://ios.155.cn/file/default/js/comment.php?act=save&is_reply=1" method="POST">';
		str+='<h5><span id="close_reply_span">�ر�</span>�ظ�<strong></strong></h5>';
		str+='<p style="width:380px;">';
		str+='<span id="hide2"><input type="checkbox" name="hide_name" id="hide_name2"/>';
		str+='<label for="hide_name2">����</label><br/></span>';
		str+='<input type="hidden" name="reply_id" value="" id="reply_id"/>';
		str+='<textarea cols="30" rows="8" class="txt" name="content" id="reply_content"></textarea>';
		str+='<input type="submit" id="butt" value="��������"/> <input type="button" value="�ر�" id="close_reply_btn"/>';
		str+='<span id="warn_msg" class="warn_msg"></span>';
		str+='</p>';
		str+='</form>';
		return str;	
	}
	//��������
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
	
	//����ظ�
	$this.postreply=function(){
		if(''==$('#reply_content').val()){$('#warn_msg').css({color:'red'}).html('����д�ظ���');$('#reply_content').focus();return false;}
		else{
			var ishide=1;
			if($('input[id=hide_name2]').attr('checked')==false){
				ishide=0;
			}
			$.post('/comment.php?act=save&is_reply=1&sid='+$('input[name=sid]').val()+'&'+$this.xtype(),{gid:$('input[name=gid]').val(),aid:$('input[name=aid]').val(),net:$('input[name=net]').val(),touid:$('input[name=touid]').val(),'reply_id':$('#reply_id').val(),content:encodeURIComponent($('#reply_content').val()),hide_name:ishide},
		        function(data){
					   var obj=eval('('+data+')');
				       if(!obj.status){$('span#warn_msg').css({'color':'red','font-size':'14px'}).html(obj.data);}
				       else{$('span#warn_msg').css({'color':'green','font-size':'14px'}).html('�ظ�����ɹ�');
					       //�ظ�����ɹ�����DOM�в���
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
	
	//�����ַ������жϵ�ǰ��������
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
//����ʵ��
var com=new comment();
//�����Nҳ��������ķ���
var gotopage=function(n){com.gopage(n);return false;}
//֧��/���ԣ�������ķ���
var prize_comment=function(e,flag,commentid,articleid){com.jugde(e,flag,commentid,articleid,com.xtype());return false;}
//�ٱ���������ķ���
var report_comment=function(commentid,articleid){com.report(commentid,articleid,com.xtype());return false;}
//�ظ�
var reply_comment=function(e,commentID){com.reply_x(e,commentID,com.xtype());return false;}
$(document).ready(function(){
//������ڼ��ص�ͼ��
$('#comment_lst').empty();
//�����б�
com.L(1,10);
//ͬ��
$('#comment').empty();
//�������ۿ�
com.C('#comment');
//�������״̬
com.Check();
});