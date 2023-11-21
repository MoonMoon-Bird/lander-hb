(function($){
  $('.popupbtn').on('click',function(){
	  console.log('aaa');
	  $('.overlay').toggleClass('active');
	  return false;
});
	  $('.closebtn').on('click',function(){
	  console.log('aaa');
	  $('.overlay').toggleClass('active');
	  return false;
});

  var fixedArea = $('.fixed_area');
  var docHeight = $(document).innerHeight(), //ドキュメントの高さ
  windowHeight = $(window).innerHeight(), //ウィンドウの高さ
  pageBottom = docHeight - windowHeight; //ドキュメントの高さ - ウィンドウの高さ

  fixedArea.hide();
  //スクロールが100に達したらボタン表示
  $(window).scroll(function () {
      if (pageBottom == $(window).scrollTop()) {
        fixedArea.fadeOut();
      } else if ($(this).scrollTop() > 200) {
        fixedArea.fadeIn();
      } else {
        fixedArea.fadeOut();
      }
  });

  // ==============================================================
  // スムーズスクロール
  // 使用法: HTML
  // <a href="#target"></a>
  // <div id="target"></div>
  // ==============================================================
  $('a[href^="#"]').not('.noscroll').click(function() {
    var speed = 400;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });

  // ==============================================================
  // タグの点滅
  // 使用法: HTML
  // <button class="blink"></button>
  // ==============================================================
  setInterval(function(){
    $('.blink').fadeOut(1200, function(){$(this).fadeIn(200)});
  }, 1400);

  // ==============================================================
  // 画像の遅延ロード
  // 使用法: HTML
  // <img class="lazyload" data-original="img/example.jpg" width="765" height="574" alt="">
  // ==============================================================
  if ($('img.lazyload').length > 0) {
    $('img.lazyload').lazyload();
  }

  // ==============================================================
  // マウスオーバーによる画像スワップ
  // 使用法: HTML
  // <img src="images/example_off.jpg" alt="">
  // <input type="image" src="images/example_off.jpg">
  // ==============================================================
  $('img, input[type="image"]').hover(function(){
      $(this).attr('src', $(this).attr('src').replace('_off.', '_on.'));
    }, function(){
      $(this).attr('src', $(this).attr('src').replace('_on.', '_off.'));
    }
  );

  // ==============================================================
  // 可視範囲に入ったときのエフェクト
  // 使用法: HTML
  // <div class="feedInUp"></div>
  // ==============================================================
  /*
	$('.feedInUp').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('feedInUp_On');
		}
		else{
			$(this).stop().removeClass('feedInUp_On');
		}
	});
	*/
	var offset = 0;
	$(window).on('scroll resize load', function(e){
		var scrTop = $(this).scrollTop();
		var winHeight = $(this).height();
		$('.feedInUp').each(function(e){
			var elmTop = $(this).offset().top;
			if (scrTop > elmTop - winHeight + offset) {
				$(this).addClass('feedInUp_On');
			} else {
				$(this).removeClass('feedInUp_On');
			}
		});
	});

  // ==============================================================
  // フォームの同意確認制御
  // ==============================================================
  $('#UserAcceptance').on('change', function(e) {
    // 同意チェックあり
    if(e.target.checked) {
      // 送信ボタンを有効化
      $('.submit').attr('disabled', false);
    }
    // 同意チェックなし
    else {
      // 送信ボタンを無効化
      $('.submit').attr('disabled', true);
    }
  });

})(jQuery);