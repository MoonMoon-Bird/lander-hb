// box modal
$(document).ready(function() {
    $('#update').on('click', function() {
        $("#modal02").hide();
    });
    $('#update001').on('click', function() {
      $("#modal001").hide();
  });
});

// scroll to
    function scrollTo(a) {
    if ($("#" + a).length) {
        var c = $("#" + a).offset();
        var b = c.top;
        $("html,body").animate({ scrollTop: b }, { duration: "slow" });
    }
}
// hide elements
    $(document).ready(function () {
  $(".answer_btn--1").click(function () {
    $("#question1").fadeOut("slow", function () {
      $("#question2").fadeIn("slow");
    });
  }),
    $(".answer_btn--2").click(function () {
      $("#question2").fadeOut("slow", function () {
        $("#question3").fadeIn("slow");
      });
    }),
    $(".answer_btn--3").click(function () {
      scrollTo("id1"),
        $("#main_content").fadeOut("slow", function () {
          $("#check_answer").fadeIn(),
            setTimeout(function () {
              $("#res1").fadeIn(1e3);
            }, 1000),
            setTimeout(function () {
              $("#res2").fadeIn(1e3);
            }, 2000),
            setTimeout(function () {
              $("#res3").fadeIn(1e3);
            }, 3000),
            setTimeout(function () {
              $("#check_answer").fadeOut("slow", function () {
                "undefined" != typeof roulette_ini
                  ? rouletteRoot._init()
                  : "undefined" != typeof box_ini && boxRoot._init(),
                  $("#wrapper_box").fadeIn();
                  $("#box").fadeIn();
                  $("#modal001").show();
              });
            }, 4100);
        });
    });
});
// boxes
var count = 1;
$(function() {
    $(".try").click(function() {
        if (count < 2) {
            $("#cntVal").html(3-count);
            $(this).addClass('abierta');
            count++;
            setTimeout(function() {
                $("#modal02").show();
                var sc2 = document.getElementById("success02");
                sc2.className += " animate";
                var sctip02 = document.getElementById("successtip02");
                sctip02.className += " animateSuccessTip";
                var md2 = document.getElementById("modal02");
                md2.className += " visible";
            }, 1500);
        } else {
            $(this).addClass('abierta');
            $(this).addClass('premiazo');
            $(".try").on('click touchstart', function (e) {
              e.preventDefault();
            return false;
          });
            setTimeout(function() {
              $(".div_img_gift, .img_gift").fadeIn("slow", function(){
                setTimeout(function() {
                var modal03 = document.getElementById("modal03").className += " visible";
            }, 2010);
          });
        }, 2000);
        }
    });
});


var counter = 1;
$(document).ready(function() {
    $('#update').on('click', function() {
        if (counter == 1) {
            counter++;
            $('#cntVal').html(function(i, val) {
                return +val - 1
            });
        }
    });
});
