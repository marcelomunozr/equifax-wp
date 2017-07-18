
<?php //print_r($query) ;?>

        <div class="col-zones">
          <div class="row">
        	<?php $query4 = get_page_by_path('gerenciamiento-de-cartera'); ?>
            <a href="<?php echo get_permalink($query4->ID); ?>">
            <div class="col-five">
              <div class="coles vcenter col1">
                <div class="cont">
                  <span class="ico<?php the_field('numero', $query4->ID);?>"></span>
                  <div class="texto">
                    <h4><?php echo $query4->post_title; ?></h4>
                  </div>
                </div>
              </div>
            </div>
            </a>
        	<?php $query5 = get_page_by_path('safe-online'); ?>
            <a href="<?php echo get_permalink($query5->ID); ?>">
            <div class="col-five">
              <div class="coles vcenter col2">
                <div class="cont">
                  <span class="ico<?php the_field('numero', $query5->ID);?>"></span>
                  <div class="texto">
                    <h4><?php echo $query5->post_title; ?></h4>
                  </div>
                </div>
              </div>
            </div>
            </a>
        	<?php $query6 = get_page_by_path('comex'); ?>
            <a href="<?php echo get_permalink($query6->ID); ?>">
            <div class="col-five">
              <div class="coles vcenter col3">
                <div class="cont">
                  <span class="ico<?php the_field('numero', $query6->ID);?>"></span>
                  <div class="texto">
                    <h4><?php echo $query6->post_title; ?></h4>
                  </div>
                </div>
              </div>
            </div>
            </a>
        	<?php $query7 = get_page_by_path('easycheck'); ?>
            <a href="<?php echo get_permalink($query7->ID); ?>">
            <div class="col-five">
              <div class="coles vcenter col4">
                <div class="cont">
                  <span class="ico<?php the_field('numero', $query7->ID);?>"></span>
                  <div class="texto">
                    <h4><?php echo $query7->post_title; ?></h4>
                  </div>
                </div>
              </div>
            </div>
            </a>
        	<?php $query8 = get_page_by_path('malla-societaria'); ?>
            <a href="<?php echo get_permalink($query8->ID); ?>">
            <div class="col-five">
              <div class="coles vcenter col5">
                <div class="cont">
                  <span class="ico<?php the_field('numero', $query8->ID);?>"></span>
                  <div class="texto">
                    <h4><?php echo $query8->post_title; ?></h4>
                  </div>
                </div>
              </div>
            </div>
            </a>

          </div>
        </div>
