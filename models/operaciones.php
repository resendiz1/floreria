<?php
require_once "conexion.php";

class Datos extends Conexion
{

    static public function addCommentModel($datos, $tabla){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombrecomm, contencomm, fechacomm, email) 
    VALUES (:nombre,:contenido,:fecha,:email)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":contenido",$datos["comentario"],PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }
        else{
            return "error";
        }
    }

    static public function addProductModel($datos, $tabla){
        $stmt=Conexion::conectar()->prepare("INSERT INTO $tabla (nomprod, preciopro, fotopro, descripcionpro) VALUES (:nombre, :precio, :foto, :descripcion)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":foto",$datos["imagen"], PDO::PARAM_LOB);

        if($stmt->execute()){
            return "ok";
        }
        else{
            return "error";
        }
    }

    static public function verProductosModel($tabla){
        $stmt=Conexion::conectar()->prepare("SELECT idproducto, nomprod, preciopro, fotopro, descripcionpro FROM $tabla");

        $stmt->execute();
       return $stmt->fetchAll();
    }

    static public function readCommentModelo($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT nombrecomm, contencomm, fechacomm, email FROM $tabla ORDER BY idcomm DESC");
        $stmt->execute();
        return $stmt->fetchAll();

    }

    static public function entrarModelo($datos, $tabla){
        $stmt=Conexion::conectar()->prepare("SELECT user, pass FROM $tabla WHERE user = :user ");
        $stmt->bindParam(":user", $datos["usuario"], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
    }


    static public function borrar_producto_modelo($id, $tabla){
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idproducto LIKE :id");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "exito";
        }
        else{
            return "error";
        }

}


static public function save_edit_modelo($datos, $tabla){
    $stmt=Conexion::conectar()->prepare("UPDATE $tabla SET nomprod = :nombre, preciopro = :precio, descripcionpro = :descripcion  WHERE idproducto LIKE :id");
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);

    if ($stmt->execute()) {
        return "exito";
    }
    else{
        return "error";
    }
}
}
