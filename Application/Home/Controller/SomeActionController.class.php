<?php
namespace Home\Controller;

use Think\Controller;

class SomeActionController extends Controller
{

    //留言
    public function comment()
    {
        $who = htmlspecialchars(addslashes($_POST['who']));
        $comment = htmlspecialchars(addslashes($_POST['comment']));
        $pageurl = htmlspecialchars(addslashes($_POST['pageurl']));
        $pid = htmlspecialchars(addslashes($_POST['pid']));


        $time = date('Y-m-d H:i:s');
        $user = strtotime($time) . rand(1, 10);
        if($who == 'new'){
            $d = D("very_comment_news");
            $table = 'very_comment_news';
        }elseif($who == 'app'){
            $d = D("very_comment_app");
            $table = 'very_comment_app';
        }
        $sql = "insert into $table VALUE ('','$user','$comment','$pid','$time')";

        $d->query($sql);

        redirect($pageurl);

    }

    //搜索
    public function search(){
        $serch = htmlspecialchars(addslashes($_POST['search']));

        $d = D("very_app");

        $sql = "select id,appname,appimage from very_app where appname like '%$serch%'";
        $list = $d->query($sql);

//        print_r($list);
        $this->assign('data',$list);
        $this->display();
    }

}