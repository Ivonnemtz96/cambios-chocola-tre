<main class="site-main page-spacing">
    <!-- Page Banner -->
    <div hidden class="page-banner container-fluid no-padding">
        <div class="page-banner-content">
            <h3><?php echo $categoria_producto; ?></h3>
        </div>
    </div><!-- Page Banner /- -->

    <!-- Blog Post -->
    <div class="latest-blog blog-section blog-post container-fluid no-padding">
        <div class="section-padding"></div>
        <!-- Container -->
        <div class="container">
            <div class="row">
                <!-- Content Area -->
                <div class="content-area col-md-9 col-sm-8 col-xs-12">
                    <article class="type-post col-md-12 col-sm-12 col-xs-12 no-padding">
                        <h2 style="margin-bottom: 5rem;"><?php echo $producto;?> <span
                                style="font-size: 20px;color:gray"><?php echo $precio;?></span></h2>
                        <div class="fotorama text-center" data-fit="cover" data-autoplay="3000"
                            data-loop="true" data-arrows="false" data-click="false" data-swipe="true" data-nav="true" style="margin-left:0;">
                            <img class="img-fluid" src="<?php echo $imagen2;?>" alt="image not found" data-fit="contain" alt="">
                            <img class="img-fluid" src="<?php echo $imagen;?>" alt="image not found" data-fit="contain" alt="">
                            <!-- <img src="<?php echo $imagen;?>" alt="blog" width="200" height="330"> -->
                        </div>
                        <div class="post-content">
                            <div class="recent-content" style="padding: 10px;">
                                <div class="entry-content">
                                    <p>
                                        <?php echo $descripcion;?>
                                    </p>
                                    <span>Venta: <?php echo $venta;?></span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 widget-area">
                    <!-- Widget Categories /-  -->
                    <aside class="widget widget-text">
                        <h3 class="widget-title">El sabor auténtico del cacao mexicano</h3>
                        <p>
                            El chocolate tiene su origen en México, donde el dios Quetzalcoatl regaló, según cuenta la
                            leyenda, el árbol de cacao a los hombres, que años después se bautizaría con el nombre
                            científico Theobroma Cacao, que significa en griego “alimento de los dioses”.
                        </p>
                        <a href="about.php" title="view-more"> Ver más<i class="fa fa-angle-double-right"
                                aria-hidden="true"></i></a>
                    </aside>

                </div>
            </div>
        </div><!-- Container /- -->
        <div class="section-padding"></div>
    </div><!-- Blog Post /- -->
    <!-- Newsletter Box /- -->
</main>