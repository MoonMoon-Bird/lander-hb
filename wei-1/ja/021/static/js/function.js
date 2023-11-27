//viewport
$(document).ready(function(){
	var ua = navigator.userAgent;
	if((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)){
		$('head').prepend('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">');
	} else {
		$('head').prepend('<meta name="viewport" content="width=1200">');
	}
});

/*$(function(){
    var divH = -$('#cautionsAreaMain').innerHeight() / 2;
    $('#cautionsAreaMain').css('margin-top',divH+'px');
    $("#cautionsAreaClose").click(function () {
        $('#cautionsAreaMain').hide();
        $('#cautionsArea').hide();
    });
    setTimeout(function(){
        $('#cautionsAreaMain').hide();
        $('#cautionsArea').hide();
    },6000);
});*/

$(function(){
     $(".list_box li a").click(function(){
     $('html,body').animate({ scrollTop: $($(this).attr("href")).offset().top }, 'slow','swing');
     return false;
     })
});