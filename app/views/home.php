<?php include_once 'app/views/partials/header.php'; ?>

<div class="container mt-5">
    <h1>Bienvenido a la Veterinaria</h1>
    <p>Esta es la página de inicio.</p>

    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo URLROOT; ?>/public/images/2-1.png" class="d-block w-50" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="<?php echo URLROOT; ?>/public/images/xd.jpg" class="d-block w-50" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="<?php echo URLROOT; ?>/public/images/st,small,507x507-pad,600x600,f8f8f8.jpg" class="d-block w-50" alt="Slide 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo URLROOT; ?>/public/images/service1.jpg" class="card-img-top" alt="Servicio 1">
                <div class="card-body">
                    <h5 class="card-title">Consultas Veterinarias</h5>
                    <p class="card-text">Ofrecemos consultas médicas para tu mascota con nuestros veterinarios expertos.</p>
                    <a href="<?php echo URLROOT; ?>/services" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo URLROOT; ?>/public/images/service2.jpg" class="card-img-top" alt="Servicio 2">
                <div class="card-body">
                    <h5 class="card-title">Vacunación</h5>
                    <p class="card-text">Mantenemos al día el calendario de vacunación de tu mascota.</p>
                    <a href="<?php echo URLROOT; ?>/services" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo URLROOT; ?>/public/images/service3.jpg" class="card-img-top" alt="Servicio 3">
                <div class="card-body">
                    <h5 class="card-title">Cirugías</h5>
                    <p class="card-text">Contamos con un equipo especializado para realizar cirugías veterinarias.</p>
                    <a href="<?php echo URLROOT; ?>/services" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'app/views/partials/footer.php'; ?>
