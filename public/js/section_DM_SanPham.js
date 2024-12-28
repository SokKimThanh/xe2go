
/* Mã nguồn trang gallery */

// Gallery script
// $(document).ready(function () {

//     $(".filter-button").click(function () {
//         var value = $(this).attr('data-filter');

//         if (value == "all") {
//             //$('.filter').removeClass('hidden');
//             $('.filter').show('1000');
//         } else {
//             //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//             //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
//             $(".filter").not('.' + value).hide('3000');
//             $('.filter').filter('.' + value).show('3000');

//         }
//     });

//     if ($(".filter-button").removeClass("active")) {
//         $(this).removeClass("active");
//     }
//     $(this).addClass("active");

// });

$(document).ready(function () {
  $(".gallery-box").each(function () {
    var $gallery = $(this);

    $gallery.find(".filter-button").click(function () {
      var value = $(this).attr("data-filter");

      if (value == "all") {
        $gallery.find(".filter").show("1000");
      } else {
        $gallery
          .find(".filter")
          .not("." + value)
          .hide("3000");
        $gallery
          .find(".filter")
          .filter("." + value)
          .show("3000");
      }

      // Remove active class from all buttons and add to the clicked one
      $gallery.find(".filter-button").removeClass("active");
      $(this).addClass("active");
    });
  });
});
