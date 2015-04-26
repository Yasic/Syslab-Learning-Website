<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<title>无名绅士の博客</title>
<link rel="stylesheet" href="http://localhost/Blogtttttttt/outlet/style.css" >
</head>
<body onload="startime()" onscroll="button()">
    <div id="container">
        <header>
            <div id="titletext" ><img id="titlepic" src="http://localhost/Blogtttttttt/outlet/images/shenshi.ico">无名绅士の博客</div> 
            <?php 
                if(@$_SESSION['user']){
                	print '<div id="logintext" ">'.$_POST["email"].'</div>';
                }
                else{
                	print '<div id="logintext" onMouseDown="openLogin()">登录</div>';
                }
            ?> 
            
        </header>
    