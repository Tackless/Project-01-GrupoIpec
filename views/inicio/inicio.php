<?php include_once __DIR__ . '/../templates/barra.php'; ?>

<div class="hero"></div>

<main class="container-xl d-flex flex-column align-items-center mb-2">
    <h2 class="my-2 text-center">Oferta Academica</h2>

    <div id="indicadores" class="carousel slide carrusel" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button aria-label="indicador 0" class="active" type="button" data-bs-target="#indicadores" data-bs-slide-to="0"></button>
            <button aria-label="indicador 1" type="button" data-bs-target="#indicadores" data-bs-slide-to="1"></button>
            <button aria-label="indicador 2" type="button" data-bs-target="#indicadores" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="bachillerato-modalidades">
                    <h3 class="text-dark text-center mb-0">Bachillerato</h3>
                    <img width="200" height="300" src="build/img/bachillerato.webp" alt="Imagen Bachillerato" class="img-fluid">
                </a>
            </div>

            <div class="carousel-item">
                <a href="licenciaturas">
                    <h3 class="text-dark text-center mb-0">Licenciatura</h3>
                    <img width="200" height="300" src="build/img/licenciaturas.webp" alt="Imagen Licenciaturas" class="img-fluid">
                </a>
            </div>

            <div class="carousel-item">
                <a href="certificaciones">
                    <h3 class="text-dark text-center mb-0">Certificaciones</h3>
                    <img width="200" height="300" src="build/img/certificaciones.webp" alt="Imagen certificaciones" class="img-fluid">
                </a>
            </div>

            <button aria-label="imagen anterior" type="button" class="carousel-control-prev" data-bs-target="#indicadores" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button aria-label="imagen siguiente" type="button" class="carousel-control-next" data-bs-target="#indicadores" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</main>

<section>
    <h2 class="text-center my-2">Promociones Mayo</h2>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 promociones ">
            
        </div>
        <div class="col-md-6">
            <div class="row justify-content-center gap-2">
                <div class="col-md-6 d-flex justify-content-center mt-2 mt-md-0">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalPromoChalco" class="btn btn-outline-primary p-2 w-75">Chalco</button>
                </div>
                <!-- <div class="col-md-6 d-flex justify-content-center">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalPromoValle" class="btn btn-outline-primary p-2 w-75">Valle de Chalco</button>
                </div> -->
            </div>
        </div>
    </div>
    <?php include_once __DIR__ . '/../templates/modal-promociones.php'; ?>
</section>

<section>
    <h2 class="text-center my-2">Galeria</h2>

    <div class="container-xl mb-2">
        <div class="row galeria-imagenes justify-content-center">
            
        </div>
    </div>

</section>

