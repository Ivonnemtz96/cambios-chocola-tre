
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
            <!-- <a href="detail.php?cat=<?php echo urlencode($categoria); ?>&prod=<?php echo $value['id']; ?>"
                title="Ver producto">Ver producto</a> -->
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