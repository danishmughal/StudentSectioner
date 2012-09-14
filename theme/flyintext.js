//Sequential fly-in text script- by JavaScriptKit.com
//For this script and 400+ more, visit http://www.javascriptkit.com
//This notice must stay intact for use

var pausebetweenmsg=10 //customize pause in miliseconds between each message showing up (3000=3 seconds)
var glidespeed=50 //customize glide speed in pixels per frame.

var curobjindex=0

function actualstyle(el, cssproperty){
	if (el.currentStyle)
		return el.currentStyle[cssproperty]
	else if (window.getComputedStyle){
		var elstyle=window.getComputedStyle(el, "")
		return elstyle.getPropertyValue(cssproperty)
	}
}

function collectElementbyClass(){
	var classname="glidetext"
	glidearray=new Array()
	var inc=0
	var alltags=document.all? document.all : document.getElementsByTagName("*")
	for (i=0; i<alltags.length; i++){
		if (alltags[i].className==classname)
			glidearray[inc++]=alltags[i]
	}
	if (glidearray.length>0)
		onebyoneglide()
}

function onebyoneglide(){
	if (curobjindex<glidearray.length)
		glidetimer=setInterval("glideroutine()",50)
}

function glideroutine(){
	if (parseInt(actualstyle(glidearray[curobjindex], "right"))<0)
		glidearray[curobjindex].style.right=parseInt(actualstyle(glidearray[curobjindex], "right"))+50+"px"
	else{
		glidearray[curobjindex].style.right=0
		curobjindex++
		clearInterval(glidetimer)
		setTimeout("onebyoneglide()", pausebetweenmsg)
	}
}

if (window.addEventListener)
	window.addEventListener("load", collectElementbyClass, false)
else if (window.attachEvent)
	window.attachEvent("onload", collectElementbyClass)
else if (document.getElementById)
	window.onload=collectElementbyClass
