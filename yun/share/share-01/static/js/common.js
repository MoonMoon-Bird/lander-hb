/* --------------------------------------------------------
fade
-------------------------------------------------------- */
$(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var scrollBottom = scrollTop + $(this).height();
    var effectPos = scrollBottom - 50;
    $(".l-section_chart__box__img ul li").each(function (i) {
        if(effectPos > $(this).offset().top){
            var that = this;
            setTimeout(function () {
               $(that).addClass("fade_in");
            }, 300 * i);
        }
    });
});

/* --------------------------------------------------------
switch
-------------------------------------------------------- */
$(function(){
	var sizeChange = $('.switch'), 
	pcName = '_pc',
	spName = '_sp',
	replaceWidth768 = 768;

	sizeChange.each(function(){
	var $this = $(this);
	function imgSize(){
	if(window.innerWidth > replaceWidth768) { 
		$this.attr('src',$this.attr('src').replace(spName,pcName));
		} 
			else {
		$this.attr('src',$this.attr('src').replace(pcName,spName));
				}
			}
			$(window).resize(function(){imgSize();});
		imgSize();
	});
});

/* --------------------------------------------------------
scroll
-------------------------------------------------------- */
$(function(){
	$('a[href^="#"]').click(function(){
		let speed = 700;
		let href= $(this).attr("href");
		let target = $(href == "#" || href == "" ? 'html' : href);
		let position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});
});