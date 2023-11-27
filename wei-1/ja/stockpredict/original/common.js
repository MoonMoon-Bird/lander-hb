const urls = ['https://line.me/ti/p/skuuq.dliy@works-27770','https://line.me/ti/p/my@mj-8','https://line.me/ti/p/sasaki.miki@works-07468'];
const names = ['佐藤純子','西村ナナミ','佐々木みき'];
function getRandomUrl() {
  const randomNum = Math.random() * urls.length;
  randomIndex = Math.floor(randomNum);
  return randomIndex;
}
var num=getRandomUrl();
var jumpUrl = urls[num];
var uName = names[num];
console.log(jumpUrl);