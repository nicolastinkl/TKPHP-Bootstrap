<?php
/******************************
 * $File: common.inc.php
 * $Description: 通用的数据库文件
 * $Author: ahui 
 * $Time:2010-03-09
 * $Update:None 
 * $UpdateDate:None 
******************************/

if (!defined('ROOT_PATH'))  die('不能访问');//防止直接访问

$db_config['host']     = 'localhost';      //数据库主机	
$db_config['user']     = 'root';      //数据库用户名	
$db_config['pwd']      = '';  //数据库用户密
$db_config['name']     = 'huaweidai';     
	
$db_config['port']     = '';      //端口		
$db_config['prefix']   = 'deayou_'; //CMS表名前缀	
$db_config['language'] = 'gbk'; //数据库字符集 

$dy['code']     = 'daoyou-0606-www-0001';     //授权码		
$dy['domain']     = 'deyou.com,www';      //授权域名	
$dy['time']     = '20191211';      //授权日期
?>