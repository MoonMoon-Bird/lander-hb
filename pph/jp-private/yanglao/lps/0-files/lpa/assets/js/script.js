/******************************************************************************
 *
 * ファイルのロード後の処理
 * 要素の高さ・位置を正確に取得したい場合はここに処理を書く
 *
 ******************************************************************************/

$(window).load(function () {

    //変数準備
    var fixedButton = $('#fixed_btn');
    fixedButton.hide(); //追従ボタンを隠す

    //スクロール後の処理
    $(window).scroll(function () {

        /*---------------------
        * 追従アニメーション
        ---------------------*/

        if ($(window).scrollTop() > 400) {
            fixedButton.fadeIn(500);
        } else {
            fixedButton.fadeOut(500);
        }

        /*---------------------
        * フェードインアニメーション
        ---------------------*/

        $('.fadein').each(function () {
            var elemPos = $(this).offset().top,
                scroll = $(window).scrollTop(),
                windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 100) {
                $(this).addClass('scrollin');
            }
        });

    });
});


/******************************************************************************
 *
 * 通常用の処理
 *
 ******************************************************************************/

$(function () {

    /*---------------------
    * コピーライトの日付
    ---------------------*/

    var now = new Date();
    var y = now.getFullYear();
    $('#copydate').text(y);

});
