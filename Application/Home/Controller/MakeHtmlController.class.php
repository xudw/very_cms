<?php
namespace Home\Controller;

use Think\Controller;

class MakeHtmlController extends Controller
{
    public function index()
    {

        $date = date("Y-m-d H:i:s");

        $apptable = D('very_app');//应用
        $newtable = D('very_news');//新闻
        $advtable = D('very_adv');//广告
        $htmltable = D('very_html');//静态页面

        $path = "./Application/Home/View/Index/";
        $fp = fopen($path . "index.html", "r"); //只读打开模板
        $str = fread($fp, filesize($path . "index.html"));//读取模板中内容

        /*导航部分*/
        $newpage = 's'.date('Ymd') . '.html';
        $get_app_sql = "select id,appname,appsystem from very_app where appsystem in ('Android','IOS','WP','HTML5') and apptype in('14','15') and tag!='1' order by time desc limit 7";
        $app_list = $apptable->query($get_app_sql);

        $andapp = "";
        $iosapp = "";
        $wpapp = "";
        $htmlapp = "";
        foreach ($app_list as $appl) {
            if($appl['appsystem'] == 'Android'){
                $id = $appl['id'];
                $andapp .= '<a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'"   target="_blank">' . $appl['appname'] . '</a>';
            }   
            if($appl['appsystem'] == 'IOS'){
                $id = $appl['id'];
                $iosapp .= '<a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'"   target="_blank">' . $appl['appname'] . '</a>';
            } 
            if($appl['appsystem'] == 'WP'){
                $id = $appl['id'];
                $wpapp .= '<a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'"   target="_blank">' . $appl['appname'] . '</a>';
            } 
            if($appl['appsystem'] == 'HTML5'){
                $id = $appl['id'];
                $htmlapp .= '<a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'"   target="_blank">' . $appl['appname'] . '</a>';
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
            $search_html .= '<a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'"   target="_blank">' . $serachl['appname'] . '</a>';
        }
        $str = str_replace("{hotsearch}", $search_html, $str);
        /*搜索栏部分结束*/

        /*首页幻灯*/
        $index_slide = "";
        $get_islide_sql = "select id,advname,advimage from very_adv where showpage='首页幻灯' and stime<='$date' and etime>='$date' order by mtime desc limit 5";
        $islide_list = $advtable->query($get_islide_sql);
        foreach ($islide_list as $islidekey=>$islidel) {
            $isimage = $islidekey+1;
            $id = $islidel['id'];
            $index_slide .= "img".$isimage."=new Image();
            img".$isimage.".src='".$islidel['advimage']."';
            img".$isimage.".alt='".$islidel['advname']."';
            url".$isimage."=new Image();
            url".$isimage.".src='<?php echo WEB_NAME; ?>/index.php/Index/product/pid/".$id."';
            url".$isimage.".title='".$islidel['advname']."';";
        }
        $str = str_replace("{index_slide}", $index_slide, $str);    

        /*首页幻灯结束*/
        /*福利新闻*/    
        $wellone_html = "";
        $welltwo_html = "";
        $get_well_sql = "select id,title from very_news where newtype='福利新闻' order by time desc limit 7";
        $well_list = $newtable->query($get_well_sql);
        foreach ($well_list as $wellkey=>$well) {
            $welltime = mb_substr($well['title'],0,16);
            $id = $well['id'];
            if($wellkey == '0'){
                $wellone_html .= '<a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/'.$id.'" title="'.$well['title'].'" class="red">'.$welltime.'</a>';
            }else{
                $welltwo_html .= '<a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/'.$id.'"  title="'.$well['title'].'">'.$welltime .'/a>';
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
            $testgame .= '<a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'"  target="_blank" class="c2li_s2">'.$tgl['appname'].'</a>
                             <a href="http://'.$tgl['apphome'].'"  target="_blank" target="_blank" class="c2li_s3"></a>';
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
        foreach ($tag_list as $tagkey=>$tagl) {
            $id = $tagl['id'];
            if($tagkey=='0'){
                $newtest_tagone .= '<a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'"><img src="'.$tagl['appimage'].'"  alt=""/>'.$tagl['appname'].'</a>';
            }else{
                $newtest_tagtwo .= '<a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'"><img src="'.$tagl['appimage'].'"  alt=""/>'.$tagl['appname'].'</a>';
            }   
            
        }
        $get_newt_sql = "select id,title from very_news where newtype='新游评测' order by time desc limit 10";
        $newt_list = $newtable->query($get_newt_sql);
        foreach ($newt_list as $newtkey=>$newtl) {
            $newttime = mb_substr($newtl['title'],0,10);
            $id = $newtl['id'];
            if($newtkey <= '4'){
                $newtestone .= '<li><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/'.$id.'" title="">'.$newttime.'..</a></li>';
            }else{
                $newtesttwo .= '<li><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/'.$id.'" title="">'.$newttime.'..</a></li>';
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
        foreach ($iadv_list as $iadvkey=>$iadvl) {
            $id = $iadvl['id'];
            if($iadvkey == '0'){
                $advone .='<a  href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'" target="_blank"><img src="'.$iadvl['advimage'].'" alt=""/>';
            }elseif($iadvkey == '1'){
                $advtwo .='<a  href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'" target="_blank"><img src="'.$iadvl['advimage'].'" alt=""/></a>';
            }elseif($iadvkey == '2'){
                $advthree .='<a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'" target="_blank"><img src="'.$iadvl['advimage'].'"   alt=""/></a>';
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

        foreach ($andtop_list as $andtkey=>$andtl) {
            $id = $andtl['id'];
            $i_a_top = $andtkey + 1;
            if($andtkey == '0'){
                $andtopone .='<div class="phb_top_bot1">'.$i_a_top.'</div>
               <img src="'.$andtl['appimage'].'"  />
              <div class="phb_top_zi"><a href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'" class="hei333">'.$andtl['appname'].'</a></div>
                <p class="phb_top_zi2"><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'">'.$andtl['appshowname'].'</a></p>';
            }else{
                $andtoplist .=' <li class="phb_top_two"><div class="phb_top_bot1">'.$i_a_top.'</div><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'">'.$andtl['appname'].'</a><span>'.$andtl['appshowname'].'</span></li>';
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
                $inewtitle = mb_substr($innewl['title'], 0,15);
                $index_newlist .= '<li><a href="<?php echo WEB_NAME; ?>/index.php/Index/news/pid/'.$id.'" target="_blank">'.$inewtitle.'</a></li>';
            }
            $str = str_replace("{index_newlist}", $index_newlist, $str);
        /*首页新闻列表结束*/

        /*首页安卓游戏列表*/
        $index_all_and = "";
        $get_aall_sql = "select id,appname,appimage from very_app where appsystem='Android' and apptype in('14','15')  order by time desc limit 24";
        $aall_list = $apptable->query($get_aall_sql);

        foreach ($aall_list as $aalll) {
            $id = $aalll['id'];
            $index_all_and .='<li><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'"><img src="'.$aalll['appimage'].'"</a>
            <p><a target="_blank" href="<?php echo WEB_NAME; ?>/index.php/Index/product/pid/'.$id.'">'.$aalll['appname'].'</a></p></li>';
        }
        $str = str_replace("{index_all_and}", $index_all_and, $str);
        /*首页安卓游戏列表结束*/

        fclose($fp);
        $handle = fopen($path . $newpage, "w"); //写入方式打开新闻路径
        fwrite($handle, $str); //把刚才替换的内容写进生成的HTML文件
        fclose($handle);

        /*处理文件名入库*/
        $htmltime = time();
        $htmlpage = basename($newpage,".html");
        
        $del_html_sql ="delete from very_html where nick_name='首页'";
        $htmltable->execute($del_html_sql);  

        $insert_html_sql ="insert into very_html values ('','$htmlpage','首页','$htmltime')";          
        $htmltable->execute($insert_html_sql);


    }
}