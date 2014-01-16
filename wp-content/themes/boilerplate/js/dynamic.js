$(document).ready(function(){
  if($(".promo-slider-orbit").length > 0) {
    $(".promo-slider-orbit").each(function(){
      $(this).on("ready.fndtn.orbit", function(event) {
        if($('.slider').length > 0) {
          $('.slider').glide({
            autoplay: 5000,
            arrows: false,
            hoverpause: false
          });
        }
        $('.orbit-glowing-bullets > li').each(function(i, blt) {
          $(this).html(''+(i+1));
        });
      });
    });
  }
  $(document).foundation();
  $('body').scrollspy({
    min: $('#anchor-bar-wrap').offset().top,
    max: 999999,
    onEnter: function(element, position) {
      $("#anchor-bar-wrap").addClass('fixed');
    },
    onLeave: function(element, position) {
      $("#anchor-bar-wrap").removeClass('fixed');
    }
  });
  $('#internal-lower > div').each(function(i) {
    var position = $(this).position();
    $(this).scrollspy({
      min: position.top,
      max: position.top + $(this).height(),
      onEnter: function(element, position) {
        $("#"+element.id+"-watcher").addClass("active");
      },
      onLeave: function(element, position) {
        $("#"+element.id+"-watcher").removeClass("active");
      }
    });
  });
});