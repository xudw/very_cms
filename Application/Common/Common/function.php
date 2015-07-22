<?php

function appkey()
{	
	$appname = 'ำฆำร';
	$appname = iconv('GB2312', 'UTF-8', $appname);    
    return $appname;
}
