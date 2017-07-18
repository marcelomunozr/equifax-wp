<?php get_header(); ?>
<?php the_post(); ?>



	<?php if ( is_page( 'informe-platinum' ) ) {?>
			
	<?php }elseif ( is_page( 'plataforma-cobranza-dicom' ) ) { ?>
			
	<?php }elseif ( is_page( 'marketing-service' ) ) { ?>
      
  <?php }elseif ( is_page( 'gerenciamiento-de-cartera' ) ) { ?>
      
  <?php }elseif ( is_page( 'safe-online' ) ) { ?>
      
  <?php }elseif ( is_page( 'comex' ) ) { ?>
      
  <?php }elseif ( is_page( 'easycheck' ) ) { ?>
      
  <?php }elseif ( is_page( 'malla-societaria' ) ) { ?>
      
  <?php } ?>

  <section class="interior bg<?php echo get_field('numero');?>">
    <div class="container relative">
      <img src="<?php bloginfo('template_url'); ?>/dist/images/dscto-absolute.png" alt="Obtén un 10% de Descuento" class="absolute-dscto">
      <div class="text-center">
        
        <h1><span class="ico<?php echo get_field('numero');?>"></span><?php the_title(); ?></h1>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <!-- <p><?php echo get_field('bajada-de-titulo'); ?></p> -->
            <?php echo get_field('la-bajada-de-titulo'); ?>
          </div>
        </div>
        <img src="<?php bloginfo('template_url'); ?>/dist/images/dscto-absolute@2x.png" alt="Obtén un 10% de Descuento" class="relative-dscto img-responsive img-center">
        <div class="clear30"></div>
        
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1 inter-text">
          <div class="row">
            <div class="col-md-6">
              <div class="clear50"></div>
              <?php the_content(); ?>
            </div>
            <div class="col-md-6">
              <div class="form-zone-int">
                <h6>INGRESA LOS DATOS DE TU EMPRESA AQUÍ</h6>
                <?php echo do_shortcode('[contact-form-7 id="39" title="Formulario"]'); ?>
              </div>
              <!-- <h6>¡Solicita ahora un ejecutivo para tu empresa!</h6> -->          
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  

<?php get_footer(); ?>