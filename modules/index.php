<main class="site-main page-spacing">
    <!-- Photo Slider -->
    <div class="photo-slider container-fluid no-padding">
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
    <div class="welcome-section container-fluid no-padding">
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

    <!-- PRODUCTOS CHCOLATRE -->
    <div id="menu-section" class="menu-section container-fluid" style="padding-top: 8rem">
        <!-- Menu Section -->
        <?
    include('arrayProduct.php');

    foreach ($productos as $categoria => $articulos) {

    ?>
        <div class="container">
            <div class="section-header">
                <h3><?php echo $categoria; ?></h3>
                <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15" />

            </div>
            <!-- Section Header /-  -->
        </div>
        <!-- Container /- -->



        <?php
        $cantidad_de_productos = sizeof($articulos);
        $ajuste_de_linea = 0;

        if ($cantidad_de_productos % 2 != 0) {
            $ajuste_de_linea = 1;
        }

        $columna_1 = round($cantidad_de_productos / 2);
        $columna_2 = $columna_1 - $ajuste_de_linea;
        $counter = 0;

        foreach ($articulos as $key => $value) {
            // echo "<pre>";
            // var_dump($value);
            // echo "</pre>";

            if ($counter == 0) {
                echo '<div class="row">';
                echo '<div class="col-md-6 col-sm-6 col-xs-6" style="height: 100% !important">';
            }
        ?>
        <div class="menu-box contenedor-productos">
            <img style="width: auto; height: 100%;" class="product" src="<?php echo $value['imagen']; ?>"
                alt="image not found" />
            <h3>
                <?php echo $value['nombre']; ?>
            </h3>
            <div style="max-height: 8rem; overflow: hidden; margin-bottom: 1rem;">
                <p>
                    <?php echo $value['precio']; ?> </br>
                    <?php echo $value['descripcion']; ?>
                </p>
            </div>
            <a href="detail.php?cat=<?php echo urlencode($categoria); ?>&prod=<?php echo $value['id']; ?>"
                title="Ver producto">Ver producto</a>
        </div>
        <?
            $counter++;
            if ($counter == $columna_1) {
                echo "</div>";
                echo '<div class="col-md-6 col-sm-6 col-xs-6">';
            }
        }
        echo "</div></div>";
    }
    ?>
    </div>
    <!-- FIN DE PRODUCTOS CHOCOLATRE /- -->

    <!-- VIDEO SECTION -->
    <div class="welcome-content" style="margin-top: 5rem;">
        <div class="section-header left-header">
            <h3 style="text-align: center;">Proceso del chocolate </h3>
        </div>
        <!-- Section Header /-  -->
    </div>
    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/TZbpIY7IPBA" title="Video Chocolate" frameborder="0"
            allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </div>

    <!-- Festival Section -->
    <div class="festival-section container-fluid no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="festival-details-tab">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="partycakes">
                        <div class="festival-content">
                            <h5>Chocolate</h5>
                            <img src="images/section-seprator-1.png" alt="section-seprator-1" width="70" height="3" />
                            <p id="chocolate">
                                El origen del chocolate: "alimento de los dioses" </br>El chocolate tiene su origen en
                                México, donde el dios Quetzalcoatl regaló, según cuenta la leyenda maya, en árbol de
                                cacao al hombre.
                            </p>
                            <a href="about.php" title="Ver más" class="read-more">Ver más</a>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="softcakes">
                        <div class="festival-content">
                            <h5>Bombones</h5>
                            <img src="images/section-seprator-1.png" alt="section-seprator-1" width="70" height="3" />
                            <p id="bombones"></p>
                            <a href="about.php" title="Ver más" class="read-more">Ver más</a>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="berrycakes">
                        <div class="festival-content">
                            <h5>Cacao</h5>
                            <img src="images/section-seprator-1.png" alt="section-seprator-1" width="70" height="3" />
                            <p id="cacao"></p>
                            <a href="about.php" title="Ver más" class="read-more">Ver más</a>
                        </div>
                    </div>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#partycakes" aria-controls="partycakes " role="tab" data-toggle="tab"><i><img
                                    src="images/festival-ic-1.png" alt="festival-ic-1" width="37"
                                    height="42" /></i>Chocolate</a>
                    </li>
                    <li role="presentation" onclick="myFunction()">
                        <a href="#softcakes" aria-controls="softcakes" role="tab" data-toggle="tab"><i><img
                                    src="images/festival-ic-2.png" alt="festival-ic-2" width="37"
                                    height="42" /></i>Bombones</a>
                    </li>
                    <li role="presentation" onclick="myFunction()">
                        <a href="#berrycakes" aria-controls="berrycakes" role="tab" data-toggle="tab"><i><img
                                    src="images/festival-ic-4.png" alt="festival-ic-4" width="37"
                                    height="42" /></i>Cacao</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Container /- -->
    </div>
    <!-- Festival Section /- -->


    <div class="section-padding"></div>

    <div class="welcome-content" style="margin-top: 5rem;">
        <div class="section-header left-header">
            <h3 style="text-align: center;">Historia del dios Kukulkán</h3>
        </div>
        <!-- Section Header /-  -->
    </div>
    <!-- VIDEO SECTION -->
    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/HQ2bHIjCttY?autoplay=1" title="Video Chocolate" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>


    <section class="section-primary pt-120 pb-120 gallery masonry">
        <div class="container">
            <div class="masonry-wrapper zoom-gallery">

                <div class="row">
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/1.jpg" class="image-holder">
                            <img src="images/gallery/1.jpg" alt="" />
                            <div class="frame"></div>
                        </a>
                    </div>
                    <!-- <div class="col-lg-3 galeria">
                        <a href="images/gallery/2.jpg" class="image-holder">
                            <img src="images/gallery/2.jpg" alt="" />
                            <div class="frame"></div>
                        </a>
                    </div> -->
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/3.jpg" class="image-holder">
                            <img src="images/gallery/3.jpg" alt="" />
                            <div class="frame"></div>
                        </a>
                    </div>
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/4.jpg" class="image-holder">
                            <img src="images/gallery/4.jpg" alt="" />
                            <div class="frame"></div>
                        </a>
                    </div>
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/5.jpg" class="image-holder">
                            <img src="images/gallery/5.jpg" alt="" />
                            <div class="frame"></div>
                        </a>
                    </div>
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/6.jpg" class="image-holder">
                            <img src="images/gallery/6.jpg" alt="" />
                            <div class="frame"></div>
                        </a>
                    </div>
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/7.jpg" class="image-holder">
                            <img src="images/gallery/7.jpg" alt="" />
                            <div class="frame"></div>
                        </a>
                    </div>
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/8.jpg" class="image-holder">
                            <img src="images/gallery/8.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/9.jpg" class="image-holder">
                            <img src="images/gallery/9.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/10.jpg" class="image-holder">
                            <img src="images/gallery/10.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/11.jpg" class="image-holder">
                            <img src="images/gallery/11.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/12.jpg" class="image-holder">
                            <img src="images/gallery/12.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/13.jpg" class="image-holder">
                            <img src="images/gallery/13.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/14.jpg" class="image-holder">
                            <img src="images/gallery/14.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/15.jpg" class="image-holder">
                            <img src="images/gallery/15.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                    <div class="col-lg-3 galeria">
                        <a href="images/gallery/16.jpg" class="image-holder">
                            <img src="images/gallery/16.jpg" alt="" />
                            <div class="frame"></div>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Section -->
    <div  class="order-section container-fluid no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-7">
                    <div class="section-header">
                        <h3>Déjanos saber tu producto preferido</h3>
                        <h5>Manda tu mensaje</h5>
                        <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15" />
                        <p>
                            Cualquier duda, sugerencia, cotización que necesites,
                            estamos para servirte.
                        </p>
                    </div>
                    <!-- Section Header /-  -->
                    <form class="online-form text-center">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" placeholder="Nombre *" required="" />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" placeholder="Teléfono*" required="" />
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" placeholder="Asunto*" required="" />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" placeholder="Correo*" required="" />
                        </div>
                        <div class="col-md-12">
                            <a cl href="#" title="Order Now" class="order-now">Enviar</a>
                        </div>

                        <p>
                            Para más información también marca allll:
                            <a href="tel:+526241526288" title="624-152-6288">
                                624-152-6288
                            </a>
                        </p>
                        <a title="Facebook" target="_blank" href="https://www.facebook.com/chocolatre.bcs">
                            <img src="images/facebook.png" alt="">
                        </a>
                        <a title="Instagram" target="_blank"
                            href="https://www.instagram.com/explore/locations/106154638122587/chocolatre/">
                            <img src="images/instagram.png" alt="">
                        </a>

                    </form>
                </div>
            </div>
        </div>
        <!-- Container /- -->

        <div class="right-image">
            <img src="images/order-online.jpg" alt="order-online" width="600" height="830" />
        </div>
        <div class="section-padding"></div>
    </div>
    <!-- Order Section /- -->
</main>