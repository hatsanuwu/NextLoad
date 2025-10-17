<?php include("database/db.php"); ?>

<div class="container my-5">
    <h2 class="mb-4 text-center">Noticias Tecnológicas</h2>
    <div class="row g-4">
        <div class="col-12">
            <article class="card shadow-sm border-0 h-100">
                <div class="card-body p-4">
                    <h3 class="text-success fw-bold mb-3">Historia, Tipos y Componentes Clave de las Computadoras</h3>
                    <p class="text-muted">Publicado en la sección especial del blog</p>
                    <section class="mb-4">
                        <h4 class="fw-semibold text-success">Historia</h4>
                        <div class="row g-3">
                            <div class="col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Two_women_operating_ENIAC_%28full_resolution%29.jpg/1280px-Two_women_operating_ENIAC_%28full_resolution%29.jpg" class="card-img-top" alt="ENIAC">
                                    <div class="card-body">
                                        <h5 class="card-title">1940s - ENIAC</h5>
                                        <p class="card-text">Primera computadora electrónica de propósito general.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://www.lighterra.com/articles/historyofcomputers/commodorepetlarge.jpg" class="card-img-top" alt="PC">
                                    <div class="card-body">
                                        <h5 class="card-title">1970s - PC</h5>
                                        <p class="card-text">Nacimiento de las computadoras personales.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://tecscience.tec.mx/es/wp-content/uploads/sites/8/2024/05/historia-del-internet.jpg" class="card-img-top" alt="Internet">
                                    <div class="card-body">
                                        <h5 class="card-title">2000s - Internet</h5>
                                        <p class="card-text">Era de la conectividad global.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="mb-4">
                        <h4 class="fw-semibold text-success">Tipos de computadoras</h4>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://www.generacionuniversitaria.com.mx/wp-content/uploads/2023/04/Huawei-MateStation-S-1024x640.webp" class="card-img-top" alt="Desktop">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Desktop</h5>
                                        <p class="card-text">Computadoras de escritorio para uso profesional.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://cdn.aarp.net/content/dam/aarpe/es/home/hogar-familia/tecnologia/info-2020/guia-para-comprar-computadoras-portatiles/_jcr_content/root/container_main/container_body_main/container_body2/container_body_cf/body_two_cf_one/par10/articlecontentfragme/cfimage.coreimg.50.932.jpeg/content/dam/aarp/home-and-family/personal-technology/2020/08/1140-webcam-call-esp.jpg" class="card-img-top" alt="Laptop">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Laptop</h5>
                                        <p class="card-text">Computadoras portátiles para movilidad.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://cink.es/wp-content/uploads/2024/02/Diferencia-Smartphone-y-Android-jpg.webp" class="card-img-top" alt="Dispositivo móvil">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Móvil</h5>
                                        <p class="card-text">Dispositivos inteligentes de bolsillo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h4 class="fw-semibold text-success">Componentes esenciales</h4>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <ul class="list-group shadow-sm">
                                    <li class="list-group-item"><strong>Procesador (CPU):</strong> encargado del procesamiento de instrucciones.</li>
                                    <li class="list-group-item"><strong>Memoria RAM:</strong> almacena datos temporales para agilizar tareas.</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group shadow-sm">
                                    <li class="list-group-item"><strong>Disco Duro:</strong> conserva información y sistemas operativos.</li>
                                    <li class="list-group-item"><strong>Tarjeta Gráfica:</strong> procesa y muestra gráficos complejos.</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </article>
        </div>

        <?php
        $result = $conn->query("SELECT * FROM noticias ORDER BY fecha DESC");
        while ($row = $result->fetch_assoc()):
        ?>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="<?= $row['imagen']; ?>" class="card-img-top" alt="Noticia">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['titulo']; ?></h5>
                    <p class="card-text"><?= $row['descripcion']; ?></p>
                </div>
                <div class="card-footer bg-light">
                    <small class="text-muted"><i class="bi bi-calendar-event me-1"></i><?= $row['fecha']; ?></small>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>

