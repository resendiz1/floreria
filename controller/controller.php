<?php
ob_start();
class mvcControlador
{
    public function template()
    {
        include "views/template.php";
    }


    public function enlaces_controlador()
    {
        if (isset($_GET["act"])) {
            $enlaces_controlador = $_GET["act"];
        } else {
            $enlaces_controlador = "index.php";
        }
        $respuesta = enlacesPagina::enlaces_modelo($enlaces_controlador);
        include $respuesta;
    }


    public function entrarAdmin()
    {
        if (isset($_POST["admin_in"])) {

            $datos = array(
                'usuario' => $_POST["user"],
                'pass' => $_POST["pass"]
            );
            $respuesta = Datos::entrarModelo($datos, "user_root");

            if (
                $respuesta["user"] == $_POST["user"] &&
                $respuesta["pass"] == $_POST["pass"]
            ) {
                session_start();
                $_SESSION["celerina"] = $_POST["user"];
                header("location:index.php?act=add");
            } else {
                header("location:index.php?act=error");
            }
        }
    }






    public function fecha_to_all()
    {
        date_default_timezone_set('America/Mexico_City');
        $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        return $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
    }



    public function addComment()
    {
        if (isset($_POST["sendComm"])) {


            $fecha = mvcControlador::fecha_to_all();
            $datos = array(
                'nombre' => $_POST["nombre"],
                'comentario' => $_POST["comment"],
                'email' => $_POST["email"],
                'fecha' => $fecha
            );

            $respuesta = Datos::addCommentModel($datos, 'comm');
            if ($respuesta == "ok") {
                header("location:index.php?act=success_comm");
            } else {
                header("location:index.php?act=success´nt_comm");
            }
        }
    }


    public function addProduct()
    {
        if (isset($_POST["add"])) {



            if (
                $_FILES['imagen']['type'] != "image/jpg" &&
                $_FILES['imagen']['type'] != "image/png" &&
                $_FILES['imagen']['type'] != "image/gif" &&
                $_FILES['imagen']['type'] != "image/jpeg" &&
                $_FILES['imagen']['type'] != "image/bmp"
            ) {

                header("location:index?act=no_imagen");
            } 
            else {


                if ($_FILES['imagen']['size'] > 1000000) {

                header("location:index.php?act=sobre_peso");
                } 

                
                else {
                    $carga_ruta = ($_FILES['imagen']['tmp_name']);
                    $imagen = fopen($carga_ruta, 'rb');
                    $datos = array(
                        'nombre' => $_POST["nombre"],
                        'precio' => $_POST["precio"],
                        'descripcion' => $_POST["descripcion"],
                        'imagen' => $imagen
                    );
                    $respuesta = Datos::addProductModel($datos, "producto");

                    if ($respuesta == "ok") {
                        header("location:index.php?act=add_success");
                    } else {
                        header("location:index.php?act=add_successnt");
                    }
                }
            }
        }
    }


    public function verProductos()
    {

        $respuesta = Datos::verProductosModel("producto");

        foreach ($respuesta as $row => $item) {
            echo '        
        <div class="card"> 
            <div class="view overlay">
                <img src="data:image/jpg;base64,' . base64_encode($item["fotopro"]) . '" class="card-img-top"  alt=""
               >
                <a data-toggle="modal" data-target="#m' . $item["idproducto"] . '">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body text-center">
                <a href="" class="grey-text">
                    <h5>' . $item["nomprod"] . '</h5>
                </a>
                <h5>
                    <strong>
                        <p  class="dark-grey-text">' . $item["descripcionpro"] . '</p>
                    </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                    <strong>$' . $item["preciopro"] . '</strong>
                </h4>
            </div>
        </div>




 

<!-- Modal -->
<div class="modal  fade"  id="m' . $item["idproducto"] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <img src="data:image/jpg;base64,' . base64_encode($item["fotopro"]) . '" class="card-img-top" width="150px" height="100%"  alt=""
      >
    </div>
  </div>
</div>
  
        ';
        }
    }

    public function readComment()
    {
        $respuesta = Datos::readCommentModelo("comm");
        foreach ($respuesta as $row => $item) {
            echo '
        <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
        <div class="card-header h5">' . $item["nombrecomm"] . '</div>
            <div class="card-body text-center">
                <p  class="grey-text">
                    <h5>' . $item["fechacomm"] . '</h5>
                </p>
                <h5>
                    <strong>
                        <p class="dark-grey-text">' . $item["contencomm"] . '</p>
                    </strong>
                </h5>
            </div>
            <div class="card-footer font-bold h5">' . $item["email"] . '</div> 
        </div>
    </div>
        ';
        }
    }

    public function ver_productor_admin(){
  $respuesta = Datos::verProductosModel("producto");
        foreach ($respuesta as $row => $item) {
            echo '
<div class="card"> 
            <div class="view overlay">
                <img src="data:image/jpg;base64,' . base64_encode($item["fotopro"]) . '" class="card-img-top"  alt=""
               >
            </div>
            <div class="card-body text-center">
                <a href="" class="grey-text">
                    <h5>'.$item["nomprod"].'</h5>
                </a>
                <h5>
                    <strong>
                        <p  class="dark-grey-text">' . $item["descripcionpro"] . '</p>
                    </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                    <strong>$' . $item["preciopro"] . '</strong>
                </h4>
            </div>

            <div class="card-footer">
             <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#b'.$item["idproducto"].'">Borrar</button>
             <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#e'.$item["idproducto"].'">Editar</button>
            </div>
        </div>



<!-- Modal -->
<div class="modal fade" id="e'.$item["idproducto"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header justify-content-center purple-gradient text-white">
        <h5 class="modal-title text-center" id="exampleModalLabel">Editar producto</h5>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="md-form">
            <label data-error="wrong" data-success="right"  for="nombre_edit">Nombre</label>
            <input type="text" id="nombre_edit" value="'.$item["nomprod"].'" name="nombre_edit" class="form-control validate">
            <input type="hidden" id="id" name="id" value="'.$item["idproducto"].'">
          </div>
          <div class="md-form">
            <input type="number" id="precio_edit" value="'. $item["preciopro"].'" name="precio_edit" class="form-control validate">
          <label data-error="wrong" data-success="right" for="precio_edit">Precio</label>
          </div>

          <div class="md-form">
            <label class="p-2" >Descripción</label>
            <textarea  type="text"  class="form-control p-4" name="descripcion_edit">' . $item["descripcionpro"] . '</textarea>
          </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="save_edit" class="btn btn-primary">Guardar cambios</button>
            </form>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="b'.$item["idproducto"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header justify-content-center peach-gradient text-white">
        <h5 class="modal-title text-center" id="exampleModalLabel">Borrar producto</h5>
      </div>
      <div class="modal-body ">
        <form method="post" class="justify-content-center text-center">
          <input type="hidden"  value="'.$item["idproducto"].'" class="form-control" name="id">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="delete_producto" class="btn btn-danger">Borrar</button>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
        ';
        }
    }



public function borrar_producto(){
    if (isset($_POST["delete_producto"])) {
       $id = $_POST["id"];
       $respuesta = Datos::borrar_producto_modelo($id, "producto");

       if ($respuesta=="exito") {
         header("location:index.php?act=borrado");
       }
       else{
        header("location:index.php?act=no_borrado");
       }
    }
}

public function save_edit(){
    if (isset($_POST["save_edit"])) {
        
        $datos = array('id' => $_POST["id"],
                       'nombre' => $_POST["nombre_edit"],
                       'descripcion' => $_POST["descripcion_edit"],
                       'precio' => $_POST["precio_edit"]);

        $respuesta = Datos::save_edit_modelo($datos, "producto");

        if ($respuesta=="exito") {
            header("location:index.php?act=editado");
        }
        else{
            header("location:index.php?act=no_editado");
        }
    }
}


}


