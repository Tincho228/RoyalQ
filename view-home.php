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
        <a href="https://raqsy.com/s/<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_royal_link'];} ?>"
          target="_blank" type="button" class="btn btn-lg btn-violet font-body" style="margin-top:25px;">Registrate
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
                      <h2 class="font-body text-light text-left">F??cil de<br>operar</h2>
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
            <p style="margin-bottom: 30px;" class="font-body"><strong>SOFTWARE DE COMPUTADORA: </strong>RoyalQ trading BOT es un programa
              inform??tico basado en una serie de
              se??ales de trading de criptomonedas que ayudan a determinar si comprar o vender un par de criptomonedas
              en
              un momento dado. </p>
            <p><strong>MODELO AUTOMATICO:</strong> Los robots como RoyalQ est??n dise??ados para automatizar el comercio
              de
              criptomonedas en su nombre. Estos bots ayudan a automatizar el an??lisis y la interpretaci??n de las
              estad??sticas del mercado.
              Pueden recopilar datos de mercado, interpretarlos, calcular el riesgo de mercado potencial y ejecutar la
              compra o venta de criptomonedas en su nombre. Piense en ello como contratar a un experto en comercio de
              criptomonedas para que realice su comercio de criptomonedas mientras puede sentarse y ver crecer sus
              ganancias.</p>
            <!-- <button class="btn btn-outline-secondary btn-lg">Mas Informaci??n</button> -->
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
            <p style="margin-bottom:30px"  class="font-body"> <strong>MISSION:</strong> Los bots comerciales como RoyalQ Crypto a menudo
              pueden ahorrarle mucho tiempo y son m??s baratos que contratar expertos humanos. La verdad es que se sabe
              que las criptomonedas son extremadamente vol??tiles y la mayor??a de las veces los precios fluct??an
              dr??sticamente incluso en minutos. Por lo tanto, en muchos casos, los comerciantes no pueden reaccionar con
              la suficiente rapidez a los cambios en el precio de mercado para lograr su objetivo comercial.
            </p>

            <!-- <button class="btn btn-outline-secondary btn-lg">Mas Informaci??n</button> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Steps -->
  <div class="container-fluid">
    <div class="row justify-content-center" style="padding:30px 0px">
      <div class="col-sm-12 col-lg-8 text">
        <h2 class="text-center font-title" style="margin-bottom: 30px;"><i class="fas fa-crop-alt text-highlight"></i> Pasos a
          seguir</h2>
        <div class="row text-center" style="margin-bottom:30px;">
          <div class="col-sm-12 col-md-4 justify-content-center d-flex">
            <div class="card card-step-bg"
              style="width: 18rem;margin:20px; border-radius:25px; box-shadow:8px 7px 20px rgb(255 193 7);">
              <i class="fab fa-bitcoin text-warning" style="font-size:50px; margin-top:20px;"></i>
              <div class="card-body">
                <h5 class="card-title">Binance</h5>
                <p class="card-text">Crea tu cuenta totalmente gratis con este link y obten?? un <span
                    style="font-weight:bold; font-size:20px">10%</span> de descuento en comisiones. Ingres?? y retir?? tu
                  dinero las
                  <strong>24 hs</strong></p>
                <a href="https://accounts.binance.com/es-LA/register?ref=<?php if(isset($active_user['user_binance_link'])){echo $active_user['user_binance_link'];} ?>"
                  class="btn  btn-warning text-dark" target="_blank" style="border-radius:25px;">Registrate</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 justify-content-center d-flex">
            <div class="card  card-step-bg"
              style="width: 18rem; margin:20px; border-radius:25px; box-shadow:8px 7px 20px rgb(23 162 184 / 59%)">
              <i class="fas fa-robot text-info" style="font-size:50px; margin-top:20px"></i>
              <div class="card-body">
                <h5 class="card-title">Royal Q</h5>
                <p class="card-text">Crea tu cuenta gratuita en RoyalQ Bot.</p>
                <a href="https://raqsy.com/s/<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_royal_link'];} ?>"
                  target="_blank" class="btn btn-info" style="border-radius:25px;">Registrate</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 justify-content-center d-flex">
            <div class="card card-step-bg"
              style="width: 18rem;margin:20px; border-radius:25px ; box-shadow:8px 7px 20px rgb(112 48 160);">
              <i class="fas fa-link" style="font-size:50px; margin-top:20px; color:rgb(112 48 160)"></i>
              <div class="card-body">
                <h5 class="card-title">Vincul??</h5>
                <p class="card-text">Segui nuestros tutoriales, activ?? y vincula el bot para comenzar a trabajar
                </p>
                <a href="#contactUs" class="btn btn-info"
                  style="border-radius:25px; background-color:rgb(112 48 160)">Vincul?? tu
                  cuenta</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="card text-center  card-step-bg"
            style="width: 18rem;margin:20px; border-radius:25px ; box-shadow:8px 7px 20px black;">
            <i class="fas fa-user-tie" style="font-size:50px; margin-top:20px; color:black"></i>
            <div class="card-body">
              <h5 class="card-title">Soporte</h5>
              <p class="card-text">Pedi la ayuda de un asesor.</p>
              <a data-toggle="modal" data-target="#contact-modal" class="btn btn-dark text-light"
                style="border-radius:25px;">Solicita
                ayuda</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Services -->
  <div class="container-fluid">
    <div class="row justify-content-center" style="padding: 30px 0px">
      <div class="col-sm-12 col-lg-8 text-center">
        <h2 class="text-center font-title" style="margin-bottom: 30px;">Nuestros Servicios</h2>
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
            <p>Observ?? tus ganancias diarias desde la app</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  FAQ section -->
  <div class="container-fluid bg-highlight">
    <h2 id="faq" class="class-center text-center text-light font-title" style="padding:30px 0px">Preguntas Frecuentes
    </h2>
    <div class="row justify-content-center" style="padding:30px 0px">
      <div class="col-sm-12 col-lg-8">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="accordion" id="accordionExample">
              <div class="card card-step" style="margin-bottom:5px;">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-block  text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Que es Binance y para qu?? la necesito?
                    </button>
                  </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body card-step-bg">
                    <p><strong>Binance</strong> es una plataforma de intercambio de criptomonedas que actualmente es la
                      m??s grande del mundo
                      en t??rminos de volumen de comercio diario de criptomonedas.
                      Es un medio por el cual se puede guardar,
                      enviar y recibir cualquier moneda o datos.
                      Realizar la cuenta es totalmente gratuito y una
                      manera
                      segura de guardar tus fondos.

                    </p>
                    <hr>
                    <a href="https://accounts.binance.com/es-LA/register?ref=<?php if(isset($active_user['user_binance_link'])){echo $active_user['user_binance_link'];} ?>"
                      class="btn  btn-violet" target="_blank" style="margin:10px 0px ;">Crea tu cuenta en Binance</a>
                    <div>
                      <p style="margin-bottom:5px; margin-top:10px;">Contactate con nosotros</p>
                      <a href="https://api.whatsapp.com/send?phone=54<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_cellphone'];} ?>"
                        target="_blank">
                        <i class="fab fa-whatsapp text-success" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                      <a target="_blank" data-toggle="modal" data-target="#contact-modal">
                        <i class="far fa-envelope text-dark" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                    </div>
                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne"
                      aria-expanded="false" aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                      <i class="fas fa-window-close"></i> Cerrar</button>
                  </div>
                </div>
              </div>
              <div class="card card-step" style="margin-bottom:5px;">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      Como puedo ver mis ganancias?
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body card-step-bg">
                    <p>
                      Tus ganancias pueden visualizarse de dos maneras: <br>
                      <ol>
                        <li>En la pesta??a <strong>Billetera</strong> dentro de Binance</li>
                        <li>En la pesta??a <strong>Revenue</strong> en la app del Bot de RoyalQ</li>
                      </ol>
                      Siempre desde la comodidad de tu celular o computadora personal.<br>
                      Disponible todos los dias, las 24 horas.
                    </p>
                    <hr>
                    <div>
                      <p style="margin-bottom:5px; margin-top:10px;">Contactate con nosotros</p>
                      <a href="https://api.whatsapp.com/send?phone=54<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_cellphone'];} ?>"
                        target="_blank">
                        <i class="fab fa-whatsapp text-success" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                      <a target="_blank" data-toggle="modal" data-target="#contact-modal">
                        <i class="far fa-envelope text-dark" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                    </div>
                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseTwo"
                      aria-expanded="false" aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                      <i class="fas fa-window-close"></i> Cerrar</button>
                  </div>
                </div>
              </div>
              <div class="card card-step" style="margin-bottom:5px;">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                      Mi dinero esta seguro? Cu??ndo lo puedo retirar y c??mo?
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body card-step-bg">
                    <p>
                      El dinero siempre estar?? seguro dentro Binance, el cual cuenta con varios niveles de seguridad
                      para proteger tus datos.<br>


                      En algunos paises no se puede retirar directamente a una cuenta bancaria.

                      Entonces primero debemos enviar la criptomoneda a una billetera local (Bitso, Buenbit, Ripio),
                      cambiarlas por pesos y luego enviarlas a tu banco.<br>

                      Podes retirar todos los dias, las 24 horas y sin prohibiciones. <br>

                      Para recibir tutoriales con ejemplos de retiro o si tenes preguntas, no dudes en
                      consultarnos.</p>
                    <hr>
                    <div>
                      <p style="margin-bottom:5px; margin-top:10px;">Contactate con nosotros</p>
                      <a href="https://api.whatsapp.com/send?phone=54<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_cellphone'];} ?>"
                        target="_blank">
                        <i class="fab fa-whatsapp text-success" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                      <a target="_blank" data-toggle="modal" data-target="#contact-modal">
                        <i class="far fa-envelope text-dark" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                    </div>
                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseThree"
                      aria-expanded="false" aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                      <i class="fas fa-window-close"></i> Cerrar</button>
                  </div>
                </div>
              </div>
              <div class="card card-step" style="margin-bottom:5px;">
                <div class="card-header" id="headingFour">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                      data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                      Cuales son las ganancias del bot?
                    </button>
                  </h2>
                </div>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body card-step-bg">
                    <p>Un 10 % mensual en d??lares dependiendo del mercado</p>
                    <hr>
                    <div>
                      <p style="margin-bottom:5px; margin-top:10px;">Contactate con nosotros</p>
                      <a href="https://api.whatsapp.com/send?phone=54<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_cellphone'];} ?>"
                        target="_blank">
                        <i class="fab fa-whatsapp text-success" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                      <a target="_blank" data-toggle="modal" data-target="#contact-modal">
                        <i class="far fa-envelope text-dark" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                    </div>
                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseFour"
                      aria-expanded="false" aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                      <i class="fas fa-window-close"></i> Cerrar</button>
                  </div>
                </div>
              </div>
              <div class="card card-step" style="margin-bottom:5px;">
                <div class="card-header" id="headingFive">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                      Siempre se gana, cu??les son los riesgos?
                    </button>
                  </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                  <div class="card-body card-step-bg">
                    <p>No hay riesgo de perder el dinero porque el bot opera en la billetera spot de Binance, no en
                      futuros. En caso de que una moneda baje mucho, hay que esperar a que recupere el precio. De todas
                      maneras el bot sigue operando y obteniendo ganancias aunque el precio baje mucho.
                    </p>
                    <hr>
                    <div>
                      <p style="margin-bottom:5px; margin-top:10px;">Contactate con nosotros</p>
                      <a href="https://api.whatsapp.com/send?phone=54<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_cellphone'];} ?>"
                        target="_blank">
                        <i class="fab fa-whatsapp text-success" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                      <a target="_blank" data-toggle="modal" data-target="#contact-modal">
                        <i class="far fa-envelope text-dark" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                    </div>
                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseFive"
                      aria-expanded="false" aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                      <i class="fas fa-window-close"></i> Cerrar</button>
                  </div>
                </div>
              </div>
              <div class="card card-step" style="margin-bottom:5px;">
                <div class="card-header" id="headingSix">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                      Hay alg??n beneficio adem??s del 10%?
                    </button>
                  </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                  <div class="card-body card-step-bg">
                    <p>Por supuesto tenes la posibilidad de constuir tu red. Se obtienen 30 d??lares por cada referido y un 2 % de la ganancia que
                      obtiene cada asociado.<br>
                      Mir?? el turorial que explica como opera la red y sus beneficios.
                    </p>
                    <a class="btn btn-link btn-outline-primary" href="./index.php?action=tutorials#botBind">Plan de compensaci??n</a>
                    <hr>
                    <div>
                      <p style="margin-bottom:5px; margin-top:10px;">Contactate con nosotros</p>
                      <a href="https://api.whatsapp.com/send?phone=54<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_cellphone'];} ?>"
                        target="_blank">
                        <i class="fab fa-whatsapp text-success" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                      <a target="_blank" data-toggle="modal" data-target="#contact-modal">
                        <i class="far fa-envelope text-dark" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                    </div>
                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseSix"
                      aria-expanded="false" aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                      <i class="fas fa-window-close"></i> Cerrar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="accordion" id="accordionExample2">
              <div class="card card-step" style="margin-bottom:5px;">
                <div class="card-header" id="headingSeven">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                      No se nada de tecnolog??a, me pueden ayudar con esto?
                    </button>
                  </h2>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                  data-parent="#accordionExample2">
                  <div class="card-body card-step-bg">
                    <p>No dudes en contactarnos para ayudarte en lo que necesites. Contactanos por mensaje
                      privado,
                      whatsapp, o mail.
                      Actualmente estamos ayudando a muchas personas a que no pierdan su dinero con la
                      devaluacion.
                      Siempre hay manera de darle curso a tus ganancias. Un asesor estar?? para ayudarte a
                      entender
                      el proceso y
                      tambien a asegurar tu dinero.
                    </p>
                    <hr>
                    <div>
                      <p style="margin-bottom:5px; margin-top:10px;">Contactate con nosotros</p>
                      <a href="https://api.whatsapp.com/send?phone=54<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_cellphone'];} ?>"
                        target="_blank">
                        <i class="fab fa-whatsapp text-success" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                      <a target="_blank" data-toggle="modal" data-target="#contact-modal">
                        <i class="far fa-envelope text-dark" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                    </div>
                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseSeven"
                      aria-expanded="false" aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                      <i class="fas fa-window-close"></i> Cerrar</button>
                  </div>
                </div>
              </div>
              <div class="card card-step" style="margin-bottom:5px;">
                <div class="card-header" id="headingEight">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                      Cu??nto tiempo necesito dedicar a la inversi??n?
                    </button>
                  </h2>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                  data-parent="#accordionExample2">
                  <div class="card-body card-step-bg">
                    <p>
                      Solo se necesita tiempo para hacer las cuentas en RoyalQ, Binance y configurar el bot con la
                      estrategia elegida y nada m??s. El bot trabaja autom??ticamente hasta que se decida cambiar la moneda o
                      estrategia elegida.</p>
                    <hr>
                    <div>
                      <p style="margin-bottom:5px; margin-top:10px;">Contactate con nosotros</p>
                      <a href="https://api.whatsapp.com/send?phone=54<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_cellphone'];} ?>"
                        target="_blank">
                        <i class="fab fa-whatsapp text-success" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                      <a target="_blank" data-toggle="modal" data-target="#contact-modal">
                        <i class="far fa-envelope text-dark" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                    </div>
                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseEight"
                      aria-expanded="false" aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                      <i class="fas fa-window-close"></i> Cerrar</button>
                  </div>
                </div>
              </div>
              <div class="card card-step" style="margin-bottom:5px;">
                <div class="card-header" id="headingNine">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                      Cual es el precio del bot?
                    </button>
                  </h2>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample2">
                  <div class="card-body card-step-bg">
                    <p>Precio del bot y comisiones: 120 d??lares anuales para activarlo, luego el bot se queda con el 20%
                      de la ganancia que obtienen los usuarios, y tambi??n Binance cobra una comisi??n peque??a por las
                      compras y ventas que haga el bot en la billetera spot de Binance, esa comisi??n se reduce mucho si
                      se usa BNB (el token de Binance) para pagar las comisiones.
                    </p>
                    <hr>
                    <div>
                      <p style="margin-bottom:5px; margin-top:10px;">Contactate con nosotros</p>
                      <a href="https://api.whatsapp.com/send?phone=54<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_cellphone'];} ?>"
                        target="_blank">
                        <i class="fab fa-whatsapp text-success" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                      <a target="_blank" data-toggle="modal" data-target="#contact-modal">
                        <i class="far fa-envelope text-dark" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                    </div>
                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseNine"
                      aria-expanded="false" aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                      <i class="fas fa-window-close"></i> Cerrar</button>
                  </div>
                </div>
              </div>
              <div class="card card-step" style="margin-bottom:5px;">
                <div class="card-header" id="headingTen">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                      data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                      Cuanto dinero necesito para comenzar la inversion?
                    </button>
                  </h2>
                </div>

                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample2">
                  <div class="card-body card-step-bg">
                    <p>
                      La inversion inicial son aproximadamente 500 dolares.
                      <ol>
                        <li>Record?? que el precio del bot son 120 dolares ( Se paga anualmente y no es parte de la inversion)</li>
                        <li>Para que el bot pueda operar se necesita una inversion inicial de 300 dolares en Binance.</li>
                      </ol>
                    </p>
                    <hr>
                    <div>
                      <p style="margin-bottom:5px; margin-top:10px;">Contactate con nosotros</p>
                      <a href="https://api.whatsapp.com/send?phone=54<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_cellphone'];} ?>"
                        target="_blank">
                        <i class="fab fa-whatsapp text-success" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                      <a target="_blank" data-toggle="modal" data-target="#contact-modal">
                        <i class="far fa-envelope text-dark" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                    </div>
                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseTen"
                      aria-expanded="false" aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                      <i class="fas fa-window-close"></i> Cerrar</button>
                  </div>
                </div>
              </div>
              <div class="card card-step" style="margin-bottom:5px;">
                <div class="card-header" id="headingEleven">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                      Tengo que trabajar o vender algo?
                    </button>
                  </h2>
                </div>
                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven"
                  data-parent="#accordionExample2">
                  <div class="card-body card-step-bg">
                    <p>
                      La respuesta en NO.
                    </p>
                    <hr>
                    <div>
                      <p style="margin-bottom:5px; margin-top:10px;">Contactate con nosotros</p>
                      <a href="https://api.whatsapp.com/send?phone=54<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_cellphone'];} ?>"
                        target="_blank">
                        <i class="fab fa-whatsapp text-success" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                      <a target="_blank" data-toggle="modal" data-target="#contact-modal">
                        <i class="far fa-envelope text-dark" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                    </div>
                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseEleven"
                      aria-expanded="false" aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                      <i class="fas fa-window-close"></i> Cerrar</button>
                  </div>
                </div>
              </div>
              <div class="card card-step" style="margin-bottom:5px;">
                <div class="card-header" id="headingTwelve">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                      Se pagan impuestos del gobierno? Es legal?
                    </button>
                  </h2>
                </div>
                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve"
                  data-parent="#accordionExample2">
                  <div class="card-body card-step-bg">
                    <p>
                      Es totalmente legal.
                      No existen prohibiciones en nuestro pais sobre la compra/venta de CRIPTOMONEDAS a traves de bots, plataformas de 
                      intercambio o billeteras virtuales.
                    </p>
                    
                    <hr>
                    <div>
                      <p style="margin-bottom:5px; margin-top:10px;">Contactate con nosotros</p>
                      <a href="https://api.whatsapp.com/send?phone=54<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_cellphone'];} ?>"
                        target="_blank">
                        <i class="fab fa-whatsapp text-success" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                      <a target="_blank" data-toggle="modal" data-target="#contact-modal">
                        <i class="far fa-envelope text-dark" style="font-size: 40px; margin:0px 5px;"></i>
                      </a>
                    </div>
                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseTwelve"
                      aria-expanded="false" aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                      <i class="fas fa-window-close"></i> Cerrar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  Contact section-->
  <div class="container-fluid" style="padding-top:30px;padding-bottom:20px;">
    <h2 id="contactUs" class="text-center font-title">Contacto</h2>
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