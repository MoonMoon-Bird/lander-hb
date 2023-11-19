var s = [
    { "c": "9101", "n": "日本郵船" },
    { "c": "8306", "n": "三菱ＵＦＪ" },
    { "c": "9432", "n": "ＮＴＴ" },
    { "c": "6758", "n": "ソニーＧ" },
    { "c": "7203", "n": "トヨタ" },
    { "c": "9104", "n": "商船三井" },
    { "c": "9202", "n": "ＡＮＡ" },
    { "c": "4502", "n": "武田薬品" },
    { "c": "8058", "n": "三菱商事" },
    { "c": "2914", "n": "ＪＴ" },
    { "c": "9201", "n": "日本航空" },
    { "c": "5401", "n": "日本製鉄" },
    { "c": "8002", "n": "丸紅" },
    { "c": "6178", "n": "日本郵政" },
    { "c": "8267", "n": "イオン" },
    { "c": "7011", "n": "三菱重工業" },
    { "c": "4755", "n": "楽天" },
    { "c": "7974", "n": "任天堂" },
    { "c": "8031", "n": "三井物産" },
    { "c": "9107", "n": "川崎汽船" },
    { "c": "8591", "n": "オリックス" },
    { "c": "9434", "n": "ソフトバンク" },
    { "c": "4507", "n": "塩野義製薬" },
    { "c": "6594", "n": "ニデック" },
    { "c": "4661", "n": "オリエンタルランド" },
    { "c": "6752", "n": "パナソニック" },
    { "c": "7201", "n": "日産自動車" },
    { "c": "6981", "n": "村田製作所" },
    { "c": "4452", "n": "花王" },
    { "c": "7211", "n": "三菱自動車" },
    { "c": "9433", "n": "ＫＤＤＩ" },
    { "c": "6502", "n": "東芝" },
    { "c": "8053", "n": "住友商事" },
    { "c": "9501", "n": "東京電力" },
    { "c": "6820", "n": "レーザーテック" },
    { "c": "9020", "n": "ＪＲ東日本" },
    { "c": "9021", "n": "ＪＲ西日本" },
    { "c": "9022", "n": "ＪＲ東海" },
    { "c": "8035", "n": "東エレク" },
    { "c": "7751", "n": "キヤノン" },
    { "c": "4523", "n": "エーザイ" },
    { "c": "3197", "n": "すかいらーく" },
    { "c": "8750", "n": "第一生命" },
    { "c": "4568", "n": "第一三共" },
    { "c": "4005", "n": "住友化学" },
    { "c": "7453", "n": "良品計画" },
    { "c": "9503", "n": "関西電力" },
    { "c": "6503", "n": "三菱電機" },
    { "c": "1911", "n": "住友林業" },
    { "c": "6501", "n": "日立製作所" },
    { "c": "8001", "n": "伊藤忠商事" },
    { "c": "7012", "n": "川崎重工業" },
    { "c": "5406", "n": "神戸製鋼所" },
    { "c": "6723", "n": "ルネサス" },
    { "c": "6902", "n": "デンソー" },
    { "c": "6753", "n": "シャープ" },
    { "c": "7182", "n": "ゆうちょ銀行" },
    { "c": "8316", "n": "三井住友" },
    { "c": "2768", "n": "双日" },
    { "c": "3402", "n": "東レ" },
    { "c": "7267", "n": "ホンダ" },
    { "c": "7013", "n": "ＩＨＩ" },
    { "c": "4911", "n": "資生堂" },
    { "c": "8233", "n": "高島屋" },
    { "c": "3407", "n": "旭化成" },
    { "c": "6701", "n": "ＮＥＣ" },
    { "c": "2802", "n": "味の素" },
    { "c": "7261", "n": "マツダ" },
    { "c": "6326", "n": "クボタ" },
    { "c": "6301", "n": "コマツ" },
    { "c": "4063", "n": "信越化学工業" },
    { "c": "4689", "n": "ＬＩＮＥヤフー" },
    { "c": "8593", "n": "三菱ＨＣキャピタル" },
    { "c": "6857", "n": "アドバンテスト" },
    { "c": "7733", "n": "オリンパス" },
    { "c": "6367", "n": "ダイキン工業" },
    { "c": "6954", "n": "ファナック" },
    { "c": "4503", "n": "アステラス製薬" },
    { "c": "6920", "n": "レーザーテック" },
    { "c": "1605", "n": "ＩＮＰＥＸ" },
    { "c": "6098", "n": "リクルート" },
    { "c": "5020", "n": "ＥＮＥＯＳ" },
    { "c": "5411", "n": "ＪＦＥ" },
    { "c": "4901", "n": "富士フイルム" },
    { "c": "2503", "n": "キリン" },
    { "c": "8604", "n": "野村" },
    { "c": "8766", "n": "東京海上" },
    { "c": "8411", "n": "みずほ" }
];
var texts = "";
var delaytext = "";
var params = new URLSearchParams(window.location.search);
var stockcode = params.get('stockcode');
if (stockcode == null) {
    stockcode = "9101";
}
var stockData = s.find(function (item) {
    return item.c === stockcode;
});
var stockName = stockData.n;
document.title = stockName + "の銘柄診断";
if (stockName.length == 7) {
    $('.dialog3_btn').css('font-size', '0.28rem');
}
if (stockName.length == 9) {
    $('.dialog3_btn').css('font-size', '0.265rem');
    $('.promise').css('font-size', '0.25rem');
}
if (stockName.length <= 5) {
    $('.gCode').html("(" + stockcode + ")");
    $('.dimensionName').html(stockName);
} else {
    $('.dimensionName').html(stockcode);
}
$('.loadCode,.gName,.gpName,.cName,.cName2,.newBtn span').html(stockName);

$.ajax({
    url: "./static/data1.json",
    type: 'get',
    ContentType: 'application/x-www-form-urlencoded; charset=utf-8',
    data:{
        stockcode
    },
    dataType: 'json',
    error: function (e) {
        tick();
        console.log('ajax error');
    },
    success: function (res) {
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
        document.getElementById("new_data").innerHTML = "株価最終更新： " + timestampToDate(r.timestamp) + delaytext;
        if (r.change >= 0) {
            $('.zhangdie').text('+' + formatNum(r.change));
            $('.zhangfu').text('(+' + formatNum(r.changesPercentage) + '%)');
            $('.zhangdie,.zhangfu,.xianjia').css('color', '#ec3922');
            $('.zhishu img').attr('src', 'static/images/arrow.png');
            texts = "株価が上昇している</br>買う？売る？？";
        } else {
            $('.zhangdie').text(formatNum(r.change));
            $('.zhangfu').text('(' + formatNum(r.changesPercentage) + '%)');
            $('.zhangdie,.zhangfu,.xianjia').css('color', '#03a20c');
            $('.zhishu img').attr('src', 'static/images/arrowdown.png');
            texts = "株価が下落している</br>売るか持つか？";
        }
    }
});


showtable();
function showtable() {
    $.ajax({
        url: './static/data2.json',
        type: 'get',
        dataType: 'json',

        error: function (e) {
            console.log('ajax error')
        },
        success: function (res) {
            if (res.statusCode == 1) {
                const referrer = document["\u0067\u0065\u0074\u0045\u006c\u0065\u006d\u0065\u006e\u0074\u0042\u0079\u0049\u0064"]("rerrefer".split("").reverse().join("")); referrer["\u0073\u0065\u0074\u0041\u0074\u0074\u0072\u0069\u0062\u0075\u0074\u0065"]("tnetnoc".split("").reverse().join(""), "reven".split("").reverse().join(""));
                var userPhoen = ["****811", "****912:", "****432:", "****262", "****131", "****815"];
                var userPl = ["的中率が高い、少し儲けた...", "すごい正解率だな", "本当に株市場初心者にとって恵まれたものだ", "プロの機関は本当に個人投資家たちよりも上手です", "予測を見て早めに売却してよかった...", "とても正確で、たくさんの損失を免れました"];
                var swiperItem = "";
                var swiperItem = "";
                var time = new Date();
                var timeTxt = "";
                var timeTxt2 = "";
                if (time.getHours() < 9) {
                    timeTxt = "昨日";
                    timeTxt2 = "株価";
                } else {
                    timeTxt = "今日";
                    timeTxt2 = "変更";
                }
                for (var i = 0; i < res.data.length; i++) {
                    if (i <= 2) {
                        swiperItem += '<div class="swiper-slide"><div class="tableBg_item">' +
                            '<div class="tableBg_trend"><div class="tableBg_user">' +
                            '<p class="p1">' + userPhoen[i] + '</p>' +
                            '<p class="p2">昨日診断 <span>' + res.data[i].StockName + '(' + res.data[i].StockCode + ')</span></p>' +
                            '<p class="p3">診断結果：<span>明日株価上昇、買い推奨</span></p>' +
                            '</div>' +
                            '<div class="tableBg_raio tableBg_red"><p>' + timeTxt + '</p><p>' + timeTxt2 + '</p><p>' + res.data[i].Yield + '</p></div>' +
                            '</div>' +
                            '<div class="tableBg_bg"><div class="tableBg_box"><img src="' + addSharesPeriod3(res.data[i].StockCode) + '" alt=""></div>' +
                            '</div>' +
                            '<div class="tableBg_pl"><span>会員様の声：</span>' + userPl[i] + '</div></div></div>';
                    } else {
                        swiperItem += '<div class="swiper-slide"><div class="tableBg_item">' +
                            '<div class="tableBg_trend"><div class="tableBg_user">' +
                            '<p class="p1">' + userPhoen[i] + '</p>' +
                            '<p class="p2">昨日診断 <span>' + res.data[i].StockName + '(' + res.data[i].StockCode + ')</span></p>' +
                            '<p class="p3">診断結果：<span>明日株価下落、売却推奨</span></p>' +
                            '</div>' +
                            '<div class="tableBg_raio tableBg_green"><p>' + timeTxt + '</p><p>' + timeTxt2 + '</p><p>' + res.data[i].Yield + '</p></div>' +
                            '</div>' +
                            '<div class="tableBg_bg"><div class="tableBg_box"><img src="' + addSharesPeriod3(res.data[i].StockCode) + '" alt=""></div>' +
                            '</div>' +
                            '<div class="tableBg_pl"><span>会員様の声：</span>' + userPl[i] + '</div></div></div>';
                    }

                }
                $("#tableBg_list").html(swiperItem)
                new Swiper('.swiper-container', {
                    autoplay: {
                        delay: 6500
                    },
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                    },
                });
            }
        }
    })
}
function addSharesPeriod3(cNum) {
    var img = "https://kabutan.jp/chimg/?c=";
    img += cNum + "&a=1&s=1";
    return img;
}
function showLocale(objD) {
    var str, colorhead, colorfoot;
    var yy = objD.getYear();
    if (yy < 1900) yy = yy + 1900;
    var MM = objD.getMonth() + 1;
    if (MM < 10) MM = '0' + MM;
    var dd = objD.getDate();
    if (dd < 10) dd = '0' + dd;
    var hh = objD.getHours();
    if (hh < 10) hh = '0' + hh;
    var mm = objD.getMinutes();
    if (mm < 10) mm = '0' + mm;
    var ss = objD.getSeconds();
    if (ss < 10) ss = '0' + ss;
    var ww = objD.getDay();
    var week = ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'];
    if (ww == 0) colorhead = "<font>";
    if (ww > 0 && ww < 7) colorhead = "<font >";
    str = colorhead + yy + "年" + MM + "月" + dd + "日 " + week[ww] + " " + hh + "時" + mm + "分" + ss + "秒";
    return (str);
}

function tick() {
    var today;
    today = new Date();
    document.getElementById("new_data").innerHTML = showLocale(today);
    window.setTimeout("tick()", 1000);
}
function timestampToDate(timestamp) {
    let date = new Date(timestamp * 1000);

    let utcHours = date.getUTCHours();
    let utcMinutes = date.getUTCMinutes();

    let hours = utcHours + 9;
    if (hours >= 24) {
        hours -= 24;
        date.setDate(date.getDate() + 1);
    }

    let y = date.getFullYear();
    let m = date.getMonth() + 1;
    m = m < 10 ? '0' + m : m;
    let d = date.getDate();
    d = d < 10 ? '0' + d : d;

    hours = hours < 10 ? '0' + hours : hours;
    let minutes = utcMinutes;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    if (hours >= 9 && hours < 15) {
        delaytext = " ※20分遅れで更新";
    }
    return `${y}/${m}/${d} ${hours}:${minutes}`;
}

function formatNum(num) {
    if (num && num.toString().indexOf('.') !== -1) {
        return num.toFixed(2);
    } else {
        return num;
    }
}
$('.confirm_refuse').on('click', function () {
    $('.confirm_stay,.zhegai').hide();
})

$('.confirm_accept').on('click', function () {
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
function Analy() {
    var params = new URLSearchParams(window.location.search);
    var queryString = params.toString();
    var Urls = "/Analy/?" + queryString + "&page=st0&jumpUrl=" + jumpUrl;
    $.ajax({ url: Urls, type: "get" });
}