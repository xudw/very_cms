<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){

	    $htmltable = D('very_html');//应用
	    
	    $sql = "select page_name from very_html where nick_name='首页' order by mtime desc limit 1";
	    $newpage = $htmltable->query($sql);

    	// $newpage = 's'.date('Ymd');
        $this->display($newpage[0]['page_name']);
    }
}