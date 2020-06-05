<?php
session_start();
if (!$_SESSION["celerina"]) {
  header("location:index.php?act=inicio");
}
$n = new mvcControlador();
$n->addProduct();
$n-> borrar_producto();
$n->save_edit();
?>



<div class="container mt-3">
  <div class="jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
    <div class="text-white text-center py-2 px-3">
      <div>
        <h2 class="card-title h1-responsive pt-3 mb-2 font-bold"><strong>Agregar nuevos productos y ver comentarios realizados en la pagina principal</strong></h2>
        <a class="btn btn-danger btn-sm p-2" href="index.php?act=inicio"><i class="fas fa-door-open mx-2 fa-2x"></i> <strong class="h6"> Salir</strong></a>
      </div>
    </div>
  </div>
  <?php
  if (isset($_GET["act"])) {
    if ($_GET["act"] == "add_success") {
      echo '
   <div class="btn btn-success btn-block  card-header bg-danger text-center shadow-sm p-3 text-white animated bounceInLeft" role="alert">
   <strong class="h3"> PRODUCTO AÑADIDO CORRECTAMENTE</strong></div>
   ';
    }
    if ($_GET["act"] == "add_successnt") {
      echo '
<div class="btn btn-danger btn-block  card-header bg-danger text-center shadow-sm p-3 text-white animated bounceInLeft" role="alert">
<strong class="h3"> NO SE AGREGO EL PRODUCTO, INTENTA DE NUEVO</strong></div>
';
    }

    if ($_GET["act"] == "sobre_peso") {
      echo '
<div class="btn btn-danger btn-block  card-header bg-danger text-center shadow-sm p-3 text-white animated bounceInLeft" role="alert">
<strong class="h3"> LA IMAGEN DEBE PESAR MENOS DE UNA MEGA :(</strong></div>
';
    }
    if ($_GET["act"] == "no_imagen") {
      echo '
<div class="btn btn-danger btn-block  card-header bg-danger text-center shadow-sm p-3 text-white animated bounceInLeft" role="alert">
<strong class="h3"> SOLO SE ADMITEN IMAGENES</strong></div>
';
    }

    if ($_GET["act"] == "no_borrado") {
      echo '
<div class="btn btn-danger btn-block  card-header bg-danger text-center shadow-sm p-3 text-white animated bounceInLeft" role="alert">
<strong class="h3"> NO SE BORRO EL PRODUCTO</strong></div>
';
    }

    if ($_GET["act"] == "borrado") {
      echo '
<div class="btn btn-success btn-block  card-header bg-danger text-center shadow-sm p-3 text-white animated bounceInLeft" role="alert">
<strong class="h3">BORRADO</strong></div>
';
    }
    if ($_GET["act"] == "editado") {
      echo '
<div class="btn btn-success btn-block  card-header bg-danger text-center shadow-sm p-3 text-white animated bounceInLeft" role="alert">
<strong class="h3">EDITADO</strong></div>
';
    }

    if ($_GET["act"] == "no_editado") {
      echo '
<div class="btn btn-danger btn-block  card-header bg-danger text-center shadow-sm p-3 text-white animated bounceInLeft" role="alert">
<strong class="h3">NO EDITADO</strong></div>
';
    }
  }  ?>


  <div class="card">
    <div class="card-body">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#producto" role="tab" aria-controls="productos" aria-selected="false">Ver productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ver comentarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Nuevo producto</a>
        </li>
      </ul>
    </div>
  </div>

  <br> <br>
  <div class="card">
    <div class="card-body">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade " id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="row">
            <div class="col-lg-7 col-md-12">

              <!-- Default form contact -->
              <form class="text-center border border-light p-5" method="post" enctype="multipart/form-data">

                <p class="h4 mb-4">Agregar nuevo producto</p>

                <!-- Name -->

                <input type="text" id="nom" class="form-control mb-4" name="nombre" placeholder="Nombre" required>
                <input type="number" id="precio" class="form-control mb-4" name="precio" placeholder="$ Precio" required>



                <!-- Message -->
                <div class="form-group">
                  <textarea type="text" class="form-control rounded-0" name="descripcion" id="descripcion" rows="3" placeholder="Descripción" required></textarea>
                </div>

                <!-- Email -->

                <input type="file" id="file" name="imagen" class="form-control mb-4">

                <!-- Send button -->

                <button class="btn btn-success btn-block" type="submit" name="add">Guardar</button>

              </form>
              <!-- Default form contact -->


            </div>







            <div class="col-lg-5 col-md-12">
              <!--Card-->
              <div class="card">
                <!--Card image-->
                <div class="view overlay" id="preview">

                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center">
                  <!--Category & Title-->
                  <a href="" class="grey-text">
                    <h5 id="nomp"></h5>
                  </a>
                  <h5>
                    <strong>
                      <p id="descripcionp" class="dark-grey-text">
                      </p>
                    </strong>
                  </h5>
                  <h4 class="font-weight-bold blue-text">
                    $<strong id=preciop></strong>
                  </h4>
                </div>
                <!--Card content-->
              </div>
              <!--Card-->
            </div>

          </div>

        </div>

        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">





          <section class="text-center mb-4">
            <div class="row wow fadeIn">


              <?php
              $r = new mvcControlador();
              $r->readComment();
              ?>


            </div>
          </section>
        </div>



        <div class="tab-pane fade show active" id="producto" role="tabpanel" aria-labelledby="profile-tab">





          <section class="text-center mb-4">
            <div class="card-columns">


              <?php
              $r = new mvcControlador();
              $r->ver_productor_admin();
              ?>


            </div>
          </section>

        </div>





      </div>
    </div>
  </div>

</div>



        