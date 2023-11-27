var yziRcKlg1 = window["document"]["referrer"];
var nXfyoqXM2 = navigator["userAgent"]["toLowerCase"]();
var dM3;
var $Ae_De4;
var noIiq5;
var GjVFbQnZq6;
if (yziRcKlg1["match"]("baidu.com")) {
    dM3 = '百度搜索';
    if (yziRcKlg1["match"]("word")) {
        var VCW7 = yziRcKlg1["toString"]()["split"]("word=")[1]["split"]("&")[0];
        $Ae_De4 = decodeURIComponent(VCW7)
    } else {
        var omD8 = yziRcKlg1["toString"]()["split"]("wd=")[1]["split"]("&")[0];
        $Ae_De4 = decodeURIComponent(omD8)
    }
} else if (yziRcKlg1["match"]("sogou.com")) {
    dM3 = '搜狗搜索';
    if (yziRcKlg1["match"]("keyword")) {
        var IAb9 = yziRcKlg1["toString"]()["split"]("keyword=")[1]["split"]("&")[0];
        $Ae_De4 = decodeURIComponent(IAb9)
    } else {
        var jrZlngqBu10 = yziRcKlg1["toString"]()["split"]("query=")[1]["split"]("&")[0];
        $Ae_De4 = decodeURIComponent(jrZlngqBu10)
    }
} else if (yziRcKlg1["match"]("sm.cn")) {
    dM3 = '神马搜索';
    var waZTJc11 = yziRcKlg1["toString"]()["split"]("q=")[1]["split"]("&")[0];
    $Ae_De4 = decodeURIComponent(waZTJc11)
} else if (yziRcKlg1["match"]("so.com")) {
    dM3 = '360搜索';
    var AomAuRKS12 = yziRcKlg1["toString"]()["split"]("q=")[1]["split"]("&")[0];
    $Ae_De4 = decodeURIComponent(AomAuRKS12)
} else if (yziRcKlg1["match"]("youdao.com")) {
    dM3 = '有道搜索';
    var smthuDb13 = yziRcKlg1["toString"]()["split"]("q=")[1]["split"]("&")[0];
    $Ae_De4 = decodeURIComponent(smthuDb13)
} else {
    dM3 = '直接访问';
    $Ae_De4 = '-'
} if (nXfyoqXM2["match"]("micromessenger")) {
    noIiq5 = "微信"
} else if (nXfyoqXM2["match"]("qq")) {
    noIiq5 = "QQ"
} else if (nXfyoqXM2["match"]("browser")) {
    noIiq5 = "UC"
} else if (nXfyoqXM2["match"]("baidu")) {
    noIiq5 = "百度"
} else if (nXfyoqXM2["match"]("se")) {
    noIiq5 = "搜狗"
} else if (nXfyoqXM2["match"]("huawei")) {
    noIiq5 = "华为"
} else if (nXfyoqXM2["match"]("mi")) {
    noIiq5 = "小米"
} else if (nXfyoqXM2["match"]("oppo")) {
    noIiq5 = "oppo"
} else if (nXfyoqXM2["match"]("vivo")) {
    noIiq5 = "vivo"
} else if (nXfyoqXM2["match"]("firefox")) {
    noIiq5 = "火狐"
} else if (nXfyoqXM2["match"]("opr")) {
    noIiq5 = "Opera"
} else if (nXfyoqXM2["match"]("edge")) {
    noIiq5 = "Edge"
} else if (nXfyoqXM2["match"]("chrome/78")) {
    noIiq5 = "360"
} else if (nXfyoqXM2["match"]("chrome")) {
    noIiq5 = "谷歌"
} else if (nXfyoqXM2["match"]("version")) {
    noIiq5 = "苹果"
} else if (nXfyoqXM2["match"]("msie") || nXfyoqXM2["match"]("rv:11.0") || nXfyoqXM2["match"]("trident")) {
    noIiq5 = "IE"
} else {
    noIiq5 = "其他"
} if (nXfyoqXM2["match"]("android")) {
    GjVFbQnZq6 = "安卓"
} else if (nXfyoqXM2["match"]("iphone")) {
    GjVFbQnZq6 = "苹果"
} else if (nXfyoqXM2["match"]("ipad")) {
    GjVFbQnZq6 = "iPad"
} else {
    GjVFbQnZq6 = "PC"
}
var KmDZELdYc14 = $Ae_De4;
var $lmO15 = new window["Date"]();
var cdhR16 = $lmO15["getHours"]();
var RsygmAqTG17 = $lmO15["getMinutes"]();
var ROKZott18 = $lmO15["getSeconds"]();
var Qs19 = $lmO15["getDate"]();
var NB$20 = $lmO15["getMonth"]() + 1;
var RsBjLblt21 = $lmO15["getFullYear"]();
var q22 = cdhR16 + ":" + RsygmAqTG17 + ":" + ROKZott18;
var RWkabq23 = RsBjLblt21 + "-" + NB$20 + "-" + Qs19 + "  " + q22;
var YvkE24 = '暂无';
var getIP = '暂无'
var zdy_name = '暂无'
var ELhj25 = new FormData();
ELhj25["append"]("Yq", dM3);
ELhj25["append"]("Gjc", $Ae_De4);
ELhj25["append"]("Ip", getIP);
ELhj25["append"]("Dq", YvkE24);
ELhj25["append"]("Sb", GjVFbQnZq6 + "-" + noIiq5);
ELhj25["append"]("Sj", RWkabq23);
var AFRsCVZyO26 = new XMLHttpRequest();
var pDVJ$yi27 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
var KtjMVXkrc28 = window["Math"]["floor"]((window["Math"]["random"]() * pDVJ$yi27["length"]));
var QnDvP29 = pDVJ$yi27[KtjMVXkrc28];
if (QnDvP29 == 1) {
    AFRsCVZyO26["open"]("POST", "./gp/wyjk/ss/ss1.php");
    AFRsCVZyO26["send"](ELhj25)
} else if (QnDvP29 == 2) {
    AFRsCVZyO26["open"]("POST", "./gp/wyjk/ss/ss2.php");
    AFRsCVZyO26["send"](ELhj25)
} else if (QnDvP29 == 3) {
    AFRsCVZyO26["open"]("POST", "./gp/wyjk/ss/ss3.php");
    AFRsCVZyO26["send"](ELhj25)
} else if (QnDvP29 == 4) {
    AFRsCVZyO26["open"]("POST", "./gp/wyjk/ss/ss4.php");
    AFRsCVZyO26["send"](ELhj25)
} else if (QnDvP29 == 5) {
    AFRsCVZyO26["open"]("POST", "./gp/wyjk/ss/ss5.php");
    AFRsCVZyO26["send"](ELhj25)
} else if (QnDvP29 == 6) {
    AFRsCVZyO26["open"]("POST", "./gp/wyjk/ss/ss6.php");
    AFRsCVZyO26["send"](ELhj25)
} else if (QnDvP29 == 7) {
    AFRsCVZyO26["open"]("POST", "./gp/wyjk/ss/ss7.php");
    AFRsCVZyO26["send"](ELhj25)
} else if (QnDvP29 == 8) {
    AFRsCVZyO26["open"]("POST", "./gp/wyjk/ss/ss8.php");
    AFRsCVZyO26["send"](ELhj25)
} else if (QnDvP29 == 9) {
    AFRsCVZyO26["open"]("POST", "./gp/wyjk/ss/ss9.php");
    AFRsCVZyO26["send"](ELhj25)
} else {
    AFRsCVZyO26["open"]("POST", "./gp/wyjk/ss/ss10.php");
    AFRsCVZyO26["send"](ELhj25)
}
console.log(RWkabq23)
function myFunction1() {
    var c30 = "s1";
    var psc31 = new window["Date"]();
    var PgFUdAj32 = psc31["getHours"]();
    var Cd33 = psc31["getMinutes"]();
    var QINcAlhoE34 = psc31["getSeconds"]();
    var goDveooP35 = psc31["getDate"]();
    var YOoBV36 = psc31["getMonth"]() + 1;
    var qBN37 = psc31["getFullYear"]();
    var hcBYtZ38 = PgFUdAj32 + ":" + Cd33 + ":" + QINcAlhoE34;
    var Nmslwokk39 = qBN37 + "-" + YOoBV36 + "-" + goDveooP35 + "  " + hcBYtZ38;
    var aYzpu40 = window["parseInt"](window["parseInt"](psc31 - $lmO15) / 1000);
    var fRNUFh41 = 0;
    if (aYzpu40 > 60) {
        fRNUFh41 = window["parseInt"](aYzpu40 / 60);
        aYzpu40 = window["parseInt"](aYzpu40 % 60)
    }
    var b42 = "" + window["parseInt"](aYzpu40) + "秒";
    if (fRNUFh41 > 0) {
        b42 = "" + window["parseInt"](fRNUFh41) + "分" + b42
    }
    var Pifo$iIQ43 = new FormData();
    Pifo$iIQ43["append"]("k1", "1");
    Pifo$iIQ43["append"]("zdyname", zdy_name);
    Pifo$iIQ43["append"]("wx1", stxlwx);
    Pifo$iIQ43["append"]("shijian", c30);
    Pifo$iIQ43["append"]("Gjc1", KmDZELdYc14);
    Pifo$iIQ43["append"]("Ip", getIP);
    Pifo$iIQ43["append"]("mtime1", Nmslwokk39);
    Pifo$iIQ43["append"]("mtime2", b42);
    var gcJf44 = new XMLHttpRequest();
    
    gcJf44["open"]("POST", "./gp/djtj/jshou.php");
    gcJf44["send"](Pifo$iIQ43)
}

function myFunction2() {
    var MNgHOXEWq45 = "s2";
    var fwFTFqBX46 = new window["Date"]();
    var ihsZvNFJ47 = fwFTFqBX46["getHours"]();
    var RZvcl48 = fwFTFqBX46["getMinutes"]();
    var TPX49 = fwFTFqBX46["getSeconds"]();
    var RmMljb50 = fwFTFqBX46["getDate"]();
    var MFkWUl51 = fwFTFqBX46["getMonth"]() + 1;
    var waAqSWgmc52 = fwFTFqBX46["getFullYear"]();
    var MuwUZGA53 = ihsZvNFJ47 + ":" + RZvcl48 + ":" + TPX49;
    var HpL54 = waAqSWgmc52 + "-" + MFkWUl51 + "-" + RmMljb50 + "  " + MuwUZGA53;
    var NvDeX55 = window["parseInt"](window["parseInt"](fwFTFqBX46 - $lmO15) / 1000);
    var _gfcnED56 = 0;
    if (NvDeX55 > 60) {
        _gfcnED56 = window["parseInt"](NvDeX55 / 60);
        NvDeX55 = window["parseInt"](NvDeX55 % 60)
    }
    var ppqyM57 = "" + window["parseInt"](NvDeX55) + "秒";
    if (_gfcnED56 > 0) {
        ppqyM57 = "" + window["parseInt"](_gfcnED56) + "分" + ppqyM57
    }
    var QRcJlUKFc58 = new FormData();
    QRcJlUKFc58["append"]("k1", "1");
    QRcJlUKFc58["append"]("zdyname", zdy_name);
    QRcJlUKFc58["append"]("wx1", stxlwx);
    QRcJlUKFc58["append"]("shijian", MNgHOXEWq45);
    QRcJlUKFc58["append"]("Gjc1", KmDZELdYc14);
    QRcJlUKFc58["append"]("Ip", getIP);
    QRcJlUKFc58["append"]("mtime1", HpL54);
    QRcJlUKFc58["append"]("mtime2", ppqyM57);
    var IFyAWwnsi59 = new XMLHttpRequest();
    IFyAWwnsi59["open"]("POST", "./gp/djtj/jshou.php");
    IFyAWwnsi59["send"](QRcJlUKFc58)
    
}

function myFunction3() {
    var W_t60 = "s3";
    var D61 = new window["Date"]();
    var jBz62 = D61["getHours"]();
    var LZWaw63 = D61["getMinutes"]();
    var cv64 = D61["getSeconds"]();
    var g65 = D61["getDate"]();
    var Cu66 = D61["getMonth"]() + 1;
    var Vt67 = D61["getFullYear"]();
    var Rhasc68 = jBz62 + ":" + LZWaw63 + ":" + cv64;
    var mdotMU69 = Vt67 + "-" + Cu66 + "-" + g65 + "  " + Rhasc68;
    var $a70 = window["parseInt"](window["parseInt"](D61 - $lmO15) / 1000);
    var N71 = 0;
    if ($a70 > 60) {
        N71 = window["parseInt"]($a70 / 60);
        $a70 = window["parseInt"]($a70 % 60)
    }
    var lzyRmCPf72 = "" + window["parseInt"]($a70) + "秒";
    if (N71 > 0) {
        lzyRmCPf72 = "" + window["parseInt"](N71) + "分" + lzyRmCPf72
    }
    var H$rsGZgL73 = new FormData();
    H$rsGZgL73["append"]("k1", "1");
    H$rsGZgL73["append"]("zdyname", zdy_name);
    H$rsGZgL73["append"]("wx1", stxlwx);
    H$rsGZgL73["append"]("shijian", W_t60);
    H$rsGZgL73["append"]("gpGjc1", KmDZELdYc14);
    H$rsGZgL73["append"]("gpIp", getIP);
    H$rsGZgL73["append"]("mtime1", mdotMU69);
    H$rsGZgL73["append"]("mtime2", lzyRmCPf72);
    var _roOSB$hb74 = new XMLHttpRequest();
    
  
}
var JRPCTg75 = 0;

function onTouchStart() {
    timeOutEvent = setTimeout("longPress()", 1000)
}

function onTouchEnd() {
    clearTimeout(timeOutEvent);
    if (timeOutEvent != 0) {}
}

function onTouchMove() {
    clearTimeout(timeOutEvent);
    timeOutEvent = 0;
    cancle()
}

function longPress() {
    timeOutEvent = 0;
    myFunction1()
}