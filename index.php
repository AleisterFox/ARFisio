<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <title>AR FISIOTERAPIA</title>
</head>

<body onload="autoSlide()">
    <header>
        <nav>
            <figure>
                <a href="index.php"><img src="images/logo.png" alt="Neurowellness Logo"></a>
            </figure>
            <ul class="menu hidden">
                <li><a href="#about">ACERCA DE NOSOTROS</a></li>
                <li><a href="services.php">SERVICIOS</a></li>
                <li><a href="#testimonials">TESTIMONIOS</a></li>
                <!-- <li><a href="faqs.php">FAQS</a></li> -->
                <li><a href="contact.php">AGENDA TU CITA</a></li>
            </ul>
            <i class="fa-solid fa-bars menu__button"></i>
        </nav>
    </header>
    <main>

        <section id="home">
            <div class="home__info fadeInUp wow">
                <h1>Clinica de Fisioterapia de Alta Especialidad</h1>
                <p>Nos enfocamos en el tratamiento, Atención y prevención de lesiones de origen Ortopédico y Deportivo.
                </p>
                <p class="home__info--button"><a href="#"><i class="fa-brands fa-instagram"></i>&nbsp;&nbsp;Conoce
                        más</a></p>
            </div>
            <div class="home__video fadeInRight wow">
                <img src="https://dummyimage.com/400/000/fff" alt="">
            </div>
            <a href="#about">
                <div class="arrow-down fadeIn wow">
                    <i class="fa-solid fa-arrow-down"></i>
                </div>
            </a>

        </section>
        <div class="floating">
            <div class="whatsapp">
                <a href="wa.me/" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <p class="home__info--button">
                <a href="contact.php" target="_blank">Agenda tu cita</a>
            </p>
        </div>
        <section id="about">
            <div class="frame bounceIn wow"></div>
            <div class="about__container">
                <div class="description fadeInUp wow">
                    <hr>
                    <h2>NOSOTROS</h2>
                    <p>Especializados en Tratamientos post-quirúrgicos; desde el inicio de la lesión, hasta el regreso
                        al deporte. Buscamos que nuestros pacientes se sientan cómodos, seguros, confiados, con los
                        más altos estándares de calidad y la mejor tecnología en el ámbito de la Fisioterapia.</p>
                </div>
                <div class="gallery  fadeIn wow">
                    <figure>
                        <img class="us1" src="images/us1.png" alt="">
                        <div class="frame"></div>
                    </figure>
                    <figure>
                        <img src="images/us2.png" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <section id="services">
            <h2 class="fadeInUp wow">SERVICIOS</h2>
            <div class="services__controls fadeInRight wow">
                <div class="arrow services__slider-next">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div class="arrow services__slider-previous">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            <div class="services__container">
                <div class="left-blur"></div>
                <div class="services__slider fadeInUp wow">
                    <div class="services__container--service">
                        <img src="images/frame-2.png" alt="">
                        <h4>Fisioterapia post-quirúrgica</h4>
                        <p>Somos una clinica de Alta Especialidad en tratamientos Post-quirurgicos. Contamos con especialistas en el ramo de la Fisioterapia Ortopedica-Traumatologica.</p>
                        <p class="service__button">
                            <a href="">Ver más</a>
                        </p>
                    </div>
                    <div class="services__container--service">
                        <img src="images/frame-1.png" alt="">
                        <h4>Fisioterapia ortopédica</h4>
                        <p>Area especializada en el tratamiento de lesiones neuro-musculo-esqueleticas .</p>
                        <p class="service__button">
                            <a href="">Ver más</a>
                        </p>
                    </div>
                    <div class="services__container--service">
                        <img src="images/frame.png" alt="">
                        <h4>Fisioterapia Deportiva</h4>
                        <p>Área dedicada al tratamiento y prevención de lesiones en el ámbito deportivo; tanto en deportistas amateurs, de elite o profesionales.</p>
                        <p class="service__button">
                            <a href="">Ver más</a>
                        </p>
                    </div>
                    <div class="services__container--service">
                        <img src="images/frame-3.png" alt="">
                        <h4>Readaptación Deportiva</h4>
                        <p>Servicio que proporcionamos a aquellos pacientes , que han tenido una lesion, y desean regresar a practicar su actividad deportiva favorita.
                        </p>
                        <p class="service__button">
                            <a href="">Ver más</a>
                        </p>
                    </div>
                    <div class="services__container--service">
                        <img src="images/computadora.png" alt="">
                        <h4>Asesoría Posquirúrgica/Via Remota</h4>
                        <p>Consiste en una sesion online , con uno de nuestros profesionales expertos en Rehabilitacion Postquirurgica. Donde buscamos evaluar cada caso , y orientar al paciente en su proceso de Rehabilitacion.</p>
                        <p class="service__button">
                            <a href="">Ver más</a>
                        </p>
                    </div>
                    <div class="services__container--service">
                        <img src="images/masaje.png" alt="">
                        <h4>Descarga Muscular</h4>
                        <p>Servicio que se realiza a deportistas , antes o despues de tener una actividad fisica importante . Se realiza por un profesional calificado.</p>
                        <p class="service__button">
                            <a href="">Ver más</a>
                        </p>
                    </div>
                </div>
                <div class="right-blur"></div>
            </div>
        </section>
        <section id="services2">
            <div class="title fadeInUp wow">
                <hr>
                <h2>MODALIDADES TERAPEUTICAS</h2>
            </div>
            <div class="lists fadeInLeft wow">
                <ul>
                    <li>Terapia Manual</li>
                    <li>Fibrolisis Diacutanea</li>
                    <li>Punción Seca</li>
                    <li>Electro Punción</li>
                    <li>Ejercicio Terapéutico</li>
                    <li>TRX</li>
                    <li>Kinesiotape</li>
                    <li>Electroterapia</li>
                    <li>Presoterapia</li>
                </ul>

            </div>
            <div class="image fadeIn wow">
                <img src="images/electro.jpg" alt="">
            </div>

            <div style="margin-top: 10rem;" class="title fadeInUp wow">
                <hr>
                <h2>Tecnologia</h2>
            </div>
            <div class="lists fadeInLeft wow">
                <ul>
                    <li>Madup -BFR ( Blood Flow Restriction )</li>
                    <li>Ondas de Choque</li>
                    <li>Radiofrecuencia</li>
                    <li>Ultrasonido</li>
                    <li>Laser</li>
                    <li>Game Ready ( Crioterapia)</li>
                    <li>Kinvent ( Pruebas Funcionales )</li>
                    <li>MEP ( Microelectrolisis Percutanea )</li>
                </ul>
            </div>
            <div class="image fadeInUp wow">
                <img src="images/ondas.jpg" alt="">
            </div>
        </section>
        <section id="testimonials">
            <h2 class="fadeInUp wow">TESTIMONIOS</h2>
            <div class="arrow testimonials__slider-next fadeInUp wow">
                <i class="fa-solid fa-arrow-left"></i>
            </div>
            <div class="container fadeInUp wow">
                <div class="testimonials__slider">
                    <div class="testimonials__slider--slide">
                        <img src="images/star.png" alt="5 estrellas">
                        <h4>M.D. Reparacion de Manguito Rotador</h4>
                        <p>Los mejores en fisioterapia, tuve una reconstruccion de ligamentos y tendones del manguito
                            rotador. Ellos me ayudaron a la rehabilitacion al 100%. Super preparados, calidad humana
                            increible, ademas de una super paciencia. Son un super equipo, de verdad los recomiendo
                            muchisimo.</p>
                    </div>
                    <div class="testimonials__slider--slide">
                        <img src="images/star.png" alt="5 estrellas">
                        <h4>L.H. Post Qx Reparacion meniscal</h4>
                        <p>Excelente atención, excelentes fisioterapeutas , el mejor servicio y las mejores
                            instalaciones. Fueron la clave de mi recuperación .</p>
                    </div>
                    <div class="testimonials__slider--slide">
                        <img src="images/star.png" alt="5 estrellas">
                        <h4>A.Ch. RAFI / Fractura Olecranon</h4>
                        <p>No podria haber elegido mejor lugar para mi rehabilitacion. Super profesionales y con
                            muchisima experiencia. Muchas gracias por todo el apoyo, las palabras de animo y las risas.
                            ☺ Eternamente agradecida , los super recomiendo ¡</p>
                    </div>
                    <div class="testimonials__slider--slide">
                        <img src="images/star.png" alt="5 estrellas">
                        <h4>A.P.C. Post QX Ligamento Cruzado Anterior y Menisco</h4>
                        <p>Dure con ellos mas del año y todo increible. La mejor atencion y rehabilitacion.</p>
                    </div>
                    <!-- <div class="testimonials__slider--slide">
                        <img src="images/star.png" alt="5 estrellas">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus hic, eaque a est cum
                            tenetur voluptatem quod aspernatur recusandae nesciunt? Fugit expedita quae amet eos</p>
                    </div> -->
                </div>
                <!-- <div class="arrow testimonials__slider-previous">
                    <i class="fa-solid fa-arrow-right"></i>
                </div> -->
            </div>
            <div class="arrow testimonials__slider-previous fadeInUp wow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </section>
        <section id="locations">
            <div class="fadeInLeft wow">
                <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Av.%20de%20los%20bosques%20158%20Col.%20Lomas%20de%20Tecamachalco,%20Huixquilucan%20Estado%20de%20M%C3%A9xico+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

                <div class="address">
                    <img src="images/pin.png" alt="icono de ubicacion">
                    <p>Av. de los bosques 158 Col. Lomas de Tecamachalco, Huixquilucan Estado de México</p>
                </div>
                <div class="phone">
                    <img src="images/phone.png" alt="icono de telefono">
                    <p>55 83 73 73 95</p>
                </div>
            </div>

            <div class="fadeInRight wow">
                <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Calle%20Divisi%C3%B3n%20del%20Norte%20310%20Col.%20Lomas%20de%20Memetla%20,%20Cuajimalpa%20CDMX+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

                <div class="address">
                    <img src="images/pin.png" alt="icono de ubicacion">
                    <p>Calle División del Norte 310 Col. Lomas de Memetla , Cuajimalpa CDMX</p>
                </div>
                <div class="phone">
                    <img src="images/phone.png" alt="icono de telefono">
                    <p>55 36 93 37 39</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div>
            <div>
                <a href="index.php"><img src="images/logo.png" alt="Logo AR Fisioterapia"></a>
                <h4>Síguenos</h4>
                <div class="social">
                    <a href="" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    <a href="" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
            <ul class="footer__menu">
                <li><a href="#about">ACERCA DE NOSOTROS</a></li>
                <li><a href="services.php">SERVICIOS</a></li>
                <li><a href="#testimonials">TESTIMONIOS</a></li>
                <li><a href="faqs.php">FAQS</a></li>
                <li><a href="contact.php">AGENDA TU CITA</a></li>
            </ul>
        </div>
        <hr>
        <div class="copyright">
            <p>Copyright © | Designed by Molcajete Diseño</p>
            <ul>
                <li><a href="#" target="_blank">AVISO DE PRIVACIDAD</a></li>
                <li><a href="#" target="_blank">TÉRMINOS Y CONDICIONES</a></li>
            </ul>
        </div>
    </footer>
    <script src="js/index.js"></script>
</body>

</html>