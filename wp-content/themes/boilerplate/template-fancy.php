<?php
/*
 * Template Name: Dynamic Page Template
 */
define('TEMPL_PATH','scrollspy/templates/');
function t_err($str) {
  echo '<div class="template-error">'.$str.'</div>';
}
get_header(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/glide.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scrollspy.js"></script>
<div id="internal-wrap">
  <?php
    if(get_field('header_size') == 'large') {
      get_template_part('template', 'large-internal-header');
    } else {
      get_template_part('template', 'internal-header');
    }
  ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post();
  get_template_part('template', 'anchor-bar');
  ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered shadow">
      <?php
      //Repeater: Anchor Groups
      if(get_field("anchor_groups")) {
        while(has_sub_field("anchor_groups")) {
          //Flexible Content: Blocks
          //Get anchor data for block group
          $anchor_name = get_sub_field("anchor_name");
          $anchor_id = get_sub_field("anchor_id");
          echo '<div id="'.$anchor_id.'-wrap">';
          foreach(get_sub_field("blocks") as $block) {
            //Flexible Content: Blocks
            $grl = $block['acf_fc_layout'];
            $allowed_layouts = array("single_copy", "copy_left_quote_right", "indexed_slider", "stats_copy_pt");
            if(in_array($grl, $allowed_layouts))
              include(TEMPL_PATH.$grl.".php");
            else
              t_err("Layout ".$grl." not in allowed layouts.");
          }
          echo '</div>';
        }
      } else {
        t_err("No Anchor Groups.");
      }
      ?>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/glide.js"></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/scrollspy.js'></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/dynamic.js"></script>
<?php get_footer(); ?>