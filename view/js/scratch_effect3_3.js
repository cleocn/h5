/**
 * eqShow - v3.3.2 - 2015-05-08
 * 
 *
 * Copyright (c) 2015 
 * Licensed MIT <>
 */
function addScratchEffect(b,c,d){pageInfo=c,audioObj=b,a=20,nums=0;var e,f=$(".m-img").width(),g=$(".m-img").height(),h=document.createElement("canvas");$(h).prependTo("#page"+d).attr("class","cas page_effect lock").attr("id","can"+d).attr("style","z-index: 1000");var i=h.getContext("2d");h.width=f,h.height=g;var j=new Image;if(c[d-1].properties.image){if(num=d,c[d-1].properties.tip){var k=document.createElement("div");$(k).attr("id","tip"+d).attr("class","tip").prependTo("#page"+d),$(k).html(c[d-1].properties.tip)}j.src=c[d-1].properties.image.path,e=c[d-1].properties.percentage.value}else if(c[d-1].properties.scratch){if(num=d,c[d-1].properties.scratch.tip){var k=document.createElement("div");$(k).attr("id","tip"+d).attr("class","tip").prependTo("#page"+d),$(k).html(c[d-1].properties.scratch.tip)}j.src=c[d-1].properties.scratch.image.path,e=c[d-1].properties.scratch.percentage.value}!function(a,b,c,d,e){a.onload=function(){b.globalAlpha=.8,b.drawImage(this,0,0,c.width,c.height),renderPage(eqShow,d,pageInfo),clipImage(b,c,e,d,a)}}(j,i,h,d,e)}function clipImage(b,c,d,e,f){function g(){timeout=setTimeout(function(){nums>=200*d&&($(c).fadeOut(500,function(){setTimeout(function(){$(c).removeClass("lock").addClass("unlock")},500),$("#audio_btn").css("opacity",1),1==e&&playVideo(audioObj)}),nums=0)},totimes)}var h="ontouchstart"in window?!0:!1,i=h?"touchstart":"mousedown",j=h?"touchmove":"mousemove",k=h?"touchend":"mouseup";b.lineCap="round",b.lineJoin="round",b.lineWidth=2*a,b.globalCompositeOperation="destination-out";new RegExp("assets");c.addEventListener(i,function(a){function d(a){g(),nums++,a.preventDefault(),x2=h?a.targetTouches[0].pageX:a.pageX-$("#can"+e).offset().left,y2=h?a.targetTouches[0].pageY:a.pageY-$("#can"+e).offset().top,b.save(),b.moveTo(x1,y1),b.lineTo(x2,y2),b.stroke(),b.restore(),x1=x2,y1=y2}$("#tip"+e).remove(),a.preventDefault(),x1=h?a.targetTouches[0].pageX:a.pageX-$("#can"+e).offset().left,y1=h?a.targetTouches[0].pageY:a.pageY-$("#can"+e).offset().top,startX=x1,startY=y1,b.save(),b.beginPath(),b.arc(x1,y1,1,0,2*Math.PI),b.fill(),b.restore(),c.addEventListener(j,d),c.addEventListener(k,function(){c.removeEventListener(j,d)})})}var totimes=200,pageinfo,audioObj;