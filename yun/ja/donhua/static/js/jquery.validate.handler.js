$(document).ready(function () {
    $.validator.addMethod('tel',
    function(value, element) {
        return this.optional(element) || /^(0[5-9]0[0-9]{8}|0[1-9][1-9][0-9]{7})$/.test(value.replace(/[━.*‐.*―.*－.*\-.*ー.*\-]/gi,''));
    });

    $.validator.addMethod('hiragana',
    function(value, element) {
        return this.optional(element) || /^[ぁ-んー　]*$/.test(value);
    });

    $.validator.addMethod('emailcst',
    function(value, element, regexp) {
        return /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(value);
    });

    $.validator.addMethod('emaildomain',
    function(value, element, regexp) {
      let status = true;
      var mail = $('input[name="Mail"]').val();
      $.ajax({
        url: '/online/check_validation_ajax.php',
        type : 'POST',
        async: false,
        cache: false,
        data: {
          'mail': mail
        },
      }).done(function(result) {
        if (result == 'false') {
          status = false;
        }
      });
      return status;
    });

    $.validator.addMethod('emailtcs',
    function(value, element, regexp) {
      let status = true;
      var mail = $('input[name="Mail"]').val();
      var path = $('input[name="ret_path"]').val();
      $.ajax({
        url: '/online/check_validation_tcs.php',
        type : 'POST',
        async: false,
        cache: false,
        data: {
          'mail': mail
          ,'path': path
        },
      }).done(function(result) {
        if (result == 'false') {
          status = false;
        }
      });
      return status;
    });

    $.validator.addMethod('C02cst',
    function(value, element, regexp) {
        value = value.replace(/\s+/g, "");
        return /^(?!上野由洋).*$/.test(value) && /^(?!LINE).*$/i.test(value) && /^(?!お寿司会).*$/i.test(value);
    });

    $('#applyForm1 input').tooltipster({
        trigger: 'custom',
        onlyOne: false,
        position: 'bottom',
    });

    $('#applyForm1 div').tooltipster({
        trigger: 'custom',
        onlyOne: false,
        position: 'bottom',
    });

    $('#applyForm1 .formArea__selectItem').tooltipster({
        trigger: 'custom',
        onlyOne: false,
        position: 'bottom',
    });

    $('#applyForm2 input').tooltipster({
      trigger: 'custom',
      onlyOne: false,
      position: 'bottom',
    });

    $('#applyForm2 div').tooltipster({
      trigger: 'custom',
      onlyOne: false,
      position: 'bottom',
    });

    $('#applyForm2 .formArea__selectItem').tooltipster({
      trigger: 'custom',
      onlyOne: false,
      position: 'bottom',
    });

  setTimeout(function () {
    $("#applyForm1").validate({
        rules: {
            NameSei: {
                required: true
            },
            NameMei: {
                required: true
            },
            RubySei: {
                hiragana: true,
                required: true
            },
            RubyMei: {
                hiragana: true,
                required: true
            },
            Mail: {
                required: true,
                email: true,
                emailcst: true,
                emaildomain: true,
                emailtcs: true,
                remote: {
                  url: "https://flc-event.com/" + $('input[name="Code"]').val() + "/valid-event-entry",
                  data: {
                    mail: function() {
                      return $('input[name="Mail"]').val();
                    }
                  }
                }
            },
            MobileTel: {
                required: true,
                minlength: 11,
                number: true,
            },
            C02: {
                C02cst: true,
            },
            C01: {
                required: true,
            },
        },
        messages: {
            NameSei: {
                required: "お名前(姓)を入力してください。"
            },
            NameMei: {
                required: "お名前(名)を入力してください。"
            },
            RubySei: {
                hiragana: "ひらがなで入力してください。",
                required: "ふりがな(姓)を入力してください。"
            },
            RubyMei: {
                hiragana: "ひらがなで入力してください。",
                required: "ふりがな(名)を入力してください。"
            },
            Mail: {
                required: "メールアドレスを入力してください。",
                email: "Eメールの形式で入力してください。",
                emailcst: "Eメールの形式で入力してください。",
                emaildomain: "メールアドレスの@以降をご確認ください。",
                emailtcs: "既にお申込み済みです。",
                remote: "本日、既にお申込み済みです。",
            },
            MobileTel: {
                required: "電話番号を入力してください。",
                number: "半角数字11桁で入力してください。",
                minlength: "半角数字11桁で入力してください。",
            },
            C02: {
                C02cst: "ご紹介者を正しく入力してください。",
            },
            C01: {
                required: "参加方法を選択してください。",
            },
        },
        errorPlacement: function (error, element) {
            var lastError = $(element).data('lastError'),
                newError = $(error).text();

            $(element).data('lastError', newError);

            if(newError !== '' && newError !== lastError){
                $(element).tooltipster('content', newError);
                $(element).tooltipster('show');
            }
        },
        success: function (label, element) {
            $(element).tooltipster('hide');
        },
        submitHandler: function(form) {
          if ($('input:hidden[name=C01]').length && !$('[name=C01]:hidden').val()) {
            var ele = $(".js-method-select");

            if (!(ele.length)) {
              ele = $(".formArea__selectItem");
            }

            var lastError = ele.data('lastError');

            ele.data('lastError', '参加方法を選択してください。');

            if('参加方法を選択してください。' !== lastError){
                ele.tooltipster('content', '参加方法を選択してください。');
            }
            ele.tooltipster('show');
          } else {
             form.submit();
          }
        },
    });

    $("#applyForm2").validate({
      rules: {
        NameSei: {
          required: true
        },
        NameMei: {
          required: true
        },
        RubySei: {
          hiragana: true,
          required: true
        },
        RubyMei: {
          hiragana: true,
          required: true
        },
        Mail: {
          required: true,
          email: true,
          emailcst: true,
          emaildomain: true,
          emailtcs: true,
          remote: {
            url: "https://flc-event.com/" + $('input[name="Code"]').val() + "/valid-event-entry",
            data: {
              mail: function() {
                return $('input[name="Mail"]').val();
              }
            }
          }
        },
        MobileTel: {
          required: true,
          minlength: 11,
          number: true,
        },
        C02: {
          C02cst: true,
        },
        C01: {
          required: true,
        },
      },
      messages: {
        NameSei: {
          required: "お名前(姓)を入力してください。"
        },
        NameMei: {
          required: "お名前(名)を入力してください。"
        },
        RubySei: {
          hiragana: "ひらがなで入力してください。",
          required: "ふりがな(姓)を入力してください。"
        },
        RubyMei: {
          hiragana: "ひらがなで入力してください。",
          required: "ふりがな(名)を入力してください。"
        },
        Mail: {
          required: "メールアドレスを入力してください。",
          email: "Eメールの形式で入力してください。",
          emailcst: "Eメールの形式で入力してください。",
          emaildomain: "メールアドレスの@以降をご確認ください。",
          emailtcs: "既にお申込み済みです。",
          remote: "本日、既にお申込み済みです。",
        },
        MobileTel: {
          required: "電話番号を入力してください。",
          number: "半角数字11桁で入力してください。",
          minlength: "半角数字11桁で入力してください。",
        },
        C02: {
          C02cst: "ご紹介者を正しく入力してください。",
        },
        C01: {
          required: "参加方法を選択してください。",
        },
      },
      errorPlacement: function (error, element) {
        var lastError = $(element).data('lastError'),
            newError = $(error).text();

        $(element).data('lastError', newError);

        if(newError !== '' && newError !== lastError){
          $(element).tooltipster('content', newError);
          $(element).tooltipster('show');
        }
      },
      success: function (label, element) {
        $(element).tooltipster('hide');
      },
      submitHandler: function(form) {
        if ($('input:radio[name=C01]').length && !$('[name=C01]:checked').val()) {
          var ele = $(".js-method-select");

          if (!(ele.length)) {
            ele = $(".formArea__selectItem");
          }

          var lastError = ele.data('lastError');

          ele.data('lastError', '参加方法を選択してください。');

          if('参加方法を選択してください。' !== lastError){
              ele.tooltipster('content', '参加方法を選択してください。');
          }
          ele.tooltipster('show');
        } else {
           form.submit();
        }
      },
    });
  }, 500);

    $(".js-method-select").click(function() {
      $(".js-method-select").tooltipster('hide');
    });

    $(".formArea__selectItem").click(function() {
      $(".formArea__selectItem").tooltipster('hide');
    });
});
