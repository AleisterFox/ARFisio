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

<body>
    <header>
        <nav>
            <figure>
                <a href="index.php"><img src="images/logo.png" alt="Neurowellness Logo"></a>
            </figure>
            <ul class="menu hidden">
                <li><a href="index.php#about">ACERCA DE NOSOTROS</a></li>
                <li><a href="services.php">SERVICIOS</a></li>
                <li><a href="index.php#testimonials">TESTIMONIOS</a></li>
                <!-- <li><a href="faqs.php">FAQS</a></li> -->
                <li><a href="#">AGENDA TU CITA</a></li>
            </ul>
            <i class="fa-solid fa-bars menu__button"></i>
        </nav>
    </header>
    <main>
        <section id="contact">
            <div class="info fadeInLeft wow">
                <h1>CONTÁCTANOS PARA MAYOR INFORMACIÓN</h1>
                <address> <img src="images/pin.png" alt="icono de ubicacion">
                    Av. de los bosques 158 Col. Lomas de Tecamachalco, Huixquilucan Estado de México</address>
                <div>
                    <img src="images/phone.png" alt="icono de telefono">
                    <p>55 83 73 73 95</p>
                </div>
                <address> <img src="images/pin.png" alt="icono de ubicacion">
                    Calle División del Norte 310 Col. Lomas de Memetla , Cuajimalpa CDMX</address>
                <div>
                    <img src="images/phone.png" alt="icono de telefono">
                    <p>55 36 93 37 39</p>
                </div>
                <div>
                    <img src="images/envelope.png" alt="icono de sobre">
                    <p>contacto@arfisioterapia.com.mx</p>
                </div>
                <div>
                    <img src="images/clock.png" alt="icono reloj">
                    <p>Horario: Lunes a viernes de 7am - 8pm | Sábados 7am - 2pm</p>
                </div>
            </div>
            <form action="" class="fadeInRight wow">
                <div class="name">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" placeholder="Ingrese su nombre completo">
                </div>
                <div class="phone">
                    <label for="phone">Celular</label>
                    <input type="tel" name="phone" id="phone" placeholder="Ingrese su número celular">
                </div>
                <div class="campus">
                    <label for="campus">Sede</label>
                    <select name="campus" id="campus">
                        <option class="placeholder" value="" disabled selected>Seleccione la sede</option>
                        <option value="">Lomas de Tecamachalco</option>
                        <option value="">Lomas de Memetla</option>
                    </select>
                </div>
                <div class="service">
                    <label for="service">Servicio</label>
                    <select name="service" id="service">
                        <option class="placeholder" value="" disabled selected>Seleccione el servicio deseado</option>
                        <option value="">Fisioterapia Post-quirúrgica</option>
                        <option value="">Fisioterapia Ortopédica</option>
                        <option value="">Fisioterapia Deportiva</option>
                        <option value="">Readaptación Deportiva</option>
                        <option value="">Asesoría Posquirúrgica</option>
                        <option value="">Descarga Muscular</option>
                    </select>
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Ingrese su correo electrónico">
                </div>
                <div class="message">
                    <label for="mesage">Mensaje</label>
                    <textarea name="mesage" id="mesage" cols="30" rows="10" placeholder="Escriba su mensaje y/ó comentarios"></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
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
                </div>
            </div>
            <ul class="footer__menu">
                <li><a href="index.php#about">ACERCA DE NOSOTROS</a></li>
                <li><a href="services.php">SERVICIOS</a></li>
                <li><a href="index.php#testimonials">TESTIMONIOS</a></li>
                <li><a href="faqs.php">FAQS</a></li>
                <li><a href="#">AGENDA TU CITA</a></li>
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
    <script src="js/services.js"></script>
</body>

</html>