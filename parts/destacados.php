
<?php //print_r($query) ;?>

        <div class="row">
        	<?php $query1 = get_page_by_path('informe-platinum'); ?>
          <div class="col-sm-4">
            <div class="box caja<?php the_field('numero', $query1->ID);?>">
              <div class="cont text-center">
                <span class="ico<?php the_field('numero', $query1->ID);?>"></span>
                <h2><?php echo $query1->post_title; ?></h2>
                <p><?php echo the_field('introduccion', $query1->ID);?></p>
                <a href="<?php echo get_permalink($query1->ID); ?>">más información aquí</a>
              </div>
            </div>
          </div>
        	<?php $query2 = get_page_by_path('plataforma-cobranza-dicom'); ?>
          <div class="col-sm-4">
            <div class="box caja<?php the_field('numero', $query2->ID);?>">
              <div class="cont text-center">
                <span class="ico<?php the_field('numero', $query2->ID);?>"></span>
                <h2><?php echo $query2->post_title; ?></h2>
                <p><?php echo the_field('introduccion', $query2->ID);?></p>
                <a href="<?php echo get_permalink($query2->ID); ?>">más información aquí</a>
              </div>
            </div>
          </div>
        	<?php $query3 = get_page_by_path('marketing-service'); ?>
          <div class="col-sm-4">
            <div class="box caja<?php the_field('numero', $query3->ID);?>">
              <div class="cont text-center">
                <span class="ico<?php the_field('numero', $query3->ID);?>"></span>
                <h2><?php echo $query3->post_title; ?></h2>
                <p><?php echo the_field('introduccion', $query3->ID);?></p>
                <a href="<?php echo get_permalink($query3->ID); ?>">más información aquí</a>
              </div>
            </div>
          </div>
        </div>
