var mytop_speed;
var mytop_top;
function mytop(){
	mytop_top = documentElement.body.scrollTop;
	while(mytop_top!=0){
		mytop_speed = mytop_top/100;
		mytop_top -= mytop_speed;
	}
}

function goTop(acceleration, time) {
 acceleration = acceleration || 0.1;
 time = time || 16;

 var x1 = 0;
 var y1 = 0;
 var x2 = 0;
 var y2 = 0;
 var x3 = 0;
 var y3 = 0;

 if (document.documentElement) {
  x1 = document.documentElement.scrollLeft || 0;
  y1 = document.documentElement.scrollTop || 0;
 }
 if (document.body) {
  x2 = document.body.scrollLeft || 0;
  y2 = document.body.scrollTop || 0;
 }
 var x3 = window.scrollX || 0;
 var y3 = window.scrollY || 0;

 // 滚动条到页面顶部的水平距离
 var x = Math.max(x1, Math.max(x2, x3));
 // 滚动条到页面顶部的垂直距离
 var y = Math.max(y1, Math.max(y2, y3));
 // 滚动距离 = 目前距离 / 速度, 因为距离原来越小, 速度是大于 1 的数, 所以滚动距离会越来越小
 var speed = 1 + acceleration;
 window.scrollTo(Math.floor(x / speed), Math.floor(y / speed));
 // 如果距离不为零, 继续调用迭代本函数
 if(x > 0 || y > 0) {
  var invokeFunction = "goTop(" + acceleration + ", " + time + ")";
  window.setTimeout(invokeFunction, time);
 }
}

function checkTime(i){
	if(parseInt(i)<10){
		return 0;
	}
}

/**************************************************************************/

function openLogin(){
   document.getElementById("win").style.display="inline-block";
}
function closeLogin(){
   document.getElementById("win").style.display="none";
}

/*************************************************************************/

function buttonin(div){
	div.style.background="#00CCFF";
}
function buttonout(div){
	div.style.background="#e8e8e8";
}

/*************************************************************************/

function openpageone(){
	open("团队动态.html");
}
function openpagetwo(){
	open("关于我们.html");
}
function opentablethree(){
	document.getElementById("table3").style.display="inline-block";
	document.getElementById("sidebar").style.display="none";
}
function closetablethree(){
	document.getElementById("table3").style.display="none";
	document.getElementById("sidebar").style.display="inline-block";
}

function opentabletwo(){
	document.getElementById("table2").style.display="inline-block";
	document.getElementById("sidebar").style.display="none";
}

function closetabletwo(){
	document.getElementById("table2").style.display="none";
	document.getElementById("sidebar").style.display="inline-block";
}

function opentableone(){
	document.getElementById("table1").style.display="inline-block";
	document.getElementById("sidebar").style.display="none";
}
function closetableone(){
	document.getElementById("table1").style.display="none";
	document.getElementById("sidebar").style.display="inline-block";
}
/*****************************************************************************/

var i = 0;
var j1 = 20;
var j2 = 1;
var j3 = 1;
var flag1,flag2;
function startime(){
	var srclist = new Array(4);
	var testlist = new Array(21);
	testlist[0] = 0;
	testlist[1] = 0.05;
	testlist[2] = 0.1;
	testlist[3] = 0.15;
	testlist[4] = 0.2;
	testlist[5] = 0.25;
	testlist[6] = 0.3;
	testlist[7] = 0.35;
	testlist[8] = 0.4;
	testlist[9] = 0.45;
	testlist[10] = 0.5;
	testlist[11] = 0.55;
	testlist[12] = 0.6;
	testlist[13] = 0.65;
	testlist[14] = 0.7;
	testlist[15] = 0.75;
	testlist[16] = 0.8;
	testlist[17] = 0.85;
	testlist[18] = 0.9;
	testlist[19] = 0.95;
	testlist[20] = 1;
	srclist[0] = "http://localhost/blog_CI/outlet/images/img8.gif";
	srclist[1] = "http://localhost/blog_CI/outlet/images/img9.gif";
	srclist[2] = "http://localhost/blog_CI/outlet/images/img10.gif";
	srclist[3] = "http://localhost/blog_CI/outlet/images/img11.gif";
	if(j2==1){j1 = j1-1;}
	if(j2==-1){j1 = j1+1;}
	if(j1 == 0){
		document.getElementById('show1').src = srclist[(i+1)%4];
		document.getElementById('show2').src = srclist[(i+2)%4];
		document.getElementById('show3').src = srclist[(i+3)%4];
		j2 = -1;
		i=(i+1)%4;
	}
	if(testlist[j1] == 1){
		j2 = 1;
	}
	document.getElementById('show1').style.opacity = testlist[j1];
	document.getElementById('show2').style.opacity = testlist[j1];
	document.getElementById('show3').style.opacity = testlist[j1]; 
	t = setTimeout('startime()',70);
}

function button(){
	flag1=document.body.scrollTop;
	document.getElementById('dingbubutton').style.top = 555+flag1+"px";
}
