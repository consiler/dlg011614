  <?php
  if(get_field("anchor_groups")) {
      $groups = array();
      $g = 0;
      while(has_sub_field("anchor_groups")) {
        $g++;
        //Flexible Content: Blocks
        //Get anchor data for block group

        $groups[$g] = array('anchor_name' => get_sub_field("anchor_name"));
        $groups[$g]['anchor_id'] = get_sub_field("anchor_id");
      }
      if($g > 1) {
        ?>
<div id="anchor-bar-wrap">
  <ul id="anchor-bar" class="centered">
        <?php
        foreach($groups as $group) {
        ?>
    <li id="<?php echo $group['anchor_id']; ?>-wrap-watcher"><a href="#<?php echo $group['anchor_id']; ?>-wrap"><?php echo $group['anchor_name']; ?></a></li>
        <?php
        }
        ?>
  </ul>
</div>
        <?php
      }
    }
  ?>