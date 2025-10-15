<?php 
    $title = "KST";
    $class="body-main";
    include 'includes/header.php'; 
?>

    <div class="container-fluid mt-4">
        <div class="container-landing">
            <p style="font-family: 'Rubik';">¡AHORA DISPONIBLE</p>
            <p>NUESTRA!</p>
            <button id="btnNuevaColeccion" class="btn button">Nueva Colección</button>
            <div id="seccionColeccion" style="display: none;">
                <?php include 'New_collection.php'; ?>
            </div>
        </div>
    </div>
<script>

    document.getElementById('btnNuevaColeccion').addEventListener('click', function() {
    var seccion = document.getElementById('seccionColeccion');
    // Si la sección está oculta, la muestra y luego hace scroll

    if (seccion.style.display === 'none') {

    seccion.style.display = 'block'; // Muestra la sección

    // Desplazamiento suave (scroll)

    seccion.scrollIntoView({ behavior: 'smooth' });

    } else {

    // Si la sección ya está visible, la oculta

    seccion.style.display = 'none';

    }

    });

</script> 
<?php include 'includes/footer.php'; ?>