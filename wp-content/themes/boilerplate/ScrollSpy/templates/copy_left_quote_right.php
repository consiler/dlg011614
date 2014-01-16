<?php
/* Layout Variables
 * copy
 * quote
 * quoted_person_name
 * quoted_person_title
 */
$copy = $block["copy"];
$quote = $block["quote"];
$quoted_person_name = $block["quoted_person_name"];
$quoted_person_title = $block["quoted_person_title"];
?>
<div id="story-our-clients">
  <div id="story-our-clients-copy">
    <?php echo $copy; ?>
  </div>
  <div id="story-our-clients-testimonial-slider">
    <blockquote><?php echo $quote; ?></blockquote>
    <div class="testifier-name"><?php echo $quoted_person_name; ?></div>
    <div class="testifier-title"><?php echo $quoted_person_title; ?></div>
  </div>
</div>