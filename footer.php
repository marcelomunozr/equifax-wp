    <?php //$query = get_page_by_path('contacto'); ?>


  
    <footer>
      <div class="container">
        <div class="col-xs-6"><span class="efx"></span></div>
        <div class="col-xs-6 text-right">
          <p>Servicio al Cliente: 600 EQUIFAX (3784329)  |  equifax@equifax.cl</p>
        </div>
      </div>
    </footer>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/vendor.js"></script>
    
    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/plugins.js"></script>
    
    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/main.js"></script>



    <script>
      var conversionSelect = function(){
        var gracias = '';
        var str = location.href; 
        if(str.indexOf("informe-platinum") != -1){
          gracias = 'gracias-informe-platinum';
        } else if(str.indexOf("plataforma-cobranza-dicom") != -1) {
          gracias = 'gracias-plataforma-cobranza-dicom';
        } else if(str.indexOf("marketing-service") != -1) {
          gracias = 'gracias-marketing-service';
        } else if(str.indexOf("gerenciamiento-de-cartera") != -1) {
          gracias = 'gracias-gerenciamiento-de-cartera';
        } else if(str.indexOf("safe-online") != -1) {
          gracias = 'gracias-safe-online';
        } else if(str.indexOf("comex") != -1) {
          gracias = 'gracias-comex';
        } else if(str.indexOf("easycheck") != -1) {
          gracias = 'gracias-easycheck';
        } else if(str.indexOf("malla-societaria") != -1) {
          gracias = 'gracias-malla-societaria';
        }
        window.location = 'http://' +  window.location.hostname + '/' + gracias;
      };
    </script>

    <?php wp_footer(); ?>
  </body>
</html>