$(window).scroll(function() {
  if ($(document).scrollTop() > window.innerHeight / 2) {
    $("#nav").removeClass("bg-transparent");
    $("#nav").addClass("bg-black");
  } else {
    $("#nav").removeClass("bg-black");
    $("#nav").addClass("bg-transparent");
  }
});

// $(window).scroll(function() {
//   if ($(document).scrollTop() > window.innerHeight) {
//     $("#navLogo").css({
//       "max-height": "50px"
//     });
//   } else {
//     $("#navLogo").css({
//         "max-height": "100px"
//       });
//   }
// });
