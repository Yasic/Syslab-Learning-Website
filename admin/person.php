<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/XHTML1-strict.dtd">
<html>
<head>
	<meta http-equiv ="Contet-Type" content="text/html"charset="utf-8">
	<title>Personal web</title>
    <link rel="stylesheet" href="http://localhost/Blogtttttttt/outlet/index.css" />
    <link rel="shortcut icon" href="http://localhost/Blogtttttttt/outlet/images/shenshi.ico" /> 
    <script type="text/javascript" src="http://localhost/Blogtttttttt/outlet/babyzone.js"></script>
    <script type="text/javascript" language="javascript">
        window.onload=function(){
            //
            babyzone.scroll(4,"banner_list","list","banner_info");
        }
    </script>
<body>
<div id="container">
    <div id="top"></div>
    <div id="logo">
        <h1>个人主页</h1>
        <a href="放主页在这里" target="_self">
        <img src="http://localhost/Blogtttttttt/outlet/images/shenshi.jpg" alt="弹回主页"></a>
    </div>
    <div class="menu">
        <ul>
            <li class="list_1"><a class="link" href="../index.php">弹回主页</a></li>
            <li class="list_1"><a class="link" href="修改资料.html">修改资料</a></li>
            <li class="list_1"><a class="link" href="article.add.php">发布博客</a></li>
            <li class="list_1"><a class="link" href="article.manage.php">删改博文</a></li>
        </ul>
    </div>
    <div id="fg"></div>
    <div class="charector"></div>

    <div id="banner">
        <div id="banner_bg"></div>
        <a href="#" id="banner_info"></a>
      <ul id="list"></ul>
      <div id="banner_list">
        <a href="#" target="_blank"><img src="http://localhost/Blogtttttttt/outlet/images/photo1.jpg" title="" alt="橡树小屋的blog" /></a>
        <a href="#" target="_blank"><img src="http://localhost/Blogtttttttt/outlet/images/photo2.jpg" title="" alt="橡树小屋的blog" /></a>
        <a href="#" target="_blank"><img src="http://localhost/Blogtttttttt/outlet/images/photo3.jpg" title="" alt="橡树小屋的blog" /></a>
        <a href="#" target="_blank"><img src="http://localhost/Blogtttttttt/outlet/images/photo4.jpg" title="" alt="橡树小屋的blog" /></a>
      </div>
  </div>
</div>

<style type="text/css">
*{
    margin: 0;
    padding: 0;
    font-family: '微软雅黑';
}
#container {
    width: 1100px;
    height: 768px;
    margin:0 auto;
}
body{
   	    font-size: small;
        margin: auto;
        background-color: #404040;
	}
h1{
    font-size: 300%;
}
#top{
    height: 10px;

}
.menu{
    position: relative;
    z-index: 2;
    float: left;
    width: 20%;
    margin-top: 10px;
    background-color: #E8E8E8;
    color:#000000;
    font-size: 20px;
}
#fg{
    position: relative;
    height: 200px;
}
.list_1{
    list-style: none;
    font-size: 20px;
    padding: 0;
    margin: 0;
    letter-spacing:5px;
    cursor:pointer;
    border-style:groove;
    border-width:1px;
    border-bottom-color: #000000;
    font-size:120%;
    font-weight:100;
    padding-bottom: 10px;
    padding-top: 10px;
    text-align: center;
    text-decoration : none;
    }
.link{
    display: block;
    text-decoration: none;
    color:#000000;
    } 
#banner {
    position:relative;
    clear: both;
    width:80%;
    height: 500px;
    top: -540px;
    border:4px solid #666; 
    left: 30%;
    overflow:hidden;
}
#banner_list img {
    border:0px;
}
#banner_bg {
    position:absolute; 
    bottom:0;
    background-color:#000;
    height:30px;
    filter: Alpha(Opacity=30);
    opacity:0.3;
    z-index:1000;
    cursor:pointer; 
    width:478px;   
}
#banner_info{
    position:absolute; 
    bottom:0; 
    left:5px; 
    line-height:30px;
    color:#fff;
    z-index:1001;
}
#banner_text {
    position:absolute;
    width:120px;
    z-index:1002;
    right:3px;
    bottom:3px;
}
#banner ul {
    position:absolute;
    list-style-type:none;
    filter: Alpha(Opacity=75);
    opacity:0.75; 
    border:1px solid #fff;
    z-index:1002;margin:0; 
    padding:0; bottom:3px; 
    right:5px;
}
#banner ul li { 
    padding:0px 8px;
    float:left;
    display:block;
    color:#FFF;
    border:#fff 1px solid;
    background-color:#6f4f67;
    cursor:pointer;
}
#banner ul li.on{ 
    background-color:#900;
}
#banner_list a{
    position:absolute;
}
</style>
</body>
</html>

	