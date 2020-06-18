// 文字出現エフェクト
var tl = gsap.timeline();

gsap.set("#split", {perspective: 400});
gsap.set("#split2", {perspective: 400});

tl.from("#split", {duration: 0.8, opacity:0, scale:0, y:80, rotationX:180, transformOrigin:"0% 50% -50",  ease:"back", stagger: 0.01}, "+=0")
    .add("scene1")
    .to("#split", {duration: 0.8, opacity:0, scale:0, y:80, rotationX:180, transformOrigin:"0% 50% -50",  ease:"back", stagger: 0.01, delay: 3}, "scene1")
    .from("#split2", {duration: 0.8, opacity:0, scale:0, y:80, rotationX:180, transformOrigin:"0% 50% -50",  ease:"back", stagger: 0.01, delay: 3.5}, "scene1");

// ドラッグスクロール
(function() {
  $.fn.dragScroll = function() {
    var target = this;
    $(this).mousedown(function (event) {
      $(this)
        .data('down', true)
        .data('x', event.clientX)
        .data('y', event.clientY)
        .data('scrollLeft', this.scrollLeft)
        .data('scrollTop', this.scrollTop);
      return false;
    }).css({
      'overflow': 'hidden', // スクロールバー非表示
      'cursor': 'move'
    });
    // ウィンドウから外れてもイベント実行
    $(document).mousemove(function (event) {
      if ($(target).data('down') == true) {
        // スクロール
        target.scrollLeft($(target).data('scrollLeft') + $(target).data('x') - event.clientX);
        target.scrollTop($(target).data('scrollTop') + $(target).data('y') - event.clientY);
        return false; // 文字列選択を抑止
      }
    }).mouseup(function (event) {
      $(target).data('down', false);
    });

    return this;
  }
})(jQuery);