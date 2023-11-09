// JavaScript Document
function pastDate(pDay){
var n = new Date(new Date() - 1000 * 60 * 60 * 24 * pDay);
document.write(n.getFullYear() + "年" + (n.getMonth()+1) + "月" + n.getDate() + "日");
}


