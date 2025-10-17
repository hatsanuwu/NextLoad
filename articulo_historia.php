<?php include("database/db.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia de las Computadoras - NextLoad</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { border-radius: 1rem; }
        .card-title { font-weight: 600; }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">NextLoad</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#noticias">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#comentarios">Comentarios</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#contacto">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- ARTÍCULO -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <article class="bg-white p-5 rounded shadow">
                <h1 class="display-5 fw-bold text-success mb-4">Historia de las Computadoras</h1>
                <p class="text-muted mb-4"><i class="bi bi-calendar-event me-2"></i><?= date('Y-m-d'); ?></p>

                <!-- HISTORIA -->
                <section class="mb-5">
                    <h2 class="text-success mb-4 fw-bold">📚 Historia</h2>
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <div class="card shadow-sm">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Two_women_operating_ENIAC_%28full_resolution%29.jpg/1280px-Two_women_operating_ENIAC_%28full_resolution%29.jpg" class="card-img-top" alt="ENIAC">
                                <div class="card-body">
                                    <h5 class="card-title">1940s - ENIAC</h5>
                                    <p class="card-text">Primera computadora electrónica de propósito general. Pesaba 27 toneladas y ocupaba 167 m² de espacio.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card shadow-sm">
                                <img src="https://www.lighterra.com/articles/historyofcomputers/commodorepetlarge.jpg" class="card-img-top" alt="PC">
                                <div class="card-body">
                                    <h5 class="card-title">1970s - PC</h5>
                                    <p class="card-text">Nacimiento de las computadoras personales. Era accesible para el público general.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card shadow-sm">
                                <img src="https://tecscience.tec.mx/es/wp-content/uploads/sites/8/2024/05/historia-del-internet.jpg" class="card-img-top" alt="Internet">
                                <div class="card-body">
                                    <h5 class="card-title">2000s - Internet</h5>
                                    <p class="card-text">Era de la conectividad global. El mundo se conectó completamente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- TIPOS -->
                <section class="mb-5">
                    <h2 class="text-success mb-4 fw-bold">💻 Tipos de Computadoras</h2>
                    <div class="card-group shadow-sm">
                        <div class="card">
                            <img src="https://www.generacionuniversitaria.com.mx/wp-content/uploads/2023/04/Huawei-MateStation-S-1024x640.webp" class="card-img-top" alt="PC">
                            <div class="card-body text-center">
                                <h5 class="card-title">Desktop</h5>
                                <p class="card-text">Computadoras de escritorio para uso profesional y gaming.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://cdn.aarp.net/content/dam/aarpe/es/home/hogar-familia/tecnologia/info-2020/guia-para-comprar-computadoras-portatiles/_jcr_content/root/container_main/container_body_main/container_body2/container_body_cf/body_two_cf_one/par10/articlecontentfragme/cfimage.coreimg.50.932.jpeg/content/dam/aarp/home-and-family/personal-technology/2020/08/1140-webcam-call-esp.jpg" class="card-img-top" alt="Laptop">
                            <div class="card-body text-center">
                                <h5 class="card-title">Laptop</h5>
                                <p class="card-text">Computadoras portátiles para movilidad y trabajo remoto.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://cink.es/wp-content/uploads/2024/02/Diferencia-Smartphone-y-Android-jpg.webp" class="card-img-top" alt="Móvil">
                            <div class="card-body text-center">
                                <h5 class="card-title">Móvil</h5>
                                <p class="card-text">Dispositivos inteligentes de bolsillo con gran poder.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- COMPONENTES -->
                <section class="mb-5">
                    <h2 class="text-success mb-4 fw-bold">⚙️ Componentes</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group shadow-sm mb-3">
                                <li class="list-group-item"><i class="bi bi-cpu me-2 text-success"></i> <strong>Procesador (CPU):</strong> El cerebro de la computadora</li>
                                <li class="list-group-item"><i class="bi bi-memory me-2 text-success"></i> <strong>Memoria RAM:</strong> Almacenamiento temporal rápido</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group shadow-sm mb-3">
                                <li class="list-group-item"><i class="bi bi-hdd me-2 text-success"></i> <strong>Disco Duro:</strong> Almacenamiento permanente de datos</li>
                                <li class="list-group-item"><i class="bi bi-card-image me-2 text-success"></i> <strong>Tarjeta Gráfica:</strong> Procesamiento de imágenes</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <div class="text-center mt-5">
                    <a href="index.php" class="btn btn-success btn-lg">Volver al inicio</a>
                </div>
            </article>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
        <p class="mb-0">&copy; <script>document.write(new Date().getFullYear());</script> NextLoad - Todos los derechos reservados</p>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>