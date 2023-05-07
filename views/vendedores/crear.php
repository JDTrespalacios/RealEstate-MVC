<main class="contenedor seccion">
    <h1>Register Seller</h1>

    <a href="/admin" class="boton boton-verde">Back</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/vendedores/crear">
        <?php include 'formulario.php'; ?> 
        <input type="submit" value="Register Seller" class="boton boton-verde">
    </form>
</main>