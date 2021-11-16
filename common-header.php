<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark" style="padding:8px 15px;">
    <div class="container d-flex justify-content-between">
      <a class="navbar-brand" href="./index.php"><img src="./images/logo.png" alt="Logo de RoyalQ" style="width:40px;"> ROYALQ</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <span class="hamburguer-menu"></span>
        <span class="hamburguer-menu"></span>
        <span class="hamburguer-menu"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link text-light" aria-current="page" href="./index.php">Inicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" href="#faq"><i class="far fa-question-circle"></i> Preguntas frecuentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php?action=tutorials"><i class="fas fa-book"></i> Tutoriales</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light"
              href="https://www.facebook.com/BLOG-De-Ganancias-Argentina-103371018178827/?modal=admin_todo_tour&notif_id=1599607581917840&notif_t=page_invite&ref=notif0"
              target="_blank"><i class="fab fa-facebook"></i> Seguinos</a>
          </li>
          <li class="nav-item">
            <!-- Button trigger modal -->
            <a class="nav-link text-light" data-toggle="modal" data-target="#contact-modal"><i
                class="fas fa-envelope-open-text"></i> Contáctanos</a>
          </li>

          <!--  Admin link  -->
          <li class="nav-item">
          <?php 
              if(isset($_SESSION['loggedin'])){
                  if($_SESSION['loggedin'] === true){
                      echo '<div class="dropdown">
                      <a class="nav-link text-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mi cuenta
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="./index.php?action=account"><i class="fas fa-user-circle"></i> Administracion</a>
                        <a class="dropdown-item" href="./index.php?action=logout"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion</a>
                      </div>
                    </div>';
                     // echo '<a class="nav-link text-warning" href="./index.php?action=logout"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion</a>';
                  }                      
              }else{
                      echo '<a class="nav-link text-light" href="./index.php?action=login-view"><i class="fas fa-user"></i> Log in</a>';
              } ?>




            
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- Modal of Contacts -->
<?php include './view-modal-contact.php' ?>
