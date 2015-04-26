<?php
    require_once ('../connect.php');
    
    $id = $_GET['id'];
    $deletesql = "delete from article where id=$id";

    if(mysql_query($deletesql)){
    	echo "<script>alert('删除成功');window.location.href='article.manage.php';</script>";
    }
    else{
    	echo "删除失败";
    }
?>