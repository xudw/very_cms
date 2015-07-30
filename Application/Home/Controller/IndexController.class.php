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
            session_destroy();
            $page = 'android';
            $lifetime = 3600;//保存1分钟
            session_start();
            setcookie(session_name(), session_id(), time() + $lifetime, "/");
            $_SESSION["TYPE"] = $page;
        } else if ($type == 'ios') {
            session_destroy();
            $page = 'ios';
            $lifetime = 3600;//保存1分钟
            session_start();
            setcookie(session_name(), session_id(), time() + $lifetime, "/");
            $_SESSION["TYPE"] = $page;
        } else if ($type == 'wp') {
            session_destroy();
            $page = 'wp';
            $lifetime = 3600;//保存1分钟
            session_start();
            setcookie(session_name(), session_id(), time() + $lifetime, "/");
            $_SESSION["TYPE"] = $page;
        } else if ($type == 'html5') {
            session_destroy();
            $page = 'html';
            $lifetime = 3600;//保存1分钟
            session_start();
            setcookie(session_name(), session_id(), time() + $lifetime, "/");
            $_SESSION["TYPE"] = $page;
        }

        $sql = "select page_name from very_html where page_name='$page' and nick_name='应用分类' order by mtime desc limit 1";
        $newpage = $htmltable->query($sql);
        $this->display($newpage[0]['page_name']);
    }

    //应用
    public function yingyong()
    {
        $types = $_SESSION['TYPE'];
        $typetable = D('very_type');
        $apptable = D('very_app');
        $type_sql = "select * from very_type";
        $typelist = $typetable->query($type_sql);

        $pid = htmlspecialchars(addslashes($_GET['pid']));
        if (!empty($pid)) {
            $type = " and apptype='$pid'";
        } else {
            $type = " and apptype not in('14','15','16')";
        }

        $count_sql = "select count(1) as cnt from very_app where appsystem='$types'  $type ";
        $count = $apptable->query($count_sql); // 查询满足要求的总记录数

        $Page = new \Think\Page($count[0]['cnt'], 20); // 实例化分页类 传入总记录数和每页显示的记录数(25)

        $show = $Page->show(); // 分页显示输出
        $pageNum = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = $_REQUEST['pageSize'] ? $_REQUEST['pageSize'] : 20;
        $p = ($pageNum - 1) * $pageSize;
        $list = " limit $p,$pageSize";

        $end_sql = "select * from very_app where appsystem='$types' $type order by time desc $list";
        $data = $apptable->query($end_sql);

        //游戏排行
        $game_sql = "select * from very_app where appsystem='$types' and apptype in('14','15','16') order by downloadnum desc limit 10";
        $game_list = $apptable->query($game_sql);

        $this->assign('typelist', $typelist);
        $this->assign('data', $data);
        $this->assign('game', $game_list);
        $this->assign('page', $show);
        $this->display();
    }

    //排行榜
    public function paihang()
    {
        if ($_GET['type']) {
            $type = htmlspecialchars(addslashes($_GET['type']));
        } else {
            $type = $_SESSION['TYPE'];
        }

        $htmltable = D('very_html');
        if ($type == 'android') {
            $page = 'androidd';
        } else if ($type == 'ios') {
            $page = 'iosd';
        } else if ($type == 'wp') {
            $page = 'wpd';
        } else if ($type == 'html5') {
            $page = 'htmld';
        } elseif ($type == 'androidn') {
            $page = 'androidn';
        } else if ($type == 'iosn') {
            $page = 'iosn';
        } else if ($type == 'wpn') {
            $page = 'wpn';
        } else if ($type == 'html5n') {
            $page = 'html5n';
        }

        $sql = "select page_name from very_html where page_name='$page' and nick_name='排行榜' order by mtime desc limit 1";
        $newpage = $htmltable->query($sql);
        $this->display($newpage[0]['page_name']);
    }

    //资讯
    public function zixun()
    {
//        $type = htmlspecialchars(addslashes($_GET['type']));
        $type = $_SESSION['TYPE'];
        $htmltable = D('very_html');
        if ($type == 'android') {
            $page = 'android_zx';
        } else if ($type == 'ios') {
            $page = 'ios_zx';
        } else if ($type == 'wp') {
            $page = 'wp_zx';
        } else if ($type == 'html5') {
            $page = 'html_zx';
        }

        $sql = "select page_name from very_html where page_name='$page' and nick_name='咨询列表' order by mtime desc limit 1";
        $newpage = $htmltable->query($sql);
        $this->display($newpage[0]['page_name']);
    }
}