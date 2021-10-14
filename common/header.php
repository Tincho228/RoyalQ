
<nav class="navbar_container">
    <ul class="list_nav">
        <li>
            <div>
                <img class="navFace_icon" src="./Images/facebook_icon.png" alt="nav facebook icon">
                <a class="link_nav link_face" target="_blank"
                    href="https://www.facebook.com/BLOG-De-Ganancias-Argentina-103371018178827/?modal=admin_todo_tour&notif_id=1599607581917840&notif_t=page_invite&ref=notif">Seguinos
                    en facebook</a>
            </div>
        </li>
        <li><a class="link_nav link_faq" href="#faq_section">Preguntas frecuentes</a></li>
        <li> <a class="link_nav link_contact" data-toggle="modal" data-target="#exampleModal"
                data-whatever="@getbootstrap">Contacto</a>
        </li>
        <li>
            <?php
                            // if is not logged in show My Account
                            if(!isset($_SESSION['loggedin'])){
                                echo '<a class="link_nav text-right link_admin" href="#" data-toggle="modal" data-target="#adminModal"><i
                                class="fas fa-user-circle text-warning" style="margin-right:10px"></i>LogIn</a>';
                            } elseif($_SESSION['loggedin']){
                                echo '<a class="link_nav text-right link_admin" href="./contact.php?action=account"><i
                                class="fas fa-user-circle text-warning" style="margin-right:10px"></i>Admin</a>';
                            } else {
                                echo '<a class="link_nav text-right link_admin" href="#" data-toggle="modal" data-target="#adminModal"><i
                                class="fas fa-user-circle text-warning" style="margin-right:10px"></i>LogIn</a>';
                                }
                            ?>
        </li>
        <p class="text-right text-light" style="margin-bottom:0px; margin-top:10px; margin-right:15px;">
            <div><?php
                if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                } ?></div>
        </p>
    </ul>
    <?php include 'contactUs.php';?>
    <?php include 'admin.php';?>
</nav>