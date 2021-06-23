<?php /* Template Name: customContact */ ?>

<?php get_header(); 


?>


<!-- content begin -->
<div id="content" class="no-padding">

<!-- section begin -->
<section id="section-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="intro-text text-center">
                    <h2>Cont&aacute;ctanos</h2>
                    <!--p>Send us an email vulputate bibendum justo sed, tincidunt quisque <br> dictum eget dolor vel maximus.</p-->
                </div>
                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" class="wpcf7-form" method="POST">
                    <div class="col-one-third">
                        <input type="hidden" value="send_email_main" name="action"/>
                        <input type="text" name="nombres" id="nombres" placeholder="Nombre">
                    </div>
                    <div class="col-one-third margin-one-third">
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="col-one-third">
                        <input type="text" placeholder="Teléfono"  name="telefono" id="telefono" maxlength="25">
                    </div>
                    <div class="col-full"><textarea placeholder="Mensaje" name="mensaje" maxlength="500"></textarea></div>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        <div class="divider-single"></div>
                        <button class="btn btn-primary btn-big">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- section close -->

<!-- section gmap begin -->
<section id="section-gmap" class="no-padding" style="display: none;">
    <div id="map-canvas" class="map-canvas"></div>
</section>
<!-- section gmap close -->

</div>
<!-- content close -->

<?php /*get_sidebar();*/ 
    
    if($_GET["statusemail"]=="S"){

        echo '<script type="text/javascript">';
        echo ' alert("Su mensaje fue enviado satisfactoriamente"); ';
        echo ' </script> ';
    }else if($_GET["statusemail"]=="N"){
        echo '<script type="text/javascript">';
        echo  'alert("Ocurrio un error al enviar el mensaje");';
        echo '</script>';
    }

?>
        
            

<?php get_footer(); ?>