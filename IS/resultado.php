<?php include_once 'codigoOldTownRoad/includes/templates/header.php' ?>

<!--subheader-->
<div class="container mt-5 mb-3 py-2">
    <div class="row">
        <div class="col-12 mt-4">
            <a href="busqueda.php" class="active">Búsqueda</a>
            <p class="d-inline"> > </p>
            <a href="resultado.php" class="active">Park Hotel</a>
        </div>
    </div>
</div>

<!--menu principal-->
<main class="contenedor">
    <div class="wrapper">
        <!--sidebar-->
        <section id="sidebar">
            <!--reserva ahora-->
            <div class="reserva-ahora mb-3 px-4 py-3 text-center bg-light">
                <a href="reserva.php">
                    <button class="btn btn-primary shadow w-100">
                        Reserva ahora
                    </button>
                </a>
            </div>
            <!--mapa de la pagina de resultados-->
            <div class="ver-resultado-mapa mb-3">
                <a href="#" data-toggle="modal" data-target="#modalMapa">
                    <div class="card text-center text-white bg-img bg-minimap-2">
                        <div class="card-body p-2">
                            <div class="card-text">
                                <i class="fas fa-map-marker-alt d-block mb-2 text-primary"></i>
                                <button class="btn-ver-mapa btn btn-primary shadow">
                                    Ver en el mapa
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!--mapa modal-->
            <div class="modal fade" id="modalMapa" tabindex="-1" role="dialog" aria-labelledby="modalMapaLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div id="map2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--consejo como llegar-->
            <div class="card bg-light mb-3">
                <div class="card-header font-weight-bold">Cómo llegar a Park Hotel desde el Aeropuerto Simón Bolívar</div>
                <div class="card-body py-2 d-flex justify-content-between align-items-center">
                    <p class="m-0">
                        <i class="fas fa-taxi"></i> Taxi
                    </p>
                    <p class="m-0 bg-secondary text-white p-1 d-inline">30 minutos</p>
                </div>
            </div>
            <hr>
            <div class="booking-score d-flex align-items-center">
                <div class="h6 bg-dark text-white d-inline align-self-center m-0 mr-2 p-2 border rounded font-weight-bold">7,8</div>
                <div class="booking-score-comment">
                    <p class="font-weight-bold m-0 font-2">Bien</p>
                    <p class="text-secondary m-0">1.634 comentarios</p>
                </div>
            </div>
        </section>

        <!--contenido de la pagina-->
        <div id="content" class="pt-md-0">
            <!-- Modal -->
            <div class="modal fade" id="modalMapa" tabindex="-1" role="dialog" aria-labelledby="modalMapaLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div id="map" class="map"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--informacion de la reserva-->
            <section class="container-fluid">
                <div class="booking-result-header mb-3 d-flex flex-column flex-md-row justify-content-md-between">
                    <div>
                        <div class="booking-text-header d-flex justify-content-between align-items-center">
                            <div class="booking-title">
                                <p class="d-inline rounded p-1 bg-secondary text-white">Hotel</p>
                                <h5 class="font-weight-bold m-0 d-inline">Park Hotel </h5>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-thumbs-up text-warning" data-toggle="tooltip" data-placement="top" title="
                                    Este alojamiento forma parte de nuestro Programa de Alojamientos Preferentes. Ofrece una experiencia positiva a los clientes gracias a un servicio admirable y una buena relación calidad-precio. Para poder estar en el programa, puede que paguen un poco más a OldTownRoad.com 
                                    "></i>
                                <div class="booking-sugerency d-inline bg-light p-1 rounded">
                                    <i class="fas fa-user-friends border border-primary rounded-circle p-1"></i>
                                    <p class="d-inline">Ideal para dos viajeros</p>
                                </div>
                                <div class="booking-sugerency d-inline bg-light p-1 rounded">
                                    <i class="fas fa-umbrella-beach border border-primary rounded-circle p-1"></i>
                                    <p class="d-inline">Primera línea de playa</p>
                                </div>
                                <p class="m-0 py-2"><i class="fas fa-map-marker-alt text-primary"></i> Carrera 1 No. 18-67, 470004 Santa Marta, Colombia - <a href="#" data-toggle="modal" data-target="#modalMapa">Ubicación ideal. Mostrar mapa</a></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="reserva-ahora mb-3 text-center">
                            <a href="reserva.php">
                                <button class="btn btn-primary shadow">
                                    Reserva ahora
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!--imagenes de la reserva-->
                <div id="parkHotelImages" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#parkHotelImages" data-slide-to="0" class="active"></li>
                        <li data-target="#parkHotelImages" data-slide-to="1"></li>
                        <li data-target="#parkHotelImages" data-slide-to="2"></li>
                        <li data-target="#parkHotelImages" data-slide-to="4"></li>
                        <li data-target="#parkHotelImages" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="codigoOldTownRoad/img/resultados/santa_marta/park_hotel/park_hotel_1.jpg" alt="parkHotelImage1">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="codigoOldTownRoad/img/resultados/santa_marta/park_hotel/park_hotel_2.jpg" alt="parkHotelImage2">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="codigoOldTownRoad/img/resultados/santa_marta/park_hotel/park_hotel_3.jpg" alt="parkHotelImage3">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="codigoOldTownRoad/img/resultados/santa_marta/park_hotel/park_hotel_4.jpg" alt="parkHotelImage4">
                        </div>
                        <div class="carousel-item">
                            <div class="w-100">
                                <iframe width="830" height="480" src="https://www.youtube.com/embed/V3ufa6zEH_8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#parkHotelImages" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#parkHotelImages" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <hr class="mb-3">
                <div class="row">
                    <!--informacion principal de la reserva-->
                    <div class="col-12 col-md-8 mb-3">
                        <div class="booking-result-main-info">
                            <h6 class="m-0 py-2 font-weight-bold">Alójate en el corazón de Santa Marta - <a href="#">Ubicación ideal. Mostrar mapa</a></h6>
                            <p>El Park Hotel está situado frente a la playa de la bahía de Santa Marta, a 50 metros de la zona comercial, y dispone de piscina al aire libre, jardín y bar. Incluye WiFi gratuita y ofrece un desayuno americano.</p>
                            <p>Las habitaciones del Park Hotel son tranquilas y cuentan con baño privado y aire acondicionado.</p>
                            <p>El Park Hotel sirve un desayuno americano todos los días y proporciona servicio de lavandería bajo petición. La recepción, abierta las 24 horas, ofrece información turística. Asimismo, se proporciona servicio de masajes por un suplemento.</p>
                            <p>El Park Hotel se encuentra a 150 metros de la plaza Bolívar y del Museo del Oro, y el aeropuerto Simón Bolívar está a 20 minutos en coche. Hay aparcamiento privado gratuito.</p>
                            <p>Nuestros clientes dicen que esta parte de Santa Marta es su favorita, según los comentarios independientes.
                                A las parejas les encanta la ubicación — Le han puesto un 9,0 para viajes de dos personas.
                                ¡Hablamos tu idioma!</p>
                        </div>
                    </div>
                    <!--servicios con los que cuenta-->
                    <div class="col-12 col-md-4 mb-3">
                        <p class="font-weight-bold">
                            Park Hotel recibe clientes de OldTownRoad.com desde el 25 de jun de 2019.
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item font-weight-bold bg-success text-white">
                                Servicios más populares
                            </li>
                            <li class="list-group-item text-success">
                                <i class="fas fa-swimmer"></i> Piscina
                            </li>
                            <li class="list-group-item text-success">
                                <i class="fas fa-swimmer"></i> Piscina al aire libre
                            </li>
                            <li class="list-group-item text-success">
                                <i class="fas fa-umbrella-beach"></i> Situado frente a la playa
                            </li>
                            <li class="list-group-item text-success">
                                <i class="fas fa-wifi"></i> WiFi gratis
                            </li>
                            <li class="list-group-item text-success">
                                <i class="fas fa-clock"></i> Recepción 24 horas
                            </li>
                            <li class="list-group-item text-success">
                                <i class="fas fa-concierge-bell"></i> Servicio de habitaciones
                            </li>
                        </ul>
                    </div>
                    <!--disponibilidad-->
                    <div class="col-12">
                        <div class="disponibilidad">
                            <h4 class="font-weight-bold">Disponibilidad</h4>
                            <form class="needs-validation bg-primary p-4 mb-3 border rounded text-white text-reduce" novalidate>
                                <h6 class="mb-3">¿Cuándo quieres alojarte en el Park Hotel?</h6>
                                <div class="form-group mb-0">
                                    <div class="row">
                                        <div class="form-group col-6 mb-3">
                                            <label for="llegada" class="text-uppercase font-weight-bold m-0">Llegada</label>
                                            <input type="date" class="form-control" id="llegada" required>
                                            <div class="invalid-feedback">
                                                Fecha no valida.
                                            </div>
                                        </div>
                                        <div class="form-group col-6 mb-3">
                                            <label for="salida" class="text-uppercase font-weight-bold m-0">Salida</label>
                                            <input type="date" class="form-control" id="salida" required>
                                            <div class="invalid-feedback">
                                                Fecha no valida.
                                            </div>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="habitaciones" class="text-uppercase m-0">Habitaciones</label>
                                            <select class="custom-select" id="habitaciones" required>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Seleccione una cantidad valida.
                                            </div>
                                        </div>
                                        <div class="form-group col-4 mr-auto">
                                            <label for="huespedes" class="text-uppercase m-0">Huéspedes</label>
                                            <select class="custom-select" id="huespedes" required>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Seleccione una cantidad valida.
                                            </div>
                                        </div>
                                        <div class="reserva-ahora col-12 col-lg-3 mr-md-3">
                                            <button type="submit" class="btn btn-dark shadow w-100">
                                                <a href="reserva.php" class="text-white font-weight-bold">Reserva ahora</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--motivos para elejir la reserva-->
                    <div class="col-12 mb-3">
                        <h5>4 motivos para elegir el Park Hotel</h5>
                        <div class="booking-result-grounds font-weight-bold bg-light p-4">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 d-flex align-items-center">
                                    <i class="far fa-check-circle h2 text-primary mb-0 mr-4"></i>
                                    <p class="m-0 font-2">¡Precios imbatibles!</p>
                                </div>
                                <div class="col-12 col-md-6 mb-3 d-flex align-items-center">
                                    <i class="far fa-check-circle h2 text-primary mb-0 mr-4"></i>
                                    <p class="m-0 font-2">Gestiona tus reservas online</p>
                                </div>
                                <div class="col-12 col-md-6 mb-3 d-flex align-items-center">
                                    <i class="far fa-check-circle h2 text-primary mb-0 mr-4"></i>
                                    <p class="m-0 font-2">Una reserva segura</p>
                                </div>
                                <div class="col-12 col-md-6 d-flex align-items-center">
                                    <i class="far fa-check-circle h2 text-primary mb-0 mr-4"></i>
                                    <p class="m-0 font-2">Está en nuestra selección para Santa Marta</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>

<script src="codigoOldTownRoad/js/map2.js"></script>

<?php include_once 'codigoOldTownRoad/includes/templates/footer.php' ?>