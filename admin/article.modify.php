<?php
    require_once('../connect.php');
    

    $id = $_GET['id'];
    //读取旧信息
    $query = mysql_query("select * from article where id=$id");
    $data = mysql_fetch_assoc($query);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/XHTML1-strict.dtd">
<html>
<head>
    <meta http-equiv ="Contet-Type" content="text/html"charset="utf-8">
    <title>修改博客</title>
    <link rel="shortcut icon" href="shenshi.ico" />
</head>
<body>
    <script type="text/javascript" src="http://localhost/blog_CI/outlet/nicEdit.js"></script>
    <script type="text/javascript">
    bkLib.onDomLoaded(function() { new nicEditor({iconsPath : 'http://localhost/Blogtttttttt/outlet/images/nicEditorIcons.gif'}).panelInstance('content');});
    function clearDefault(el) {
        if (el.defaultValue==el.value) el.value = ""
    }
    </script>
    <div id="top">
        <a class="link" href="person.html" style="color:#404040 ">无名的绅士</a><br />
        <a href="放主页在这里"><img src="http://localhost/Blogtttttttt/outlet/images/shenshi.jpg" alt="弹回主页" /></a>
    </div>
    <div id="main">
        <h1>TO Write the blog And Change the World</h1>
        <div id="text">
            <center>
                <form action="article.add.handle.php" method="post" >
                <label for="title">标题</label>
                <input type="text" name="title" class="input" value="<?php echo $data['title'];?>"><br>
                <label for="description">简介</label>
                <input type="text" name="description" class="input" value="<?php echo $data['description'];?>"><br>
                <textarea name="content" rows="10" cols="100" ><?php echo $data['content'];?></textarea>
                <input type="submit" value="Publish Now" id="submit">
                </form>
            </center>
        </div>
    </div>
<style type="text/css">
body{
    background-image: url(http://localhost/Blogtttttttt/outlet/images/background.svg);
    background-repeat: no-repeat;
    background-position: top left;
    font-family: "微软雅黑";
    font-size: small;
    margin-right: 0;
    margin-left: 0;
    margin-bottom: 0;
    margin-top: 0;
    text-align: center;
}
#link{
    text-decoration: none;
}
#top{
    font-size: 30px;
    padding-top: 100px;
    height: 200px;

}
.input{
    width:300px;
    height: 35px;
    background:transparent;
    border:inset;
}
textarea{
    font-size: 20px;
    background:transparent;
    border:inset;
}
#submit{
    margin:0 auto;
    text-align: center;
    font-weight:bold;
    background: transparent url('http://localhost/Blogtttttttt/outlet/images/button.png') no-repeat scroll top right; 
    display: block;
    height: 34px;
    margin-right: 6px;
    padding-right: 20px;
    text-decoration: none;
    color: #000000;
    font-size:15px;
    position: relative;
    top: 30px;
    left: -900px;
}
</style>
</body>
</html>