<?php
namespace Home\Controller;

use Think\Controller;

//use Think\UploadFile;

class AppAdminsController extends Controller
{

    //后台应用管理
    public function index()
    {

        $apptable = D('very_app');
        $apptable->tableName = 'very_app';

        $get_sql = "select id,appname,apptype,appsystem,applanguage,money,time,tag from very_app order by time desc";
        $app_list = $apptable->query($get_sql);


        $this->assign('app_list', $app_list);
        $this->display();
    }


    public function makeJob()
    {


        $type = D("very_type");
        $type->tableName = 'very_type';

        $type_list = $type->query("SELECT type_id,type_name FROM very_type");

        if ($_POST['subapp']) {
            $appname = htmlspecialchars(addslashes($_POST['appname']));
            $apptype = htmlspecialchars(addslashes($_POST['apptype']));
            $money = htmlspecialchars(addslashes($_POST['money']));
            $appshowname = htmlspecialchars(addslashes($_POST['appshowname']));
            $appversion = htmlspecialchars(addslashes($_POST['appversion']));
            $applanguage = htmlspecialchars(addslashes($_POST['applanguage']));

            $appsystem = htmlspecialchars(addslashes($_POST['appsystem']));
            $apphome = htmlspecialchars(addslashes($_POST['apphome']));
//            $appimage = htmlspecialchars(addslashes($_POST['appimage']));

            $come = htmlspecialchars(addslashes($_POST['come']));
            $summary = htmlspecialchars(addslashes($_POST['summary']));
            $upsummary = htmlspecialchars(addslashes($_POST['upsummary']));

            if (empty($appname)) {
                $error = "请输入应用名";
            } else if (empty($apptype)) {
                $error = "请选择类型";
            } else if (empty($appshowname)) {
                $error = "输入别名";
            } else if (empty($appversion)) {
                $error = "输入应用版本";
            } else if (empty($apphome)) {
                $error = "输入下载地址";
            } else if (empty($summary)) {
                $error = "输入简介";
            } else if (!empty($_FILES)) {
                $appimage = $this->_upload();
                if (is_array($appimage)) {
                    $error = $appimage['mess'];
                }
            }
            if (!empty($error)) {
                $this->assign('appname', $appname);
                $this->assign('apptype', $apptype);
                $this->assign('money', $money);
                $this->assign('appshowname', $appshowname);
                $this->assign('appversion', $appversion);
                $this->assign('applanguage', $applanguage);
                $this->assign('appsystem', $appsystem);
                $this->assign('apphome', $apphome);
                $this->assign('appimage', $appimage);
                $this->assign('come', $come);
                $this->assign('summary', $summary);
                $this->assign('upsummary', $upsummary);
                $this->assign('error', $error);
                $this->assign('type_list', $type_list);
                $this->display();
                exit;
            } else {
                $apptable = D('very_app');
                $apptable->tableName = 'very_app';
                $time = date('Y-m-d H:i:s');
                $insert_sql = "insert into very_app values ('','$appname','$appshowname','$apptype','$appversion','$appsystem','$applanguage','',
					'$apphome','$appimage','$time','$come','$money','$summary','$upsummary','','')";
                $apptable->execute($insert_sql);
                $this->success('操作成功', 'index', 3);

            }

        }


        $this->assign('type_list', $type_list);
        $this->display();
    }

    //修改应用信息
    public function editapp()
    {
        $type = D("very_type");
        $type->tableName = 'very_type';

        $type_list = $type->query("SELECT type_id,type_name FROM very_type");

        $nid = htmlspecialchars(addslashes($_GET['nid']));
//        $this->assign('nids', $nid);
        $new_table = D("very_app");
        $new_table->tableName = "very_app";
        $get_sql = "select * from very_app where id='$nid'";
        $newlist = $new_table->query($get_sql);

        if ($_POST['subapp']) {
            $id = htmlspecialchars(addslashes($_POST['id']));
            $appname = htmlspecialchars(addslashes($_POST['appname']));
            $apptype = htmlspecialchars(addslashes($_POST['apptype']));
            $money = htmlspecialchars(addslashes($_POST['money']));
            $appshowname = htmlspecialchars(addslashes($_POST['appshowname']));
            $appversion = htmlspecialchars(addslashes($_POST['appversion']));
            $applanguage = htmlspecialchars(addslashes($_POST['applanguage']));

            $appsystem = htmlspecialchars(addslashes($_POST['appsystem']));
            $apphome = htmlspecialchars(addslashes($_POST['apphome']));
            $appimages = htmlspecialchars(addslashes($_POST['appimages']));

            $come = htmlspecialchars(addslashes($_POST['come']));
            $summary = htmlspecialchars(addslashes($_POST['summary']));
            $upsummary = htmlspecialchars(addslashes($_POST['upsummary']));

            $old_sql = "select id from very_app where appname='$appname' and id!='$id'";
            $hive = $new_table->query($old_sql);
            if (!empty($hive)) {
                $error = "次应用名已存在";
            } else if (empty($appname)) {
                $error = "请输入应用名";
            } elseif (empty($apptype)) {
                $error = "请选择类型";
            } elseif (empty($appshowname)) {
                $error = "输入别名";
            } else if (empty($appversion)) {
                $error = "输入应用版本";
            } else if (empty($apphome)) {
                $error = "输入下载地址";
            } else if (empty($summary)) {
                $error = "输入简介";
            }
            if ($appimages) {
                $appimage = $appimages;
            }
            if (!empty($_FILES['appimage']['name'])) {
                $appimage = $this->_upload();
                if (is_array($appimage)) {
                    $error = $appimage['mess'];
                }
            }

            if (!empty($error)) {
                $lists['id'] = $id;
                $lists['appname'] = $appname;
                $lists['apptype'] = $apptype;
                $lists['money'] = $money;
                $lists['appshowname'] = $appshowname;
                $lists['appversion'] = $appversion;
                $lists['applanguage'] = $applanguage;
                $lists['appsystem'] = $appsystem;
                $lists['apphome'] = $apphome;
                $lists['appimage'] = $appimage;
                $lists['come'] = $come;
                $lists['summary'] = $summary;
                $lists['upsummary'] = $upsummary;
                $this->assign('error', $error);
                $this->assign('type_list', $type_list);
                $this->assign('list', $lists);
                $this->display();
                exit;
            } else {
                $upate_sql = "update very_app set appname='$appname',apptype='$apptype',money='$money',appshowname='$appshowname'
                ,appversion='$appversion',applanguage='$applanguage',appsystem='$appsystem',apphome='$apphome',appimage='$appimage',come='$come'
                ,summary='$summary',upsummary='$upsummary'  where id='$id'";
                $new_table->execute($upate_sql);
                redirect(WEB_NAME . "/index.php/AppAdmins/index");
            }
        }

        $this->assign('type_list', $type_list);

        $this->assign('list', $newlist[0]);
        $this->display();
    }


    //后台新闻首页
    public function newShow()
    {

        $new_table = D("very_news");
        $new_table->tableName = "very_news";
        $news_list = $new_table->query("select * from very_news order by time desc");

        $this->assign('new_list', $news_list);
        $this->display();
    }

    //添加新闻
    public function newIndex()
    {
        if ($_POST['subnew']) {
            $title = htmlspecialchars(addslashes($_POST['title']));
            $author = htmlspecialchars(addslashes($_POST['author']));
            $come = htmlspecialchars(addslashes($_POST['come']));
            $newtype = htmlspecialchars(addslashes($_POST['newtype']));
            $newsystem = htmlspecialchars(addslashes($_POST['newsystem']));
            $content = htmlspecialchars(addslashes(trim($_POST['content'])));

            if (empty($title)) {
                $error = '请填写标题';
            } elseif (empty($author)) {
                $error = '请填写作者';
            } elseif (empty($newtype)) {
                $error = '请选择类型';
            } else if (empty($newsystem)) {
                $error = '请选择系统';
            } else if (empty($content)) {
                $error = '请填写内容';
            } else if (!empty($_FILES)) {
                $appimage = $this->_uploadnew();
                if (is_array($appimage)) {
                    $error = $appimage['mess'];
                }
            }
            if (!empty($error)) {
                $this->assign('title', $title);
                $this->assign('author', $author);
                $this->assign('newtype', $newtype);
                $this->assign('newsystem', $newsystem);
                $this->assign('content', $content);
                $this->assign('newimage', $appimage);
                $this->assign('come', $come);
                $this->assign('error', $error);
                $this->display();
                exit;
            } else {
                $new_table = D("very_news");
                $new_table->tableName = "very_news";
                $time = date('Y-m-d H:i:s');
                $insert_sql = "insert into very_news values ('','$title','$content','$time','$come','$author','$newtype','$appimage','$newsystem')";
                $new_table->execute($insert_sql);

                $this->success('操作成功', 'newShow', 3);
            }
        }

        $this->display();
    }

    //删除新闻
    public function delnews()
    {
        $table = htmlspecialchars(addslashes($_GET['table']));
        if ($table == 'app') {
            $dbt = 'very_app';
            $url = "/index.php/AppAdmins/index";
        } elseif ($table == 'new') {
            $dbt = 'very_news';
            $url = "/index.php/AppAdmins/newShow";
        } elseif ($table == 'adv') {
            $dbt = 'very_adv';
            $url = "/index.php/Adv/index";
        }
        $nid = htmlspecialchars(addslashes($_GET['nid']));
        $new_table = D($dbt);
        $new_table->tableName = $dbt;
        $del_sql = "delete from $dbt where id='$nid'";
        $new_table->execute($del_sql);
        redirect(WEB_NAME . $url);
    }

    //修改新闻
    public function editnews()
    {
        $nid = htmlspecialchars(addslashes($_GET['nid']));
        $new_table = D("very_news");
        $new_table->tableName = "very_news";
        $get_sql = "select * from very_news where id='$nid'";
        $newlist = $new_table->query($get_sql);

        if ($_POST['subnew']) {
            $nids = htmlspecialchars(addslashes($_POST['nids']));
            $title = htmlspecialchars(addslashes($_POST['title']));
            $author = htmlspecialchars(addslashes($_POST['author']));
            $come = htmlspecialchars(addslashes($_POST['come']));
            $newtype = htmlspecialchars(addslashes($_POST['newtype']));
            $newsystem = htmlspecialchars(addslashes($_POST['newsystem']));
            $content = htmlspecialchars(addslashes(trim($_POST['content'])));
            $newimages = htmlspecialchars(addslashes($_POST['newimages']));

            $old_sql = "select id from very_news where title='$title' and id!='$nids'";
            $hive = $new_table->query($old_sql);
            if (!empty($hive)) {
                $error = '该标题已经存在';
            } else if (empty($title)) {
                $error = '请填写标题';
            } elseif (empty($newtype)) {
                $error = '请选择类型';
            } elseif (empty($newsystem)) {
                $error = '请选择系统';
            } elseif (empty($author)) {
                $error = '请填写作者';
            } elseif (empty($content)) {
                $error = '请填写内容';
            }
            if ($newimages) {
                $newimage = $newimages;
            }
            if (!empty($_FILES['newimage']['name'])) {
                $newimage = $this->_uploadnew();
                if (is_array($newimage)) {
                    $error = $newimage['mess'];
                }
            }
            if (!empty($error)) {
                $lists['id'] = $nids;
                $lists['title'] = $title;
                $lists['author'] = $author;
                $lists['newtype'] = $newtype;
                $lists['newsystem'] = $newsystem;
                $lists['content'] = $content;
                $lists['newimage'] = $newimage;
                $lists['come'] = $come;
                $this->assign('error', $error);

                $this->assign('list', $lists);
                $this->display();
                exit;
            } else {
                $upate_sql = "update very_news set title='$title',author='$author',content='$content',come='$come' ,newtype='$newtype',newimage='$newimage',newsystem='$newsystem'  where id='$nids'";
                $new_table->execute($upate_sql);
                redirect(WEB_NAME . "/index.php/AppAdmins/newShow");
            }
        }

        $this->assign('list', $newlist[0]);
        $this->display();
    }

    public function maketag()
    {
        $nid = htmlspecialchars(addslashes($_GET['nid']));
        $type = htmlspecialchars(addslashes($_GET['type']));
        $htmltable = D("very_app");
        $up_sql = "update very_app set tag='$type' where id='$nid'";
        $htmltable->execute($up_sql);
        redirect(WEB_NAME . "/index.php/AppAdmins/index");
    }

    public function _uploadnew()
    {
        $file = $_FILES['newimage'];

        $arrType = array('image/jpg', 'image/gif', 'image/png', 'image/bmp', 'image/pjpeg');
        $max_size = '500000';      // 最大文件限制（单位：byte）
        $date = date('Ymd');
        $datetime = date('YmdHis');
        $upfilel = WEB_NAME . '/newimage/' . $date; //图片目录路径
        $upfile = './newimage/' . $date;


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

    public function _upload()
    {
        $file = $_FILES['appimage'];

        $arrType = array('image/jpg', 'image/gif', 'image/png', 'image/bmp', 'image/pjpeg');
        $max_size = '500000';      // 最大文件限制（单位：byte）
        $date = date('Ymd');
        $datetime = date('YmdHis');
        $upfilel = WEB_NAME . '/appimage/' . $date; //图片目录路径
        $upfile = './appimage/' . $date;


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