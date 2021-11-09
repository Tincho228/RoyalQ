<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark" style="padding:8px 15px;">
    <div class="container d-flex justify-content-end">
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
            <a class="nav-link text-light" href="#"><i class="far fa-question-circle"></i> Preguntas frecuentes</a>
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
            <a class="nav-link text-light" data-toggle="modal" data-target="#contact-modal"><i class="fas fa-envelope-open-text"></i> Contáctanos</a>
          </li>

          <!--  Admin link  -->
          <li class="nav-item">
            <a class="nav-link text-light" href="./accounts/index.php?"><i class="fas fa-user"></i> Log in</a>
          </li>
        </ul>
        <!-- <span class="navbar-text">
        Navbar text with an inline element
      </span> -->
      </div>
    </div>
  </nav>
</div>
<!-- Modal of Contacts -->
<?php include './views/modal-contact.php' ?>

