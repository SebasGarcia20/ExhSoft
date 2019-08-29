<?php include_once 'codigoOldTownRoad/includes/templates/header.php' ?>

<!--subheader-->
<div class="container mt-5 mb-3 py-2">
    <div class="row">
        <div class="col-12 mt-2">
            <a href="busqueda.php" class="active">Búsqueda</a>
        </div>
    </div>
</div>

<!--menu principal-->
<main class="contenedor">
    <div class="wrapper">
        <!--sidebar-->
        <nav id="sidebar">
            <form class="needs-validation p-4 border rounded" novalidate>
                <div class="d-flex d-row justify-content-between">
                    <div>
                        <h5 class="font-weight-bold m-0">Filtrar por:</h5>
                    </div>
                    <div>
                        <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#collapsibleFilter" aria-controls="collapsibleFilter" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                </div>
                <div class="form-group mb-1 collapse navbar-collapse d-md-inline scrollNav" id="collapsibleFilter">
                    <div class="row">
                        <hr class="mb-4">
                        <!--filtro estrellas-->
                        <!--filtro recomendados-->
                        <!--destinos mas vistos-->
                        <!--tipo de alojamiento-->
                    </div>
                </div>
            </form>
        </nav>

        <!--contenido de la pagina-->
        <div id="content" class="pt-md-0">
            <main class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light bg-light mb-3">
                </nav>
            </main>

            <!-- Modal -->
            <div class="modal fade" id="modalMapa" tabindex="-1" role="dialog" aria-labelledby="modalMapaLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--items-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!--items de reserva-->
                        <!-- Primera habitación -->
                        <article class="booking-item border rounded d-flex flex-column flex-md-row mb-3">
                            <div class="booking-header w-md-50" style="background-image: url('./codigoOldTownRoad/img/busqueda/playa_blanca.jpg')"></div>
                            <div class="booking-body p-3 py-md-3 pr-md-3 w-100">
                                <div class="booking-text-header mb-3 d-flex justify-content-between align-items-center">
                                    <div class="booking-title">
                                        <h5 class="font-weight-bold m-0 d-inline">Santa Marta Marriott Resort Playa Dormida</h5>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-thumbs-up text-warning" data-toggle="tooltip" data-placement="top" title="
                                            Este alojamiento forma parte de nuestro Programa de Alojamientos Preferentes. Ofrece una experiencia positiva a los clientes gracias a un servicio admirable y una buena relación calidad-precio. Para poder estar en el programa, puede que paguen un poco más a OldTownRoad.com 
                                            "></i>
                                    </div>
                                    <div class="booking-score d-flex align-items-center">
                                        <div class="booking-score-comment text-right mr-2">
                                            <p class="font-weight-bold m-0 font-2">Muy Bien</p>
                                            <p class="text-secondary m-0">440 comentarios</p>
                                        </div>
                                        <div class="h6 bg-dark text-white d-inline align-self-center m-0 p-2 border rounded font-weight-bold">8,2</div>
                                    </div>
                                </div>
                                <a href="#" id="ver-mapa" data-toggle="modal" data-target="#modalMapa">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Santa Marta - Mostrar en el mapa
                                </a>
                                <p class="mb-2">El Santa Marta Marriott Resort Playa Dormida se encuentra en Santa Marta, a 11 km de la playa de El Rodadero, y ofrece alojamiento frente al mar, jardín, bar y salón compartido.</p>
                                <p class="text-success font-weight-bold m-0">
                                    Se puede reservar sin tarjeta de crédito
                                </p>
                                <p class="text-danger mb-2">Reservado 2 veces en las últimas 24 horas</p>
                                <div class="booking-info d-flex justify-content-between mb-2">
                                    <div class="booking-dispon">
                                        <p class="m-0 font-weight-bold">Habitación con cama extragrande-<i class="fas fa-user"></i><i class="fas fa-user"></i></p>
                                        <p class="text-danger mb-2">¡Solo quedan 5 habitaciones!</p>
                                    </div>
                                    <div class="booking-price text-right">
                                        <p class="text-secondary m-0">1 noche, 2 adultos</p>
                                        <div class="lead font-weight-bold">COP 415.560</div>
                                        <p class="text-secondary m-0">los impuestos y cargos pueden variar</p>
                                        <p class="text-success font-weight-bold m-0">Desayuno incluido</p>
                                    </div>
                                </div>
                                <a href="resultado.php" class="btn btn-primary float-right">
                                    Ver nuestras últimas habitaciones disponibles <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </article>
                        <!-- Segunda Habitación -->
                        <article class="booking-item border rounded d-flex flex-column flex-md-row mb-3">
                            <div class="booking-header w-md-50" style="background-image: url('./codigoOldTownRoad/img/busqueda/Mercure_Emile.jpg')"></div>
                            <div class="booking-body p-3 py-md-3 pr-md-3 w-100">
                                <div class="booking-text-header mb-3 d-flex justify-content-between align-items-center">
                                    <div class="booking-title">
                                        <h5 class="font-weight-bold m-0 d-inline">Mercure Santa Marta Emile</h5> <br>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-thumbs-up text-warning" data-toggle="tooltip" data-placement="top" title="
                                            Este alojamiento forma parte de nuestro Programa de Alojamientos Preferentes. Ofrece una experiencia positiva a los clientes gracias a un servicio admirable y una buena relación calidad-precio. Para poder estar en el programa, puede que paguen un poco más a OldTownRoad.com 
                                            "></i>
                                    </div>
                                    <div class="booking-score d-flex align-items-center">
                                        <div class="booking-score-comment text-right mr-2">
                                            <p class="font-weight-bold m-0 font-2">Fabuloso</p>
                                            <p class="text-secondary m-0">808 comentarios</p>
                                        </div>
                                        <div class="h6 bg-dark text-white d-inline align-self-center m-0 p-2 border rounded font-weight-bold">8,8</div>
                                    </div>
                                </div>
                                <a href="#" id="ver-mapa" data-toggle="modal" data-target="#modalMapa">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Bello Horizonte, Santa Marta - Mostrar en el mapa
                                </a>
                                <p class="mb-2">Otra persona lo ha mirado para tus fechas en los últimos 10 minutos</p>
                                <p class="text-success font-weight-bold m-0">
                                    <i class="far fa-credit-card"></i>
                                    Se puede reservar sin tarjeta de crédito
                                </p>
                                <p class="text-danger mb-2">Reservado 2 veces en las 6 últimas horas para tus fechas</p>
                                <a href="#" class="btn btn-warning text-white p-1 mb-2" data-toggle="tooltip" data-placement="top" title="
                                    Excelente relación calidad precio en las fechas que has seleccionado.">Ganga de hoy</a>
                                <div class="booking-info d-flex justify-content-between mb-2">
                                    <div class="booking-dispon">
                                        <p class="m-0 font-weight-bold">Habitación Doble Superior - 2 camas - <i class="fas fa-user-friends"></i>
                                        </p>
                                        <p class="text-danger mb-2">¡Solo queda 1 habitación!</p>
                                        <p class="text-success  m-0">Sin riegos: Puedes cancelar más tarde, así que aprovecha para conseguir un buen precio hoy.</p>
                                    </div>
                                    <div class="booking-price text-right">
                                        <p class="text-secondary m-0">1 noche, 2 adultos</p>
                                        <div class="lead font-weight-bold">COP 286.000</div>
                                        <p class="text-secondary m-0">los impuestos y cargos pueden variar</p>
                                        <p class="text-success font-weight-bold m-0">Cancelación GRATIS</p>
                                        <p class="text-success font-weight-bold m-0">Sin pago por adelantado</p>
                                    </div>
                                </div>
                                <a href="resultado.php" class="btn btn-primary float-right">
                                    Ver nuestras últimas habitaciones disponibles <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </article>
                        <!-- Tercer Habitación -->
                        <article class="booking-item border rounded d-flex flex-column flex-md-row mb-3">
                            <div class="booking-header w-md-50" style="background-image: url('./codigoOldTownRoad/img/busqueda/Kali_hotel.jpg')"></div>
                            <div class="booking-body p-3 py-md-3 pr-md-3 w-100">
                                <div class="booking-text-header mb-3 d-flex justify-content-between align-items-center">
                                    <div class="booking-title">
                                        <h5 class="font-weight-bold m-0 d-inline">Casa de Leda, a Kali Hotel</h5> <br>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-thumbs-up text-warning" data-toggle="tooltip" data-placement="top" title="
                                            Este alojamiento forma parte de nuestro Programa de Alojamientos Preferentes. Ofrece una experiencia positiva a los clientes gracias a un servicio admirable y una buena relación calidad-precio. Para poder estar en el programa, puede que paguen un poco más a OldTownRoad.com 
                                            "></i>
                                    </div>
                                    <div class="booking-score d-flex align-items-center">
                                        <div class="booking-score-comment text-right mr-2">
                                            <p class="font-weight-bold m-0 font-2">Fantástico</p>
                                            <p class="text-secondary m-0">741 comentarios</p>
                                        </div>
                                        <div class="h6 bg-dark text-white d-inline align-self-center m-0 p-2 border rounded font-weight-bold">9,3</div>
                                    </div>
                                </div>
                                <a href="#" id="ver-mapa" data-toggle="modal" data-target="#modalMapa">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Centro histórico, Santa Marta - Mostrar en el mapa
                                </a>
                                <p class="text-success font-weight-bold m-0">
                                    <i class="far fa-credit-card"></i>
                                    Se puede reservar sin tarjeta de crédito
                                </p>
                                <a href="#" class="btn btn-warning text-white p-1 mb-2" data-toggle="tooltip" data-placement="top" title="
                                    Excelente relación calidad precio en las fechas que has seleccionado.">Ganga de hoy</a>
                                <div class="booking-info d-flex justify-content-between mb-2">
                                    <div class="booking-dispon">
                                        <p class="m-0 font-weight-bold">Habitación Doble - <i class="fas fa-user"></i><i class="fas fa-user"></i></p>
                                        <p class="text-danger mb-2">¡Solo queda 1 habitación!</p>
                                    </div>
                                    <div class="booking-price text-right">
                                        <p class="text-secondary m-0">1 noche, 2 adultos</p>
                                        <div class="lead font-weight-bold">COP 236.260</div>
                                        <p class="text-secondary m-0">los impuestos y cargos pueden variar</p>
                                        <p class="text-success font-weight-bold m-0">Desayuno incluido</p>
                                    </div>
                                </div>
                                <a href="resultado.php" class="btn btn-primary float-right">
                                    Ver nuestras últimas habitaciones disponibles <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </article>
                        <!-- Cuarta Habitación -->
                        <article class="booking-item border rounded d-flex flex-column flex-md-row mb-3">
                            <div class="booking-header w-md-50" style="background-image: url('./codigoOldTownRoad/img/busqueda/Hotel_Portobahia.jpg')"></div>
                            <div class="booking-body p-3 py-md-3 pr-md-3 w-100">
                                <div class="booking-text-header mb-3 d-flex justify-content-between align-items-center">
                                    <div class="booking-title">
                                        <h5 class="font-weight-bold m-0 d-inline">Hotel Portobahia</h5>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                    <div class="booking-score d-flex align-items-center">
                                        <div class="booking-score-comment text-right mr-2">
                                            <p class="font-weight-bold m-0 font-2">Bien</p>
                                            <p class="text-secondary m-0">1.634 comentarios</p>
                                        </div>
                                        <div class="h6 bg-dark text-white d-inline align-self-center m-0 p-2 border rounded font-weight-bold">7,8</div>
                                    </div>
                                </div>
                                <a href="#" id="ver-mapa" data-toggle="modal" data-target="#modalMapa">
                                    <i class="fas fa-map-marker-alt"></i>
                                    El Rodadero, Santa Marta - Mostrar en el mapa
                                </a><br>
                                <a href="#" class="btn btn-warning text-white p-1 mb-2" data-toggle="tooltip" data-placement="top" title="
                                    Descuentos del 15% o más para estancias en alojamientos con esta etiqueta del 01/07 al 31/08.">Oferta Escapada</a>
                                <div class="booking-info d-flex justify-content-between mb-2">
                                    <div class="booking-dispon">
                                        <p class="m-0 font-weight-bold">Habitación Doble Estándar - <br> 1 o 2 camas - <i class="fas fa-user-friends"></i></p>
                                    </div>
                                    <div class="booking-price text-right">
                                        <p class="text-secondary m-0">1 noche, 2 adultos</p><s class="descounts">COP 148.050</s>
                                        <div class="lead font-weight-bold"> COP 109.340</div>
                                        <p class="text-secondary m-0">los impuestos y cargos pueden variar</p>
                                        <p class="text-success font-weight-bold m-0">Desayuno incluido</p>
                                    </div>
                                </div>
                                <a href="resultado.php" class="btn btn-primary float-right">
                                    Ver nuestras últimas habitaciones disponibles <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </article>
                        <!-- Quinta Habitación -->
                        <article class="booking-item border rounded d-flex flex-column flex-md-row mb-3">
                            <div class="booking-header w-md-50" style="background-image: url('./codigoOldTownRoad/img/busqueda/Fun_traveling.jpg')"></div>
                            <div class="booking-body p-3 py-md-3 pr-md-3 w-100">
                                <div class="booking-text-header mb-3 d-flex justify-content-between align-items-center">
                                    <div class="booking-title">
                                        <h5 class="font-weight-bold m-0 d-inline">Fun Traveling</h5>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-thumbs-up text-warning" data-toggle="tooltip" data-placement="top" title="
                                            Este alojamiento forma parte de nuestro Programa de Alojamientos Preferentes. Ofrece una experiencia positiva a los clientes gracias a un servicio admirable y una buena relación calidad-precio. Para poder estar en el programa, puede que paguen un poco más a OldTownRoad.com 
                                            "></i>
                                    </div>
                                    <div class="booking-score d-flex align-items-center">
                                        <div class="booking-score-comment text-right mr-2">
                                            <p class="font-weight-bold m-0 font-2">Fabuloso</p>
                                            <p class="text-secondary m-0">27 comentarios</p>
                                        </div>
                                        <div class="h6 bg-dark text-white d-inline align-self-center m-0 p-2 border rounded font-weight-bold">8,6</div>
                                    </div>
                                </div>
                                <a href="#" id="ver-mapa" data-toggle="modal" data-target="#modalMapa">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Santa Marta - Mostrar en el mapa
                                </a>
                                <p class="text-success font-weight-bold m-0">
                                    <i class="far fa-credit-card"></i>
                                    Se puede reservar sin tarjeta de crédito
                                </p>
                                <div class="booking-info d-flex justify-content-between mb-2">
                                    <div class="booking-dispon">
                                        <p class="m-0 font-weight-bold">Habitación Triple Básica con baño compartido - <i class="fas fa-user"></i><i class="fas fa-user"></i><i class="fas fa-user"></i></p>
                                        <p class="text-danger mb-2">¡Solo queda 1 habitación!</p>
                                    </div>
                                    <div class="booking-price text-right">
                                        <p class="text-secondary m-0">1 noche, 2 adultos</p><s class="descounts">COP 45.000</s>
                                        <div class="lead font-weight-bold">COP 40.000</div>
                                        <p class="text-secondary m-0">+ COP 5.550 de impuestos y cargos</p>
                                    </div>
                                </div>
                                <a href="resultado.php" class="btn btn-primary float-right">
                                    Ver disponibilidad <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <nav aria-label="Search results pages">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</main>

<?php include_once 'codigoOldTownRoad/includes/templates/footer.php' ?>