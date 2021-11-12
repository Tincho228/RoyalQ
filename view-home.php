<!doctype html>
<html lang="en">

<head>
  <title>Home</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./css/styles.css">

  <!-- Favicon Code -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favivon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
  <link rel="manifest" href="favicon_io/site.webmanifest">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<body>


  <!-- Hero -->
  <div class="container-fluid bg-highlight">
    <!-- Nav bar -->
    <?php include "./common-header.php" ?>
    <!-- Main title -->
    <div class="row font-title">
      <div class="col  text-light text-center " style="padding:50px 25px">
        <h1 class="animate__animated animate__fadeInUp display-4">Royal Q Robot</h1>
        <h1 class="animate__animated animate__fadeInUp">Trade <span
            style="color:#ffd85d; font-weight:bold">Binance</span></h1>
        <a href="https://raqsy.com/s/<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_royal_link'];} ?>" target="_blank" type="button" class="btn btn-lg btn-violet font-body" style="margin-top:25px;">Registrate
          Ahora</a>
      </div>
    </div>
    <!-- Carousel app -->
    <div class="row">
      <div class="container-fluid">
        <div class="row justify-content-center" style="padding: 30px 0px;">
          <div class="col-sm-12 col-md-6 col-lg-4 text-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-6">
                      <img class="d-block w-100" src="./images/app-image.png" alt="First slide">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                      <h2 class="font-body text-light text-left">Activa<br>las 24 hs</h2>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-6">
                      <img class="d-block w-100" src="./images/app-image-two.png" alt="First slide">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                      <h2 class="font-body text-light text-left ">Informe de<br>Ganancia<br>diaria.</h2>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-6">
                      <img class="d-block w-100" src="./images/app-image-three.png" alt="First slide">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                      <h2 class="font-body text-light text-left">Fácil de<br>operar</h2>
                    </div>
                  </div>
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
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Us -->
  <div class="container-fluid font-body" style="padding-top:40px;">
    <div class="row justify-content-center" style="margin-bottom:30px;">
      <div class="col-sm-12 col-lg-8">
        <div class="row">
          <div class="col-sm-12 col-md-8 " style="padding: 30px 30px">
            <h2 style="margin-bottom: 30px;" class="font-title">Que es Royal Q?</h2>
            <p style="margin-bottom: 30px;"><strong>SOFTWARE DE COMPUTADORA: </strong>RoyalQ trading BOT es un programa
              informático basado en una serie de
              señales de trading de criptomonedas que ayudan a determinar si comprar o vender un par de criptomonedas
              en
              un momento dado. </p>
            <p><strong>MODELO AUTOMATICO:</strong> Los robots como RoyalQ están diseñados para automatizar el comercio
              de
              criptomonedas en su nombre. Estos bots ayudan a automatizar el análisis y la interpretación de las
              estadísticas del mercado.
              Pueden recopilar datos de mercado, interpretarlos, calcular el riesgo de mercado potencial y ejecutar la
              compra o venta de criptomonedas en su nombre. Piense en ello como contratar a un experto en comercio de
              criptomonedas para que realice su comercio de criptomonedas mientras puede sentarse y ver crecer sus
              ganancias.</p>
            <!-- <button class="btn btn-outline-secondary btn-lg">Mas Información</button> -->
          </div>
          <div class="col-sm-12 col-md-4 text-center" style="padding:30px 30px">
            <img src="./images/acerca-de.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Our Mission -->
  <div class="container-fluid font-body">
    <div class="row justify-content-center bg-light" style="padding:30px 0px">
      <div class="col-sm-12 col-lg-8">
        <div class="row">
          <div class="col-sm-12 col-md-4 text-center" style="padding:30px">
            <img src="./images/save-time.jpg" alt="image of ahorre tiempo" class="img-fluid">
          </div>
          <div class="col-sm-12 col-md-8  " style="padding: 30px 30px">
            <h2 style="margin-bottom:30px" class="font-title"><i class="fas fa-history"></i> Ahorre tiempo y dinero</h2>
            <p style="margin-bottom:30px"><strong>MISSION:</strong> Los bots comerciales como RoyalQ Crypto a menudo
              pueden ahorrarle mucho tiempo y son más baratos que contratar expertos humanos. La verdad es que se sabe
              que las criptomonedas son extremadamente volátiles y la mayoría de las veces los precios fluctúan
              drásticamente incluso en minutos. Por lo tanto, en muchos casos, los comerciantes no pueden reaccionar con
              la suficiente rapidez a los cambios en el precio de mercado para lograr su objetivo comercial.
            </p>

            <!-- <button class="btn btn-outline-secondary btn-lg">Mas Información</button> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Steps -->
  <div class="container-fluid">
    <div class="row justify-content-center" style="padding:30px 0px">
      <div class="col-sm-12 col-lg-8 text">
        <h2 class="text-center" style="margin-bottom: 30px;"><i class="fas fa-crop-alt text-highlight"></i> Pasos a
          seguir</h2>
        <div class="row text-center" style="margin-bottom:30px;">
          <div class="col-sm-12 col-md-4 justify-content-center d-flex">

            <div class="card"
              style="width: 18rem;margin:20px; border-radius:25px; box-shadow:8px 7px 20px rgb(255 193 7);">
              <i class="fab fa-bitcoin text-warning" style="font-size:50px; margin-top:20px; "></i>
              <div class="card-body">
                <h5 class="card-title">Binance</h5>
                <p class="card-text">Crea tu cuenta totalmente gratis con este link y obtené un <span
                    style="font-weight:bold; font-size:20px">10%</span> de descuento en comisiones. Ingresá y retirá tu
                  dinero las
                  <strong>24 hs</strong></p>
                <a href="https://accounts.binance.com/es-LA/register?ref=<?php if(isset($active_user['user_binance_link'])){echo $active_user['user_binance_link'];} ?>" class="btn  btn-warning text-dark"
                 target="_blank" style="border-radius:25px;">Registrate</a>
              </div>
            </div></i>
          </div>
          <div class="col-sm-12 col-md-4 justify-content-center d-flex">
            <div class="card"
              style="width: 18rem; margin:20px; border-radius:25px; box-shadow:8px 7px 20px rgb(23 162 184 / 59%)">
              <i class="fas fa-robot text-info" style="font-size:50px; margin-top:20px"></i>
              <div class="card-body">
                <h5 class="card-title">Royal Q</h5>
                <p class="card-text">Crea tu cuenta gratuita en RoyalQ Bot.</p>
                <a href="https://raqsy.com/s/<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_royal_link'];} ?>" target="_blank" class="btn btn-info"
                  style="border-radius:25px;">Registrate</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 justify-content-center d-flex">
            <div class="card"
              style="width: 18rem;margin:20px; border-radius:25px ; box-shadow:8px 7px 20px rgb(112 48 160);">
              <i class="fas fa-link" style="font-size:50px; margin-top:20px; color:rgb(112 48 160)"></i>
              <div class="card-body">
                <h5 class="card-title">Vinculá</h5>
                <p class="card-text">Segui nuestros tutoriales, activá y vincula el bot para comenzar a trabajar
                  </p>
                <a href="#contactUs" class="btn btn-info"
                  style="border-radius:25px; background-color:rgb(112 48 160)">Vinculá tu
                  cuenta</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="card text-center"
            style="width: 18rem;margin:20px; border-radius:25px ; box-shadow:8px 7px 20px black;">
            <i class="fas fa-user-tie" style="font-size:50px; margin-top:20px; color:black"></i>
            <div class="card-body">
              <h5 class="card-title">Soporte</h5>
              <p class="card-text">Pedi la ayuda de un asesor.</p>
              <a data-toggle="modal" data-target="#contact-modal" class="btn btn-dark text-light"  style="border-radius:25px;">Solicita
                ayuda</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Services -->
    <div class="container-fluid">
      <div class="row justify-content-center" style="padding: 30px 0px">
        <div class="col-sm-12 col-lg-8 text-center">
          <h2 class="text-center" style="margin-bottom: 30px;">Nuestros Servicios</h2>
          <P class="text-center" style="margin-bottom: 40px;">Te ofrecemos</P>
          <div class="row">
            <div class="col-sm-4">
              <i class="fas fa-power-off text-highlight" style="font-size: 40px; margin-bottom:20px;"></i>
              <h4>Soporte</h4>
              <p>Instalacion y programacion remota las 24 hs.</p>
            </div>
            <div class="col-sm-4">
              <i class="fas fa-heart text-highlight" style="font-size: 40px; margin-bottom:20px;"></i>
              <h4>Capacitacion</h4>
              <p>Las mejores estrategias personalizadas</p>
            </div>
            <div class="col-sm-4">
              <i class="fas fa-lock text-highlight" style="font-size: 40px; margin-bottom:20px;"></i>
              <h4>Asesoramiento</h4>
              <p>LLevar la inversion a un nivel superior</p>
            </div>
          </div>
          <br><br>
          <div class="row">
            <div class="col-sm-4">
              <i class="fas fa-leaf text-highlight" style="font-size: 40px; margin-bottom:20px;"></i>
              <h4>Grupos</h4>
              <p>Tips y estrategias de los mejores Traders</p>
            </div>
            <div class="col-sm-4">
              <i class="fas fa-certificate text-highlight" style="font-size: 40px; margin-bottom:20px;"></i>
              <h4>Seguridad</h4>
              <p>Proteccion sobre la inversion</p>
            </div>
            <div class="col-sm-4">
              <i class="fas fa-wrench text-highlight" style="font-size: 40px; margin-bottom:20px;"></i>
              <h4>Control</h4>
              <p>Observá tus ganancias diarias desde la app</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--  Contact section-->
    <div class="container-fluid bg-light" style="padding-top:30px;padding-bottom:20px;">
      <h2 id="contactUs" class="text-center">Contacto</h2>
      <div class="row justify-content-center">
        <form action="./index.php" method="POST">
          <div class="col-sm-12 col-lg-8">
            <div class="row">
              <div class="col-sm-5">
                <p>Un asesor te respondera a la brevedad</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Argentina, AR</p>
                <p><span class="glyphicon glyphicon-envelope"></span> consultas@royalq-mundial.com</p>
              </div>
              <div class="col-sm-7">
                <div class="row">
                  <div class="col-sm-6 form-group">
                    <label for="name">Nombre completo</label>
                    <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
                  </div>
                  <div class="col-sm-6 form-group">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                  </div>
                  <div class="col-sm-6 form-group">
                    <label for="phone">Telefono</label>
                    <input class="form-control" id="phone" name="phone" placeholder="Celular" type="text" required>
                  </div>
                </div>

              </div>

            </div>
            <label for="mensaje">Mensaje</label>
            <textarea class="form-control" id="comments" name="message" placeholder="Escribinos tu mensaje" rows="5"
              required></textarea>

            <div class="row">
              <div class="col-sm-12 form-group">
                <button class="btn btn-dark pull-right" type="submit" style="margin-top:10px;">Enviar</button>
                <!-- Add the action name - value pair -->
                <input type="hidden" name="action" value="contact">
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>

  <!--  Footer  -->
  <?php include "./common-footer.php" ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>