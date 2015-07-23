// JavaScript Document
var widths=620;    //焦点图片宽
var w=2;
var widthss=widths+w;
var heights=280; //焦点图片高
var heightss=heights+w;
var heightt=20;
//var counts=6;      //总条数



var nn=1; //当前所显示的滚动图
var key=0;    //标识是否为第一次开始执行
var tt;    //标识作用

function change_img()
{
if(key==0){key=1;} //如果第一次执行KEY=1，表示已经执行过一次了。
else if(document.all)//document.all仅IE6/7认识，firefox不会执行此段内容
{
document.getElementById("pic").filters[0].Apply(); //将滤镜应用到对像上
document.getElementById("pic").filters[0].Play(duration=2);  //开始转换
document.getElementById("pic").filters[0].Transition=23;//转换效果
}

eval('document.getElementById("pic").src=img'+nn+'.src');     //替换图片
eval('document.getElementById("url").href=url'+nn+'.src'); //替换URL
eval('document.getElementById("pic").alt=img'+nn+'.alt'); //替换URL
eval('document.getElementById("url").title=url'+nn+'.title'); //替换URL

for (var i=1;i<=counts;i++)
{
    //将下面黑条上的所有链接变为未选中状态
    document.getElementById("xxjdjj"+i).className='axx';     
}
document.getElementById("xxjdjj"+nn).className='bxx';  //将当前页面的ID设置为选中状态

nn++;
if(nn>counts){nn=1;}    //如果ID大于总图片数量。则从头开始循环
tt=setTimeout('change_img()',4000);    //在4秒后重新执行change_img()方法.
}
function changeimg(n)//点击黑条上的链接执行的方法。
{
nn=n; //当前页面的ID等于传入的N值,
window.clearInterval(tt); //清除用于循环的TT
//重新执行change_img();但change_img()内所调用的图片ID已经在此处被修改,会从新ID处开始执行.
change_img();
}
//样式表
document.write('<style>');
document.write('.axx{padding:1px 7px;border-left:#cccccc 1px solid;font-size:12px;}');
document.write('a.axx:link,a.axx:visited{text-decoration:none;color:#fff;');
document.write('line-height:12px;font:9px sans-serif;background-color:#666;}');
document.write('a.axx:active,a.axx:hover{text-decoration:none;color:#fff;');
document.write('line-height:12px;font:9px sans-serif;background-color:#999;}');
document.write('.bxx{padding:1px 7px;border-left:#cccccc 1px solid;}');
document.write('a.bxx:link,a.bxx:visited{text-decoration:none;color:#fff;');
document.write('line-height:12px;font:9px sans-serif;background-color:#009900;}');
document.write('a.bxx:active,a.bxx:hover{text-decoration:none;color:#fff;');
document.write('line-height:12px;font:9px sans-serif;background-color:#ff9900;}');
document.write('</style>');
//内容部分
document.write('<div style="width:'+widthss+'px;height:'+heights+'px;');
document.write('overflow:hidden;text-overflow:clip;float:left;">');
document.write('<div><a id="url" target="_blank"><img id="pic" ');
document.write('style="border:1px #cccccc solid;');
document.write('FILTER: progid:DXImageTransform.Microsoft.RevealTrans (duration=2,transition=23)"');
document.write(' width='+widths+' height='+heights+' /></a></div>');
document.write('<div style="filter:alpha(style=1,opacity=10,finishOpacity=90);');
document.write('background: #888888;width:100%-2px;text-align:right;');
document.write('top:-16px;position:relative;margin:1px;height:14px;');
document.write('border:0px;padding-top:1px;z-index:100;"><div>');

for(var i=1;i<counts+1;i++)
{
document.write('<a href="javascript:changeimg('+i+');" id="xxjdjj'+i+'"');
document.write(' class="axx" target="_self">'+i+'</a>');
}

document.write('</div></div></div>');

//开始执行滚动操作
change_img();