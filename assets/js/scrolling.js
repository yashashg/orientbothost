var one = "#4C4C54",
  two = "white",
  three = "#0d78e7",
  four = "#f88f18",
  five = "#bb6774";

$(window).on("scroll touchmove", function () {
  if ($(document).scrollTop() >= $("#one").position().top) {
    $("body").css("background", $("#one").attr("data-color"));
    $("body").css("color", $("#one").attr("data-colors"));
  }

  if ($(document).scrollTop() > $("#two").position().top) {
    $("body").css("background", $("#two").attr("data-color"));
    $("body").css("color", $("#two").attr("data-colors"));
  }
  if ($(document).scrollTop() > $("#three").position().top) {
    $("body").css("background", $("#three").attr("data-color"));
    $("body").css("color", $("#three").attr("data-colors"));
  }
  if ($(document).scrollTop() > $("#four").position().top) {
    $("body").css("background", $("#four").attr("data-color"));
  }
  if ($(document).scrollTop() >= $("#five").position().top) {
    $("body").css("background", $("#five").attr("data-color"));
  }
});
jackHarnerSig();
