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
        echo '20%';
        //生成产品页
        $d->product_page($date,$apptable,$newtable,$advtable,$htmltable);
        echo '40%';
        //生成新闻页
        $d->news_page($date,$apptable,$newtable,$advtable,$htmltable);
        echo '50%';
        //生成应用分类页
        $d->app_type_page($date,$apptable,$newtable,$advtable,$htmltable);
        echo '70%';
        //排行分类页
        $d->app_paihang_page($date,$apptable,$newtable,$advtable,$htmltable);
        echo '85%';
        //咨询列表页生成
        $d->app_zixun_page($date,$apptable,$newtable,$advtable,$htmltable);
        echo '100%';

//        $this->display();
        redirect(WEB_NAME . "/index.php/AppAdmins/index");
    }
}