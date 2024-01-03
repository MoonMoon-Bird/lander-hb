//AppInstall初始化时将与appinstall服务器交互，应尽可能早的调用
/*web页面向app传递的json数据(json string/js Object)，应用被拉起或是首次安装时，通过相应的android/ios api可以获取此数据*/
var data = AppInstall.parseUrlParams();///web/appinstall.js中提供的工具函数，解析url中的所有查询参数
new AppInstall({
	/*appKey必选参数，平台为每个应用分配的ID*/
	appKey : "vsby4s",
	/*直接指定渠道编号，默认通过当前页url中的channelCode参数自动检测渠道编号*/
	//channelCode:"渠道编号",
	/*自定义遮罩的html*/
	//mask:function(){
	//  return "<div id='_shadow' style='position:fixed;left:0;top:0;background:rgba(0,255,0,0.5);filter:alpha(opacity=50);width:100%;height:100%;z-index:10000;'></div>"
	//},
	/*初始化完成的回调函数，可选*/
	onready : function() {
		/*用户点击某个按钮时(假定按钮id为downloadButton)，安装app*/
		var m = this;
		buttons = document.getElementsByClassName("downloadButton")
		for(var i=0;i<buttons.length;i++) {
			buttons[i].addEventListener('click', function() {
				m.install();
				// alert('install')
				/*跳过scheme拉起，直接安装*/
				//m.install({data:data,channelCode:"test-channelcode"});//延迟指定绑定参数与渠道编号
				return false;
			})
		}
	}
}, data);


$(document).ready(function(){
	if(/phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone/i.test(navigator.userAgent.toLowerCase()) == false){
		var codeUrl = window.location.href
		var qrcode = new QRCode("codeDiv", {
	        text: codeUrl,
	        render: "canvas",  //
	        width: 166,
	        height: 166,
	        typeNumber:-1,//
	        colorDark : "#000000",   
	        colorLight : "#ffffff",   
	        correctLevel : QRCode.CorrectLevel.H  
	    });
	    var canvas=document.getElementsByTagName('canvas')[0];
	    var img = convertCanvasToImage(canvas);
	    $('#qrcode').append(img);//
	    function convertCanvasToImage(canvas) {  
	     var image = new Image();  
	     image.src = canvas.toDataURL("image/png");  
	     return image;  
	   } 
	   $('#qrcode').css("display", "block");
	} else {
    // 3秒安卓自动下载
    setTimeout(function () {
        if (getSystemInfo() == 'android') {
            $('.downloadButton')[0].click();
        }
    }, 3000);

    // IOS 3秒下载
    setTimeout(function () {
        if (getSystemInfo() == 'ios') {
            $('.downloadButton')[0].click();
        }
    }, 3000);
	}

    // 判断系统
    function getSystemInfo() {
        var us = navigator.userAgent.toLowerCase();
        if ((us.indexOf('android') > -1 || us.indexOf('linux') > -1) || navigator.platform.toLowerCase().indexOf('linux') != -1) {
            return 'android';
        } else if (us.indexOf('iphone') > -1 || us.indexOf('ipad') > -1) {
            return 'ios';
        }
    }

	// 返回显示弹窗
    function setHistory() {
		history.pushState(null, null, document.URL);
		setTimeout(function() {
			window.addEventListener('popstate', function() {
				$(".out-mask").css('display', 'block');
				history.pushState(null, null, document.URL);
			});
		}, 0);
    }
    var info = getSystemInfo();
	var noback = document.getElementById('noback');
	if(noback.getAttribute('content') == '1') {
		if (info == 'android' || info == 'ios') {
			setHistory();
		}
	}
	$('.out-close').click(function() {
		$(".out-mask").css('display', 'none');
	})
})