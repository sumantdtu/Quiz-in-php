<div id="pic">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="JavaScript" onload="runBGSlideShow()">
var speed = 2000
var Pic = new Array()

Pic[0] = 'Desert.jpg'
Pic[1] = 'Tulips.jpg'
Pic[2] = 'Koala.jpg'
Pic[3] = 'Lighthouse.jpg'

var t
var j = 0
var p = Pic.length

var preLoad = new Array()
for (i = 0; i < p; i++){
preLoad[i] = new Image()
preLoad[i].src = Pic[i]
}

function runBGSlideShow(){
if (document.body){
document.body.background = Pic[j];
j = j + 1
if (j > (p-1)) j=0
t = setTimeout('runBGSlideShow()', speed)
}
}
</script>
</div>