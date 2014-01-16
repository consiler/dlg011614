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
  if($('#anchor-bar-wrap').length > 0) {
    var menuHeight = 30;
    $('#anchor-bar-wrap a').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,documentElement').animate({
            scrollTop: target.offset().top - menuHeight + 1
          }, 1000);
          return false;
        }
      }
    });
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
        min: position.top - menuHeight,
        max: position.top - menuHeight + $(this).height(),
        onEnter: function(element, position) {
          $("#"+element.id+"-watcher").addClass("active");
        },
        onLeave: function(element, position) {
          $("#"+element.id+"-watcher").removeClass("active");
        }
      });
    });
  }
});