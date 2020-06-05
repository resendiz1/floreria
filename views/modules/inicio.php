<?php
session_start();
session_destroy();
$m = new mvcControlador();
$m->addComment();
$m->entrarAdmin();




?>

<!-- Navbar -->
<h1>logo</h1>

<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
<?php 
if(isset($_GET["act"]))
{        if($_GET["act"]=="error"){ 
            echo '
   <div class="btn peach-gradient card-header bg-danger text-center shadow-sm p-3 text-white animated bounceInLeft" role="alert">
   <strong> ¡ERROR AL INGRESAR!</strong></div>
   ';
    }
     
 if($_GET["act"]=="success_comm"){ 
            echo '
   <div class="btn blue-gradient card-header bg-danger text-center shadow-sm p-3 text-white animated bounceInLeft" role="alert">
   <strong> ¡COMENTARIO ENVIADO!</strong></div>
   ';
    }
if($_GET["act"]=="success´nt_comm"){ 
            echo '
   <div class="btn btn-danger card-header bg-danger text-center shadow-sm p-3 text-white animated bounceInLeft" role="alert">
   <strong> ¡ERROR ENVIAR COMENTARIO!</strong></div>
   ';
    }

}  ?>

    
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand waves-effect" data-toggle="modal" data-target="#modalSubscriptionForm">
            <strong class="blue-text">FLORES</strong>
        </a>
        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left -->
            <ul class="navbar-nav mr-auto">

            </ul>
            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                </li>
                <li class="nav-item">
                    <a href="https://www.facebook.com/" class="nav-link waves-effect border" target="_blank">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Navbar -->
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
            <div class="view" style="background-image: url('https://i.pinimg.com/originals/31/34/18/3134187089d57fe4651403a7900f127f.jpg'); background-repeat: no-repeat; background-size: cover;">
                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <!-- Content -->
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>Floreria disponible 24/7</strong>
                        </h1>
                        <p class="mb-4 d-none d-md-block">
                            <strong>Realiza tus pedidos y los recibiras en menos de 24hrs.</strong>
                        </p>
                        <a target="_blank" href="https://www.youtube.com" class="btn btn-outline-white btn-lg">Visita mi canal de Youtube
                            <i class="fab fa-youtube ml-2"></i>
                        </a>
                    </div>
                    <!-- Content -->
                </div>
                <!-- Mask & flexbox options-->
            </div>
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <div class="view" style="background-image: url('https://i.pinimg.com/originals/be/50/38/be5038ea2150101ee778f9cb32fa4601.jpg'); background-repeat: no-repeat; background-size: cover;">
                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <!-- Content -->
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>Flores para todas las ocaciones</strong>
                        </h1>

                        <p class="mb-4 d-none d-md-block">
                            <strong>Desde gradiaciones hasta velorios.</strong>
                        </p>

                        <a  href="#contacto" class="btn btn-outline-white btn-lg">Contactame
                           <i class="fas fa-mail-bulk ml-3"></i>
                        </a>
                    </div>
                    <!-- Content -->
                </div>
                <!-- Mask & flexbox options-->
            </div>
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
            <div class="view" style="background-image: url('https://www.xtrafondos.com/wallpapers/flores-cosmos-rosas-2821.jpg'); background-repeat: no-repeat; background-size: cover;">
                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <!-- Content -->
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>Entregamos a todas partes del municipio</strong>
                        </h1>
                        <p class="mb-4 d-none d-md-block">
                            <strong>Realiza tus pedidos y nosotros nos encargamos del resto.</strong>
                        </p>

                    </div>
                    <!-- Content -->
                </div>
                <!-- Mask & flexbox options-->
            </div>
        </div>
        <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<!--Main layout-->
<main>




    <div class="container">
        <!--Navbar-->
        <nav class="navbar justify-content-center navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5" id="este">
            <!-- Navbar brand -->
            <span class="navbar-brand text-center "><strong class="h4"> Catálogo</strong></span>
            <!-- Collapsible content -->
            </ul>
            <!-- Links -->

        </nav>
        <!--/.Navbar-->
        <!--Section: Products v.3-->



        <div class="row mb-3 mt-3 justify-content-center">
            <div class="col">
                <div class="card-columns">
                    <?php
                    $s = new mvcControlador();
                    $s->verProductos();
                    ?>


                </div>
            </div>
        </div>





        <hr class="my-5" id="about">
        <br>
        <!--Section: Main info-->
        <section class="mt-5 wow fadeIn">
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <img src="img/about.jpg" class="img-fluid z-depth-1-half" alt="">

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4 font-weight-bold ">

                    <!-- Main heading -->
                    <h3 class="h3 mb-3">Tienda: Las Flores</h3>
                    <p>Ofrece todo tipo de flores desde orquideas hasta cempasúchil
                        <strong>Realiza tus pedidos</strong> o pregunta por .</p>
                    <p>las flores de tu agrado.</p>
                    <!-- Main heading -->

                    <hr>

                    <p>
                        <strong>+ de 50 tipos de flores</strong> pregunta por lo que necesites.
                        <br>
                        <strong>+ de 500</strong> clientes satisfechos.
                    </p>


                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>



        <hr class=my-5 id="contacto">
        <br>
        <div class="row">
            <div class="col-lg-6 col-md-12">
        <div class="card mb-3 wow fadeIn">
            <div class="card-header font-weight-bold btn-default">Contactanos</div>
            <div class="card-body">

                <!-- Default form reply -->
                <form method="post">
                    <div class="form-group">
                        <label for="replyFormComment">Deja tu comentario</label>
                        <textarea class="form-control" name="comment" id="replyFormComment" rows="5" required></textarea>
                    </div>

                    <!-- Name -->
                    <label for="replyFormName">Nombre completo</label>
                    <input type="text" id="replyFormName" name="nombre" class="form-control" required>
                    <br>
                    <label for="replyFormEmail">Correo electrónico</label>
                    <input type="email" id="replyFormEmail" name="email" class="form-control" required>
                    <div class="text-center mt-4">
                        <button class="btn btn-info btn-md btn-block" name="sendComm" type="submit"><strong> E n v i a r</strong></button>
                    </div>
                </form>
                <!-- Default form reply -->


                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
  <button class="btn btn-block btn-purple" data-toggle="modal" data-target="#mapa"><p class="h3">VER UBICACIÓN</p> <br><br><i class="fas fa-map-marked-alt fa-4x"> </i></button>
        </div>
        </div>


    


    </div>












    
<!-- Modal -->
<div class="modal  fade"  id="mapa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-fluid" role="document">
    <div class="modal-content">

      <div class="modal-body">

        <iframe class="card-img-top" src="https://www.google.com/maps/embed?pb=!1m13!1m11!1m3!1d587.8587244325821!2d-97.73434326207607!3d18.87935749278607!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses-419!2smx!4v1571455532568!5m2!1ses-419!2smx" width="600" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>        
 
      </div>
    </div>
  </div>
</div>
    <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Entrar como admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post">
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" name="user" class="form-control validate" required>
                            <label data-error="wrong" data-success="right" for="form3">Usuario</label>
                        </div>

                        <div class="md-form mb-4">
                            <i class="fas fa-key prefix grey-text"></i>
                            <input type="password" name="pass" id="form2" class="form-control validate" required>
                            <label data-error="wrong" data-success="right" for="form2">Contraseña</label>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-indigo btn-block" name="admin_in">E n t r a r <i class="fas fa-paper-plane-o ml-1"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>