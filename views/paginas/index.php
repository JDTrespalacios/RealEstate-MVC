<main class="contenedor seccion">
    <h1>More About Us</h1>
    
    <?php include 'iconos.php'; ?>
</main>

<section class="seccion contenedor">
    <h2>Houses & Apartments For Sale</h2>

    <?php
    include 'listado.php';
    ?>

    <div class="alinear-derecha">
        <a href="/propiedades" class="boton-verde">View All</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Find the home of your dreams</h2>
    <p>Fill out the contact form and an advisor will contact you shortly</p>
    <a href="/contacto" class="boton-amarillo">Contact Us</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Our Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="/entrada">
                    <h4>Terrace on the roof of your house</h4>
                    <p class="informacion-meta">Written on: <span>4/14/2023</span> by: <span>Admin</span></p>

                    <p>
                        Tips for building a terrace on the roof of your house with the best materials and saving money
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="/entrada">
                    <h4>Guide to decorating your home</h4>
                    <p class="informacion-meta">Written on: <span>4/14/2023</span> by: <span>Admin</span></p>

                    <p>
                        Maximize the space in your home with this guide, learn to combine furniture and colors to give life to your space
                    </p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimonials</h3>
        <div class="testimonial">
            <blockquote>
                The staff behaved in an excellent way, very good attention and the house that they offered me meets all my expectations.
            </blockquote>
            <p>-Jorge Trespalacios</p>
        </div>
    </section>
</div>