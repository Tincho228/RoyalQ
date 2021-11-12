<footer>
  <div class="container-full bg-dark" style="padding-top:30px ;
              padding-bottom:50px;       
       ">

    <hr class=" bg-light">
    <img src="./images/logo_purple.png" alt="logo of royalq" style="
                                                                    width:100px;
                                                                    display:block;
                                                                    margin:10px auto;  ">
    <p class="text-light text-center">ROYALQ-MUNDIAL 2021 | Todos los derechos reservados</p>
  </div>

  <div class="accordion fixed-bottom" id="accordionExample">
    <div class="card " style="border:transparent; visibility:hidden ">
      <div class="card-header d-flex  justify-content-center " id="headingOne"
        style="padding:0px;
           border:transparent;
           border-radius:0px;
           padding-bottom: 2px;
           ">
        <button class="btn-footer text-center" type="button" data-toggle="collapse" data-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne" style=" margin-bottom:-7px;visibility: visible">
          <div class="bg-third-color" 
               style="border-radius:30px 30px 0px 0px;
                      padding-bottom:2px;
                      border-top: 2px solid white;
                      box-shadow: 0px 12px 20px white;
                      ">
            <i class="fas fa-chevron-up text-warning blink" style="font-size: 30px;padding:2px 10px"></i>
          </div>
        </button>
      </div>
      <div id="collapseOne" class="collapse bg-third-color" aria-labelledby="headingOne" data-parent="#accordionExample"
        style="visibility: visible">
        <div class="card-body text-light">
          <p class="text-center text-light">Seguinos en redes sociales</p>
          <hr class="bg-light">
          <div class="d-flex justify-content-center">
            <a href="https://api.whatsapp.com/send?phone=54<?php if(isset($active_user['user_royal_link'])){echo $active_user['user_cellphone'];} ?>" target="_blank">
              <i class="fab fa-whatsapp text-light" style="font-size: 40px; margin:0px 5px;"></i>
            </a>
            <a href="https://www.facebook.com/BLOG-De-Ganancias-Argentina-103371018178827/?modal=admin_todo_tour&notif_id=1599607581917840&notif_t=page_invite&ref=notif" target="_blank">
              <i class="fab fa-facebook text-light" style="font-size: 40px;margin:0px 5px;"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>