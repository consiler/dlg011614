<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/foundation<?php if(MINIFY) echo '.min'; ?>.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/foundation.orbit<?php if(MINIFY) echo '.min'; ?>.js"></script>
<?php if(is_front_page()) { ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slider<?php if(MINIFY) echo '.min'; ?>.js"></script>
<?php } ?>
<script>
  //GA
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-44776256-1']);
  _gaq.push(['_setDomainName', 'dialoggroup.com']);
  _gaq.push(['_setAllowLinker', true]);
  </script>
<script type="text/javascript">
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>