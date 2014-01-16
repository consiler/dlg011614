      <?php if (get_field('include_three_column')) { ?>
      <div id="three-column" class="block-grid-env">
        <?php if(get_field('three_column_data')): ?>
          <?php while(has_sub_field('three_column_data')): ?>
          <ul class="small-block-grid-1 medium-block-grid-3">
            <?php for($i = 1; $i <= 3; $i++) { ?>
              <li class="threecolumn-cell">
              <?php if($header = get_sub_field('header_'.$i)) { ?>
                <h4<?php $cs = get_page_template_slug(get_the_ID()); if($cs == "template-case-study-page.php") { echo ' class="cs"'; } ?>><?php echo $header; ?></h4>
                <?php if($copy = get_sub_field('copy_'.$i)) { ?>
                <?php echo $copy; ?>
                <?php } ?>
                <?php if(($cta = get_sub_field('cta_'.$i)) && ($cta_link = get_sub_field('cta_link_'.$i))) { ?>
                <a href="<?php echo $cta_link; ?>"><span class="light-grey-button"><?php echo $cta; ?></span></a>
                <?php } } ?>
            </li>
            <?php } ?>
          </ul>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php } ?>