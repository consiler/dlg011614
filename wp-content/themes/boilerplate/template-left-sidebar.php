        <?php if(get_field('include_left_sidebar')){ ?>
        <nav id="internal-main-nav">
          <ul>
            <?php $sidebar = get_field('left_sidebar'); if($sidebar == 'nav') include('template-child-sub-menu.php'); ?>
            <?php if($sidebar == 'jump'){ ?>
              <script>
              $(document).ready(function(){
                $('#internal-main-content h2').each(function(i,v){
                  $(v).attr('id', 'jump-heading-'+i);
                  $('#internal-main-nav > ul').append('<li><a href="#jump-heading-'+i+'">'+$(v).html()+'</a></li>');
                });
              });
              </script>
            <?php } ?>
          </ul>
        </nav>
        <?php } ?>