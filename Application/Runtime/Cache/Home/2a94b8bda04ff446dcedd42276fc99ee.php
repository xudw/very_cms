<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<meta name="description" content="游戏" />
<link  href="<?php echo WEB_NAME; ?>/Public/webcss/common_new.css" rel="stylesheet" type="text/css" />
<link  href="<?php echo WEB_NAME; ?>/Public/webcss/index_new.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript"  src="<?php echo WEB_NAME; ?>/Public/js/global_mi.js"></script>
<script language="javascript" type="text/javascript"  src="<?php echo WEB_NAME; ?>/Public/js/jquery-1.4.min.js"></script>
<script language="javascript" type="text/javascript"  src="<?php echo WEB_NAME; ?>/Public/js/header.js"></script>
<script language="javascript" type="text/javascript"  src="<?php echo WEB_NAME; ?>/Public/js/sjyx.js"></script>
 <script language="javascript"  type="text/javascript">
  $(function (){
      $(document).click(function(event){
		  clera_word();
	  });
	$('.sou_input').click(function(event){
		event.stopPropagation();
	})
  })
  </script>
</head>
<body>
<!--top -->
<div class="box_top">
     <div class="top_left">中国免费手机游戏第一门户网!</div>
     <div class="top_right">
          <div class="top_icon"></div>
          <div class="top_zi"><a href="#" class="weibo" target="_blank" rel="nofollow">新浪微博</a></div>
          <div class="top_icon2"></div>
          <div class="top_zi"><a href="#"  target="_blank" rel="nofollow">腾讯微博</a></div>
     </div>
</div>
<!--menu -->
<div class="box_menu">
<div class="box_menu2">
     <div class="logo"><a href="index.htm" tppabs="http://www.155.cn/"><img src="<?php echo WEB_NAME; ?>/Public/images/ilogo.jpg" /></a></div>
     <div class="menu">
         <a href=""target="_blank" class="menu_bg1">安卓</a>
         <a href=""  target="_blank" class="menu_bg2">苹果</a>
         <a href=""  target="_blank" class="menu_bg3">WP</a>
         <a href="" target="_blank" class="menu_bg5">HTML5</a>
         <a href="" target="_blank" class="menu_bg6">社区</a>
     </div>
</div>
</div>
<!--mulu -->
<div class="box_mulu">
     <ul>
         <li><span class="mulu_bg1">安卓</span>
		         <a href=""  target="_blank">全民灭僵尸</a>
		         <a  href=""  target="_blank">全民捕鱼2大战美人鱼 </a>
		         <a  href=""  target="_blank">美女消糖果圣诞版</a>
		         <a  href=""  target="_blank">消灭星星3疯狂版</a>
		         <a  href=""  target="_blank">消灭星星3圣诞版</a>
		         <a  href=""  target="_blank">二萌泡泡</a>
		         <a  href=""  target="_blank">水果泡泡龙</a>
		         <a  href=""  target="_blank">美女消糖果</a>
				</li>
         <li><span class="mulu_bg2">苹果</span>
		         <a  href=""  target="_blank">开心泡泡龙1000关 </a>
		         <a  href=""  target="_blank">爸比向前冲</a>
		         <a href=""  target="_blank">熊大快跑(PK赛版) </a>
		         <a  href=""  target="_blank">天天跑酷3</a>
		         <a  href=""  target="_blank">开心爱消除 官方版</a>
		         <a  href=""  target="_blank">宝石消消乐</a>
		         <a  href=""  target="_blank">3D天天飞车</a>
		         <a  href=""  target="_blank">冒险岛之森林夺宝</a>
				</li>
         <li><span class="mulu_bg3">wp</span>
		         <a  href=""  target="_blank">影之刃</a>
		         <a  href=""  target="_blank">暖暖环游世界</a>
		         <a  href=""  target="_blank">最武侠 </a>
		         <a  href=""  target="_blank">天降</a>
		         <a  href=""  target="_blank">星座女神</a>
		         <a  href=""  target="_blank">烈焰遮天</a>
		         <a  href=""  target="_blank">酷酷爱魔兽</a>
		         <a  href=""  target="_blank">格斗之皇</a>
		         <a  href=""  target="_blank">天尊</a>
		         <a  href=""  target="_blank">时空猎人</a>
				</li>
         <li><span class="mulu_bg4">HTML5</span>
		         <a  href=""  target="_blank">掌上百度</a>
		         <a  href=""  target="_blank">金山词霸</a>
		         <a  href=""  target="_blank">全国违章查询</a>
		         <a  href=""  target="_blank">正点闹钟</a>
		         <a  href=""  target="_blank">爱乐透彩票</a>
		         <a href=""  target="_blank">墨香书客</a>
		         <a  href=""  target="_blank">书旗免费小说</a>
		         <a href=""  target="_blank">乐呼网络电话</a>
		         <a href=""  target="_blank">360浏览器</a>
				</li>
     </ul>
</div>
<!--serach -->
<div class="box_sou">
     <div class="sou">
	  <form  action="http://so.155.cn/" method="get" target="_blank" id="soso" name="soso">
       <input type="text" name="kw" id="kw" value="塔防" class="sou_input" />
       <input type="submit" name="button" id="search_btn" value="" class="sou_bot" onclick="soso.submit()" />
		<div class="so-word" id="so-word" style="display:none;"><img src="<?php echo WEB_NAME; ?>/Public/images/search-wp.png"  /></div>
	 </form>
     </div>
     <div class="sou_zi"><span>热门搜索</span>
	       <a target="_blank" href="" >大战美人鱼</a>
	       <a target="_blank" href="">开心消消乐</a>
	       <a target="_blank"  href="">沙罗曼蛇街机版</a>
	       <a target="_blank"  href="">驯龙高手3</a>
	       <a target="_blank"  href="">手游乐园</a>
	       <a target="_blank"  href="">手机QQ2012</a>
	       <a target="_blank"  href="">微信</a>
		</div>
</div>
<!--bamner -->
<div class="box_cent1">
     <div class="c1_banner">
		<script type="text/javascript">
				var counts=5;     //总条数
					img1=new Image();
			img1.src='<?php echo WEB_NAME; ?>/Public/images/155_cn_7811419240963.jpg'/*tpa=http://img.155.cn/pubpic/155_cn_7811419240963.jpg*/;
			img1.alt='口袋妖怪';
			url1=new Image();
			url1.src='index-1.htm'/*tpa=http://wy.155.cn/spec880/*/;
			url1.title='口袋妖怪';

					img2=new Image();
			img2.src='<?php echo WEB_NAME; ?>/Public/images/155_cn_2151417167174.jpg'/*tpa=http://img.155.cn/pubpic/155_cn_2151417167174.jpg*/;
			img2.alt='古剑奇缘';
			url2=new Image();
			url2.src='index-2.htm'/*tpa=http://wy.155.cn/spec847/*/;
			url2.title='古剑奇缘';

					img3=new Image();
			img3.src='<?php echo WEB_NAME; ?>/Public/images/155_cn_8231419409479.jpg'/*tpa=http://img.155.cn/pubpic/155_cn_8231419409479.jpg*/;
			img3.alt='崩坏世界';
			url3=new Image();
			url3.src='index-3.htm'/*tpa=http://wy.155.cn/spec884/*/;
			url3.title='崩坏世界';

					img4=new Image();
			img4.src='<?php echo WEB_NAME; ?>/Public/images/155_cn_6321417486847.jpg'/*tpa=http://img.155.cn/pubpic/155_cn_6321417486847.jpg*/;
			img4.alt='秦时明月2';
			url4=new Image();
			url4.src='index-4.htm'/*tpa=http://wy.155.cn/spec846/*/;
			url4.title='秦时明月2';

					img5=new Image();
			img5.src='<?php echo WEB_NAME; ?>/Public/images/155_cn_5041413962421.jpg'/*tpa=http://img.155.cn/pubpic/155_cn_5041413962421.jpg*/;
			img5.alt='横扫日本';
			url5=new Image();
			url5.src='37281.html'/*tpa=http://android.155.cn/game/37281.html*/;
			url5.title='横扫日本';

						</script>
	 <div class="flash">
			<script type="text/javascript"  src="<?php echo WEB_NAME; ?>/Public/js/index_flash.js"></script>
	 </div>
	 </div>
     <div class="c1_news">
          <div class="wy_news_tit">
             <h1><a target="_blank" href="" title="" class="red">过圣诞赢iPhone6 《时空猎人》豪礼等你抢</a></h1>
             <p><a href="" title=""  target='_blank'>[剑仙缘]</a><ahref="" title=""  target='_blank'>[诛神online-五岳争霸]</a><a href="" title=""  target='_blank'>[时空猎人]</a></p>
          </div>
          <ul>
		          <li><a target="_blank" href=""  title="">《天天挂机》圣诞大放送！</a></li>
		          <li><a target="_blank" href=""  title="">《口袋妖怪》圣诞节欢庆登录送好礼</a></li>
		          <li><a target="_blank" href=""  title="">烈焰圣诞活动年终不寂寞</a></li>
		          <li><a target="_blank" href=""  title="">最长福利期 《兰陵王》双旦半周年活动相继登场</a></li>
		          <li><a target="_blank" href=""  title="">战国圣诞夜，狂欢礼不停</a></li>
		          <li><a target="_blank" href=""  title="">《新三国OL》平安圣诞节 排行冲刺争霸王</a></li>
		          </ul>
     </div>
</div>
<!--cent2 -->
<div class="box_cent2">
     <!--测试表 -->
     <div class="c2_ceshibiao">
          <div class="c2_c_t"><h2>新游测试表</h2></div>
          <ul class="c2_cs_ul">

				             <li><span class="c2li_s1">09-12</span>
             <a href=""  target="_blank" class="c2li_s2">刀塔风暴</a>
             <a href=""  target="_blank" target="_blank" class="c2li_s3"></a>
             <span class="c2li_s4"></span>
             </li>
	                <li><span class="c2li_s1">09-17</span>
             <a href=""  target="_blank" class="c2li_s2">天尊</a>
             <a href=""  target="_blank" class="c2li_s3"></a>
             <span class="c2li_s4"></span>
             </li>
	                <li><span class="c2li_s1">09-19</span>
             <a href=""  target="_blank" class="c2li_s2">放开那三国</a>
             <a href=""  target="_blank" class="c2li_s3"></a>
             <span class="c2li_s4"></span>
             </li>
	                <li><span class="c2li_s1">09-23</span>
             <a href=""  target="_blank" class="c2li_s2">佣兵传奇</a>
             <a href=""  target="_blank" class="c2li_s3"></a>
             <span class="c2li_s4"></span>
             </li>
	                <li><span class="c2li_s1">09-26</span>
             <a href="" target="_blank" class="c2li_s2">兽血沸腾之海岛争霸</a>
             <a href=""  target="_blank" class="c2li_s3"></a>
             <span class="c2li_s4"></span>
             </li>
	                <li><span class="c2li_s1">11-12</span>
             <a href=""  target="_blank" class="c2li_s2">女神萌萌哒</a>
             <a href=""  target="_blank" class="c2li_s3"></a>
             <span class="c2li_s4"></span>
             </li>
	                <li><span class="c2li_s1">11-12</span>
             <a href=""  target="_blank" class="c2li_s2">三国我为王</a>
             <ahref=""  target="_blank" class="c2li_s3"></a>
             <span class="c2li_s4"></span>
             </li>
	                <li><span class="c2li_s1">11-12</span>
             <a href=""  target="_blank" class="c2li_s2">我是圣斗士</a>
             <a href=""  target="_blank" class="c2li_s3"></a>
             <span class="c2li_s4"></span>
             </li>
	                <li><span class="c2li_s1">11-14</span>
             <a href=""  target="_blank" class="c2li_s2">最武侠</a>
             <a href=""  target="_blank" class="c2li_s3"></a>
             <span class="c2li_s4"></span>
             </li>
	   
          </ul>
     </div>
     <!--新游评测-->
     <div class="wy_pingce">
          <div class="hd_tit">
              <p class="tit_left">新游评测</p><p class="tit_right"><a href=""  target="_blank">more</a></p>
          </div>
           <ul style="border-bottom:1px dashed #efefef;">
              <div><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_8441417656420.jpg"  alt=""/>《我是圣斗士》童年梦想 今日启程</a></div>
			              <li><a target="_blank" href="" title="">《女神大联盟》评测：女神&女神&女神..</a></li>
			              <li><a target="_blank"  href="" title="">精致唯美手游《古剑奇缘》精彩玩法详细..</a></li>
			              <li><a target="_blank"  href="" title="">红尘醉续轩辕唯美手游《古剑奇缘》评测..</a></li>
			              <li><a target="_blank" href="" title="">《恋舞OL》“新音符” 灰姑娘一秒变..</a></li>
			              <li><a target="_blank"  href="" title="">《全民战神》游戏测评</a></li>
			          </ul>
           <ul>
              <div><a target="_blank"  href="" ><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_9351417059309.jpg"  alt=""/>《焚寂》和我一起享受快乐修仙</a></div>
			              <li><a target="_blank"  href="" title="">《战神》手游版！《战魂西游》横空出世..</a></li>
			              <li><a target="_blank"  href="" title="">上课也能打排位！《大闹天宫HD》试玩..</a></li>
			              <li><a target="_blank"  href="" title="">《我要封神》初体验玩法解密！</a></li>
			              <li><a target="_blank"  href="" title="">卡牌战斗的巅峰 《一起斗将神》评测</a></li>
			              <li><a target="_blank"  href="" title="">《爱消魂》评测：刷新传统卡牌游戏战斗..</a></li>
			          </ul>
     </div>
     <!--二维码-->
     <div class="c1_weixin">
          <p><span style=" font-size:20px; color:#278c04; line-height:32px;">手游乐园</span><br />单机游戏免费下
<br />海量应用任你选</p>
          <p style=" padding-top:24px;"><span style=" font-size:20px; color:#333; line-height:32px;">微信公众账号</span><br />订阅手游天下
<br />每日精品游戏推送</p>
     </div>
     <!--广告图-->
     <div class="c1_gg"><a  href="" target="_blank"><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_3441416380280.jpg" alt=""/></a></div>
</div>

<!--cent2 -->
<!--<div class="box_cent2">-->
     <!--&lt;!&ndash;网游礼包 &ndash;&gt;-->
     <!--<div class="c2_ceshibiao">-->
          <!--<div class="c2_c_t"><h2>网游礼包</h2></div>-->
          <!--<ul class="libao_ul">-->
		           <!--<li><span>《烈焰遮天》新手礼包</span><a  href=""  target="_blank">领取</a></li>-->
		           <!--<li><span>《武侠OL》晨月霜新手礼包</span><a href="" target="_blank">领取</a></li>-->
		           <!--<li><span>《古剑奇缘》贵族礼包</span><a href="" target="_blank">领取</a></li>-->
		           <!--<li><span>《三国战神》新服礼包</span><a href="" target="_blank">领取</a></li>-->
		           <!--<li><span>《帝王三国》176区成长礼包</span><a  href="" target="_blank">领取</a></li>-->
		           <!--<li><span>《怪物联盟》感恩节回馈礼包</span><a  href="" target="_blank">领取</a></li>-->
		           <!--<li><span>《啪啪三国》感恩节礼包</span><a href="" target="_blank">领取</a></li>-->
		           <!--<li><span>《精忠岳飞》26区新手礼包</span><a  href="" target="_blank">领取</a></li>-->
		           <!--<li><span>《北欧女神》感恩节火鸡礼包</span><a href="" target="_blank">领取</a></li>-->
		          <!--</ul>-->
     <!--</div>-->
     <!--&lt;!&ndash;新游评测&ndash;&gt;-->
     <!--<div class="wy_pingce">-->
          <!--<div class="hd_tit">-->
              <!--<p class="tit_left">热门活动</p>-->
              <!--<p class="tit_right"><a target="_blank"  href="">more</a></p>-->
          <!--</div>-->
           <!--<ul style="border-bottom:1px dashed #efefef;">-->
              <!--<div><a  href="" target="_blank"><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_3371417483130.jpg"  alt=""/></a></div>-->
			              <!--<li><a target="_blank"  href="" title="">《精忠岳飞》双线29区开服活动</a></li>-->
			              <!--<li><a target="_blank" vtitle="">《霸三国》争霸47-48区12月30..</a></li>-->
			              <!--<li><a target="_blank"  href="" title="">领地争夺战《天天挂机：混乱之治》详解..</a></li>-->
			              <!--<li><a target="_blank"  href="" title="">《时空猎人》572区火热开启双旦更好..</a></li>-->
			          <!--</ul>-->
           <!--<ul>-->
              <!--<div><a target="_blank"  href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_9651417767895.jpg" width="145" height="85" alt="" /></a>-->
              		<!--<a target="_blank"  href="">《天天挂机》全球首款RPG放置类游戏</a></div>-->
			              <!--<li><a target="_blank"  href=""title="">天问圣诞豪礼六大精彩呈现</a></li>-->
			              <!--<li><a target="_blank" href="" title="">圣诞狂欢全接触《天剑奇缘》陪你共度平..</a></li>-->
			              <!--<li><a target="_blank" href="" title="">《叮叮堂》新服“绚彩之森”12.25..</a></li>-->
			          <!--</ul>-->
     <!--</div>-->
     <!--&lt;!&ndash;网游资讯&ndash;&gt;-->
     <!--<div class="wy_zixun">-->
          <!--<div class="hd_tit">-->
          <!--<p class="tit_left">网游攻略</p><p class="tit_right"><a  href="" target="_blank">more</a></p>-->
          <!--</div>-->
          <!--<div class="hd_pic"><a  href="" target="_blank"><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_3781416811185.jpg" alt=""/></a></div>-->
          <!--<ul class="hd_ul">-->
			              <!--<li><a target="_blank"  href="" title="">合体材料哪里来 《龙珠来了》愤怒之心..</a></li>-->
			               <!--<li><a target="_blank"  href="" title="">《英雄战魂》列王战场攻略</a></li>-->
			               <!--<li><a target="_blank" href="" title="">真男人!《君王2》无尽试炼完美攻略</a></li>-->
			               <!--<li><a target="_blank"  href="" title="">扫盲贴 《征途》手游各等级VIP特权..</a></li>-->
			               <!--<li><a target="_blank"  href="" title="">光剑斩击百倍龟波 《龙珠来了》合体卡..</a></li>-->
			               <!--<li><a target="_blank"  href="" title="">有朋送花来不亦说乎 《�西游》好友?.</a></li>-->
			               <!--<li><a target="_blank"  href="" title="">《天天挂机》法师十大技能详解</a></li>-->
			               <!--<li><a target="_blank"  href="" title="">�西游之大话萌宠 卦象属性加成秘籍</a></li>-->
			           <!--</ul>-->
     <!--</div>-->
     <!---->
<!--</div>-->
<!--&lt;!&ndash;cent3 &ndash;&gt;-->
<!--<div class="box_cent4">-->
     <!--&lt;!&ndash;测试表 &ndash;&gt;-->
     <!--<div class="c2_ceshibiao">-->
          <!--<div class="c2_c_t"><h2>网游排行榜</h2></div>-->
          <!--<ul class="c2_phb">-->
            <!--<li class="phb_top_one">-->
                <!--<div class="phb_top_bot1">1</div>-->
                 <!--<img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_3151408438399.png" />-->
              <!--<div class="phb_top_zi"><a  href="" target="_blank" class="hei333">免费在线斗地主</a></div>-->
                <!--<p class="phb_top_zi2"><a target="_blank" href="">棋牌游戏</a></p>-->
            <!--</li>-->
			            <!--<li class="phb_top_two"><div class="phb_top_bot1">2</div><a  target="_blank" href="">宗师</a><span>回合</span></li>-->
			            <!--<li class="phb_top_two"><div class="phb_top_bot1">3</div><a  target="_blank" href="">神器online</a><span>回合</span></li>-->
			            <!--<li class="phb_top_two"><div class="phb_top_bot1">4</div><a  target="_blank" href="">武林萌主onlin</a><span>回合</span></li>-->
			            <!--<li class="phb_top_two"><div class="phb_top_bot1">5</div><a  target="_blank" href="">笑傲三国OL</a><span>即时</span></li>-->
			            <!--<li class="phb_top_two"><div class="phb_top_bot1">6</div><a  target="_blank" href="">太极熊猫</a><span>回合</span></li>-->
			            <!--<li class="phb_top_two"><div class="phb_top_bot1">7</div><a  target="_blank" href="">世界OL</a><span>回合</span></li>-->
			      <!---->
        <!--</ul>-->
     <!--</div>-->
     <!--&lt;!&ndash;新游评测&ndash;&gt;-->
     <!--<div class="wy_pingce">-->
          <!--<div class="hd_tit">-->
              <!--<p class="tit_left">专区推荐</p><p class="tit_right"><a href="" target="_blank">more</a></p>-->
          <!--</div>-->

		          <!--<dl class="tj_dl">-->
            <!--<img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_2621387519475.jpg"  />-->
            <!--<dt><a href=""target="_blank">《我叫MT Online》卡牌巨献！</a></dt>-->
            <!--<dd>巅峰巨制★ 与好友协力，共同组建强大的队伍。</dd>-->
            <!--<div class="wy_tuijian_bot1"><a href="" target="_blank">进入专区</a></div>-->
            <!--<div class="wy_tuijian_bot2"><a href="" target="_blank">下载</a></div>-->
          <!--</dl>-->
		          <!--<dl class="tj_dl">-->
            <!--<img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_4981392358789.jpg" />-->
            <!--<dt><a href="" target="_blank">加入《忘仙》开启绝美仙境之门！</a></dt>-->
            <!--<dd>乾坤福地再掀风暴，一场满是血雨腥风的仙魔混战迫在眉睫!</dd>-->
            <!--<div class="wy_tuijian_bot1"><a v target="_blank">进入专区</a></div>-->
            <!--<div class="wy_tuijian_bot2"><a href="" target="_blank">下载</a></div>-->
          <!--</dl>-->
		     <!--</div>-->
     <!--&lt;!&ndash;网游资讯&ndash;&gt;-->
     <!--<div class="wy_zixun">-->
          <!--<div class="hd_tit">-->
          <!--<p class="tit_left">网游社区</p><p class="tit_right"><a href="" target="_blank">more</a></p>-->
          <!--</div>-->
          <!--<div class="hd_pic"><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_4361418953051.jpg" width="145" height="85" alt="妖精的尾巴2" /></div>-->
          <!--<ul class="hd_ul">-->
			              <!--<li><a target="_blank" href="" title="">《梦幻侠武》今日内测，超爽活动抢先看</a></li>-->
		                   <!--<li><a target="_blank" href="" title="">《君王Ⅱ》答题真人秀PK一站到底</a></li>-->
		                   <!--<li><a target="_blank" href="" title="">量身定制！《时空猎人》重磅福利惊喜来袭</a></li>-->
		                   <!--<li><a target="_blank" href="" title="">《新三国OL 》21日11点新服来袭！</a></li>-->
		                   <!--<li><a target="_blank" href="" title="">《进击的部落》迎春贺岁 新版亮相新年</a></li>-->
		                   <!--<li><a target="_blank" href="" title="">手游《神魔降临》新春版这个寒假你最hi</a></li>-->
		               <!--</ul>-->
     <!--</div>-->
     <!---->
<!--</div>-->
<!--cent4 -->
<div class="box_cent4">
     <!--测试表 -->
     <div class="c2_ceshibiao">
          <div class="c2_c_t">
            <h2>安卓排行榜</h2></div>
          <ul class="c2_phb">
            <li class="phb_top_one">
                <div class="phb_top_bot1">1</div>
               <img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_3531411874238.png"  />
              <div class="phb_top_zi"><a href="" class="hei333">真实赛车3 全机型</a></div>
                <p class="phb_top_zi2">><a target="_blank" href="">体育竞速</a></p>
            </li>
                         <li class="phb_top_two"><div class="phb_top_bot1">2</div><a target="_blank" href="">找你妹2014mi</a><span>休闲养成</span></li>

   
			            <li class="phb_top_two"><div class="phb_top_bot1">3</div><a target="_blank" href="">极速飞车 v2.1</a><span>体育竞速</span></li>

   
			            <li class="phb_top_two"><div class="phb_top_bot1">4</div><a target="_blank" href="">抽象跑手 v1.0</a><span>休闲养成</span></li>

   
			            <li class="phb_top_two"><div class="phb_top_bot1">5</div><a target="_blank" href="">单机斗地主2 v5</a><span>棋牌游戏</span></li>

   
			            <li class="phb_top_two"><div class="phb_top_bot1">6</div><a target="_blank" href="">我的世界 汉化版 </a><span>益智游戏</span></li>

   
			            <li class="phb_top_two"><div class="phb_top_bot1">7</div><a target="_blank" href="">真人视频斗地主 v</a><span>棋牌游戏</span></li>

   
			      
        </ul>
     </div>
     <!--新游评测-->
     <div class="wy_pingce">
          <div class="hd_tit">
              <p class="tit_left">安卓专题</p><p class="tit_right"><a href="" target="_blank">more</a></p>
          </div>

		          <dl class="tj_dl">
			 <img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_1151394513453.jpg"  alt=""/>
              <dt><a target="_blank" href="">安卓虚幻3引擎游戏合辑</a></dt>
              <dd>国内最全安卓虚幻3游戏主题合辑，没有之一</dd>
			   <div class="wy_tuijian_bot3"><a target="_blank" href="">进入专题</a></div>
          </dl>
		          <dl class="tj_dl">
			 <img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_5731394784636.jpg" alt=""/>
              <dt><a target="_blank" href="">安卓Unity引擎游戏专辑</a></dt>
              <dd>国内最全安卓Unity游戏主题合辑，没有之一</dd>
			   <div class="wy_tuijian_bot3"><a target="_blank" href="">进入专题</a></div>
          </dl>
		     </div>
     <!--网游资讯-->
     <div class="wy_zixun">
          <div class="hd_tit">
          <p class="tit_left">安卓资讯</p><p class="tit_right"><a href="#">more</a></p>
          </div>
          <div class="hd_pic"><a href="" target="_blank"><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_391403143353.jpg"   alt=""/></a></div>
          <ul class="hd_ul">
		  	              <li><a href="" target="_blank">Chillingo新作《海盗帮派》更名为《荣耀突袭》</a></li>
		  	              <li><a href="" target="_blank">空中射击游戏《天空之役》将登移动平台</a></li>
		  	              <li><a href="" target="_blank">纵身战斗 《雷霆战机-弹幕无双》无节操大暴走！</a></li>
		  	              <li><a href="" target="_blank">速度与激情的碰撞 《3D天天飙车》摧毁赛攻略</a></li>
		  	              <li><a href="" target="_blank">豪车是怎样炼成的？《疯狂出租车：都市狂飙》养成系统详</a></li>
		  	          </ul>
     </div>
</div>

<!--游戏列表-->
<div class="box_cent5">
     <div class="hd_tit"><p class="tit_left">安卓游戏</p><p class="tit_right"><a href="">more</a></p></div>
     <ul class="game_list">
           			 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_751418113072.png" /></a><p><a target="_blank" href="">全民大乱斗 v1.</a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_981416213678.png"/></a><p><a target="_blank" href="">激流快艇2之极速狂</a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_9041418092635.png" /></a><p><a target="_blank" href="">飞机OMG v1.</a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_1111416450972.png" /></a><p><a target="_blank"href="">泡妞学院 v1.7</a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_5671416800008.jpg"/></a><p><a target="_blank" href="">史上最坑爹的游戏 </a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_5761419824506.png" /></a><p><a target="_blank" href="">3D车神传说 v1</a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_9441415084173.png" /></a><p><a target="_blank" href="">雷霆战机-弹幕无双</a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_1111416450972.png" /></a><p><a target="_blank"href="">泡妞学院 v1.7</a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_5671416800008.jpg"/></a><p><a target="_blank" href="">史上最坑爹的游戏 </a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_1111416450972.png" /></a><p><a target="_blank"href="">泡妞学院 v1.7</a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_5671416800008.jpg"/></a><p><a target="_blank" href="">史上最坑爹的游戏 </a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_1111416450972.png" /></a><p><a target="_blank"href="">泡妞学院 v1.7</a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_5671416800008.jpg"/></a><p><a target="_blank" href="">史上最坑爹的游戏 </a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_1111416450972.png" /></a><p><a target="_blank"href="">泡妞学院 v1.7</a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_5671416800008.jpg"/></a><p><a target="_blank" href="">史上最坑爹的游戏 </a></p></li>
						<li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_1111416450972.png" /></a><p><a target="_blank"href="">泡妞学院 v1.7</a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_5671416800008.jpg"/></a><p><a target="_blank" href="">史上最坑爹的游戏 </a></p></li>
						<li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_1111416450972.png" /></a><p><a target="_blank"href="">泡妞学院 v1.7</a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_5671416800008.jpg"/></a><p><a target="_blank" href="">史上最坑爹的游戏 </a></p></li>
						<li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_1111416450972.png" /></a><p><a target="_blank"href="">泡妞学院 v1.7</a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_5671416800008.jpg"/></a><p><a target="_blank" href="">史上最坑爹的游戏 </a></p></li><li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_1111416450972.png" /></a><p><a target="_blank"href="">泡妞学院 v1.7</a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_5671416800008.jpg"/></a><p><a target="_blank" href="">史上最坑爹的游戏 </a></p></li>
						 <li><a target="_blank" href=""><img src="<?php echo WEB_NAME; ?>/Public/images/155_cn_1111416450972.png" /></a><p><a target="_blank"href="">泡妞学院 v1.7</a></p></li>

			     </ul>
</div>
<!--底部 star-->
<div class="box_link">
    <div class="link_bt">友情链接</div>
    <p class="link_cent">
				<a target="_blank" href="">zol手机频道</a>
				<a target="_blank"  href="">去秀手机游戏</a>
				<a target="_blank"  href="">飞鹏网</a>
				<a target="_blank" href="">Windows7之家</a>
				<a target="_blank"  href="">91手机</a>
				<a target="_blank"  href="">爱游戏</a>
				<a target="_blank"  href="">安卓软件</a>
				<a target="_blank">小游戏大全</a>
				<a target="_blank" href="">zol手机频道</a>
				<a target="_blank"  href="">去秀手机游戏</a>
				<a target="_blank"  href="">飞鹏网</a>
				<a target="_blank" href="">Windows7之家</a>
				<a target="_blank"  href="">91手机</a>
				<a target="_blank"  href="">爱游戏</a>
				<a target="_blank"  href="">安卓软件</a>
				<a target="_blank">小游戏大全</a>
				<a target="_blank" href="">zol手机频道</a>
				<a target="_blank"  href="">去秀手机游戏</a>
				<a target="_blank"  href="">飞鹏网</a>
				<a target="_blank" href="">Windows7之家</a>
				<a target="_blank"  href="">91手机</a>
				<a target="_blank"  href="">爱游戏</a>
				<a target="_blank"  href="">安卓软件</a>
				<a target="_blank">小游戏大全</a>
				<a target="_blank" href="">zol手机频道</a>
				<a target="_blank"  href="">去秀手机游戏</a>
				<a target="_blank"  href="">飞鹏网</a>
				<a target="_blank" href="">Windows7之家</a>
				<a target="_blank"  href="">91手机</a>
				<a target="_blank"  href="">爱游戏</a>
				<a target="_blank"  href="">安卓软件</a>
				<a target="_blank">小游戏大全</a>
				
			</p>
</div>
<div class="box_foot">
     <div class="foot_zi">
          <p class="foot_menu">
            <a target="_blank" href="">手机游戏</a> |<a target="_blank" href="">安卓游戏</a> |
			<a target="_blank"  href="" >安卓软件</a> |
			<a target="_blank"  href="">关于手游天下</a> | <a target="_blank"  href="" rel="nofollow" >联系我们</a> | <a target="_blank"  href="" rel="nofollow" >版权申明</a> | <a target="_blank"  href="" rel="nofollow">帮助中心</a> | <a target="_blank" href="" rel="nofollow" >客户服务</a> | <a target="_blank" href="">网站地图</a>
     <p class="foot_copyright">
             Copyright 2006-2010 155.cn  All Rights Reserved 粤ICP备<a target="_blank" href="" rel="nofollow">08023770</a>号<br />增值电信业务经营许可证 粤B2-20080119
          </p>
     </div>
    
</div>
<!--底部 end-->
</body>
</html>