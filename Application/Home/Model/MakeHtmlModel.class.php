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

        $get_tag_well_sql = "select id,title from very_news where pagetag='首页头条' order by time desc limit 1";
        $well_tag_list = $newtable->query($get_tag_well_sql);
        foreach ($well_tag_list as $twell) {
            $welltime = mb_substr($twell['title'], 0, 22);
            $id = $twell['id'];
            $wellone_html .= '<a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/' . $id . '" title="' . $twell['title'] . '" class="red">' . $welltime . '</a>';
        }
        $get_well_sql = "select id,title from very_news where newtype='福利新闻' and pagetag!='二级页头条' order by time desc limit 6";
        $well_list = $newtable->query($get_well_sql);
        foreach ($well_list as $wellkey => $well) {
            $welltime = mb_substr($well['title'], 0, 22);
            $id = $well['id'];
            $welltwo_html .= '<a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/' . $id . '"  title="' . $well['title'] . '">' . $welltime . '</a>';
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
            <div class="qie_tit"><p class="qie_left">排行榜</p></div>
            <ul>
            '.$desc.'
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

            '. $allist['summary'].'
        <br /></p>
         </div>
     </div>

          <div class="left_jianjie">
          <div class="qie_tit">
             <p class="qie_left">客户端下载</p>

         </div>
         <div id="k_down">
               <ul>
				<li><input style="margin-top:20px;" class="a-upload" title="'.$id.'" tag="'.$allist['apphome'].'"  id="down"  value="点击这里进行下载"></li>

		               </ul>
          </div>
     </div>';
            $newpage = $id. '_p.html';

            $str = str_replace("{product_page}", $product_page, $str);

            /*评论列表*/
            $pinglun = D("very_comment_app");
            $get_pl_sql = "select * from very_comment_app where comment_app='$id' order by comment_time desc limit 50";
            $pl_list = $pinglun->query($get_pl_sql);
            $pl = "";
            foreach($pl_list as $pls){
                $pl .= '<li>
                <div style="font-size: 12px;border-bottom: 1px solid gray;margin-bottom: 5px;">
                   <div></div><div style="float:right">'.$pls['comment_time'].'</div>
                    <div style="clear:both;">'.$pls['comment_text'].'</div>
                </div>
                </li>';
            }
            $str = str_replace("{pl}", $pl, $str);
            /*评论列表结束*/

            /*隐藏id为表单提供*/
            $hiddenpid = "";
            $hiddenpid .= '<input type="hidden" value="'.$id.'" name="pid">
            <input type="hidden" value="app" name="who">
            <input type="hidden" value="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" name="pageurl">';
            $str = str_replace("{hiddenpid}", $hiddenpid, $str);
            /*隐藏id为表单提供 结束*/

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
          <h1>'.mb_substr($allist['title'],1,25).'</h1>
          <div class="h1div"><span>来源:'.$allist['come'].'</span><span>作者:'.$allist['author'].'</span><span>时间:'.$allist['time'].'</span></div>

		          <div class="news_cent">
               <p class="MsoNormal" align="left" style="margin-bottom: 11.25pt; line-height: 22.5pt; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><samp><span style="font-size:12.0pt;font-family:微软雅黑;mso-bidi-font-family:宋体;color:#333333;
mso-font-kerning:0pt">
                '.$allist['content'].'
          </div>


     </div>';


            $newpage = $id. '_n.html';

            $str = str_replace("{new_page}", $new_page, $str);

            /*评论列表*/
            $pinglun = D("very_comment_news");
            $get_pl_sql = "select * from very_comment_news where comment_news='$id' order by comment_time desc limit 50";
            $pl_list = $pinglun->query($get_pl_sql);
            $pl = "";
            foreach($pl_list as $pls){
                $pl .= '<li>
                <div style="font-size: 12px;">
                   <div></div><div style="float:right">'.$pls['comment_time'].'</div>
                    <div style="clear:both;">'.$pls['comment_text'].'</div>
                </div>
                </li>';
            }
            $str = str_replace("{pl}", $pl, $str);
            /*评论列表结束*/

            /*隐藏id为表单提供*/
            $hiddenpid = "";
            $hiddenpid .= '<input type="hidden" value="'.$id.'" name="pid">
            <input type="hidden" value="new" name="who">
            <input type="hidden" value="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/' . $id . '" name="pageurl">';
            $str = str_replace("{hiddenpid}", $hiddenpid, $str);
            /*隐藏id为表单提供 结束*/

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

    //大应用分类(android,iphone)
    public function app_type_page($date,$apptable,$newtable,$advtable,$htmltable){

        $path = "./Application/Home/View/Index/";

        $get_much_type = "select appsystem from very_app group by appsystem";//查询有几种类型
        $much_type = $apptable->query($get_much_type);

        foreach($much_type as $much_ty){
            $fp = fopen($path . "iphone.html", "r"); //只读打开模板
            $str = fread($fp, filesize($path . "iphone.html"));//读取模板中内容

            $newpage = strtolower($much_ty['appsystem']).'.html';
            $newsystem_type = strtolower($much_ty['appsystem']);
            $show_type = $much_ty['appsystem'];
            /*左侧新闻*/
            $get_this_appnew_tag_sql = "select * from very_news where  newsystem='$newsystem_type' and pagetag='二级页头条' order by time desc limit 1";
            $this_tag_appnew_list = $newtable->query($get_this_appnew_tag_sql);

            $get_this_appnew_sql = "select * from very_news where newsystem='$newsystem_type' and pagetag!='二级页头条' order by time desc limit 8";
            $this_appnew_list = $newtable->query($get_this_appnew_sql);

            $left_new_one = "";
            $left_new_two = "";
            $left_new_three = "";
            foreach($this_tag_appnew_list as $tagpnewl){
                
                    $left_new_one .= '<h1><a href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/' . $tagpnewl['id'] . '" title="">'.$tagpnewl['title'].'</a></h1>
                        '.mb_substr($tagpnewl['content'],0,25).'..';
                
            }
            foreach($this_appnew_list as $tappnewkey=>$tappnewl){
                if($tappnewkey>='0' && $tappnewkey<='4'){
                    $left_new_two .= '<li><a href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/' . $tappnewl['id'] . '" title="">'.$tappnewl['title'].'</a></li>';
                }elseif($tappnewkey>'4'){
                    $left_new_three .= '<li><a href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/' . $tappnewl['id'] . '" title="">'.$tappnewl['title'].'</a></li>';
                }
            }
            $str = str_replace("{left_new_one}", $left_new_one, $str);
            $str = str_replace("{left_new_two}", $left_new_two, $str);
            $str = str_replace("{left_new_three}", $left_new_three, $str);
//            unset($left_new_one,$left_new_two,$left_new_three,$this_appnew_list);
            /*左侧新闻结束*/

            /*幻灯*/
            $change_image = "";
            $get_this_image_sql = "select id,advimage from very_adv where showpage='二级页幻灯' and system='$show_type' and stime<='$date' and etime>='$date' order by mtime desc limit 3";
            $this_image_list = $advtable->query($get_this_image_sql);

            foreach($this_image_list as $timl){
                $id = $timl['id'];
                $change_image .='<li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" target="_blank" title=""><img src="'.$timl['advimage'].'"  width="543" height="220" alt="大侠传"/></a></li>';
            }
            $str = str_replace("{change_image}", $change_image, $str);
            /*幻灯结束*/

            /*新游推荐*/
            $new_game_push = "";
            $get_pgame_sql = "select * from very_app where appsystem='$show_type' and apptype in ('14','15') order by time desc limit 4";
            $this_pganme_list = $advtable->query($get_pgame_sql);
            foreach($this_pganme_list  as $pgame){
                $id = $pgame['id'];
                $new_game_push .='<li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" target="_blank">
                <img src="'.$pgame['appimage'].'"  title="" alt="" width="65" height="65"/></a><p><a href="" target="_blank">'.$pgame['appname'].'</a></p></li>';
            }
            $str = str_replace("{new_game_push}", $new_game_push, $str);
            /*新游推荐结束*/

            /*右侧广告*/
            $right_adv_one = "";
            $right_adv_two = "";
            $get_this_adv_sql = "select id,advimage from very_adv where showpage='二级页' and system='$show_type' and stime<='$date' and etime>='$date' order by mtime desc limit 3";
            $this_adv_list = $advtable->query($get_this_adv_sql);

            foreach($this_adv_list as $advkey=>$advl){
                $id = $advl['id'];
                if($advkey=='0'){
                    $right_adv_one .='<div class="zhuanji_pic"><a href="" title=""><img src="'.$advl['advimage'].'"  title="" alt="" width="235" height="110" /></a></div>
         <div class="zhuanji_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" title="">'.$advl['advname'].'</a></div>';
                }else{
                    $right_adv_two .='<div class="zhuanji_pic"><a href="" title=""><img src="'.$advl['advimage'].'"  title="" alt="" width="235" height="110" /></a></div>
         <div class="zhuanji_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" title="">'.$advl['advname'].'</a></div>';
                }
            }
            $str = str_replace("{right_adv_one}", $right_adv_one, $str);
            $str = str_replace("{right_adv_two}", $right_adv_two, $str);
            /*右侧广告结束*/

            /*最新单机游戏*/
            $newgame_list = "";
            $get_this_newgame_sql = "select id,appname,appimage from very_app where appsystem='$show_type' and apptype in ('14','15') order by time
            desc limit 18";
            $this_newgame_list = $apptable->query($get_this_newgame_sql);
            
            foreach($this_newgame_list as $newgamel){
                $id = $newgamel['id'];
                $newgame_list .= '<li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" title="" target="_blank">
                <img src="'.$newgamel['appimage'].'" title="" target="_blank">'.$newgamel['appname'].'</a></p><div ></div></li>';
            }
            $str = str_replace("{newgame_list}", $newgame_list, $str);
            /*最新单机结束*/

            /*游戏排行榜*/
            $gtopone = "";
            $gtoptwo = "";
            $get_this_gtop_sql = "select id,appimage,appname from very_app where appsystem='$show_type' and apptype in ('14','15') order by downloadnum desc
            limit 12";
            $this_gtop_list = $apptable->query($get_this_gtop_sql);
            foreach($this_gtop_list as $gtopkey=>$gtopl){
                $id = $gtopl['id'];
                $topone = $gtopkey+1;
                if($gtopkey=='0'){
                    $gtopone .= '<li class="phb_top_one">
                <div class="phb_top_bot1">'.$topone.'</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" title="" target="_blank"><img src="'.$gtopl['appimage'].'" /></a>
                <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" title="" target="_blank"  class="hei333">'.$gtopl['appname'].' </a></div>
                <p class="phb_top_zi2"></p>
            </li>';
                }else{
                    $gtoptwo .= '<li class="phb_top_two"><div class="phb_top_bot1">'.$topone.'</div><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '">'.$gtopl['appname'].' </a><span>'.$gtopl['appshowname'].' </span></li>';    
                }
                
            }
            $str = str_replace("{gtopone}", $gtopone, $str);
            $str = str_replace("{gtoptwo}", $gtoptwo, $str);

            /*游戏排行榜结束*/

            /*应用列表*/    
            $applist = "";
            $get_this_applist_sql = "select id,appname,appimage from very_app where appsystem='$show_type' and apptype not in ('14','15','16') order by time
            desc limit 18";
            $this_applist_list = $apptable->query($get_this_applist_sql);
            foreach($this_applist_list as $applistl){
                $id = $applistl['id'];
                $applist .= '<li><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" title="" target="_blank">
                <img src="'.$applistl['appimage'].'"  title="" alt="" width="74" height="74" /></a>
                <p><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" title="" target="_blank">'.$applistl['appname'].'</a></p></li>';
            }
            $str = str_replace("{applist}", $applist, $str);
            /*应用列表结束*/    

            /*应用排行榜*/
            $apptopone = "";
            $apptoptwo = "";
            $get_this_apptop_sql = "select id,appimage,appname from very_app where appsystem='$show_type' and apptype not in ('14','15','16') order by downloadnum desc
            limit 12";
            $this_apptop_list = $apptable->query($get_this_apptop_sql);
            foreach($this_apptop_list as $apptopkey=>$apptopl){
                $id = $apptopl['id'];
                $toptwo = $apptopkey+1;
                if($apptopkey=='0'){
                    $apptopone .= '<li class="phb_top_one">
                <div class="phb_top_bot1">'.$toptwo.'</div>
                <a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" title="" target="_blank"><img src="'.$apptopl['appimage'].'" /></a>
                <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" title="" target="_blank"  class="hei333">'.$apptopl['appname'].' </a></div>
                <p class="phb_top_zi2"></p>
            </li>';
                }else{
                    $apptoptwo .= '<li class="phb_top_two"><div class="phb_top_bot1">'.$toptwo.'</div><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '">'.$apptopl['appname'].' </a><span>'.$gtopl['appshowname'].' </span></li>';    
                }
                
            } 
            $str = str_replace("{apptopone}", $apptopone, $str);
            $str = str_replace("{apptoptwo}", $apptoptwo, $str);

            /*应用排行榜结束*/

            fclose($fp);
            $handle = fopen($path . $newpage, "w"); //写入方式打开新闻路径
            fwrite($handle, $str); //把刚才替换的内容写进生成的HTML文件
            fclose($handle);
            unset($str,$fp);
            /*处理文件名入库*/
            $htmltime = time();
            $htmlpage = basename($newpage, ".html");

            $del_html_sql = "delete from very_html where nick_name='应用分类' and page_name='$htmlpage'";
            $htmltable->execute($del_html_sql);

            $insert_html_sql = "insert into very_html values ('','$htmlpage','应用分类','$htmltime')";
            $htmltable->execute($insert_html_sql);
        }
    }

    //排行榜
    public function app_paihang_page($date,$apptable,$newtable,$advtable,$htmltable){

        $path = "./Application/Home/View/Index/";

        $get_much_type = "select appsystem from very_app group by appsystem";//查询有几种类型
        $much_type = $apptable->query($get_much_type);

        foreach($much_type as $much_ty){            
            // $newpage = strtolower($much_ty['appsystem']).'.html';
            $newsystem_type = strtolower($much_ty['appsystem']);
            $show_type = $much_ty['appsystem'];

            // if($newsystem_type == 'android' || $newsystem_type=='ios'){
                $newpages[0] = $newsystem_type.'d.html';
                $newpages[1] = $newsystem_type.'n.html';
            // }else{
            //     $newpages[] = $newsystem_type.'d.html';
            // }
            foreach($newpages as $k=>$newpage){
                $paihang = "";
                if($k=='0'){
                    $apptypenum = '14';
                    $paihang .='
                              <div class="t_tit" id="t_tit">
                                  <ul class="t_left_ul">
                                      <li class="t_tit_li">游戏下载排行榜</li>
                                      <li><a href="<?php echo WEB_NAME; ?>/index.php/Index/paihang/type/androidn">网游下载排行榜</a></li>
                                  </ul>
                              </div>';
                }else{
                    $apptypenum = '15';
                    $paihang .='
                          <div class="t_tit" id="t_tit">
                              <ul class="t_left_ul">
                                  <li ><a href="<?php echo WEB_NAME; ?>/index.php/Index/paihang/type/android">游戏下载排行榜</a></li>
                                  <li class="t_tit_li">网游下载排行榜</li>
                              </ul>
                          </div>';
                }

                $fp = fopen($path . "paihang.html", "r"); //只读打开模板
                $str = fread($fp, filesize($path . "paihang.html"));//读取模板中内容
                
                $get_app_ph_sql = "select id,appname,appimage,time,downloadnum from very_app where apptype='$apptypenum' and appsystem='$show_type' order by downloadnum desc";
                $showlist = $apptable->query($get_app_ph_sql);
                
                
                foreach($showlist as $listkey=>$shl){
                    $id = $shl['id'];
                    $topp = $listkey+1;
                    $paihang .='
                          <div class="jietus showNow">
                                      <dl>
                                 <div class="rank_nab">'.$topp.'</div>
                                 <a href="" target="_blank"><img src="'.$shl['appimage'].'"  /></a>
                                 <dt><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" target="_blank">'.$shl['appname'].'</a></dt>
                                 <dd>下载:'.$shl['downloadnum'].' </dd>
                                 <dd>'.$shl['time'].'</dd>
                              </dl>
                                 </div>
                        ';
                }
                
                $str = str_replace("{paihang}", $paihang, $str);
                unset($paihang);
                fclose($fp);
                $handle = fopen($path . $newpage, "w"); //写入方式打开新闻路径
                fwrite($handle, $str); //把刚才替换的内容写进生成的HTML文件
                fclose($handle);
                unset($str,$fp);
                /*处理文件名入库*/
                $htmltime = time();
                $htmlpage = basename($newpage, ".html");

                $del_html_sql = "delete from very_html where nick_name='排行榜' and page_name='$htmlpage'";
                $htmltable->execute($del_html_sql);

                $insert_html_sql = "insert into very_html values ('','$htmlpage','排行榜','$htmltime')";
                $htmltable->execute($insert_html_sql);
            }
            
        }
    }

    //咨询列表页生成
    public function app_zixun_page($date,$apptable,$newtable,$advtable,$htmltable){
        $path = "./Application/Home/View/Index/";

        $get_much_type = "select newsystem from very_news group by newsystem";//查询有几种类型
        $much_type = $apptable->query($get_much_type);

        foreach($much_type as $much_ty){
            $fp = fopen($path . "zixun.html", "r"); //只读打开模板
            $str = fread($fp, filesize($path . "zixun.html"));//读取模板中内容

            $newpage = strtolower($much_ty['newsystem']).'_zx.html';
            $newsystem_type = strtolower($much_ty['newsystem']);
            $show_type = $much_ty['newsystem'];

            /*资讯列表*/
            $get_zx_list_sql = "select * from very_news where newsystem='$show_type' order by time desc ";
            $zx_list = $newtable->query($get_zx_list_sql);
            $zixun = "";
            foreach($zx_list as $zxl){
                $id = $zxl['id'];
                $content = mb_substr($zxl['content'],0,50);
                $zixun .='<dl>
            <img src="'.$zxl['newimage'].'"/>
            <dt><a href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/' . $id . '"> '.$zxl['title'].'</a></dt>
            <dd>'.$content.'...
            </dd>
            <p><span>来源：'.$zxl['come'].'</span><span>'.$zxl['time'].'</span></p>
             </dl>';
            }
            $str = str_replace("{zixun}", $zixun, $str);
            /*资讯列表结束*/

            /*应用排行*/
            $get_app_list_sql = "select * from very_app where appsystem='$show_type' and apptype not in('14','15','16') order by downloadnum desc limit 10";
            $app_list = $apptable->query($get_app_list_sql);
            $yingyongp = "";
            foreach($app_list as $ak=>$appl){
                $id = $appl['id'];
                $topk = $ak+1;
                $yingyongp .= '<ul>
            <li class="phb_top_one">
                <div class="phb_top_bot1">'.$topk.'</div>
                <img src="'.$appl['appimage'].'"/>

                <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/' . $id . '" class="hei333" target="_blank">'.$appl['appname'].'</a></div>
                <p class="phb_top_zi2">'.$appl['appshowname'].'</p>
            </li>
        </ul>';
                $str = str_replace("{yingyongp}", $yingyongp, $str);
            }
            /*应用排行结束*/
            fclose($fp);
            $handle = fopen($path . $newpage, "w"); //写入方式打开新闻路径
            fwrite($handle, $str); //把刚才替换的内容写进生成的HTML文件
            fclose($handle);
            unset($str,$fp);
            /*处理文件名入库*/
            $htmltime = time();
            $htmlpage = basename($newpage, ".html");

            $del_html_sql = "delete from very_html where nick_name='咨询列表' and page_name='$htmlpage'";
            $htmltable->execute($del_html_sql);

            $insert_html_sql = "insert into very_html values ('','$htmlpage','咨询列表','$htmltime')";
            $htmltable->execute($insert_html_sql);
        }
    }
}