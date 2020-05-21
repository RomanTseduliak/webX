<?php
       $type = get_post_meta( get_the_ID(), 'posada', true);
      $surname_name = get_post_meta( get_the_ID(), 'surname_name', true);
      $specialization = get_post_meta( get_the_ID(), 'specialization', true);
?>    

  <?php 
echo get_the_post_thumbnail(get_the_ID(),'worker-list');
?>
 
     
    
 <article class="product">
            <img src="<?php echo get_template_directory_uri()?>/img/MIK9405.png" alt="human" />
            <div class="product_p"> <?=$type?></div>
            <div class="product_h"> <?=$surname_name?></div>
            <img class="work_a_line" src="<?php echo get_template_directory_uri()?>/img/Line80.svg" alt="line"/>
            <div class="product_p2">
               <?=$specialization?>
            </div>
          </article>