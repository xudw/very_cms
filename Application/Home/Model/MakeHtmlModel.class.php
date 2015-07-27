<?php

namespace Home\Model;

use Think\Model;

class MakeHtmlModel extends Model
{
    public function index_page($date, $apptable, $newtable, $advtable, $htmltable)
    {
        $path = "./Application/Home/View/Index/";
        $fp = fopen($path . "index.html", "r"); //只读打开模板
        $str = fread($fp, filesize($path . "index.html"));//读取模板中内容

        /*导航部分*/
        $newpage = 's' . date('Ymd') . '.html';
        $get_app_sql = "select id,appname,appsystem from very_app where appsystem in ('Android','IOS','WP','HTML5') and apptype in('14','15') and tag!='1' order by time desc limit 7";
        $app_list = $apptable->query($get_app_sql);

        $andapp = "";
        $iosapp = "";
        $wpapp = "";
        $htmlapp = "";
        foreach ($app_list as $appl) {
            if ($appl['appsystem'] == 'Android') {
                $id = $appl['id'];
                $andapp .= '<a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '"   target="_blank">' . $appl['appname'] . '</a>';
            }
            if ($appl['appsystem'] == 'IOS') {
                $id = $appl['id'];
                $iosapp .= '<a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '"   target="_blank">' . $appl['appname'] . '</a>';
            }
            if ($appl['appsystem'] == 'WP') {
                $id = $appl['id'];
                $wpapp .= '<a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '"   target="_blank">' . $appl['appname'] . '</a>';
            }
            if ($appl['appsystem'] == 'HTML5') {
                $id = $appl['id'];
                $htmlapp .= '<a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '"   target="_blank">' . $appl['appname'] . '</a>';
            }
        }

        $str = str_replace("{androidapp}", $andapp, $str);
        $str = str_replace("{iosapp}", $iosapp, $str);
        $str = str_replace("{wpapp}", $wpapp, $str);
        $str = str_replace("{htmlapp}", $htmlapp, $str);
        /*导航部分结束*/

        /*搜索栏部分*/
        $search_html = "";
        $get_search_sql = "select id,appname from very_app where apptype in('14','15') and tag!='1' order by downloadnum desc limit 5";
        $search_list = $apptable->query($get_search_sql);
        foreach ($search_list as $serachl) {
            $id = $serachl['id'];
            $search_html .= '<a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '"   target="_blank">' . $serachl['appname'] . '</a>';
        }
        $str = str_replace("{hotsearch}", $search_html, $str);
        /*搜索栏部分结束*/

        /*首页幻灯*/
        $index_slide = "";
        $get_islide_sql = "select id,advname,advimage from very_adv where showpage='首页幻灯' and stime<='$date' and etime>='$date' order by mtime desc limit 5";
        $islide_list = $advtable->query($get_islide_sql);
        foreach ($islide_list as $islidekey => $islidel) {
            $isimage = $islidekey + 1;
            $id = $islidel['id'];
            $index_slide .= "img" . $isimage . "=new Image();
            img" . $isimage . ".src='" . $islidel['advimage'] . "';
            img" . $isimage . ".alt='" . $islidel['advname'] . "';
            url" . $isimage . "=new Image();
            url" . $isimage . ".src='<?php echo WEB_NAME; ?>/index.php/Index/product/pid/" . $id . "';
            url" . $isimage . ".title='" . $islidel['advname'] . "';";
        }
        $str = str_replace("{index_slide}", $index_slide, $str);

        /*首页幻灯结束*/
        /*福利新闻*/
        $wellone_html = "";
        $welltwo_html = "";
        $get_well_sql = "select id,title from very_news where newtype='福利新闻' order by time desc limit 7";
        $well_list = $newtable->query($get_well_sql);
        foreach ($well_list as $wellkey => $well) {
            $welltime = mb_substr($well['title'], 0, 16);
            $id = $well['id'];
            if ($wellkey == '0') {
                $wellone_html .= '<a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/' . $id . '" title="' . $well['title'] . '" class="red">' . $welltime . '</a>';
            } else {
                $welltwo_html .= '<a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/' . $id . '"  title="' . $well['title'] . '">' . $welltime . '/a>';
            }

        }
        $str = str_replace("{wellone}", $wellone_html, $str);
        $str = str_replace("{welltwo}", $welltwo_html, $str);

        /*福利新闻结束*/

        /*测试游戏*/
        $testgame = "";
        $get_testgame_sql = "select id,appname,apphome from very_app where apptype='16' and tag!='1' order by time desc limit 9";
        $testgame_list = $apptable->query($get_testgame_sql);
        foreach ($testgame_list as $tgl) {
            $id = $tgl['id'];
            $testgame .= '<a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '"  target="_blank" class="c2li_s2">' . $tgl['appname'] . '</a>
                             <a href="http://' . $tgl['apphome'] . '"  target="_blank" target="_blank" class="c2li_s3"></a>';
        }
        $str = str_replace("{testgame}", $testgame, $str);

        /*测试游戏结束*/

        /*新游评测*/
        $newtest_tagone = "";
        $newtestone = "";
        $newtest_tagtwo = "";
        $newtesttwo = "";
        $get_tag_sql = "select id,appname,appimage from very_app where tag='1' order by time desc limit 2";
        $tag_list = $apptable->query($get_tag_sql);
        foreach ($tag_list as $tagkey => $tagl) {
            $id = $tagl['id'];
            if ($tagkey == '0') {
                $newtest_tagone .= '<a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '"><img src="' . $tagl['appimage'] . '"  alt=""/>' . $tagl['appname'] . '</a>';
            } else {
                $newtest_tagtwo .= '<a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '"><img src="' . $tagl['appimage'] . '"  alt=""/>' . $tagl['appname'] . '</a>';
            }

        }
        $get_newt_sql = "select id,title from very_news where newtype='新游评测' order by time desc limit 10";
        $newt_list = $newtable->query($get_newt_sql);
        foreach ($newt_list as $newtkey => $newtl) {
            $newttime = mb_substr($newtl['title'], 0, 10);
            $id = $newtl['id'];
            if ($newtkey <= '4') {
                $newtestone .= '<li><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/' . $id . '" title="">' . $newttime . '..</a></li>';
            } else {
                $newtesttwo .= '<li><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/' . $id . '" title="">' . $newttime . '..</a></li>';
            }

        }
        $str = str_replace("{newtest_tagone}", $newtest_tagone, $str);
        $str = str_replace("{newtestone}", $newtestone, $str);
        $str = str_replace("{newtest_tagtwo}", $newtest_tagtwo, $str);
        $str = str_replace("{newtesttwo}", $newtesttwo, $str);

        /*新游评测结束*/

        /*首页广告部分*/
        $advone = "";
        $advtwo = "";
        $advthree = "";
        $get_adv_sql = "select id,advimage from very_adv where showpage='首页' and stime<='$date' and etime>='$date' order by mtime desc limit 3";
        $iadv_list = $advtable->query($get_adv_sql);
        foreach ($iadv_list as $iadvkey => $iadvl) {
            $id = $iadvl['id'];
            if ($iadvkey == '0') {
                $advone .= '<a  href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" target="_blank"><img src="' . $iadvl['advimage'] . '" alt=""/>';
            } elseif ($iadvkey == '1') {
                $advtwo .= '<a  href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" target="_blank"><img src="' . $iadvl['advimage'] . '" alt=""/></a>';
            } elseif ($iadvkey == '2') {
                $advthree .= '<a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" target="_blank"><img src="' . $iadvl['advimage'] . '"   alt=""/></a>';
            }

        }
        $str = str_replace("{advone}", $advone, $str);
        $str = str_replace("{advtwo}", $advtwo, $str);
        $str = str_replace("{advthree}", $advthree, $str);
        /*首页广告部分结束*/

        /*安卓排行版*/
        $andtopone = "";
        $andtoplist = "";
        $get_atop_sql = "select id,appname,appshowname,appimage from very_app where appsystem='Android' and apptype in('14','15')  order by downloadnum desc limit 7";
        $andtop_list = $apptable->query($get_atop_sql);

        foreach ($andtop_list as $andtkey => $andtl) {
            $id = $andtl['id'];
            $i_a_top = $andtkey + 1;
            if ($andtkey == '0') {
                $andtopone .= '<div class="phb_top_bot1">' . $i_a_top . '</div>
               <img src="' . $andtl['appimage'] . '"  />
              <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" class="hei333">' . $andtl['appname'] . '</a></div>
                <p class="phb_top_zi2"><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '">' . $andtl['appshowname'] . '</a></p>';
            } else {
                $andtoplist .= ' <li class="phb_top_two"><div class="phb_top_bot1">' . $i_a_top . '</div><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '">' . $andtl['appname'] . '</a><span>' . $andtl['appshowname'] . '</span></li>';
            }

        }
        $str = str_replace("{andtopone}", $andtopone, $str);
        $str = str_replace("{andtoplist}", $andtoplist, $str);
        /*安卓排行版结束*/
        /*首页新闻列表*/
        $index_newlist = "";
        $get_index_new_sql = "select id,title from very_news where newtype='游戏新闻' order by time desc limit 6";
        $index_new_list = $newtable->query($get_index_new_sql);
        foreach ($index_new_list as $innewl) {
            $id = $innewl['id'];
            $inewtitle = mb_substr($innewl['title'], 0, 15);
            $index_newlist .= '<li><a href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/' . $id . '" target="_blank">' . $inewtitle . '</a></li>';
        }
        $str = str_replace("{index_newlist}", $index_newlist, $str);
        /*首页新闻列表结束*/

        /*首页安卓游戏列表*/
        $index_all_and = "";
        $get_aall_sql = "select id,appname,appimage from very_app where appsystem='Android' and apptype in('14','15')  order by time desc limit 24";
        $aall_list = $apptable->query($get_aall_sql);

        foreach ($aall_list as $aalll) {
            $id = $aalll['id'];
            $index_all_and .= '<li><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '"><img src="' . $aalll['appimage'] . '"</a>
            <p><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '">' . $aalll['appname'] . '</a></p></li>';
        }
        $str = str_replace("{index_all_and}", $index_all_and, $str);
        /*首页安卓游戏列表结束*/

        fclose($fp);
        $handle = fopen($path . $newpage, "w"); //写入方式打开新闻路径
        fwrite($handle, $str); //把刚才替换的内容写进生成的HTML文件
        fclose($handle);

        /*处理文件名入库*/
        $htmltime = time();
        $htmlpage = basename($newpage, ".html");

        $del_html_sql = "delete from very_html where nick_name='首页'";
        $htmltable->execute($del_html_sql);

        $insert_html_sql = "insert into very_html values ('','$htmlpage','首页','$htmltime')";
        $htmltable->execute($insert_html_sql);
    }

    public function product_page($date, $apptable, $newtable, $advtable, $htmltable)
    {
        $path = "./Application/Home/View/Index/";

        //产品也排行
        $desc_list = "select id,appimage,appname,appshowname from very_app order by downloadnum desc limit 10";
        $d_list = $apptable->query($desc_list);
        $desc = "";
        foreach ($d_list as $dlkey=>$dl) {
            $top = $dlkey+1;
            $desc .=' <li class="phb_top_one">
                    <div class="phb_top_bot1">'.$top.'</div>
                    <img src="'.$dl['appimage'].'"  />
                    <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $dl['id'] . '" target="_blank" class="hei333">'.$dl['appname'].'</a></div>
                    <p class="phb_top_zi2">'.$dl['appshowname'].'</p>
                </li>';
        }

        //产品也具体内容
        $get_all_app_sql = "select * from very_app a join very_type b on a.apptype=b.type_id";
        $all_app_list = $apptable->query($get_all_app_sql);
        $product_page = "";
        foreach ($all_app_list as $allist) {
            $fp = fopen($path . "chanpin.html", "r"); //只读打开模板
            $str = fread($fp, filesize($path . "chanpin.html"));//读取模板中内容
            $id = $allist['id'];
            $product_page .= '<div class="ios_d_r">
          <div class="genxing">
              <div class="gx_tit">版本更新</div>
              <p>'.$allist['upsummary'].'</p>
          </div>
		            <!--排行榜 -->
          <div class="c2_phb" style=" margin-top:15px;">
            <ul>
            '.$desc.'
			            </ul>
          </div>

          <!--排行榜 -->
          <div class="c2_phb" style=" margin-top:15px;">
             <div class="qie_tit"><p class="qie_left">排行榜</p></div>
            <ul>



            </ul>
          </div>

     </div>
     <!--游戏 -->
     <div class="cent1_left">
         <div class="c1_img"><img src="'.$allist['appimage'].'" /></div>
         <h1>'.$allist['appname'].'<span>'.$allist['appversion'].'</span></h1>
         <div class="star_5"></div>
         <div class="c1_biaoqian"><span style="background-color:#cb1818;">'.$allist['type_name'].'</span><span>'.$allist['applanguage'].'</span><span>'.$allist['money'].'</span></div>
         <div class="c1_biaoqian2"><span>上线: '.$allist['time'].'</span></div>
         <div class="c1_bot"><a href="#k_down" class="down"></a><a href="" class="down1" target="_blank"></a></div>
     </div>
     <!--简介 -->
     <div class="left_jianjie">
          <div class="qie_tit">
             <p class="qie_left">应用简介</p>
         </div>
         <div class="jianjie_cent">
              <p>产品主要功能<br />
'.$allist['summary'].'
<br /></p>
         </div>
     </div>

          <div class="left_jianjie">
          <div class="qie_tit">
             <p class="qie_left">客户端下载</p>

         </div>
         <div class="k_down" id="k_down">
               <ul>
				<li><a href="'.$allist['apphome'].'" title="" class="downL-btn ml10" >点击下载</a></li>

		               </ul>
          </div>
     </div>';
            $newpage = $id. '_p.html';

            $str = str_replace("{product_page}", $product_page, $str);

            fclose($fp);
            $handle = fopen($path . $newpage, "w"); //写入方式打开新闻路径
            fwrite($handle, $str); //把刚才替换的内容写进生成的HTML文件
            fclose($handle);
            unset($str,$fp,$product_page);
            /*处理文件名入库*/
            $htmltime = time();
            $htmlpage = basename($newpage, ".html");
            $pname = $id.'_p';
            $del_html_sql = "delete from very_html where nick_name='产品' and page_name='$pname'";
            $htmltable->execute($del_html_sql);

            $insert_html_sql = "insert into very_html values ('','$htmlpage','产品','$htmltime')";
            $htmltable->execute($insert_html_sql);
        }
    }

    public function news_page($date,$apptable,$newtable,$advtable,$htmltable){
        $path = "./Application/Home/View/Index/";

        //产品也排行
        $desc_list = "select id,appimage,appname,appshowname from very_app order by downloadnum desc limit 10";
        $d_list = $apptable->query($desc_list);
        $desc = "";
        foreach ($d_list as $dlkey=>$dl) {
            $top = $dlkey+1;
            $desc .=' <li class="wy_top_one">
                 <div class="wy_top_bot1">'.$top.'</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $dl['id'] . '" title="" target="_blank"> <img src="'.$dl['appimage'].'" /></a>
                 <div class="wy_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $dl['id'] . '" title="" target="_blank">'.$dl['appname'].'</a></div>
                 <p class="star1 wy_top_star"></p>
                 <p class="wy_top_zi2">'.$dl['appshowname'].'</p>
              </li>';
        }

        //产品也具体内容
        $get_all_new_sql = "select * from very_news";
        $all_new_list = $newtable->query($get_all_new_sql);
        $new_page = "";
        foreach ($all_new_list as $allist) {
            $fp = fopen($path . "xinwen.html", "r"); //只读打开模板
            $str = fread($fp, filesize($path . "xinwen.html"));//读取模板中内容
            $id = $allist['id'];
            $new_page .= '<div class="wy_top2">
          <div class="wy_top_tit"><span>应用排行榜</span></div>
          <ul>

'.$desc.'
		          </ul>
     </div>
     <!--左边内容 -->
     <div class="news_c" style="border-top:2px solid #81b103;">
          <h1>'.$allist['title'].'</h1>
          <div class="h1div"><span>来源:'.$allist['come'].'</span><span>作者:'.$allist['author'].'</span><span>时间:'.$allist['time'].'</span></div>

		          <div class="news_cent">
               <p class="MsoNormal" align="left" style="margin-bottom: 11.25pt; line-height: 22.5pt; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><samp><span style="font-size:12.0pt;font-family:微软雅黑;mso-bidi-font-family:宋体;color:#333333;
mso-font-kerning:0pt">
                '.$allist['content'].'
          </div>


     </div>';


            $newpage = $id. '_n.html';

            $str = str_replace("{new_page}", $new_page, $str);

            fclose($fp);
            $handle = fopen($path . $newpage, "w"); //写入方式打开新闻路径
            fwrite($handle, $str); //把刚才替换的内容写进生成的HTML文件
            fclose($handle);
            unset($str,$fp,$new_page);
            /*处理文件名入库*/
            $htmltime = time();
            $htmlpage = basename($newpage, ".html");
            $pname = $id.'_n';
            $del_html_sql = "delete from very_html where nick_name='新闻' and page_name='$pname'";
            $htmltable->execute($del_html_sql);

            $insert_html_sql = "insert into very_html values ('','$htmlpage','新闻','$htmltime')";
            $htmltable->execute($insert_html_sql);
        }
    }
}