<div class="layout-single-copy" <?php if($theid = $block["html_id"]) { echo 'id="'.$theid.'" '; } ?>style="background-image:url(<?php echo $block['background_image']['url']; ?>);height:<?php echo $block['background_image']['height']; ?>px;">
  <?php echo $block['copy']; ?>
</div>