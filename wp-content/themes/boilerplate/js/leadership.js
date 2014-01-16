$(document).ready(function(){
  var banner = $("#leadership-banner");
  var banner_o = banner.offset();
  var current_state = 0;
  var mark_h = $('#mark-highlight', banner);
  var bob_h = $('#bob-highlight', banner);
  var rob_h = $('#rob-highlight', banner);
  var content_divs = [$('#default-content'), $('#mark-content'), $('#bob-content'), $('#rob-content')];
  var sidebar_divs = [$('#default-sidebar'), $('#mark-sidebar'), $('#bob-sidebar'), $('#rob-sidebar')];
  banner.mousemove(function(e) {
    var relX = e.pageX - banner_o.left;
    var relY = e.pageY - banner_o.top;
    if((relX >= 350-270*(relY/455)) && (relX <= 1010-270*(relY/455))) {
      if(relX <= 570-270*(relY/455)) {
        if(current_state != 1)
        {
          current_state = 1;
          mark_h.show();
          bob_h.hide();
          rob_h.hide();
          for(var i = 0; i < 4; i++)
          {
            if(i == current_state) {
              content_divs[i].show();
              sidebar_divs[i].show();
            } else {
              content_divs[i].hide();
              sidebar_divs[i].hide();
            }
          }
        }
      } else if(relX <= 790-270*(relY/455)) {
        if(current_state != 2)
        {
          current_state = 2;
          bob_h.show();
          mark_h.hide();
          rob_h.hide();
          for(var i = 0; i < 4; i++)
          {
            if(i == current_state) {
              content_divs[i].show();
              sidebar_divs[i].show();
            } else {
              content_divs[i].hide();
              sidebar_divs[i].hide();
            }
          }
        }
      } else if(relX <= 1010-270*(relY/455)) {
        if(current_state != 3)
        {
          current_state = 3;
          rob_h.show();
          bob_h.hide();
          mark_h.hide();
          for(var i = 0; i < 4; i++)
          {
            if(i == current_state) {
              content_divs[i].show();
              sidebar_divs[i].show();
            } else {
              content_divs[i].hide();
              sidebar_divs[i].hide();
            }
          }
        }
      }   
    } else {
      if(current_state != 0)
      {
        current_state = 0;
        rob_h.hide();
        bob_h.hide();
        mark_h.hide();
        for(var i = 0; i < 4; i++)
        {
          if(i == current_state) {
            content_divs[i].show();
            sidebar_divs[i].show();
          } else {
            content_divs[i].hide();
            sidebar_divs[i].hide();
          }
        }
      }
    }
  });
});