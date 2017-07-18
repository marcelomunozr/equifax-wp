<?php 
	//Template name: Gracias
?>
<?php get_header(); ?>
<?php the_post(); ?>

<?php $numero = 0; ?>
<?php if ( is_page( 'gracias-informe-platinum' ) ) {?>
		<?php $numero = 1; ?>
<?php }elseif ( is_page( 'gracias-plataforma-cobranza-dicom' ) ) { ?>
		<?php $numero = 2; ?>
		
<?php }elseif ( is_page( 'gracias-marketing-service' ) ) { ?>
		<?php $numero = 3; ?>
      
<?php }elseif ( is_page( 'gracias-gerenciamiento-de-cartera' ) ) { ?>
		<?php $numero = 4; ?>
  
<?php }elseif ( is_page( 'gracias-safe-online' ) ) { ?>
		<?php $numero = 5; ?>
  
<?php }elseif ( is_page( 'gracias-comex' ) ) { ?>
		<?php $numero = 6; ?>
  
<?php }elseif ( is_page( 'gracias-easycheck' ) ) { ?>
		<?php $numero = 7; ?>
  
<?php }elseif ( is_page( 'gracias-malla-societaria' ) ) { ?>
		<?php $numero = 8; ?>
  
<?php } elseif ( is_page( 'gracias' ) ) { ?>
		<?php $numero = 6; ?>
  
<?php }?>


	<section class="interior bg<?php echo $numero;?> gracias">
		<div class="container">
		  <div class="text-center">
		    <?php if(!is_page( 'gracias' )){ ?><span class="ico<?php echo $numero;?>"></span><?php } ?>
		    <h1>Gracias por dejarnos tus datos.</h1>
		    <p>Un ejecutivo se contactará para que puedas saber más sobre nosotros.</p>
		  </div>
		</div>
	</section>  

    <section class="cajas gracias" id="cajas">
		<div class="container">
			<h3 style="color: #fff;" class="text-center">Conoce también sobre:</h3>
			<div class="clear20"></div>
  			<?php get_template_part( '/parts/destacados');?>
		</div>
	</section>  


<?php get_footer(); ?>