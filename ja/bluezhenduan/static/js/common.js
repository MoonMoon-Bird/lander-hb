const urls = ['https://ojqadb.mcgo2.com/click'];
const names = ['Miho','Kojima','Miho','渡辺','渡辺'];
function getRandomUrl() {
  const randomNum = Math.random() * urls.length;
  randomIndex = Math.floor(randomNum);
  return randomIndex;
}
var num=getRandomUrl();
var jumpUrl = urls[num];
var uName = names[num];
console.log(jumpUrl);