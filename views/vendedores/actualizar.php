<main class="contenedor seccion">
    <h1>Update Seller</h1>

    <a href="/admin" class="boton boton-verde">Back</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST">
        <?php include 'formulario.php' ?>
        <input type="submit" value="Save Changes" class="boton boton-verde">
    </form>

</main>