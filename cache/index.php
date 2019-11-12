<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">

  <link rel="stylesheet" href="css/colorbox.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body class ="index">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <header class="site-header">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
        <div class="informacion-evento">
          <div class="clearfix">
            <p class="fecha"><i class="fas fa-calendar-alt"></i>10-12 Dic</p>
            <p class="ciudad"><i class="fas fa-map-marker-alt"></i>Guasave, MX</p>
          </div>
          <h1 class="nombre-sitio">gvewebcamp</h1>
          <p class="slogan">la mejor conferencia de <span>diseño web</span> </p>
        </div><!-- INFORMACION EVENTO-->
      </div>
    </div><!-- HERO-->
  </header>

  <div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
          <a href="index.php">
        <img src="img/logo.svg" alt="logo gdlwebcamp">
          </a>
      </div>
      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="navegacion-principal clearfix">
        <a href="conferencia.php">Conferencia</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitados.php">Invitados</a>
        <a href="registro.php">Reservaciones</a>
      </nav>
    </div><!--contenedor-->
  </div><!-- barra-->    <section class="seccion contenedor">
      <h2>la mejor conferencia de diseño web en español</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </section><!--seccion-->
    <section class="programa">
      <div class="contenedor-video">
        <video  autoplay loop poster="img/bg-talleres.jpg">
          <source src="video/video.mp4" type="video/mp4">
          <source src="video/video.webm" type="video/webm">
          <source src="video/video.ogv" type="video/ogv">
        </video>
      </div><!--contenedor video-->
      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">
            <h2>programa del evento</h2>
                        <nav class="menu-programa">
                                        <a href="#seminario">
              <i class="fas fa-university"></i>Seminario</a>
                                        <a href="#conferencias">
              <i class="fas fa-comments"></i>Conferencias</a>
                                        <a href="#talleres">
              <i class="fas fa-code"></i>Talleres</a>
                                        <a href="#mentorias">
              <i class="fas fas fa-chess-kn"></i>mentorias</a>
                        </nav>
                        
             
                                                                              <div id="seminario" class="info-curso ocultar clearfix">
                                   <div class="detalle-evento">
                      <h3>Dise�o UI y UX para m�viles</h3>
                      <p><i class="far fa-clock"></i>10:00:00</p>
                      <p><i class="fas fa-calendar-alt"></i>2016-12-09</p>
                      <p><i class="fas fa-user-tie"></i>Susan Sanchez</p>
                    </div>
                                                                                        <div class="detalle-evento">
                      <h3>Aprende a Programar en una ma�ana </h3>
                      <p><i class="far fa-clock"></i>10:00:00</p>
                      <p><i class="fas fa-calendar-alt"></i>2016-12-10</p>
                      <p><i class="fas fa-user-tie"></i>Gregorio Sanchez</p>
                    </div>
                                        <a href="calendario.php" class="button float-right">Ver Todos</a>
                    </div><!--.talleres-->
                                                                                                                                          <div id="conferencias" class="info-curso ocultar clearfix">
                                   <div class="detalle-evento">
                      <h3>Como ser freelancer</h3>
                      <p><i class="far fa-clock"></i>10:00:00</p>
                      <p><i class="fas fa-calendar-alt"></i>2016-12-09</p>
                      <p><i class="fas fa-user-tie"></i>Susan Sanchez</p>
                    </div>
                                                                                        <div class="detalle-evento">
                      <h3>Tecnolog�as del Futuro</h3>
                      <p><i class="far fa-clock"></i>17:00:00</p>
                      <p><i class="fas fa-calendar-alt"></i>2016-12-09</p>
                      <p><i class="fas fa-user-tie"></i>Rafael Bautista</p>
                    </div>
                                        <a href="calendario.php" class="button float-right">Ver Todos</a>
                    </div><!--.talleres-->
                                                                                                                                          <div id="talleres" class="info-curso ocultar clearfix">
                                   <div class="detalle-evento">
                      <h3>Responsive Web Design</h3>
                      <p><i class="far fa-clock"></i>10:00:00</p>
                      <p><i class="fas fa-calendar-alt"></i>2016-12-09</p>
                      <p><i class="fas fa-user-tie"></i>Rafael Bautista</p>
                    </div>
                                                                                        <div class="detalle-evento">
                      <h3>Flexbox</h3>
                      <p><i class="far fa-clock"></i>12:00:00</p>
                      <p><i class="fas fa-calendar-alt"></i>2016-12-09</p>
                      <p><i class="fas fa-user-tie"></i>shari Herrera</p>
                    </div>
                                        <a href="calendario.php" class="button float-right">Ver Todos</a>
                    </div><!--.talleres-->
                                                                         
          </div><!--.programa-evento-->
        </div><!--.contenedor-->
      </div><!--.contenido-programa-->
    </section><!--.programa-->
    <section class="seccion contenedor">
 <section class="invitados contenedor seccion">
   <h2>nuestros Invitados</h2>
   <ul class="lista-invitados clearfix">
              <li>
            <div class="invitado">
              <a class="invitado-info" href="#invitado1">
                  <img src="img/invitados/invitado1.jpg" alt="imagen invitado">
                  <p>Rafael Bautista</p>
              </a>
            </div>
          </li>
          <div style="display:none;">
            <div class="invitado-info" id="invitado1">
                <h2>Rafael Bautista</h2>
                  <img src="img/invitado1.jpg" alt="imagen invitado">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem</p>
            </div>
          </div>
              <li>
            <div class="invitado">
              <a class="invitado-info" href="#invitado2">
                  <img src="img/invitados/invitado2.jpg" alt="imagen invitado">
                  <p>shari Herrera</p>
              </a>
            </div>
          </li>
          <div style="display:none;">
            <div class="invitado-info" id="invitado2">
                <h2>shari Herrera</h2>
                  <img src="img/invitado2.jpg" alt="imagen invitado">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem</p>
            </div>
          </div>
              <li>
            <div class="invitado">
              <a class="invitado-info" href="#invitado3">
                  <img src="img/invitados/invitado3.jpg" alt="imagen invitado">
                  <p>Gregorio Sanchez</p>
              </a>
            </div>
          </li>
          <div style="display:none;">
            <div class="invitado-info" id="invitado3">
                <h2>Gregorio Sanchez</h2>
                  <img src="img/invitado3.jpg" alt="imagen invitado">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem</p>
            </div>
          </div>
              <li>
            <div class="invitado">
              <a class="invitado-info" href="#invitado4">
                  <img src="img/invitados/invitado4.jpg" alt="imagen invitado">
                  <p>Susana Rivera</p>
              </a>
            </div>
          </li>
          <div style="display:none;">
            <div class="invitado-info" id="invitado4">
                <h2>Susana Rivera</h2>
                  <img src="img/invitado4.jpg" alt="imagen invitado">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem</p>
            </div>
          </div>
              <li>
            <div class="invitado">
              <a class="invitado-info" href="#invitado5">
                  <img src="img/invitados/invitado5.jpg" alt="imagen invitado">
                  <p>Harol Garcia</p>
              </a>
            </div>
          </li>
          <div style="display:none;">
            <div class="invitado-info" id="invitado5">
                <h2>Harol Garcia</h2>
                  <img src="img/invitado5.jpg" alt="imagen invitado">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem</p>
            </div>
          </div>
              <li>
            <div class="invitado">
              <a class="invitado-info" href="#invitado6">
                  <img src="img/invitados/invitado6.jpg" alt="imagen invitado">
                  <p>Susan Sanchez</p>
              </a>
            </div>
          </li>
          <div style="display:none;">
            <div class="invitado-info" id="invitado6">
                <h2>Susan Sanchez</h2>
                  <img src="img/invitado6.jpg" alt="imagen invitado">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem</p>
            </div>
          </div>
      </ul>
 </section>
      </section>    <div class="contador parallax">
      <div class="contenedor">
        <ul class="resumen-evento clearfix">
          <li><p class="numero">0</p>invitados</li>
          <li><p class="numero">0</p>talleres</li>
          <li><p class="numero">0</p>dias</li>
          <li><p class="numero">0</p>conferencias</li>
        </ul>
      </div>
    </div>
  <section>
    <h2>precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por dia</h3>
            <p class="numero">$30</p>
            <ul>
              <li>bocadillos gratis</li>
              <li>todas las conferencias</li>
              <li>todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">comprar</a>
          </div>
        </li> 
        <li>
            <div class="tabla-precio">
              <h3>todos los dias</h3>
              <p class="numero">$50</p>
              <ul>
                <li>bocadillos gratis</li>
                <li>todas las conferencias</li>
                <li>todos los talleres</li>
              </ul>
              <a href="#" class="button">comprar</a>
            </div>
        </li> 
          <li>
              <div class="tabla-precio">
                <h3>Pase por 2 dias</h3>
                <p class="numero">$45</p>
                <ul>
                  <li>bocadillos gratis</li>
                  <li>todas las conferencias</li>
                  <li>todos los talleres</li>
                </ul>
                <a href="#" class="button hollow">comprar</a>
              </div>
          </li> 
      </ul>
    </div>
  </section>
  <div id="mapa" class="mapa">

  </div>
  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem architecto nesciunt! Dolorem laborum totam provident mollitia ut!</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="imagen testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div><!--.fin testimonial-->
    <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem architecto nesciunt! Dolorem laborum totam provident mollitia ut!</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--.fin testimonial-->
      <div class="testimonial">
          <blockquote>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem architecto nesciunt! Dolorem laborum totam provident mollitia ut!</p>
            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="imagen testimonial">
              <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
            </footer>
          </blockquote>
        </div><!--.fin testimonial-->
    </div>
  </section>
  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Resgistrate al newsletter</p>
      <h3>gdlwebcamp</h3>
      <a href="#" class="button transparente">Registro</a>
    </div><!--.contenido-->
  </div><!--newsletter-->
  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p>dias</li>
        <li><p id="horas" class="numero"></p>horas</li>
        <li><p id="minutos" class="numero"></p>minutos</li>
        <li><p id="segundos" class="numero"></p>segundos</li>
      </ul>
    </div>
  </section>
  <footer class="site-footer">
    <div class="contenedor clearfix">
      <div class="footer-informacion">
        <h3>Sobre <span>gdlwebcamp</span></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis facere vel accusantium dolorem mollitia consectetur aliquam repellat aspernatur sit atque reiciendis nam, labore commodi, cumque sequi aperiam quas excepturi. Aperiam!</p>

      </div>
      <div class="ultimos-tweets">
          <h3>ultimos<span>tweets</span></h3>
          <ul>
            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem qui reiciendis similique dolor earum ex temporibus, incidunt perferendis atque aperiam mollitia. Quam, in animi eaque quia voluptate eveniet unde iusto.</li>
            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem qui reiciendis similique dolor earum ex temporibus, incidunt perferendis atque aperiam mollitia. Quam, in animi eaque quia voluptate eveniet unde iusto.</li>
            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem qui reiciendis similique dolor earum ex temporibus, incidunt perferendis atque aperiam mollitia. Quam, in animi eaque quia voluptate eveniet unde iusto.</li>
          </ul>
      </div>
      <div class="menu">
          <h3>redes<span>sociales</span></h3>
          <nav class="redes-sociales">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-pinterest"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </nav>
      </div>
    
    </div>
  <p class="copyright">
    Todos Los Derechos Reservados <span>ING. Jesus Manuel Loredo Sauceda.</span>
  </p>
  </footer>
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="js/jquery.colorbox-min.js"></script><script src="js/jquery.waypoints.min.js"></script>  <script src="js/cotizador.js"></script>
  <script src="js/main.js"></script>
  

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  