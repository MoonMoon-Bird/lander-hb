var s = [
  {"c":"9101","n":"日本郵船"},
  {"c":"8306","n":"三菱UFJ"},
  {"c":"9432","n":"日本電信電話"},
  {"c":"NVDA","n":"エヌビディア"},
  {"c":"6758","n":"ソニーグループ"},
  {"c":"7203","n":"トヨタ"},
  {"c":"TSLA","n":"テスラ"},
  {"c":"9104","n":"商船三井"}
];

var params = new URLSearchParams(window.location.search);
var stockcode = params.get('stockcode');

if (stockcode != null) {
  var stockData = s.find(function(item) {
    return item.c === stockcode;
  });

  if (stockData) {
    var stockName = stockData.n;
	var elements = document.querySelectorAll('.input_text, .rose_input, .zd_input, .banner_ipt');
	elements.forEach(function(element) {
	element.value = stockName;
	});
  }
}