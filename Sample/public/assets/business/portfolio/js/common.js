var
cursor = $(".cursor"),
cWidth = 20, //カーソルの大きさ
mouseX = 0, //マウスのX座標
mouseY = 0; //マウスのY座標

$(document).on('mousemove', function(e) {
  mouseX = e.pageX;
  mouseY = e.pageY;
  cursor.css({
    //カーソルの真ん中に座標軸が来るよう、
    //カーソルの大きさの半分を引きます
    // left: mouseX - (cWidth / 2),
    // top: mouseY - (cWidth / 2)
    left: mouseX,
    top: mouseY
  })
});

$(document).on('mousemove', function(){
    $("#mousePoint").removeClass('cursorNone');
});


// 文字出現エフェクト
var tl = gsap.timeline();

gsap.set("#split", {perspective: 400});
gsap.set("#split2", {perspective: 400});

tl.from("#split", {duration: 0.8, opacity:0, scale:0, y:80, rotationX:180, transformOrigin:"0% 50% -50",  ease:"back", stagger: 0.01}, "+=0")
    .add("scene1")
    .to("#split", {duration: 0.8, opacity:0, scale:0, y:80, rotationX:180, transformOrigin:"0% 50% -50",  ease:"back", stagger: 0.01, delay: 3}, "scene1")
    .from("#split2", {duration: 0.8, opacity:0, scale:0, y:80, rotationX:180, transformOrigin:"0% 50% -50",  ease:"back", stagger: 0.01, delay: 3.5}, "scene1");
