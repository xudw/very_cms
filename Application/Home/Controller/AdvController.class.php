<?php
namespace Home\Controller;

use Think\Controller;

//use Think\UploadFile;

class AdvController extends Controller
{

	public function index(){

        $apptable = D('very_adv');
        $apptable->tableName = 'very_adv';

        $get_sql = "select * from very_adv order by mtime desc";
        $app_list = $apptable->query($get_sql);

        $this->assign('app_list', $app_list);

		$this->display();
	}

	public function addAdv(){

		if($_POST['subapp']){
			$advname = htmlspecialchars(addslashes($_POST['advname']));
            $showpage = htmlspecialchars(addslashes($_POST['showpage']));
            $stime = htmlspecialchars(addslashes($_POST['stime']));
            $etime = htmlspecialchars(addslashes($_POST['etime']));

            if (empty($advname)) {
                $error = "请输入广告名称";
            } else if (empty($showpage)) {
                $error = "请选择显示页面";
            }  else if (!empty($_FILES)) {
                $advimage = $this->_upload();
                if (is_array($advimage)) {
                    $error = $advimage['mess'];
                }
            }else if (empty($stime)) {
                $error = "请选择开始时间";
            } else if (empty($etime)) {
                $error = "请选择结束时间";
            }

            if (!empty($error)) {
                $this->assign('advname', $advname);
                $this->assign('showpage', $showpage);
                $this->assign('stime', $stime);
                $this->assign('etime', $etime);
                $this->assign('advimage', $advimage);
                $this->assign('error', $error);
                $this->display();
                exit;
            } else {
                $apptable = D('very_adv');
                $apptable->tableName = 'very_adv';
                $time = date('Y-m-d H:i:s');
                $insert_sql = "insert into very_adv values ('','$advname','$showpage','$advimage','$stime','$etime','$time')";
                $apptable->execute($insert_sql);
                $this->success('操作成功', 'index', 3);

            }
		}
		$this->display();
	}

    public function editadv()
    {
        $new_table = D("very_adv");
        $new_table->tableName = "very_adv";

        $nid = htmlspecialchars(addslashes($_GET['nid']));

        $get_sql = "select * from very_adv where id='$nid'";
        $newlist = $new_table->query($get_sql);

        if ($_POST['subapp']) {
            $id = htmlspecialchars(addslashes($_POST['id']));
            $advname = htmlspecialchars(addslashes($_POST['advname']));
            $showpage = htmlspecialchars(addslashes($_POST['showpage']));
            $stime = htmlspecialchars(addslashes($_POST['stime']));
            $etime = htmlspecialchars(addslashes($_POST['etime']));
            $appimages = htmlspecialchars(addslashes($_POST['advimages']));

            $old_sql = "select id from very_adv where advname='$advname' and id!='$id'";
            $hive = $new_table->query($old_sql);
            if(!empty($hive)){
                $error = "广告名已存在";
            }else if (empty($advname)) {
                $error = "请输入广告名称";
            } elseif (empty($showpage)) {
                $error = "请选择所属页面";
            } elseif (empty($stime)) {
                $error = "请设置开始时间";
            } else if (empty($etime)) {
                $error = "请设置结束时间";
            }

            if($appimages){
                $appimage = $appimages;
            }
            if(!empty($_FILES['advimage']['name'])) {
                $appimage = $this->_upload();
                if (is_array($appimage)) {
                    $error = $appimage['mess'];
                }
            }
            if (!empty($error)) {
                $lists['id'] = $id;
                $lists['advname'] = $advname;
                $lists['showpage'] = $showpage;
                $lists['stime'] = $stime;
                $lists['etime'] = $etime;
                $lists['advimage'] = $appimage;
                $this->assign('error', $error);
                $this->assign('list', $lists);
                $this->display();
                exit;
            } else {
                $upate_sql = "update very_adv set advname='$advname',showpage='$showpage',stime='$stime',etime='$etime'
                ,advimage='$appimage'  where id='$id'";
                $new_table->execute($upate_sql);
                redirect(WEB_NAME . "/index.php/Adv/index");
            }
        }

        $this->assign('list', $newlist[0]);
        $this->display();
    }

	 public function _upload()
    {
        $file = $_FILES['advimage'];

        $arrType = array('image/jpeg', 'image/jpg', 'image/gif', 'image/png', 'image/bmp', 'image/pjpeg');
        $max_size = '5000000';      // 最大文件限制（单位：byte）
        $date = date('Ymd');
        $datetime = date('YmdHis');
        $upfilel = WEB_NAME . '/adv'; //图片目录路径
        $upfile = './adv';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') { //判断提交方式是否为POST
            if (!file_exists($upfile)) {  // 判断存放文件目录是否存在
                mkdir($upfile, 0777, true);
            }
            $imageSize = getimagesize($file['tmp_name']);
//            list($width, $height) = getimagesize($filename);
//            $new_width = $width * $percent;
//            $new_height = $height * $percent;
//
//// 重新取样
//            $image_p = imagecreatetruecolor($new_width, $new_height);
//            $image = imagecreatefromjpeg($filename);
//            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

            $img = $imageSize[0] . '*' . $imageSize[1];
            $fname = $file['name'];
            $ftype = explode('.', $fname);
            $picName = $upfile . "/$datetime" . $fname;
            $picNamel = $upfilel . "/$datetime" . $fname;
            if (!is_uploaded_file($file['tmp_name'])) { //判断上传文件是否存在
                $error = "请选择文件！";
            } else if ($file['size'] > $max_size) {  //判断文件大小是否大于500000字节
                $error = "上传文件太大！";
            } else if (!in_array($file['type'], $arrType)) {  //判断图片文件的格式
                $error = "上传文件格式不对！";
            } else if (file_exists($picName)) {
                $error = "同文件名已存在！";
            } elseif (!move_uploaded_file($file['tmp_name'], $picName)) {
                $error = "移动文件出错！";
            }

            if (!empty($error)) {
                $errors['mess'] = $error;
                return $errors;
                exit;
            } else {

//                echo "<font color='#FF0000'>图片文件上传成功！</font><br/>";
//                echo "<font color='#0000FF'>图片大小：$img</font><br/>";
//                echo "图片预览：<br><div style='border:#F00 1px solid; width:200px;height:200px'>
//                <img src=\"" . $picNamel . "\" width=200px height=200px>" . $fname . "</div>";
                return $picNamel;

            }
        }
    }

}