$(function(){

var $window = $(window),
		breakPoint = 767, //ブレイクポイントの設定
		winW = $window.width(), //画面の横幅
		winH = $window.height(), //画面の縦幅
		anchorSpeed = 400, //アンカーリンクのスムーズスクロールのスピード
		resizeTimer = false;
		animeStartBottom = winH;

/* change Img
*********************************************/
function changeImgSp(){
	$('.change-img').each(function(){
		$(this).attr("src",$(this).attr("src").replace(/_pc\./, '_sp.'));
	});
}
function changeImgPc(){
	$('.change-img').each(function(){
		$(this).attr("src",$(this).attr("src").replace(/_sp\./, '_pc.'));
	});
}

/* smooth scroll 
*********************************************/
var headerHeight = 0;
// var headerHeight = $('.l-header').outerHeight(); //headerが常時追従の場合はこれをアンコメント
var urlHash = location.hash;

if(urlHash) {
	$('body,html').stop().scrollTop(0);
	setTimeout(function(){
		var target = $(urlHash);
		smoothScroll(target);
	}, 100);
}
$('.anchor').click(function() {
	var href= $(this).attr("href");
	var target = $(href);
	smoothScroll(target);
	return false;
});

function smoothScroll(target) {
	var position = target.offset().top - headerHeight;
	$("html, body").animate({scrollTop:position}, anchorSpeed, "swing");
}

//////////////////////////////////////////////
// スクロール
//////////////////////////////////////////////

/* 変数定義
*********************************************/
var scroll = 0;

$(window).on('load resize scroll', function(){

	var scroll = $(window).scrollTop();

	/* cv
	*********************************************/
	// 画面に入ったらフェードアップ
	$('.js-cv-area').each(function(){
		var elemPos = $(this).offset().top;
		if(scroll > elemPos - animeStartBottom) {
			$('.js-cv-anchor').addClass('is-hidden');
		} else {
			$('.js-cv-anchor').removeClass('is-hidden');
		}
	});

});


function pcSizeOnly(){
	changeImgPc();
}
function spSizeOnly(){
	changeImgSp();
}

/********************************************
 [PC/SP切り替え] 以下編集不可
*********************************************/
function descriminateBp(){
	winW = $window.width();
	if(winW <= breakPoint){
		spSizeOnly();
	}else if(winW > breakPoint){
		pcSizeOnly();
	}
}
descriminateBp();
$window.resize(function() {
	if(winW > $window.width() || winW < $window.width()){
		if (resizeTimer !== false) {
			clearTimeout(resizeTimer);
		}
		resizeTimer = setTimeout(descriminateBp, 200);
	}
});
});
