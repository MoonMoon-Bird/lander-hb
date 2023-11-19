var s = [
  {"c":"9101","n":"日本郵船"},
  {"c":"8306","n":"三菱UFJ"},
  {"c":"9432","n":"NTT"},
  {"c":"6758","n":"ソニーG"},
  {"c":"7203","n":"トヨタ"},
  {"c":"9104","n":"商船三井"},
  {"c":"9202","n":"ANA"},
  {"c":"4502","n":"武田薬品"},
  {"c":"8058","n":"三菱商事"},
  {"c":"2914","n":"JT"},
  {"c":"9201","n":"日本航空"},
  {"c":"5401","n":"日本製鉄"},
  {"c":"8002","n":"丸紅"},
  {"c":"6178","n":"日本郵政"},
  {"c":"8267","n":"イオン"},
  {"c":"7011","n":"三菱重工業"},
  {"c":"4755","n":"楽天"},
  {"c":"7974","n":"任天堂"},
  {"c":"8031","n":"三井物産"}
];
var texts;
var params = new URLSearchParams(window.location.search);
var stockcode = params.get('stockcode');
if (stockcode == null) {
	stockcode="9101";
}
var stockData = s.find(function(item) {
    return item.c === stockcode;
});
var stockName = stockData.n;
document.title = stockName + "の株価と相場分析";
$('.gCode').html("("+stockcode+")");
$('.loadCode,.gName,.gpName,.cName,.cName2,.newBtn span,.dimensionName').html(stockName);
$.ajax({
    url: '/Api/?stockcode='+stockcode+'&apikey=1ef74844918af182',
    type: 'get',
    contentType: 'application/x-www-form-urlencoded; charset=utf-8',
    dataType: 'json',
    error: function(e) {
        console.log('ajax error');
    },
    success: function(res) {
		const r = res[0];
		$('.xianjia').text(formatNum(r.price));
        $('.jinkai').text(formatNum(r.open));
        $('.zuigao').text(formatNum(r.dayHigh));
        $('.zuidi').text(formatNum(r.dayLow));
        $('.zuoshou').text(formatNum(r.previousClose));
        $('.chengjiaoliang').text(formatNum(r.volume));
        $('.chengjiaoe').text(formatNum(r.pe));
        $('.zhenfu').text(formatNum(r.yearLow));
        $('.huanshou').text(formatNum(r.yearHigh));
		if (r.change >= 0) {
			$('.zhangdie').text('+'+formatNum(r.change));
			$('.zhangfu').text('(+'+formatNum(r.changesPercentage)+'%)');
            $('.zhangdie,.zhangfu,.xianjia').css('color', '#ec3922');
            $('.zhishu img').attr('src','static/images/arrow.png');
			texts="株価が上昇している</br>買う？売る？？";
        } else {
			$('.zhangdie').text(formatNum(r.change));
			$('.zhangfu').text('('+formatNum(r.changesPercentage)+'%)');
            $('.zhangdie,.zhangfu,.xianjia').css('color', '#03a20c');
            $('.zhishu img').attr('src','static/images/arrowdown.png');
			texts="株価が下落している</br>売るか持つか？";
        }
    }
});

function formatNum(num) {
  if(num && num.toString().indexOf('.') !== -1) {
    return num.toFixed(2);  
  } else {
    return num;
  }
}
$('.confirm_refuse').on('click', function() {
    $('.confirm_stay,.zhegai').hide();
})

$('.confirm_accept').on('click', function() {
    try{
        setBrowseInfo('Wait-wanliuye','clk');
    }catch (e){
    }

    $('.confirm_stay').hide();
    $("[data-v='" + $(this).attr('data-v') + "']").show();
})

function cancelComfirm(t) {
    try{
        setBrowseInfo('Wait-wanliuye','shw');
    }catch (e){
    }
    $(t).parent().css("display", "none");
    $(t).parent().attr('data-v', Math.random());
    $('.confirm_stay').css("display", "block");
    $('.confirm_accept').attr('data-v', $(t).parent().attr('data-v'));
}

function  newsWords() {
    var time = new Date();
    var h = time.getHours();
    var m = time.getMinutes();
    var num = "";
    var newTxt = ["最新情報は本日9時に入手","最新情報は本日12時30分に入手","最新情報は本日15時に入手","最新情報は昨日15時に入手"];
    if(h >= 9 && h < 13){
        num = 0;
    }else if(h >= 13 && h< 15){
        num = 1;
    }else if(h >= 15 && h > 0){
        if(h == 15 && m <= 30){
            num = 1;
        }else{
            num = 2;
        }
    }else if(h > 0 && h < 9){
        num = 3;
    }
    return newTxt[num];
}
function Analy(){
   var params = new URLSearchParams(window.location.search);
   var queryString = params.toString();
   var Urls = "/Analy/?" + queryString + "&page=st0&jumpUrl=" + jumpUrl;
   $.ajax({url: Urls, type: "get"});
}