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

        $d = D('MakeHtml');

        //生成首页
        $d->index_page($date,$apptable,$newtable,$advtable,$htmltable);

        //生成产品页
        $d->product_page($date,$apptable,$newtable,$advtable,$htmltable);

        //生成新闻页
        $d->news_page($date,$apptable,$newtable,$advtable,$htmltable);
    }
}