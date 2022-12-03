 <!-- PRODUCTOS CHCOLATRE -->
 <div id="menu-section" class="menu-section container-fluid" style="padding-top: 8rem">
        <!-- Menu Section -->
        <?
        include('arrayProduct.php');

        foreach ($productos as $categoria => $articulos) {

    ?>
        <div class="container">
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
           

            if ($value['activo'] == "1") {
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
                    <div style="max-height: 8rem; overflow: hidden; margin-bottom: 1rem;">
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
    ?>

     </div>
    
    <?
    }
    ?>
        </div>
        <!-- FIN DE PRODUCTOS CHOCOLATRE /- -->