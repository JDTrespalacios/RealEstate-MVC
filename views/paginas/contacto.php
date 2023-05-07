<main class="contenedor seccion">
    <h1>Contact</h1>

    <?php if($mensaje) { ?>
            <p class='alerta exito'>" <?php echo $mensaje; ?> </p>;
    <?php } ?>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img lodading="lazy" src="build/img/destacada3.jpg" alt="Imagend de contacto">
    </picture>

    <h2>Fill out the Contact Form</h2>
    <form class="formulario" action="/contacto" method="POST">
        <fieldset>
            <legend>Personal Information</legend>

            <label for="nombre">Name</label>
            <input type="text" placeholder="Your Name" id="nombre" name="contacto[nombre]" required></>

            <label for="mensaje">Message</label>
            <textarea id="mensaje" name="contacto[mensaje]" required></textarea>
        </fieldset>

        <fieldset>
            <legend>Property Information</legend>

            <label for="mensaje">Buy/Sell:</label>
            <select id="opciones" name="contacto[tipo]" required>
                <option value="" disabled selected>-- Select --</option>
                <option value="Compra">Buy</option>
                <option value="Vende">Sell</option>
            </select>

            <label for="presupuesto">Price/Budget</label>
            <input type="number" placeholder="Your Price/Budget" id="presupuesto" name="contacto[precio]" required></>
        </fieldset>

        <fieldset>
            <legend>Contact</legend>
            <p>How do you want to be contacted?</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Phone</label>
                <input type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]" required>

                <label for="contactar-email">E-mail</label>
                <input type="radio" value="email" id="contactar-email" name="contacto[contacto]" required>
            </div>

            <div id="contacto"></div>
        </fieldset>

        <input type="submit" value="Send" class="boton-verde">
    </form>
</main>