//マウスオーバーで画像切り替え
//start
$(function(){
     $('.submit').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_pc', '_pc_on'));
          }, function(){
             if (!$(this).hasClass('currentPage')) {
             $(this).attr('src', $(this).attr('src').replace('_pc_on', '_pc'));
        }
   });
});
//end

//スムーズスクロール
$(function(){
    $("a").click(function(){
        $('html,body').animate({ scrollTop: $($(this).attr("href")).offset().top }, 'slow','swing');
        return false;
    })
});



//下から表示させる要素を指定
//flowting btn
let $pagetop = $('.js-sp-ScrollTop__wrap');

$(window).on('scroll', function() {
  //スクロール位置を取得
  if ($(this).scrollTop() < 40) {
    $pagetop.removeClass('isActive');
  } else {
    $pagetop.addClass('isActive');
  }
});
