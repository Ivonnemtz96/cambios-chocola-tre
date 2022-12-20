<main class="site-main page-spacing" >
    <!-- Photo Slider -->
    <div class="photo-slider container-fluid no-padding" id="inicio">
        <!-- Main Carousel -->
        <div id="main-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div role="listbox" class="carousel-inner">
                <div class="item active">
                    <img width="100%" height="1030" alt="slider" src="images/slider-1.jpg" />
                    <div class="carousel-caption">
                        <!-- <img data-animation="animated pulse" src="images/logo-white.png" alt="Chocola-tre" style="width:230px;" /> -->
                        <!-- <p data-animation="animated bounceInLeft">
                            El aroma perfecto
                        </p>
                        <p data-animation="animated bounceInRight">del cacao</p> -->
                        <!-- <a title="Ver más" href="about.php" data-animation="animated bounceInUp">Ver más</a> -->
                    </div>
                </div>

                <div class="item">
                    <img width="100%" height="1030" alt="slider" src="images/slider-3.jpg" />
                    <div class="carousel-caption">
                        <!-- <img data-animation="animated pulse" src="images/logo-white.png" alt="Chocola-tre" style="width:230px;" /> -->
                        <!-- <p data-animation="animated bounceInLeft">
                            El aroma perfecto
                        </p>
                        <p data-animation="animated bounceInRight">del cacao</p> -->
                        <!-- <a title="Ver más" href="about.php" data-animation="animated bounceInUp">Ver más</a> -->
                    </div>
                </div>

                <div class="item">
                    <img width="100%" height="1030" alt="slider" src="images/slider-2.jpg" />
                    <div class="carousel-caption">
                        <!-- <img data-animation="animated pulse" src="images/logo-white.png" alt="Chocola-tre" style="width:230px;" /> -->
                        <!-- <p data-animation="animated bounceInLeft">
                            el aroma perfecto
                        </p>
                        <p data-animation="animated bounceInRight">del cacao</p> -->
                        <!-- <a title="Ver más" href="about.php" data-animation="animated bounceInUp">Ver más</a> -->
                    </div>
                </div>
                <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </a>
                <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <!-- Main Carousel /-  -->
    </div>
    <!-- Photo Slider /- -->

    <!-- Welcome Section -->
    <div class="welcome-section container-fluid no-padding" id="nosotros">
        <div class="section-padding"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <img src="images/welcome.jpg" alt="welcome" width="457" height="700" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 wc-content-box">
                    <!-- <div class="welcome-header">
                        <span>Lo Mejor</span><br> <br>
                        <h5>Del</h5><br><br>
                        <h5>Cacao</h5>
                    </div> -->
                    <div class="welcome-content">
                        <div class="section-header left-header">
                            <h3>Sobre Nosotros</h3>
                            <!-- <h5>Nuestra Historia</h5> -->
                            <img src="images/section-seprator-1.png" alt="section-seprator" width="70" height="3" />
                            <p>
                                ¡Hola! Somos una empresa mexicana enfocados en la fabricación de chocolate, ubicados en
                                San José del Cabo, B.C.S. Partimos de cacao mexicano, criollo almendra blanca que
                                proviene de las haciendas cacaoteras mas grandes de Tabasco realizando el proceso
                                conocido como: De Grano - A Barra.
                                En Chocola.T te brindamos lo mejor del sabor y los beneficios del cacao criollo 100%
                                mexicano.
                            </p>
                            <a href="about.php" title="Ver más" class="read-more">Ver más</a>
                        </div>
                        <!-- Section Header /-  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Container /- -->
    </div>
    <!-- Welcome Section /- -->


    <div  id="productos" class="welcome-content" style="margin-top: 2rem;">
        <div class="section-header">
            <h3 style="text-align: center;">Productos</h3>
            <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15" />
        </div>
        <!-- Section Header /-  -->
    </div>

    <!-- PRODUCTOS CHCOLATRE -->
    <div id="productos menu-section" class="menu-section container-fluid" >

        <!-- Menu Section -->
        <?
        include('arrayProduct.php');

        foreach ($productos as $categoria => $articulos) {
            if ($categoria != "Empaque") {
                
            

    ?>
        <div   class="container">
            <div class="section-header">
                <h3 id="<?php echo $categoria; ?>"><?php echo $categoria; ?></h3>
                <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15" />

            </div>
            <!-- Section Header /-  -->
        </div>
        <!-- Container /- -->

        <div class="row text-center">

            <?php
        foreach ($articulos as $key => $value) {
           
            // echo "<pre>";
            // var_dump($value);
            // echo "</pre>";
           

            if ($value['activo'] == "1"){
        ?>

            <div class="col-md-4 col-sm-6 col-xs-12" style="height: auto !important">
                <div class="productos">
                    <img style=" height: 400px;" class="product" src="<?php echo $value['imagen']; ?>"
                        alt="image not found" />

                    <!-- <a href="detail.php?cat=<?php echo urlencode($categoria); ?>&prod=<?php echo $value['id']; ?>"
                title="Ver producto">Ver producto</a> -->

                    <h3>
                        <a style="color:#3d180b !important;"
                            href="detail.php?cat=<?php echo urlencode($categoria); ?>&prod=<?php echo $value['id']; ?>"><?php echo $value['nombre']; ?></a>
                    </h3>
                    <div style="max-height: 8rem; overflow: hidden; margin-bottom: 1rem;" id="<?php echo $value['nombre']; ?>">
                        <p style="color:#3d180b;">
                            <?php echo $value['precio']; ?> </br>
                        </p>
                        <h4><a style="color:#3d180b !important;"
                                href="detail.php?cat=<?php echo urlencode($categoria); ?>&prod=<?php echo $value['id']; ?>">Ver
                                más</a></h4>
                    </div>
                </div>
            </div>
            <?
        }
    }
}
    ?>

        </div>

        <?
    }
    ?>
    </div>
<!-- FIN PRODUCTOS CHCOLATRE -->



<!-- EMPAQUE CHCOLATRE -->
<div id="menu-section empaque" class="menu-section container-fluid">
<?
include('arrayProduct.php');

foreach ($productos as $categoria => $articulos) {
    if ($categoria == "Empaque") {
        
    

?>
<div class="container" id="empaque">
    <div class="section-header">
        <h3 id="<?php echo $categoria; ?>"><?php echo $categoria; ?></h3>
        <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15" />

    </div>
    <!-- Section Header /-  -->
</div>
<!-- Container /- -->

<div class="row text-center">

    <?php
foreach ($articulos as $key => $value) {
   
    // echo "<pre>";
    // var_dump($value);
    // echo "</pre>";
   

    if ($value['activo'] == "1"){
?>

    <div class="col-md-4 col-sm-6 col-xs-12" style="height: auto !important">
        <div class="productos">
            <img style=" height: 400px;" class="product" src="<?php echo $value['imagen']; ?>"
                alt="image not found" />

            <!-- <a href="detail.php?cat=<?php echo urlencode($categoria); ?>&prod=<?php echo $value['id']; ?>"
        title="Ver producto">Ver producto</a> -->

            <h3>
                <a style="color:#3d180b !important;"
                    href="detail.php?cat=<?php echo urlencode($categoria); ?>&prod=<?php echo $value['id']; ?>"><?php echo $value['nombre']; ?></a>
            </h3>
            <div style="max-height: 8rem; overflow: hidden; margin-bottom: 1rem;" id="<?php echo $value['nombre']; ?>">
                <p style="color:#3d180b;">
                    <?php echo $value['precio']; ?> </br>
                </p>
                <h4><a style="color:#3d180b !important;"
                        href="detail.php?cat=<?php echo urlencode($categoria); ?>&prod=<?php echo $value['id']; ?>">Ver
                        más</a></h4>
            </div>
        </div>
    </div>
    <?
}
}
}
?>

</div>

<?
}
?>
</div>
<!-- FIN EMPAQUE CHCOLATRE -->



    <!-- Welcome Section -->
    <div class="welcome-section container-fluid no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <img src="/images/productos/exp-vino.jpg" alt="Experiencia de vino" width="457" height="700" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 wc-content-box">
                    <!-- <div class="welcome-header">
                        <span>Lo Mejor</span><br> <br>
                        <h5>Del</h5><br><br>
                        <h5>Cacao</h5>
                    </div> -->
                    <div class="welcome-content">
                        <div class="section-header left-header">
                            <h3>Servicio de Maridaje</h3>
                            <!-- <h5>Nuestra Historia</h5> -->
                            <img src="images/section-seprator-1.png" alt="section-seprator" width="70" height="3" />
                            <p>
                                En Chocola-tre somos una empresa que tiene
                                como objetivo dar a conocer que el origen del
                                chocolate es en México, a través de productos
                                de alta calidad
                            </p>
                            <!-- <a href="about.php" title="Ver más" class="read-more">Ver más</a> -->
                        </div>
                        <!-- Section Header /-  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Container /- -->
    </div>
    <!-- Welcome Section /- -->
    <!-- FIN DE PRODUCTOS CHOCOLATRE /- -->


    <!-- PROCESO DEL CHOCOLATE VIDEO SECTION -->
    <div class="welcome-content" style="margin-top:5rem;" id="proceso">
        <div class="section-header left-header">
            <h3 style="text-align: center;">Proceso del chocolate </h3>
        </div>
        <!-- Section Header /-  -->
    </div>
    <div class="video-container" id="proceso">
        <iframe src="https://www.youtube.com/embed/TZbpIY7IPBA" title="Video Chocolate" frameborder="0"
            allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>



    <div class="section-padding"></div>

    <div id="historia" class="welcome-content" style="margin-top: 5rem;">
        <div class="section-header left-header">
            <h3 style="text-align: center;">Historia del Chocolate</h3>
        </div>
        <!-- Section Header /-  -->
    </div>
    <!-- VIDEO SECTION -->
    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/HQ2bHIjCttY?" title="Video Chocolate" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>

    <!-- Galería -->
    <section class="section-primary pt-120 pb-120 gallery masonry">
        <div id="galeria" class="welcome-content" style="margin-top: 5rem;" <?php echo $galeria = "active" ?>>
            <div class="section-header left-header">
                <h3 style="text-align: center;">Galería</h3>
            </div>
            <!-- Section Header /-  -->
        </div>
        <div class="container" id="galeria">
            <div class="masonry-wrapper zoom-gallery">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/1.jpg" class="image-holder">
                            <img src="images/gallery/1.jpg" alt="" />
                            <div class="frame"></div>
                        </a>
                    </div>
                    <!-- <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/2.jpg" class="image-holder">
                            <img src="images/gallery/2.jpg" alt="" />
                            <div class="frame"></div>
                        </a>
                    </div> -->
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/3.jpg" class="image-holder">
                            <img src="images/gallery/3.jpg" alt="" />
                            <div class="frame"></div>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/4.jpg" class="image-holder">
                            <img src="images/gallery/4.jpg" alt="" />
                            <div class="frame"></div>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/5.jpg" class="image-holder">
                            <img src="images/gallery/5.jpg" alt="" />
                            <div class="frame"></div>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/6.jpg" class="image-holder">
                            <img src="images/gallery/6.jpg" alt="" />
                            <div class="frame"></div>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/7.jpg" class="image-holder">
                            <img src="images/gallery/7.jpg" alt="" />
                            <div class="frame"></div>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/8.jpg" class="image-holder">
                            <img src="images/gallery/8.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/9.jpg" class="image-holder">
                            <img src="images/gallery/9.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/10.jpg" class="image-holder">
                            <img src="images/gallery/10.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/11.jpg" class="image-holder">
                            <img src="images/gallery/11.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/12.jpg" class="image-holder">
                            <img src="images/gallery/12.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/13.jpg" class="image-holder">
                            <img src="images/gallery/13.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/14.jpg" class="image-holder">
                            <img src="images/gallery/14.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/15.jpg" class="image-holder">
                            <img src="images/gallery/15.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 galeria">
                        <a href="images/gallery/16.jpg" class="image-holder">
                            <img src="images/gallery/16.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Us 1 -->
    <div class="contact-us-1 container-fluid no-padding" id="contacto">
        <div class="section-padding"></div>
        <!-- Container -->
        <div class="container">
            <div class="section-header">
                <h3>¡Síguenos en redes sociales!</h3>
                <h5>Chocola-Tre Cacao Mexicano</h5>
                <img src="images/section-seprator-1.png" alt="section-seprator-1" width="70" height="3">
                <p>
                    Ven y prueba nuestros productos. ¡Te encantarán!
                </p>
            </div>
            <div class="row text-center">
                <!-- <h3 style="margin-bottom: 2rem;">¡Síguenos en redes sociales!</h3> -->
                <div class="col-2 col-md-2" style="margin-bottom: 3rem;"></div>
                <div class="col-4 col-md-4" style="margin-bottom: 3rem;">
                    <a href="https://www.facebook.com/chocolatre.bcs">
                        <img src="images/fb.png" alt="chocolatre">
                        <h2 style="color:#3d180b !important;">ChocolaTre</h2>
                    </a>
                </div>
                <div class="col-4 col-md-4" style="margin-bottom: 3rem;">
                    <a href="https://www.instagram.com/chocolatre.bcs/">
                        <img src="images/insta.png" alt="chocolatre">
                        <h2 style="color:#3d180b !important;">@chocolatre.bcs</h2>
                    </a>
                </div>
                <div class="col-2 col-md-2" style="margin-bottom: 3rem;"></div>
                <div class="col-md-12 col-sm-12 col-xs-12 contact-detail" style="padding-top: 10px;">
                    <div class="col-md-4 col-sm-12 col-xs-12 contact-content">
                        <div class="contact-info">
                            <h3>Dirección</h3>
                            <p>Blvd. Antonio Mijares(junto a Banamex)</p>
                            <p>Col. Centro</p>
                            <p>San José del Cabo, B.C.S</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 contact-content">
                        <div class="contact-info">
                            <h3>Contacto</h3>
                            <p><a href="tel:+526241526288" title="Teléfono fijo">(624-152-6288)</a> -- Teléfono
                                fijo</p>
                            <p><a href="tel:+526241136699" title="Ventas">(624-113-6699)</a> -- Ventas</p>
                            <p>
                                <a href="mailto:info@chocola-tre.com" title="info@chocola-tre.com">
                                    info@chocola-tre.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 contact-content">
                        <div class="contact-info">
                            <h3>Horario</h3>
                            <p>Lunes - Sábado: 09:00am a 20:00pm</p>
                            <p>Domingo: Cerrado</p>

                        </div>
                    </div>
                    <!-- Map Section -->
                    <div class="mapa">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.033117080809!2d-109.69586178590691!3d23.059247420744764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86af5b5e2c583ca5%3A0x9999bd37cb735672!2sChocolaTre!5e0!3m2!1sen!2smx!4v1656954088879!5m2!1sen!2smx"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!--  Map Section /- -->
                </div>

            </div>
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-10" style="margin-top: 3rem;">
                        <div class="section-header ">
                            <h3>Escríbenos</h3>
                            <img src="images/section-seprator-1.png" alt="section-seprator-1" width="70" height="3">
                            <p>
                                ¿Tienes alguna duda o pregunta? <br> Estamos para servirte.
                            </p>
                        </div>
                        <form class="row text-center">
                            <div class="form-group col-md-12">
                                <input type="text" id="nombre" name="nombre" required="" placeholder="Nombre"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" id="email" name="email" required="" placeholder="Correo"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" id="tel" required="" name="tel" placeholder="Teléfono"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea id="msj" name="msj" placeholder="Mensaje" rows="14"
                                    class="form-control"></textarea>
                            </div>
                            <input type="submit" name="submit" title="Send Now" value="Enviar" id="btn_submit"
                                name="Send Now">
                            <div id="alert-msg" class="alert-msg"></div>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div><!-- Container /- -->
        <div class="section-padding"></div>
    </div>
    <!-- Contact Us 1 /- -->

    <!-- Testimonial Section -->
    <div class="testimonial-section container-fluid no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="section-header">
                <h3>Opiniones</h3>
                <h5>Nuestros Clientes</h5>
                <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15" />
            </div>
            <!-- Section Header /-  -->
            <!-- Main Carousel -->
            <div id="main-carousel2" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#main-carousel2" data-slide-to="0" class="active"></li>
                    <li data-target="#main-carousel2" data-slide-to="1"></li>
                    <li data-target="#main-carousel2" data-slide-to="2"></li>
                </ol>
                <div role="listbox" class="carousel-inner">
                    <div class="item active">
                        <div class="testimonial-content">
                            <p>
                                <span><i class="fa fa-quote-left"></i></span>
                                El café confitado con chocolate fue mi favorito 🥰 Muy ricos productos,
                                artesanales,
                                Mexicanos, nuevos para mí. muchas gracias por la experiencia!
                                <span><i class="fa fa-quote-right"></i></span>
                            </p>
                            <img src="images/testimonial.jpg" alt="testimonial" height="89" width="89" />
                            <h3>Michelle CL</h3>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial-content">
                            <p>
                                <span><i class="fa fa-quote-left"></i></span>
                                Todo el producto es más que bueno es exquisito, delicado, fino....estoy
                                encantada con
                                ese chocolate relleno de mole nunca pensé que existiera algo tan sublime.....los
                                felicito y agradezco por traer ese manjar de dioses a nuestras manos❤😋😛
                                <span><i class="fa fa-quote-right"></i></span>
                            </p>
                            <img src="images/testimonial.jpg" alt="testimonial" height="89" width="89" />
                            <h3>Nora Luz Flores Muñoz </h3>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial-content">
                            <p>
                                <span><i class="fa fa-quote-left"></i></span>
                                El mejor chocolate artesanal 100% mexicano está ahora en San José del Cabo.
                                Tienen que
                                probarlo
                                <b>Bombones gourmet</b>
                                <span><i class="fa fa-quote-right"></i></span>
                            </p>
                            <img src="images/testimonial.jpg" alt="testimonial" height="89" width="89" />
                            <h3>Javier Alvarado</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Carousel /-  -->
        </div>
        <!-- Container /- -->
        <div class="section-padding"></div>
    </div>
    <!-- Testimonial Section /- -->
</main>