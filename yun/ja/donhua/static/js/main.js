'use strict';

(function(){
  // ============================================
  //
  // ページトップリンク
  //
  // ============================================
  $(function(){
    $('a[href^="#"]').click(function(){
      const speed = 500;
      const href= $(this).attr('href');
      const target = $(href === '#' || href === '' ? 'html' : href);
      const position = target.offset().top;
      $('html, body').animate({scrollTop:position}, speed, 'swing');
      return false;
    });

    const pageTop = $('.pageTop');
    const fv = $('.mainVisual');
    const fvEnd = fv.outerHeight() + fv.offset().top;

    pageTop.hide();

    $(window).on('scroll', function() {
      const scrollAmount = $(this).scrollTop();

      if (scrollAmount >= fvEnd) {
        pageTop.fadeIn();
      } else {
        pageTop.fadeOut();
      }
    });
  });


  // ============================================
  //
  // expand（開閉）
  //
  // ============================================
  $(function() {
    const root = 'jsExpand';
    const trigger = $('.' + root + '--trigger');
    const target = $('.' + root + '--target');
    const openClass = 'isOpen';

    target.hide();

    $('.jsExpand').each(function() {
      if($(this).hasClass(openClass)) {
        $(this).find(target).show();
      }
    });

    trigger.on('click', function() {
      $(this).closest($('.' + root)).toggleClass(openClass);
      $(this).closest($('.' + root)).find(target).slideToggle();
    });
  });



  // ============================================
  //
  // フォーム部分：ふりがな自動入力
  //
  // ============================================
  $(function() {
    $.fn.autoKana('input[name="NameSei"] ', 'input[name="RubySei"]', {
      katakana:false
    });
    $.fn.autoKana('input[name="NameMei"] ', 'input[name="RubyMei"]', {
      katakana:false
    });
  });


  // ============================================
  //
  // 未入力カウント
  //
  // ============================================
  $(function() {
    // 未入力項目数
    let emptyLength = $('.jsApplyForm01').find('.required-item').length;
    $('.empty-item .length').html(emptyLength);
    var i = 0;
    $('.empty-item .length').html(emptyLength - i);

    var lengthCalc = function() {
     i = 0;
     $('.jsApplyForm01').find('.required-item').each(function() {
       if($(this).val() !== '') {
          i++;
        }
      });
      $('.empty-item .length').html(emptyLength - i);
    };

    //未入力チェック
    $('.jsApplyForm01 input').keyup(function () {
      if($(this).val() !== '') {
        $(this).addClass('active');
      } else {
        $(this).removeClass('active');
      }
      if (
        $('.jsApplyForm01 input[name="Mail"]').val() !== '' &&
        $('.jsApplyForm01 input[name="NameSei"]').val() !== '' &&
        $('.jsApplyForm01 input[name="NameMei"]').val() !== '' &&
        $('.jsApplyForm01 input[name="RubySei"]').val() !== '' &&
        $('.jsApplyForm01 input[name="RubyMei"]').val() !== '' &&
        $('.jsApplyForm01 input[name="MobileTel"]').val() !== ''
      ) {
        $('.empty-item').removeClass('isVisible');
      } else {
        $('.empty-item').addClass('isVisible');
      }
      lengthCalc();
    });
    $('.jsApplyForm01 .required-item').on('change',function () {
      lengthCalc();
    });

    //画面内にフォームエリアがあるか監視
    const options = {
      root: null,
      rootMargin: '-30% 0px 0px 0px',
      threshold: [0, 0.6, 1.0]
    }
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          $('.empty-item').addClass('isFixed');
        } else {
          $('.empty-item').removeClass('isFixed');
          $('.empty-item').removeClass('isVisible');
        }
      });
    }, options);
    observer.observe(document.querySelector('.jsApplyForm01'));
  });


  // ============================================
  //
  // twitterスタイル操作
  //
  // ============================================
  $(window).on('load', function() {
    const $widget = $('iframe.twitter-timeline');
    const $widgetContents = $widget.contents();
    $widgetContents.find('head').append('<link href="/assets/css/renew/twitter.css" rel="stylesheet" type="text/css">');
  });

  // formArea__step accordion
  $(function () {
    const trigger = $('.formArea__stepTitle');
    const target = $('.formArea__stepList');
    const openClass = 'isOpen';
    if (trigger.length > 0) {
      trigger.on('click', function () {
        $(this).toggleClass(openClass);
        target.slideToggle();
      });
    }
  });

})();
