<?php
    require_once('../connect.php');

    //把传入的信息入库
    $title = $_POST['title'];
    //$author = $_POST['author'];
    $description = $_POST['description'];
    $content = $_POST['content'];

    $insertsql = "insert into article(title,description,content,datetime)".
               "values('$title','$description','$content',now())";
    if(mysql_query($insertsql)){
    	echo "<script>alert('发布成功');window.location.href='article.manage.php';</script>";
    }
    else{
    	echo "发布失败";
    }
?>