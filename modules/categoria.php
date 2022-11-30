<?php
include('arrayCategoria.php');
?>

<!-- Page Banner -->
<div hidden class="page-banner container-fluid no-padding">
    <div class="page-banner-content">
        <h3>Categorías</h3>
    </div>
</div>

<!-- Gallery column 4 -->
<div class="gallery-section gallery-column-3 gallery-column-4 container-fluid">
    <div class="section-padding"></div>
    <!-- Container -->
    <div class="container">
        <ul class="portfolio-list no-left-padding">


            <?php foreach ($categoria as $cat => $arr1) {

                foreach ($arr1 as $detalles => $indice) {

            ?>
            <li class="col-md-3 col-sm-3 col-xs-6 design">
                <div class="content-image-block">
                    <a href="productos.php?cat=<?php echo urlencode($indice['nombre']); ?>">
                    <img src="<?php echo $indice['imagen']; ?>" alt="gallery" width="380" height="390">
                        <!-- <div hidden class="content-block-hover">
                                    <h3><?php echo $indice['nombre']; ?></h3>
                                    <p><?php echo $indice['descripcion']; ?></p>
                                </div> -->
                    </a>

                    <div class="content-image-block " style="margin-top: 3rem;">
                        <a href="productos.php?cat=<?php echo urlencode($indice['nombre']); ?>">
                            <div class="content-block-hover">
                                <h3 style="color:#3d180b;"><?php echo $indice['nombre']; ?></h3>
                                <p style="color:#3d180b;"><?php echo $indice['descripcion']; ?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 design">

                </div>
            </li>
            <?php
                }
                ?>
        </ul>
    </div>
    <!-- Select program buttons block ends -->
    <?php
            }
?>

    </ul>

</div><!-- Container / -->
<div class="section-padding"></div>
</div>