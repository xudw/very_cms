<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$newpage = 's'.date('Ymd');
        $this->display($newpage);
    }
}