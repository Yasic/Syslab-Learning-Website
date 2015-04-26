<?php 
	require_once('connect.php');
	include('header.php');
	$id = intval($_GET['id']);
	$sql = "select * from article where id=$id";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		$row = mysql_fetch_assoc($query);
	}

	$title = $row['title'];

    /* if(@$_POST['submit']){
    	$com_sql = "insert into blog_comment (blog_title,nickname,comment,date)".
    	           "values(s$title,'$_POST[nickname]','$_POST[comment]',now())";
    	mysql_query($com_sql);
	    echo "<script language = javascript>alert('添加评论成功')</script>";
    }*/
?>

<div id="pagebody">
            <div id="listview" style="text-align:center">
                <form  name="form1" method="post" action=""> 
                    <div >
                        <div class="showimage" ><img id="show1" class="headerimg" src="http://localhost/Blogtttttttt/outlet/images/img8.gif" ></img>
                        </div>
                        <div class="showimage"><img id="show2" class="headerimg" src="http://localhost/Blogtttttttt/outlet/images/img9.gif" ></img>
                        </div>
                        <div class="showimage"><img id="show3" class="headerimg" src="http://localhost/Blogtttttttt/outlet/images/img10.gif" ></img>
                        </div>
                    </div>
                </form>
            </div>
            <div id="sidebar">
                <div class="part-linkchinese" id="firstone" onMouseOver = "buttonin(this)" onMouseOut = "buttonout(this)"><a href="index.php">全部博文</a>
                </div>
                <div class="part-linkchinese" id="firsttwo" onMouseDown = "opentableone()" onMouseOver = "buttonin(this)" onMouseOut = "buttonout(this)">前端技术
                </div>
                <div class="part-linkchinese" id="firstthree" onMouseDown = "opentabletwo()" onMouseOver = "buttonin(this)" onMouseOut = "buttonout(this)">后端开发
                </div>
                <div class="part-linkchinese" id="firstfour" onMouseDown = "opentablethree()" onMouseOver = "buttonin(this)" onMouseOut = "buttonout(this)">软件教程
                </div>
                <div class="part-linkchinese" onMouseOver = "buttonin(this)" onMouseOut = "buttonout(this)" onMouseDown = "openpageone()">团队动态
                </div>
                <div class="part-linkchinese" onMouseOver = "buttonin(this)" onMouseOut = "buttonout(this)" onMouseDown = "openpagetwo()">关于我们 
                </div>
            </div>
            <div id="table1">
                <div class="part-linkenglish" >HTML/HTML5
                </div>
                <div class="part-linkenglish">CSS
                </div>
                <div class="part-linkenglish" >Javascript
                </div>
                <div class="part-linkenglish" >Node.js
                </div>
                <div class="part-linkchinese" id="twoback" onMouseDown = "closetableone()" onMouseOver="buttonin(this)" onMouseOut="buttonout(this)">返回上级
                </div>
            </div>
            <div id="table2">
                <div class="part-linkenglish" >PHP
                </div>
                <div class="part-linkenglish">Python
                </div>
                <div class="part-linkenglish" >Java
                </div>
                <div class="part-linkenglish" >Mysql
                </div>
                <div class="part-linkchinese" id="threeback" onMouseDown = "closetabletwo()" onMouseOver="buttonin(this)" onMouseOut="buttonout(this)">返回上级
                </div>
            </div>
            <div id="table3">
                <div class="part-linkenglish" >Photoshop
                </div>
                <div class="part-linkenglish">Github
                </div>
                <div class="part-linkenglish" >Sublime
                </div>
                <div class="part-linkenglish" >vim
                </div>
                <div class="part-linkchinese" >其他
                </div>
                <div class="part-linkchinese" id="fourback" onMouseDown = "closetablethree()" onMouseOver="buttonin(this)" onMouseOut="buttonout(this)">返回上级
                </div>
            </div>
            <div id="mainbody">
                <center><strong style="font-size:25px;"><?php echo $row['title']?></strong></center>
                <span><?php echo $row['description']?></span>
                <br>
                <?php echo $row['content'];?>
                <br>
            </div>
        </div>
        <div id="footer">
            <center><a href="#" class="link1" onclick="goTop();return false;" style="font-family:“微软雅黑”;text-align:center;font-size:150%;color:#ffffff;">回到顶部</a></center>
            <form id="win" method="get">
                <table align="center" cellpadding="1" cellspacing="1" width="250" style="margin-top:20px">
                    <tr>
                        <th colspan="2">
                            Welcome to log-in
                            <hr size="1" />
                        </th>
                    </tr>
                    <tr>
                        <td align="right" widith:"100">邮箱：</td>
                        <td>
                            <input id="username" type="text" hint="姓名" />
                        </td>
                    <tr>
                    <tr>
                        <td align="right">密码：</td>
                        <td>
                            <input type="password" id="password" >
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <hr size="1"/>
                            <input type="submit" style="float:left;" value="登陆" >
                            <input type="reset"  style="float:center;" value="重置" >
                            <input type="button" style="float:right;" value="关闭" onMouseDown = "closeLogin()">
                        </td>
                    </tr>
                </table>
                <br><a href="javascript:closeLogin();" style="text-decoration: blink;color:#000000">关闭登录框</a></div>
            </form>
            <div>
                <input id="dingbubutton" type="button" value="TOP" onclick="goTop();return false;">
            </div>
        
        </div>
    </div>


    <script src="http://localhost/Blogtttttttt/outlet/javascript.js"></script>
</body>
</html>

       <!-- <fieldset>
            <legend>历史评论</legend>
            //<?php
            //   $sqlop = "select nickname,comment,date from blog_comment where blog_title='$title'";
            //    $query = mysql_query($sqlop);
            //    while ($result = mysql_fetch_array($query)) {
            //    	echo $result['nickname']."<br>";
            //    	echo $result['comment']."<br>";
            //    	echo $result['date']."<br>";
            //    }
            //?>
	    </fieldset>
	    <form name="comment_form" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	    	<label for="nickname"></label>
	    	<input type="text" name="nickname">
	    	<label for="comment"></label>
	    	<textarea cols="20" rows="5" name="comment"></textarea>
	    	<input type="submit" value="提交评论" name="submit">
	    </form>
	</body>
</html>-->

