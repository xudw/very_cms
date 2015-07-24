<?php

function appkey()
{	
	$appname = '应用';
	$appname = iconv('GB2312', 'UTF-8', $appname);    
    return $appname;
}
