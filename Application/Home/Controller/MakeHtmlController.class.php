<?php
namespace Home\Controller;

use Think\Controller;

class MakeHtmlController extends Controller
{
    public function index()
    {

        $apptable = D('very_app');
        $apptable->tableName = 'very_app';

        $path = "./Application/Home/View/Index/";
        $fp = fopen($path . "index.html", "r"); //只读打开模板
        $str = fread($fp, filesize($path . "index.html"));//读取模板中内容

        /*导航部分*/
        $newpage = date('wYmd') . '.html';
        $get_app_sql = "select id,appname,appsystem from very_app where appsystem in ('Android','IOS') and apptype in('14','15') order by time desc limit 7";
        $app_list = $apptable->query($get_app_sql);

        $hah = "";
        foreach ($app_list as $appl) {
            $hah .= '<a href="asdf"  target="_blank">' . $appl['appname'] . '</a>';
        }

        $str = str_replace("{appname}", $hah, $str);
        /*导航部分*/

        fclose($fp);
        $handle = fopen($path . $newpage, "w"); //写入方式打开新闻路径
        fwrite($handle, $str); //把刚才替换的内容写进生成的HTML文件
        fclose($handle);
    }
}