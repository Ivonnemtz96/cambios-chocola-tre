<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = 'Productos';
$productos = 'active';

?>

<!DOCTYPE html>
<html lang="en">
<?php

include('includes/head.php');
?>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
    <?php
    include('includes/navbar-about.php');
    include('modules/productos.php');
    include('includes/footer.php');
    include('includes/scripts.php');
    ?>
</body>

</html>