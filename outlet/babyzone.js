var babyzone = function() {
	function id(name) {return document.getElementById(name);}
	//遍历函数

	function each(arr, callback, thisp) {
		if (arr.forEach) {arr.forEach(callback, thisp);} 
		else { for (var i = 0, len = arr.length; i < len; i++) callback.call(thisp, arr[i], i, arr);}
	}
	function fadeIn(elem) {
		setOpacity(elem, 0)
		for ( var i = 0; i < 20; i++) {
			(function() {
				var pos = i * 5;
				setTimeout(function() {
					setOpacity(elem, pos)
				}, i * 25);
			})(i);
		}
	}
	function fadeOut(elem) {
		for ( var i = 0; i <= 20; i++) {
			(function() {
				var pos = 100 - i * 5;
				setTimeout(function() {
					setOpacity(elem, pos)
				}, i * 25);
			})(i);
		}
	}
	function setOpacity(elem, level) {
		if (elem.filters) {
			elem.style.filter = "alpha(opacity=" + level + ")";
		} else {
			elem.style.opacity = level / 100;
		}
	}
	return {
		scroll : function(count,wrapId,ulId,infoId) {
			var self=this;
			var targetIdx=0;      
			var curIndex=0;       
			
			var frag=document.createDocumentFragment();
			this.num=[];   
			this.info=id(infoId);
			for(var i=0;i<count;i++){
				(this.num[i]=frag.appendChild(document.createElement("li"))).innerHTML=i+1;
			}
			id(ulId).appendChild(frag);
			
	
			this.img = id(wrapId).getElementsByTagName("a");
			this.info.innerHTML=self.img[0].firstChild.title;
			this.num[0].className="on";
			
			each(this.img,function(elem,idx,arr){
				if (idx!=0) setOpacity(elem,0);
			});
			
			
			each(this.num,function(elem,idx,arr){
				elem.onclick=function(){
					self.fade(idx,curIndex);
					curIndex=idx;
					targetIdx=idx;
				}
			});
			
			
			var itv=setInterval(function(){
				if(targetIdx<self.num.length-1){
					targetIdx++;
				}else{
					targetIdx=0;
					}
				self.fade(targetIdx,curIndex);
				curIndex=targetIdx;
				},2000);
			id(ulId).onmouseover=function(){ clearInterval(itv)};
			id(ulId).onmouseout=function(){
				itv=setInterval(function(){
					if(targetIdx<self.num.length-1){
						targetIdx++;
					}else{
						targetIdx=0;
						}
					self.fade(targetIdx,curIndex);
					curIndex=targetIdx;
				},2000);
			}
		},
		fade:function(idx,lastIdx){
			if(idx==lastIdx) return;
			var self=this;
			fadeOut(self.img[lastIdx]);
			fadeIn(self.img[idx]);
			each(self.num,function(elem,elemidx,arr){
				if (elemidx!=idx) {
					self.num[elemidx].className='';
				}else{
					id("list").style.background="";
					self.num[elemidx].className='on';
					}
			});
			this.info.innerHTML=self.img[idx].firstChild.title;
		}
	}
}();
