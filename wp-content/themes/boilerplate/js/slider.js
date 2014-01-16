jQuery(document).ready(function() {
  $("#fp-slideshow-container").on("ready.fndtn.orbit", function(event) {
    $(".orbit-prev").hide();
  });
  jQuery(document).foundation({
    orbit: {
      animation: 'fade',
      timer_speed: 2000,
      animation_speed: 500,
      slide_number: false,
      bullets: true,
      pause_on_hover: false,
      next_on_click: false,
      after_slide_change: function() {
        if($('.orbit-slides-container li:last-child').hasClass('active')) {
          $(".orbit-next").fadeOut(150);
          $(".orbit-timer").click();
        } else {
          $(".orbit-next").fadeIn(200);
        }
        if($('.orbit-slides-container li:first-child').hasClass('active')) {
          $(".orbit-prev").fadeOut(200);
        } else {
          $(".orbit-prev").fadeIn(200);
        }
      }
    }
  });
});