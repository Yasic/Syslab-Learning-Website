<?php
    header("Content-type: text/html; charset=utf-8");
    require_once('config.php');
 
    //连接到数据库
    mysql_connect(HOST,USERNAME,PASSWORD) or die('数据库连接错误');

    //选择数据库
    mysql_select_db('blog_test') or die('数据库选择错误');

    //设定字符集
    mysql_query('set names utf8');
?>