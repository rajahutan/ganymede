<div id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
  <?php
    if ( has_post_thumbnail() ) {
      echo '<div class="featured-image">';
      the_post_thumbnail();
      echo '</div>';
    } 
  ?>
  <h2 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php echo the_title('','',FALSE); ?></a></h2>
  <?php

    // if (is_new_day()){
    //   $date_url = get_the_date('Y/m/d');
      
    //   if(date('Y/m/d') == $date_url){
    //     $tmpvar = the_date('d-m','','',FALSE); // anders werkt is_new_day niet
    //     echo '<p class="the_date"><a href="/'.$date_url.'">vandaag</a></p>';
    //   } else {
    //     echo '<p class="the_date"><a href="/'.$date_url.'">'.the_date('d-m','','',FALSE).'</a></p>';
    //   }
    // }

    the_content();
  ?>
</div>
