<?php

function appkey()
{	
	$appname = 'Ӧ��';
	$appname = iconv('GB2312', 'UTF-8', $appname);    
    return $appname;
}
