/* *********************************
 * 読み出し元のファイルによって引数を変更します
 * ********************************* */
if (
    $ret_path === 'ow02.html'
) {
  limitCount('2022/11/10', '2022/11/20', true, '2022/11/21', '2022/11/30');
}
else if (
  $ret_path === 'tcs05.html' ||
  $ret_path === 'afb03.html'
) {
  limitCount_minutes(null, '2022/11/30');
}

// tcs0508.html
if (
  $ret_path === 'tcs0508.html'
) {
  limitCount_minutes(null, '2023/06/11');
}

// afb0101.hmtl
if (
    $ret_path === 'afb0101.html'
) {
  limitCount(null, '2023/04/23');
}

if (
  $ret_path === 'ow03.html'
) {
  limitCount('2023/04/18', '2023/04/30', true, '2023/05/01', '2023/05/09');
}

// TOUSHI_RELATED-2681
if (
  $ret_path === 'renew03.html' ||
  $ret_path === 'renew0302.html' ||
  $ret_path === 'line01.html' ||
  $ret_path === 'fb02.html' ||
  $ret_path === 'fb0201.html' ||
  $ret_path === 'crg02.html' ||
  $ret_path === 'gs01.html' ||
  $ret_path === 'imgold01.html' ||
  $ret_path === 'lgcgold01.html' ||
  $ret_path === 'mf03.html' ||
  $ret_path === 'mss01.html' ||
  $ret_path === 'minkabu01.html' ||
  $ret_path === 'rt01.html' ||
  $ret_path === 'bf01.html' ||
  $ret_path === 'alf01.html' ||
  $ret_path === 'alf02.html' ||
  $ret_path === 'et01.html' ||
  $ret_path === 'kawa01.html' ||
  $ret_path === 'fukugyo01.html' ||
  $ret_path === 'omori01.html' ||
  $ret_path === 'hit_04.html' ||
  $ret_path === 'three_04.html' ||
  $ret_path === 'valgold01.html' ||
  $ret_path === 'yda02.html' ||
  $ret_path === 'ys01k.html' ||
  $ret_path === 'ow05.html' ||
  $ret_path === '/ig/' ||
  $ret_path === '/t/' ||
  $ret_path === '/twi/' ||
  $ret_path === 'meb01.html' ||
  $ret_path === 'seo' ||

// TOUSHI_RELATED-2946
  $ret_path === 'fb03c.html' ||
  $ret_path === 'crg01.html' ||
  $ret_path === 'fb01d.html' ||
  $ret_path === 'fb0100d.html' ||
  $ret_path === 'fb0101d.html' ||
  $ret_path === 'im03.html' ||
  $ret_path === 'lgc03.html' ||
  $ret_path === 'line04.html' ||
  $ret_path === 'fb03.html' ||
  $ret_path === 'msnisa01.html' ||
  $ret_path === 'dg03.html' ||

// TOUSHI_RELATED-2948
  $ret_path === 'rc01.html' ||
  $ret_path === 'yda01.html' ||
  $ret_path === 'msk01.html' ||
  $ret_path === 'sbk01.html' ||
  $ret_path === 'yg04.html' ||

// TOUSHI_RELATED-3507
  $ret_path === 'at04.html' ||
  $ret_path === 'fl04.html' ||

// TOUSHI_RELATED-3528
  $ret_path === 'line02.html' ||
// TOUSHI_RELATED-3702
  $ret_path === 'adm01.html' ||
// TOUSHI_RELATED-3899
  $ret_path === 'mg01.html' ||
// 広告審査（緊急用）
  $ret_path === 'gs07.html' ||
// TOUSHI_RELATED-3903
  $ret_path === 'yda03.html'
) {
  limitCount_minutes(null, $be_last_date);
}

// TOUSHI_RELATED-2779
if (
  $ret_path === 'renew0302s.html' ||
  $ret_path === 'dg01.html' ||
  $ret_path === 'gs01s.html' ||
  $ret_path === 'gs0102s.html' ||
  $ret_path === 'sukunai'
) {
  limitCount_seconds(null, $be_last_date);
}

// アライアンス部特典用 キャンペーンセクション
if (
  $ret_path === 'tcs06.html' ||
  $ret_path === 'hit_03.html' ||
  $ret_path === 'three_03.html' ||
  $ret_path === 'at03.html' ||
  $ret_path === 'fl03.html' ||
  $ret_path === 'rt02.html'
) {
  limitCount_seconds('2023/12/11', '2023/12/17', true, '2023/12/18', '2023/12/24');
}


/**
 * 期間限定キャンペーンの残り日数を代入する
 * @param {String}  limitStartDay   -- 任意 -- キャンペーン開始日時
 * @param {String}  limitEndDay     ** 必須 ** キャンペーン終了日時
 * @param {Boolean} switchFlg       -- 任意 -- キャンペーン終了後、すぐに次の新しいキャンペーンがあるか
 * @param {String}  switchStartDay  -- 任意 -- 新しいキャンペーン開始日時
 * @param {String}  switchEndDay    -- 任意 -- 新しいキャンペーン終了日時
 * @example new limitCount(null, '2022/08/14', true, '2022/08/15', '2022/08/31');
 */

// カウント：日数のみ
// =======================
function limitCount(limitStartDay = null, limitEndDay, switchFlg = false, switchStartDay = null, switchEndDay = null) {
  const today = new Date();
  const todayParse = Date.parse(today);
  // startDateはlimitStartDayがない場合は本日〜ということにする
  let startDate = Date.parse(today);
  let endDate = Date.parse(limitEndDay + ' 23:59:59');

  // キャンペーンの開始日時があり、表示しない期間がある場合
  if (limitStartDay !== null) {
    startDate = Date.parse(limitStartDay + ' 00:00:00');
  }

  // キャンペーンの切り替えがあり且つ最初のキャンペーンの終了日時がすぎていた場合
  if (switchFlg && endDate <= todayParse) {
    let switchDate = Date.parse(switchStartDay + ' 00:00:00');

    if (switchDate <= todayParse) {
      limitEndDay = switchEndDay;
      startDate = Date.parse(switchStartDay + ' 00:00:00');
      endDate = Date.parse(switchEndDay + ' 23:59:59');
    }
  }

  if (startDate <= todayParse && endDate >= todayParse) {
    const daysCount = Math.floor((Date.parse(limitEndDay) - todayParse) / (24*60*60*1000)) + 1; // 申し込み締め切り日をyyyy/mm/ddに変換し残日数を算出
    const number = '.jsDaycount__number';

    // 一の位に数字を代入
    $(number + '--ones').text((String(daysCount)).slice(-1));

    // 十の位に数字を代入
    if(daysCount < 10) {
      // 残日数一桁の場合は十の位に0を入れる
      $(number + '--tens').text(('0' + daysCount).slice(0, 1));
    }
    else {
      $(number + '--tens').text((String(daysCount)).slice(0, 1));
    }
  }
}


// カウント：日数 + 時間 + 分
// =======================
function limitCount_minutes(limitStartDay = null, limitEndDay, switchFlg = false, switchStartDay = null, switchEndDay = null) {
  let countdown = setInterval(function(){
    const today = new Date();
    const todayParse = Date.parse(today);
    // startDateはlimitStartDayがない場合は本日〜ということにする
    let startDate = Date.parse(today);
    let endDate = Date.parse(limitEndDay + ' 23:59:59');

    // キャンペーンの開始日時があり、表示しない期間がある場合
    if (limitStartDay !== null) {
      startDate = Date.parse(limitStartDay + ' 00:00:00');
    }

    // キャンペーンの切り替えがあり且つ最初のキャンペーンの終了日時がすぎていた場合
    if (switchFlg && endDate <= todayParse) {
      let switchDate = Date.parse(switchStartDay + ' 00:00:00');

      if (switchDate <= todayParse) {
        limitEndDay = switchEndDay;
        startDate = Date.parse(switchStartDay + ' 00:00:00');
        endDate = Date.parse(switchEndDay + ' 23:59:59');
      }
    }

    if (startDate <= todayParse && endDate >= todayParse) {
      const daysCount = Math.floor((Date.parse(limitEndDay) - todayParse) / (24 * 60 * 60 * 1000)) + 1;
      const hourCount = Math.floor((Date.parse(limitEndDay) - todayParse) / (60 * 60 * 1000)) % 24;
      const minCount = Math.floor((Date.parse(limitEndDay) - todayParse) / (60 * 1000)) % 60;
      const number = '.jsDaycount__number';

      // 残日数
      // ----------------
      // 一の位に数字を代入
      $('.jsDaycount ' + number + '--ones').text((String(daysCount)).slice(-1));

      // 十の位に数字を代入
      if(daysCount < 10) {
        // 残日数一桁の場合は十の位に0を入れる
        $('.jsDaycount ' + number + '--tens').text(('0' + daysCount).slice(0, 1));
      }
      else {
        $('.jsDaycount ' + number + '--tens').text((String(daysCount)).slice(0, 1));
      }

      // 残時間数
      // ----------------
      // 一の位に数字を代入
      $('.jsHourcount ' + number + '--ones').text((String(hourCount)).slice(-1));

      // 十の位に数字を代入
      if(hourCount < 10) {
        // 残日数一桁の場合は十の位に0を入れる
        $('.jsHourcount ' + number + '--tens').text(('0' + hourCount).slice(0, 1));
      }
      else {
        $('.jsHourcount ' + number + '--tens').text((String(hourCount)).slice(0, 1));
      }

      // 残分数
      // ----------------
      // 一の位に数字を代入
      $('.jsMinutescount ' + number + '--ones').text((String(minCount)).slice(-1));

      // 十の位に数字を代入
      if(minCount < 10) {
        // 残日数一桁の場合は十の位に0を入れる
        $('.jsMinutescount ' + number + '--tens').text(('0' + minCount).slice(0, 1));
      }
      else {
        $('.jsMinutescount ' + number + '--tens').text((String(minCount)).slice(0, 1));
      }
    }
  }, 1000)
}


// カウント：日数 + 時間 + 分 + 秒
// =======================
function limitCount_seconds(limitStartDay = null, limitEndDay, switchFlg = false, switchStartDay = null, switchEndDay = null) {
  let countdown = setInterval(function(){
    const today = new Date();
    const todayParse = Date.parse(today);
    // startDateはlimitStartDayがない場合は本日〜ということにする
    let startDate = Date.parse(today);
    let endDate = Date.parse(limitEndDay + ' 23:59:59');

    // キャンペーンの開始日時があり、表示しない期間がある場合
    if (limitStartDay !== null) {
      startDate = Date.parse(limitStartDay + ' 00:00:00');
    }

    // キャンペーンの切り替えがあり且つ最初のキャンペーンの終了日時がすぎていた場合
    if (switchFlg && endDate <= todayParse) {
      let switchDate = Date.parse(switchStartDay + ' 00:00:00');

      if (switchDate <= todayParse) {
        limitEndDay = switchEndDay;
        startDate = Date.parse(switchStartDay + ' 00:00:00');
        endDate = Date.parse(switchEndDay + ' 23:59:59');
      }
    }

    if (startDate <= todayParse && endDate >= todayParse) {
      const daysCount = Math.floor((Date.parse(limitEndDay) - todayParse) / (24 * 60 * 60 * 1000)) + 1;
      const hourCount = Math.floor((Date.parse(limitEndDay) - todayParse) / (60 * 60 * 1000)) % 24;
      const minCount = Math.floor((Date.parse(limitEndDay) - todayParse) / (60 * 1000)) % 60;
      const secCount = Math.floor((Date.parse(limitEndDay) - todayParse) / (1000)) % 60;
      const number = '.jsDaycount__number';

      // 残日数
      // ----------------
      // 一の位に数字を代入
      $('.jsDaycount ' + number + '--ones').text((String(daysCount)).slice(-1));

      // 十の位に数字を代入
      if(daysCount < 10) {
        // 残日数一桁の場合は十の位に0を入れる
        $('.jsDaycount ' + number + '--tens').text(('0' + daysCount).slice(0, 1));
      }
      else {
        $('.jsDaycount ' + number + '--tens').text((String(daysCount)).slice(0, 1));
      }

      // 残時間数
      // ----------------
      // 一の位に数字を代入
      $('.jsHourcount ' + number + '--ones').text((String(hourCount)).slice(-1));

      // 十の位に数字を代入
      if(hourCount < 10) {
        // 残日数一桁の場合は十の位に0を入れる
        $('.jsHourcount ' + number + '--tens').text(('0' + hourCount).slice(0, 1));
      }
      else {
        $('.jsHourcount ' + number + '--tens').text((String(hourCount)).slice(0, 1));
      }

      // 残分数
      // ----------------
      // 一の位に数字を代入
      $('.jsMinutescount ' + number + '--ones').text((String(minCount)).slice(-1));

      // 十の位に数字を代入
      if(minCount < 10) {
        // 残日数一桁の場合は十の位に0を入れる
        $('.jsMinutescount ' + number + '--tens').text(('0' + minCount).slice(0, 1));
      }
      else {
        $('.jsMinutescount ' + number + '--tens').text((String(minCount)).slice(0, 1));
      }

      // 残秒
      // ----------------
      // 一の位に数字を代入
      $('.jsSecondcount ' + number + '--ones').text((String(secCount)).slice(-1));

      // 十の位に数字を代入
      if(secCount < 10) {
        // 残日数一桁の場合は十の位に0を入れる
        $('.jsSecondcount ' + number + '--tens').text(('0' + secCount).slice(0, 1));
      }
      else {
        $('.jsSecondcount ' + number + '--tens').text((String(secCount)).slice(0, 1));
      }
    }
  }, 1000)
}
