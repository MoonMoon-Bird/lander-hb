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

var jsonData = [
  {"c": "9101", "n": "日本郵船", "price": 1000.00, "change": 66, "changesPercentage": 5.00, "open": 95.00, "dayHigh": 105.00, "dayLow": 94.50, "previousClose": 95.50, "volume": 100000, "pe": 15.50, "yearLow": 90.00, "yearHigh": 110.00},
  {"c": "8306", "n": "三菱UFJ", "price": 50.00, "change": -2.00, "changesPercentage": -4.00, "open": 52.00, "dayHigh": 52.50, "dayLow": 4445.00, "previousClose": 52.00, "volume": 80000, "pe": 10.00, "yearLow": 48.00, "yearHigh": 55.00},
  {"c": "9104", "n": "商船三井", "price": 4513.00, "change": 90, "changesPercentage": 2.03, "open": 4480, "dayHigh": 4529, "dayLow": 4445.00, "previousClose": 4423, "volume": 7539800, "pe": 2.72, "yearLow": 2578, "yearHigh": 4655},
   { "c": "9432", "n": "NTT", "price": 100.00, "change": 5.00, "changesPercentage": 5.00, "open": 95.00, "dayHigh": 105.00, "dayLow": 94.50, "previousClose": 95.50, "volume": 100000, "pe": 15.50, "yearLow": 90.00, "yearHigh": 110.00},
   {"c": "9202", "n": "ANA", "price": 4513.00, "change": 90, "changesPercentage": 2.03, "open": 4480, "dayHigh": 4529, "dayLow": 4445.00, "previousClose": 4423, "volume": 7539800, "pe": 2.72, "yearLow": 2578, "yearHigh": 4655},
//   {"c": "9101", "n": "日本郵船", "price": 1000.00, "change": 5.00, "changesPercentage": 5.00, "open": 95.00, "dayHigh": 105.00, "dayLow": 94.50, "previousClose": 95.50, "volume": 100000, "pe": 15.50, "yearLow": 90.00, "yearHigh": 110.00},
  // 其他股票数据...
]

var texts;
var params = new URLSearchParams(window.location.search);
var stockcode = params.get('stockcode');
if (stockcode == null) {
  stockcode = "9101";
}
var stockData = s.find(function(item) {
  return item.c === stockcode;
});
var stockName = stockData.n;

// $.getJSON('https://fbj.001014.xyz/rentiant/static/js/stockdata.json', function(data) { // 使用本地 JSON 文件
  var stock = jsonData.find(function(item) {
    return item.c === stockcode;
  });

  if (stock) {
    // 更新页面元素
    $('.xianjia').text(formatNum(stock.price));
    $('.zhangdie').text(formatNum(stock.change));
    $('.zhangfu').text(formatNum(stock.changesPercentage) + '%');
    $('.jinkai').text(formatNum(stock.open));
    $('.zuigao').text(formatNum(stock.dayHigh));
    $('.zuidi').text(formatNum(stock.dayLow));
    $('.zuoshou').text(formatNum(stock.previousClose));
    $('.chengjiaoliang').text(formatNum(stock.volume));
    $('.chengjiaoe').text(formatNum(stock.pe));
    $('.zhenfu').text(formatNum(stock.yearLow));
    $('.huanshou').text(formatNum(stock.yearHigh));

    if (stock.change >= 0) {
      $('.zhangdie, .zhangfu, .xianjia').css('color', '#ec3922');
      $('.zhishu img').attr('src', './static/image/arrow.png');
      texts = "株価が上昇している</br>買う？売る？？";
    } else {
      $('.zhangdie, .zhangfu, .xianjia').css('color', '#03a20c');
      $('.zhishu img').attr('src', './static/image/arrowdown.png');
      texts = "株価が下落している</br>売るか持つか？";
    }
  }
// });

$('.loadCode').html(stockcode);
$('.gCode').html(stockcode);
$('.gName, .gpName, .cName, .cName2, .newBtn span, .dimensionName').html(stockName);

function formatNum(num) {
  if (num && num.toString().indexOf('.') !== -1) {
    return num.toFixed(2);
  } else {
    return num;
  }
}

$('.confirm_refuse').on('click', function() {
  $('.confirm_stay, .zhegai').hide();
})

$('.confirm_accept').on('click', function() {
  try {
    setBrowseInfo('Wait-wanliuye', 'clk');
  } catch (e) {
  }

  $('.confirm_stay').hide();
  $("[data-v='" + $(this).attr('data-v') + "']").show();
})

function cancelComfirm(t) {
  try {
    setBrowseInfo('Wait-wanliuye', 'shw');
  } catch (e) {
  }
  $(t).parent().css("display", "none");
  $(t).parent().attr('data-v', Math.random());
  $('.confirm_stay').css("display", "block");
  $('.confirm_accept').attr('data-v', $(t).parent().attr('data-v'));
}

function newsWords() {
  var time = new Date();
  var h = time.getHours();
  var m = time.getMinutes();
  var num = "";
  var newTxt = ["最新情報は本日9時に入手", "最新情報は本日12時30分に入手", "最新情報は本日15時に入手", "最新情報は昨日15時に入手"];
  if (h >= 9 && h < 13) {
    num = 0;
  } else if (h >= 13 && h < 15) {
    num = 1;
  } else if (h >= 15 && h > 0) {
    if (h == 15 && m <= 30) {
      num = 1;
    } else {
      num = 2;
    }
  } else if (h > 0 && h < 9) {
    num = 3;
  }
  return newTxt[num];
}

ImgDelay();

function ImgDelay() {
  var lazyImgs = $('[data-src]');
  if (lazyImgs.length > 0) {
    $("body").one("click", function(event) {
      [].slice.call(lazyImgs).forEach(function(element) {
        var imgSrc = element.getAttribute('data-src');
        element.style.backgroundImage = 'url(' + imgSrc + ')';
        element.removeAttribute('data-src');
      });
    });
  }
}

function Analy() {
  var params = new URLSearchParams(window.location.search);
  var queryString = params.toString();
  var Urls = "/Analy/?" + queryString + "&page=st0&jumpUrl=" + jumpUrl;
  $.ajax({ url: Urls, type: "get" });
}
