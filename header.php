<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php wp_title( ' - ', true, 'right' ); ?>Equifax</title>

    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/dist/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/dist/favicon.ico">

    <!-- OGt -->
    <meta property="og:title" content="Equifax">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_ES">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/dist/images/og.jpg">
    <meta property="og:description" content="Celcom TVI es un importante proveedor de mensajería de texto (SMS) para los medios de televisión y radios ofreciendo todos los servicios de interactividad del mercado">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <!-- /OG -->    

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/styles/main.css">
    
    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/vendor/modernizr.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">

    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-K4PR5Q"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K4PR5Q');</script>
    <!-- End Google Tag Manager -->
    
    <?php wp_head(); ?>
  </head>
  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <?php if(is_home()){ ?>
        <div class="pattern-flow">
          <ul>
            <li><a href="/informe-platinum/">EVALÚA TUS CLIENTES</a></li>
            <li><a href="/plataforma-cobranza-dicom/">PUBLICA TUS MOROSOS</a></li>
            <li><a href="/marketing-service/">MARKETING SERVICE</a></li>
            <li><a href="/gerenciamiento-de-cartera/">GERENCIAMIENTO DE CARTERA</a></li>
            <li><a href="/safe-online/">SAFE ONLINE</a></li>
            <li><a href="/comex/">COMEX</a></li>
            <li><a href="/easycheck/">EASYCHECK</a></li>
            <li><a href="/malla-societaria/">MALLA SOCIETARIA</a></li>
          </ul>
        </div>
    <?php } ?>
    <header>
      <div class="text-left container">
        <!--  -->
        <?php if(is_home()){ ?>
          <a href="#top" class="ancla"><span class="logo"></span></a>
          <span class="menu- pull-right"></span>
        <?php }else{ ?>
          <a href="<?php echo home_url(); ?>"><span class="logo"></span></a>
        <?php } ?>
      </div>
    </header>
