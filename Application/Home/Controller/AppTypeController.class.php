<?php
namespace Home\Controller;

use Think\Controller;

//use Think\UploadFile;

class AppTypeController extends Controller
{
    
    public function index(){
            
        $table = D('very_type');

        if($_POST['msearch']){
            $search = htmlspecialchars(addslashes($_POST['search']));
            if(!empty($search)){
                $where  = " where type_name like'%$search%'";
            }else{
                $where = "";
                $error = "请输入正确的类型名称";
            }
        }

        $sql = "select * from very_type $where order by type_id";
        $list = $table->query($sql);

        $this->assign('search', $search);
        $this->assign('error', $error);
        $this->assign('data', $list);
        $this->display();
    }


    public function deltype()
    {
      
        $dbt = 'very_type';
        $url = "/index.php/AppType/index";

        $nid = htmlspecialchars(addslashes($_GET['nid']));
        $new_table = D($dbt);

        $del_sql = "delete from $dbt where type_id='$nid'";
        $new_table->execute($del_sql);
        redirect(WEB_NAME . $url);
    }

    public function addtype(){
        if ($_POST['subapp']) {
            $typename = htmlspecialchars(addslashes($_POST['typename']));

            if (empty($typename)) {
                $error = "请输入类型名称";
            } 
            if (!empty($error)) {
                $this->assign('typename', $typename);
                $this->assign('error', $error);
                $this->display();
                exit;
            } else {
                $apptable = D('very_type');
                $time = date('Y-m-d H:i:s');
                $insert_sql = "insert into very_type values ('','$typename','$time')";
                $apptable->execute($insert_sql);
                $this->success('操作成功', 'index', 3);

            }
        }
        $this->display();
    }

    public function editype(){

        $dbt = 'very_type';
        $url = "/index.php/AppType/index";

        $id = htmlspecialchars(addslashes($_POST['nid']));
        $tname = htmlspecialchars(addslashes($_POST['tname']));

        $new_table = D($dbt);

        $gsql = "select * from $dbt where type_id='$id' and type_name='$tname'";
        $list = $new_table->query($gsql);

        $time = date('Y-m-d H:i:s');
        if(empty($list)){
            $up_sql = "update $dbt set type_name='$tname', type_time='$time' where type_id='$id'";
            
            $new_table->execute($up_sql);
            // redirect(WEB_NAME . $url);   
        }

        echo '1';

    }
}