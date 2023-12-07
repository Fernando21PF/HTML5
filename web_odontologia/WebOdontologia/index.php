<!DOCTYPE html>

<html lang="es">




<head>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta http-equiv="Permissions-Policy" content="interest-cohort=()">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/e4fff14509.js" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <link rel="icon" href="img/logo1.ico">

  <title>Inicio</title>

  <!-- ====================================

  WHATSAPP CHAT

  =========================================-->

  <div id="whatsapp-chat" class="hide">

    <div class="header-chat d-flex">

      <div class="head-home pl-2">

        <img src="img/logo1.svg" width="40">




      </div>

      <div class="get-new pl-3 pt-1">

        <!-- <div id="get-label">Informes</div> -->

        <div id="get-nama">Atención al cliente</div>

      </div>

    </div>

    <div class="start-chat">

      <div class="first-msg">

        <div class="cvjcv _1Ilru _8YVHI">




          <span>¡Hola! ¿Qué puedo hacer por ti?</span>

        </div>

      </div>

      <div class="blanter-msg"><textarea id="chat-input" placeholder="Escribe un mensaje" maxlength="120" row="1"
          value="1"></textarea>

        <a href="#" onclick="enviar_mensaje();" id="send-it">

          <i class="fa fa-paper-plane"></i></a>

      </div>

    </div>

    <div id="get-number">51998698808</div><a class="close-chat" onclick="cerrar_chat();" href="#">×</a>

  </div>





  <a class="blantershow-chat" onclick="mostrar_chat();" href="#" title="ShowWhatsapp Chat">

    <svg width="18" viewBox="0 0 24 24">

      <defs />

      <path fill="#eceff1"
        d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z" />

      <path fill="#4caf50"
        d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z" />

      <path fill="#fafafa"
        d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z" />

    </svg>Chat

  </a>




  <script>

    function enviar_mensaje() {

      var a = document.getElementById("chat-input");

      if ("" != a.value) {

        var b = document.getElementById("get-number").innerHTML,

          c = document.getElementById("chat-input").value,

          d = "https://api.whatsapp.com/send",

          e = b,

          f = "&text=" + c;

        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) var d = "whatsapp://send";

        var g = d + "?phone=" + e + f;

        window.open(g, "_blank");

      }

    }




    const whatsapp_chat = document.getElementById("whatsapp-chat");




    function cerrar_chat() {

      whatsapp_chat.classList.add("hide");

      whatsapp_chat.classList.remove("showWhatsapp");




    }




    function mostrar_chat() {




      if (whatsapp_chat.classList.value == "showWhatsapp") {




        whatsapp_chat.classList.add("hide");

        whatsapp_chat.classList.remove("showWhatsapp");

      } else {

        whatsapp_chat.classList.add("showWhatsapp");




        whatsapp_chat.classList.remove("hide");




      }





    }

  </script>

</head>

<div id="preloader">

  <div id="loader">

    <div id="shadow"></div>

    <div id="box"></div>

  </div>

  <div id="loading-text">Cargando...</div>

</div>




<body>

  <header class="header ">

    <nav class="navbar bg-body-tertiary  navbar-expand-lg fixed-top">

      <div class="container-fluid">

        <a class="logo navbar-brand ps-3" href="index.php">

          <img class="img-fluid" width="180" src="img/logo.png" alt="logo">

        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel">

          <div class="offcanvas-header">

            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Odontología estética Ñingle</h5>

            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

          </div>

          <div class="offcanvas-body">

            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">

              <li class="nav-item">

                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="casos.html">Casos Clínicos</a>

              </li>




              <li class="nav-item">

                <a class="nav-link" href="especialidades.html">Especialidades</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="contacto.html">Contacto</a>

              </li>

            </ul>

            <a href="reservarCita.html" class="btn"><button class="btn btn-primary ">Reservar Cita</button></a>

          </div>

        </div>

      </div>

    </nav>

  </header>

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">

      <div class="carousel-item active" data-bs-interval="4000">

        <img src="img/blur1.svg" class="d-block w-100" alt="...">

      </div>

      <div class="carousel-item">

        <img src="img/blur2.svg" class="d-block w-100" alt="...">

      </div>

      <div class="carousel-item">

        <img src="img/blur3.svg" class="d-block w-100" alt="...">

      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">

      <span class="carousel-control-prev-icon" aria-hidden="true"></span>

      <span class="visually-hidden">Previous</span>

    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">

      <span class="carousel-control-next-icon" aria-hidden="true"></span>

      <span class="visually-hidden">Next</span>

    </button>

  </div>

  <section id="nosotros" class="nosotros py-5">

    <div class="container">

      <div class="titulo">

        <h2 data-aos="fade-up" class="fw-bold pb-1 text-center">Sobre Nosotros</h2>

      </div>

      <div class="row py-5 justify-content-center">

        <div class="col-12 mb-3 col-md-6 col-lg-5 text-center align-self-center pe-lg-5">

          <img data-aos="fade-up-right" src="img/doc.png" alt="perfil" class="img-fluid">

        </div>

        <div data-aos="fade-up-left" class="col-12 mb-3 col-md-6 col-lg-7 ps-lg-5">

          <h2 class="mb-4 pt-5 fw-semibold">DRA. ÑINGLE MANSILLA<br>GLORIA MARIA</h2>

          <h3 class="mb-3 fw-normal">Su Odontóloga de confianza</h3>
          <p class="descripcion fst-lighter text-justify">"¡Hola! Soy Gloria María Ñingle Mansilla, una odontóloga con
            más de muchos años de experiencia con las especialidades de endodoncia, estética dental, ortodoncia,
            atención especializada de niños y adultos. Mi pasión por la odontología comenzó hace muchos años y he
            dedicado mi carrera a ayudar a mis pacientes y lograr sonrisas saludables y hermosas. Mi enfoque es brindar
            una atención especializada y adaptada a las necesidades de cada paciente. Me enorgullece de ser parte de una
            profesión que puede tener un impacto tan positivo e importante en la vida de cada persona".

          </p>

        </div>

      </div>

    </div>
    </section>
    <section class="testimonios pb-5">

        <div class="titulo">

          <h2 class="text-center fw-bold text-white">¿Qué opinan nuestros pacientes?</h2>

        </div>

        <div id="carouselOpiniones" class="carousel container-fluid slide" data-bs-ride="carousel"
          data-bs-interval="5000">

          <div class="carousel-inner">

            <div class="carousel-item active">

              <div class="card text-center">

                <div class="card-body align-items-center row">

                  <div class="col-12 p-0 col-md-4">

                    <img class="img-fluid" src="img/pacientex.png" alt="Foto del paciente 4">

                  </div>

                  <div class="col-12 col-md-8">

                    <p class="card-text text-white p-md-5 p-3">Recomiendo encarecidamente a este dentista. Es muy

                      profesional y

                      siempre se preocupa por mi bienestar. Me explicó todo el procedimiento con detalle y me dio

                      opciones para tomar una decisión informada.</p>

                    <p class="card-text text-center text-sm-center text-white pe-md-5 pb-3">PACIENTE: DIEGO GARRIDO CARBAJAL</p>

                    <!-- Botón para abrir el modal -->

                    <button data-bs-toggle="modal" data-bs-target="#mod" class="btn btn-outline-light mb-1">Ver
                      Video</button>


                  </div>

                </div>

              </div>

            </div>

            <div class="carousel-item">

              <div class="card text-center">

                <div class="card-body d-flex align-items-center row">

                  <div class="col-12 col-md-4 p-0">

                    <img class="img-fluid" src="img/pacientex2.png" alt="Foto del paciente 4">

                  </div>

                  <div class="col-12 col-md-8">

                    <p class="card-text text-white p-md-5 p-3">Recomiendo encarecidamente a este dentista. Es muy

                      profesional y

                      siempre se preocupa por mi bienestar. Me explicó todo el procedimiento con detalle y me dio

                      opciones para tomar una decisión informada.</p>

                    <p class="card-text text-center text-sm-center text-white pe-md-5 pb-3">PACIENTE: JULIA MONTES DE OCA</p>

                    <!-- Botón para abrir el modal -->

                    <button data-bs-toggle="modal" data-bs-target="#mod2" class="btn btn-outline-light mb-1">Ver
                      Video</button>




                    

                  </div>

                </div>

              </div>

            </div>

            <!-- <div class="carousel-item">

              <div class="card text-center">

                <div class="card-body d-flex align-items-center flex-row flex-wrap">

                  <div class="col-12 col-md-4">

                    <img class="img-fluid" src="img/paciente4.jpg" alt="Foto del paciente 4">

                  </div>

                  <div class="col-12 col-md-8">

                    <p class="card-text text-white p-md-5 p-3">Recomiendo encarecidamente a este dentista. Es muy

                      profesional y

                      siempre se preocupa por mi bienestar. Me explicó todo el procedimiento con detalle y me dio

                      opciones para tomar una decisión informada.</p>

                    <p class="card-text text-center text-sm-end text-black pe-md-5 pb-3">- Paciente, 003</p>

                  </div>

                </div>

              </div>

            </div> -->

          </div>

        </div>

    </section>

    <section  id="elegirnos" class="py-5 elegirnos">

      <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 col-lg-5 mb-3">

          <img class="img-fluid p-1" src="img/inicio1.png" alt="">

        </div>

        <div class="col-12 col-md-6 col-lg-7 ps-lg-5 mb-3">

          <div class="titulo py-3">

            <h2 class="fw-bold text-center">¿Por Qué Elegirnos?</h2>

          </div>

          <div>

            <p class="descripcion fst-light text-justify">

              "Si está buscando una odontóloga con experiencia, atención garantizada y un enfoque personalizado, ¡no

              busque más! Como la primera odontóloga de la zona, Gloria María Ñingle Mansilla ha estado ayudando a

              pacientes a lograr sonrisas saludables y hermosas durante muchos años. Su enfoque en la atención

              personalizada significa que se asegurará de comprender sus necesidades y objetivos únicos, y de trabajar

              con usted para crear un plan de tratamiento que se adapte a su estilo de vida y capacidad económica.
              Además, su

              compromiso con la atención de calidad significa que ofrecemos una garantía en todos nuestros tratamientos.

              Entonces, si está buscando una odontóloga confiable, con experiencia. Ilumina tu sonrisa."

            </p>

          </div>

        </div>

      </div>
    </div>
    </section>

    <section>

      <div class="estadisticas d-flex flex-row flex-wrap">

        <div data-aos="zoom-out-down" class="atendidos cssss ">

          <div class="text-center"><i class="fa-solid fa-users-between-lines fa-2xl style=" color: #1e66aa;"></i></div>

          <div class="value" akhi="2000" data-prefix="+" suffix="" data-visible="false">0</div>

          <h2 class="text-center">Pacientes Atendidos</h2>

        </div>

        <div data-aos="zoom-out-down" class="felices cssss ">

          <div class="text-center"><i class="fa-regular fa-face-grin-beam fa-2xl" style="color: #1e66aa;"></i></div>

          <div class="value" akhi="100" suffix="%" data-visible="false">0</div>

          <h2 class="text-center">Sonrisas Alcanzadas</h2>

        </div>

        <div data-aos="zoom-out-down" class="experiencia cssss ">

          <div class="text-center"><i class="fa-regular fa-heart fa-2xl" style="color: #1e66aa;"></i></div>

          <div class="value" akhi="100" suffix="%" data-visible="false">0</div>

          <h2 class="text-center">Pasión</h2>

        </div>

    </section>

    </div>




    <section class="detalles">

      <div class="d-flex flex-wrap">

        <div data-aos="fade-up"
        data-aos-duration="3000" class="izquierda d-flex justify-content-center col-12 col-md-6 flex-column text-center pt-5">

          <i class="fa-solid fa-calendar-days fa-2xl" style="color: #1e66aa;"></i>

          <h2 class="p-5">Horarios De Atención</h2>

          <h5>Todos los días</h5>

          <h5>Mañana: 9am a 1pm</h5>

          <h5>Tarde: 5pm a 9pm</h5>

          <a href="reservarCita.html" class="btn p-5"><button class="btn btn-outline-primary">Reservar Cita</button></a>

        </div>

        <div data-aos="fade-up"
        data-aos-duration="3000" class="derecha d-flex text-center justify-content-center col-12 col-md-6 flex-column pt-5">

          <i class="fa-solid fa-location-dot fa-2xl" style="color: #ffffff;"></i>

          <h2 class="text-white p-5">Encuentranos En</h2>

          <h5 class="text-white">CALLE VALENCIA 102 DPTO. 203 URB LA MACARENA LA PERLA CALLAO, Lima, Peru</h5>

          <a class="text-white p-5" target="_blank"
            href="https://www.google.com/maps/dir//Odontolog%C3%ADa+Est%C3%A9tica+E+Integral+%C3%91ingle+C.+Valencia+102+La+Perla+07016/@-12.0733326,-77.1106408,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x9105cbdb9b09a86d:0x9718d1b31e1548ec!2m2!1d-77.1106418!2d-12.0733326?entry=ttu"><button
              class="btn btn-outline-light">OBTENER DIRECCIÓN</button></a>

        </div>

      </div>

    </section>

    <section class="mapa">

      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2758.8311531084996!2d-77.11169407490324!3d-12.072615415524186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cbdb9b09a86d%3A0x9718d1b31e1548ec!2sOdontolog%C3%ADa%20Est%C3%A9tica%20E%20Integral%20%C3%91ingle!5e0!3m2!1ses-419!2spe!4v1684524232091!5m2!1ses-419!2spe"
        width="100%" height="500" style="border:0; margin-bottom: -70px;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>

    <!--Waves Container-->

    <div>

      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">

        <defs>

          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />

        </defs>

        <g class="parallax">

          <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.6" />

          <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />

          <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.4)" />

          <use xlink:href="#gentle-wave" x="48" y="7" fill="#0081FD" />

        </g>

      </svg>

    </div>

    <!--Waves end-->

    <footer>

      <!-- <img class="img-fluid ondas" src="img/Footer2.svg" alt="footerimg"> -->

      <div class="container-fluid footer bg-footer p-5">

        <div class="row">

          <div class="col-lg-6">

            <div class="footer_datos">

              <img src="img/logo.png" class="img-fluid p-2" width="">

              <h4 class="d-none d-md-block">No esperes más para cuidar de tu salud dental.Programa una cita

                con nosotros hoy mismo y experimenta la diferencia que nuestra odontología puede hacer

                por tu sonrisa.

              </h4>

            </div>

          </div>




          <div class="col-lg-6 mt-5 mt-md-0 d-flex footer">

            <ul class="ps-0">

              <li class=" m-lg-5 mb-4">

                <a class="text-white" target="_blank"
                  href="https://www.facebook.com/profile.php?id=100040335201259&mibextid=ZbWKwL">

                  <i class="fa-brands fa-facebook-f fa-2xl" style="color: #ffffff;"></i>

                </a>

              </li>

              <li class=" m-lg-5 mb-4">

                <a class="text-white" target="_blank" href="https://www.instagram.com/odontologianingle/">

                  <i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i>

                </a>

              </li>

              <li class=" m-lg-5 mb-4">

                <a class="text-white" target="_blank" href="https://www.linkedin.com/in/gloria-maria-%C3%B1ingle-mansilla-03bab3188/">

                  <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>

                </a>

              </li>

            </ul>

            <ul>

              <li class="text-white">

                <p>Horario de atención:</p>

                <p>Todos los dias: Mañana: 9am a 1pm - Tarde: 5pm a 9pm</p>

              </li>

              <li class="text-white">

                <p>Dirección:</p>

                <p>203 URB LA MACARENA LA PERLA CALLAO, Lima, Peru</p>

              </li>

              <li class="text-white">

                <p>Email:</p>

                <p>odontologianingle@gmail.com</p>

              </li>

              <li class="text-white">

                <p>Celular:</p>

                <p>+51 998 698 808</p>
                <button type="button" class="btn btn-light mt-3" data-bs-toggle="modal" data-bs-target="#subscriptionModal">
                  Suscríbete ahora
                  </button>

              </li>

            </ul>

          </div>

        </div>

      </div>

    </footer>
      <!-- Modal -->
      <div class="modal fade" id="subscriptionModal" tabindex="-1" aria-labelledby="subscriptionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="subscriptionModalLabel">Formulario de Suscripción</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white">
              <form id="myForm" action="suscripcion.php" method="post">
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
  
                <div class="mb-3">
                  <label for="email" class="form-label">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
  
                <button type="submit" class="btn btn-light">Suscribirse</button>
              </form>
            </div>
          </div>
        </div>
      </div>
     <!-- Modal de video -->

     <div class="modal" id="mod" tabindex="-1">

      <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content">

          <div class="modal-header">

            <h5 class="modal-title text-white">Reproducir Video</h5>

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

          </div>

          <div class="modal-body">

            <div class="embed-responsive embed-responsive-16by9">

              <iframe id="play" width="100%" height="500" src="https://www.youtube.com/embed/PDMveP1APeg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            </div>

          </div>



        </div>

      </div>

    </div>

    <!-- modal -->
    <!-- Modal de video -->

    <div class="modal" id="mod2" tabindex="-1">

      <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content">

          <div class="modal-header">

            <h5 class="modal-title text-white">Reproducir Video</h5>

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

          </div>

          <div class="modal-body">

            <div class="embed-responsive embed-responsive-16by9">

              <iframe id="play2" width="100%" height="500" src="https://www.youtube.com/embed/bTk4G8gMJ1o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- modal -->
    <script>
      AOS.init();
    </script>

</body>

<script src="https://code.jquery.com/jquery-3.7.0.slim.js"
  integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="script.js"></script>
<script src="FORMULARIO.js"></script>
</html>