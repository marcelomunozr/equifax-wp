<?php get_header(); ?>

	<section class="top" id="top">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="text-left">
              <h1>Mira lo que otros no ven</h1>
              <p>Accede a nuestros servicios y conoce a tus clientes antes de tomar decisiones. <br><strong>Queremos que tu negocio, sea un buen negocio.</strong></p>
              <div class="row">
                <div class="col-md-6">
                  <div class="clear40"></div>
                  <div class="row">
                    <div class="col-md-11">
                      <img src="<?php bloginfo('template_url'); ?>/dist/images/dscto@2x.png" alt="Obtén un 10% de Descuento" class="img-responsive img-center">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <!-- FORM ZONE -->
                  <div class="form-zone">                  
                    <?php echo do_shortcode('[contact-form-7 id="43" title="Alguna Duda"]'); ?>
                  </div>
                  <!-- FORM ZONE END -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <span class="paquete"></span>
          </div>
        </div>
      </div>
    </section>

    <div class="go-services">
      <div class="text-center">
        <a href="#cajas" class="ancla"><strong>CONOCE AQUÍ</strong> NUESTROS SERVICIOS PARA PYMES</a>
        <div class="clear10"></div>
        <a href="#cajas" class="ancla"><span class="arrow-down"></span></a>
      </div>
    </div>

    <section class="cajas" id="cajas">
      <div class="meh-zone">
        <div class="form-zone">
          <?php echo do_shortcode('[contact-form-7 id="43" title="Alguna Duda"]'); ?>
          <div class="clearfix"></div>
        </div>
        <div class="btn-meh"></div>
      </div>

      <div class="container relative">
        <img src="<?php bloginfo('template_url'); ?>/dist/images/dscto-absolute.png" alt="Obtén un 10% de Descuento" class="absolute-dscto">
        <div class="text-center">
          <h2>NUESTROS SERVICIOS</h2>
          <p>Queremos que tu negocio, sea un buen negocio.</p>
          <img src="<?php bloginfo('template_url'); ?>/dist/images/dscto-absolute@2x.png" alt="Obtén un 10% de Descuento" class="relative-dscto img-responsive img-center">
        </div>
        <div class="clear40"></div>

  		<?php get_template_part( '/parts/destacados');?>

        <div class="clear20"></div>

  		<?php get_template_part( '/parts/servicios');?>
      </div>
    </section>

<?php get_footer(); ?>