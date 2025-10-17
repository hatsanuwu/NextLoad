<?php include("database/db.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextLoad</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #1a1a2e;
            color: #fff;
        }

        .navbar {
            background-color: #6c63ff !important;
        }

        .card {
            border-radius: 1rem;
            background-color: #16213e;
            border: 1px solid #6c63ff;
        }

        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s;
            box-shadow: 0 5px 20px rgba(108, 99, 255, 0.4);
        }

        .card-title {
            font-weight: 600;
            color: #6c63ff;
        }

        textarea {
            resize: none;
        }

        .carousel-item {
            height: 400px;
        }

        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .btn-primary {
            background-color: #6c63ff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #5848ff;
            transform: scale(1.05);
            transition: 0.3s;
        }

        .form-control {
            background-color: #16213e;
            border: 1px solid #6c63ff;
            color: #fff;
        }

        .form-control:focus {
            background-color: #16213e;
            border-color: #6c63ff;
            box-shadow: 0 0 10px rgba(108, 99, 255, 0.5);
            color: #fff;
        }

        .form-label {
            color: #6c63ff;
        }

        footer {
            background-color: #0f0f1e !important;
        }

        h2, h3, h5 {
            color: #6c63ff;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            <i class="bi bi-lightning-charge-fill me-2"></i>NextLoad
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#comentarios">
                        <i class="bi bi-chat-dots-fill me-1"></i>Comentarios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">
                        <i class="bi bi-envelope-fill me-1"></i>Contacto
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- CARRUSEL -->
<div id="carouselDestacados" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselDestacados" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselDestacados" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselDestacados" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Two_women_operating_ENIAC_%28full_resolution%29.jpg/1280px-Two_women_operating_ENIAC_%28full_resolution%29.jpg" class="d-block w-100" alt="ENIAC">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                <h5><i class="bi bi-cpu-fill me-2"></i>Historia de las Computadoras</h5>
                <p>Descubre la evolución tecnológica desde los años 40</p>
                <a href="articulo_historia.php" class="btn btn-primary">
                    <i class="bi bi-book-fill me-2"></i>Leer más
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://tecscience.tec.mx/es/wp-content/uploads/sites/8/2024/05/historia-del-internet.jpg" class="d-block w-100" alt="Internet">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                <h5><i class="bi bi-wifi me-2"></i>La Era del Internet</h5>
                <p>Conectividad global que transformó el mundo</p>
                <a href="articulo_historia.php" class="btn btn-primary">
                    <i class="bi bi-arrow-right-circle-fill me-2"></i>Explorar
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://cink.es/wp-content/uploads/2024/02/Diferencia-Smartphone-y-Android-jpg.webp" class="d-block w-100" alt="Smartphones">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                <h5><i class="bi bi-phone-fill me-2"></i>Tecnología Móvil</h5>
                <p>Dispositivos inteligentes en tu bolsillo</p>
                <a href="articulo_historia.php" class="btn btn-primary">
                    <i class="bi bi-rocket-takeoff-fill me-2"></i>Descubrir
                </a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselDestacados" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselDestacados" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- COMENTARIOS -->
<section id="comentarios" class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow border-0">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-4 text-center">
                        <i class="bi bi-chat-square-quote-fill me-2"></i>Deja tu comentario
                    </h3>

                    <form method="POST" action="#comentarios">
                        <input type="hidden" name="formulario" value="comentario">
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-person-fill me-2"></i>Tu nombre</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-pencil-fill me-2"></i>Mensaje</label>
                            <textarea name="mensaje" class="form-control" placeholder="Escribe tu comentario..." rows="4" required></textarea>
                        </div>
                        <button class="btn btn-primary w-100">
                            <i class="bi bi-send-fill me-2"></i>Publicar comentario
                        </button>
                    </form>

                    <hr class="my-4">

                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-star-fill me-2"></i>Comentarios recientes
                    </h5>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['formulario']) && $_POST['formulario'] == 'comentario') {
                        $nombre = $conn->real_escape_string($_POST['nombre']);
                        $mensaje = $conn->real_escape_string($_POST['mensaje']);
                        $conn->query("INSERT INTO comentarios (nombre, mensaje) VALUES ('$nombre', '$mensaje')");
                    }
                    $result = $conn->query("SELECT * FROM comentarios ORDER BY fecha DESC LIMIT 5");
                    while ($row = $result->fetch_assoc()):
                        ?>
                        <div class="border rounded p-3 mb-3 bg-dark">
                            <div class="d-flex justify-content-between">
                                <strong style="color: #6c63ff;">
                                    <i class="bi bi-person-circle me-2"></i><?= htmlspecialchars($row['nombre']); ?>
                                </strong>
                                <small class="text-muted">
                                    <i class="bi bi-clock-fill me-1"></i><?= $row['fecha']; ?>
                                </small>
                            </div>
                            <p class="mb-0 mt-2"><?= nl2br(htmlspecialchars($row['mensaje'])); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACTO -->
<section id="contacto" class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    <h3 class="text-center mb-3 fw-bold">
                        <i class="bi bi-envelope-at-fill me-2"></i>Contáctanos
                    </h3>
                    <p class="text-muted text-center mb-4">¿Tienes dudas o sugerencias? Escríbenos y te responderemos pronto.</p>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['formulario']) && $_POST['formulario'] == 'contacto') {
                        $nombre = $conn->real_escape_string($_POST['nombre']);
                        $correo = $conn->real_escape_string($_POST['correo']);
                        $mensaje_texto = $conn->real_escape_string($_POST['mensaje']);
                        $conn->query("INSERT INTO contacto (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje_texto')");
                        echo '<div class="alert alert-success text-center">✅ Mensaje enviado correctamente.</div>';
                    }
                    ?>

                    <form method="POST" action="#contacto">
                        <input type="hidden" name="formulario" value="contacto">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Correo electrónico</label>
                            <input type="email" name="correo" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mensaje</label>
                            <textarea name="mensaje" rows="4" class="form-control" required></textarea>
                        </div>
                        <button class="btn btn-primary w-100">Enviar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
        <p class="mb-0">&copy; <script>document.write(new Date().getFullYear());</script> NextLoad - Todos los derechos reservados</p>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>