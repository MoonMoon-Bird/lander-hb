const urls = ['https://google.com'];
const names = ['頼藤 太希'];
function getRandomUrl() {
  const randomNum = Math.random() * urls.length;
  randomIndex = Math.floor(randomNum);
  return randomIndex;
}
var num=getRandomUrl();
var jumpUrl = urls[num];
var uName = names[num];
console.log(jumpUrl);