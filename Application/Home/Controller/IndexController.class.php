<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{

    public function index()
    {

        $htmltable = D('very_html');

        $sql = "select page_name from very_html where nick_name='首页' order by mtime desc limit 1";
        $newpage = $htmltable->query($sql);

        $this->display($newpage[0]['page_name']);
    }

    public function product()
    {

        $id = htmlspecialchars(addslashes($_GET['pid']));

        $htmltable = D('very_html');

        $page = $id . '_p';
        $sql = "select page_name from very_html where page_name='$page' and nick_name='产品' order by mtime desc limit 1";
        $newpage = $htmltable->query($sql);
        $this->display($newpage[0]['page_name']);
    }

    public function news()
    {

        $id = htmlspecialchars(addslashes($_GET['pid']));

        $htmltable = D('very_html');

        $page = $id . '_n';
        $sql = "select page_name from very_html where page_name='$page' and nick_name='新闻' order by mtime desc limit 1";
        $newpage = $htmltable->query($sql);
        $this->display($newpage[0]['page_name']);
    }

    //分类应用首页(iphone;android)
    public function appshow()
    {

        $type = htmlspecialchars(addslashes($_GET['type']));

        $htmltable = D('very_html');
        if ($type == 'android') {
            $page = 'android';
        } else if ($type == 'ios') {
            $page = 'ios';
        } else if ($type == 'wp') {
            $page = 'wp';
        } else if ($type == 'html5') {
            $page = 'html';
        }

        $sql = "select page_name from very_html where page_name='$page' and nick_name='应用分类' order by mtime desc limit 1";
        $newpage = $htmltable->query($sql);
        $this->display($newpage[0]['page_name']);
    }

    //应用
    public function yingyong()
    {
        $typetable = D('very_type');
        $apptable = D('very_app');
        $type_sql = "select * from very_type";
        $typelist = $typetable->query($type_sql);

        $pid = htmlspecialchars(addslashes($_GET['pid']));
        if (!isset($pid)) {
            $type = " and apptype='$pid'";
        } else {
            $type = " and apptype not in('14','15','16')";
        }
//        $d = new \Home\Model\FinanceModel('Finance', '', 'DB_CP_DSN');
        $count_sql = "select count(1) as cnt from very_app where appsystem='android'  $type ";
        $count = $apptable->query($count_sql); // 查询满足要求的总记录数

        $Page = new \Think\Page($count[0]['cnt'], 20); // 实例化分页类 传入总记录数和每页显示的记录数(25)

        $show = $Page->show(); // 分页显示输出
        $pageNum = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = $_REQUEST['pageSize'] ? $_REQUEST['pageSize'] : 20;
        $p = ($pageNum - 1) * $pageSize;
        $list = " limit $p,$pageSize";

        $end_sql = "select * from very_app where appsystem='android' $type order by time desc $list";
        $data = $apptable->query($end_sql);

        //游戏排行
        $game_sql = "select * from very_app where appsystem='android' and apptype in('14','15','16') order by downloadnum desc limit 10";
        $game_list = $apptable->query($game_sql);

        $this->assign('typelist', $typelist);
        $this->assign('data', $data);
        $this->assign('game', $game_list);
        $this->assign('page', $show);
        $this->display();
    }


}