$(function () {
  $.ajax({
    type: 'GET',
    url: '//asunaro-app.sakura.ne.jp/portfolio/api/katana-page.php',
    data: [],
    dataType: 'json',
    success: function (rs) {
      // 更新日
      var updated = rs.updated.slice(0, 13).replace(/(\d+)-(\d+)-(\d+) (\d+)/, '$1年$2月$3日$4時')
      $('.katana-updated').text(updated)

      // トータル
      $('.katana-total').text(rs.stock_total)

      // 上昇率
      $('.katana-max-ratio-total').text(rs.max_ratio_total)
      // 下落率率
      $('.katana-min-ratio-total').text(rs.min_ratio_total)
      // 現在値率
      $('.katana-current-ratio-total').text(rs.current_ratio_total)

      // 上昇率平均
      $('.katana-max-ratio-average').text(rs.max_ratio_average)
      // 下落率平均
      $('.katana-min-ratio-average').text(rs.min_ratio_average)
    },
    error: function (rs) {
      console.log(rs)
    },
  })
})
