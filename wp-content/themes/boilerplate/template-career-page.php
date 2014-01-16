<?php
/*
 * Template Name: Careers Page
 */
get_header(); ?>
<div id="internal-wrap">
  <?php get_template_part('template', 'internal-header'); ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
      <div id="internal-main" class="internal-main-fullwidth">
        <div id="career-page">
          <h2><?php the_field('top_text'); ?></h2>
          <img src="<?php the_field('values_image');?>"/>
          <div id="career-learn-more-wrap">
            <div id="career-learn-more">
              <a href="/about/leadership/"><span class="career-learn-more-button">Learn more about our leadership</span></a>
            </div><!-- career-learn-more -->
          </div><!-- career-learn-more-wrap -->
          <div id="value">
            <h2><?php the_field('center_text');?></h2>
            <h3><?php the_field('sub_center_text');?></h3>
          </div><!-- value -->
            <div id="three-column" class="block-grid-env">
              <ul class="small-block-grid-1 medium-block-grid-3">
                <li class="threecolumn-cell">
                  <img src="<?php bloginfo('template_url')?>/images/career/offer1.png">
                  <h2 class="values">Excellent Work</h2>
                  <p>The opportunity to work on cutting edge problems for leading companies.</p>
                </li>
                <li class="threecolumn-cell">
                  <img src="<?php bloginfo('template_url')?>/images/career/offer2.png">
                <h2 class="values">Lifestyle Design</h2>
                <p>The opportunity to develop customizable, integral development plan that.</p>
                </li>
                <li class="threecolumn-cell">
                  <img src="<?php bloginfo('template_url')?>/images/career/offer3.png">
                <h2 class="values">Purpose</h2>
                <p>Helping to write at least a portion of the book on 21st century management and helping to create the abundant world of the future.</p>
                </li>
              </ul>
          </div><!-- three-column -->
          
         <div id="job-listings-wrap">
          <div id="open-jobs-image">
            <img id="open-jobs"src="<?php bloginfo('template_url')?>/images/career/current-jobs.png">
          </div>
          <div id="job-listings">
           <h2 id="position">Position</h2>
           <h2 id="location">Location</h2>
               <section id="jobs">            
                <? $args = array( 'post_type' => 'job_listings' );
                   $loop = new WP_Query( $args );
                   while ( $loop->have_posts() ) : $loop->the_post();?>
                  <header class="jobs-header">
                    <div class="jobs-pos"><?php the_field('position');?></div>
                    <div class="jobs-loc"><?php the_field('location');?></div>
                    <div class="jobs-item-image">
                      <a href="<?php the_field('pdf');?>">
                        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/12/job-detail-button_16.png"/>
                      </a>
                    </div>
                  </header>
                    <hr class="embosed">
                   <?php endwhile; ?>
              </section>
            </div> <!-- job-listings -->
            <div id="jobs-contact">
              <p>Please send all inquires to:<script type="text/javascript">
  document.write("<a href=\"mail" + "to:" + new Array("jobs","dialoggroup.com").join("@") + "\">" + "Jobs@DialogGroup.com" + "</" + "a>");
</script></p>
            </div>
          </div><!-- job-listings-wrap -->

          <div id="career-testimonial" class="centered">
                  <div class="slider">
                    <ul class="slides">
                      <li class="slide testimonial"></li>
                      
                    </ul>

                  </div>
                </div>
            </div>
          
        </div><!-- career-page -->
      </div><!--internal-main-->
    </div><!-- internal-lower -->
  </div><!-- internal-lower-wrap -->
</div><!-- internal-wrap -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/glide.js"></script>

<script type="text/javascript">

    $('.slider').glide({
      autoplay: 'false',
      arrows: '.slider',
      nav: 'false',
      arrowRightText: '',
      arrowLeftText: ''
    });

</script>
<?php get_footer(); ?>