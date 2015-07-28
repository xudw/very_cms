<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){

	    $htmltable = D('very_html');
	    
	    $sql = "select page_name from very_html where nick_name='首页' order by mtime desc limit 1";
	    $newpage = $htmltable->query($sql);

        $this->display($newpage[0]['page_name']);
    }

    public function product(){

        $id = htmlspecialchars(addslashes($_GET['pid']));

        $htmltable = D('very_html');

        $page = $id.'_p';
        $sql = "select page_name from very_html where page_name='$page' and nick_name='产品' order by mtime desc limit 1";
        $newpage = $htmltable->query($sql);
        $this->display($newpage[0]['page_name']);
    }

    public function news(){

        $id = htmlspecialchars(addslashes($_GET['pid']));

        $htmltable = D('very_html');

        $page = $id.'_n';
        $sql = "select page_name from very_html where page_name='$page' and nick_name='新闻' order by mtime desc limit 1";
        $newpage = $htmltable->query($sql);
        $this->display($newpage[0]['page_name']);
    }

    //分类应用首页(iphone;android)
    public function appshow(){

        $type = htmlspecialchars(addslashes($_GET['type']));

        $htmltable = D('very_html');
        if($type=='android'){
            $page = 'android';
        }else if($type=='ios'){
            $page = 'ios';
        }else if($type=='wp'){
            $page = 'wp';
        }else if($type=='html5'){
            $page = 'html';
        }     
        
        $sql = "select page_name from very_html where page_name='$page' and nick_name='应用分类' order by mtime desc limit 1";
        $newpage = $htmltable->query($sql);
        $this->display($newpage[0]['page_name']);
    }
}