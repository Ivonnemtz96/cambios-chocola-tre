<?php
$title = 'Detalle de producto';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ((isset($_REQUEST['cat']) and $_REQUEST['cat'] != "") and (isset($_REQUEST['prod']) and $_REQUEST['prod'] != "")) {
    extract($_REQUEST);

    include('arrayProduct.php');

    $catGET = urldecode($cat);
    $prodGET = $prod;

    $bandera = 0;
    foreach ($productos as $cat => $arr1) {
        if ($cat == $catGET) {
            $categoria_producto = $cat;

            foreach ($arr1 as $detalles => $indice) {

                if ($indice['id'] == $prodGET) {
                    $producto = $indice['nombre'];
                    $descripcion = $indice['descripcion'];
                    $precio = $indice['precio'];
                    $imagen = $indice['imagen'];
                    $imagen2 = $indice['imagen2'];
                    $venta = $indice['venta'];

                    $bandera = 1;
                }
            }
        }
    }
    if ($bandera == 0) {
        header('location:/categoria.php?msg=novalido'); //NO VALIDO
        exit;
    }
} else {
    header('location:/categoria.php?msg=noexiste'); //NO EXISTE
    exit;
}

include('includes/head.php');
?>
<!DOCTYPE html>
<html lang="en">

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
    <?php
    include('includes/navbar-about.php');
    include('modules/detProducto.php');
    include('includes/footer.php');
    include('includes/scripts.php');
    ?>
</body>

</html>